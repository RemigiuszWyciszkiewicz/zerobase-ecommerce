/**
 * YouTube Shorts Slider
 */
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".youtube-shorts-slider");
  const prevBtn = document.querySelector(".yt-shorts-prev");
  const nextBtn = document.querySelector(".yt-shorts-next");
  const items = document.querySelectorAll(".youtube-short-item");

  if (!slider) return;

  let currentIndex = 0;
  let itemWidth = slider.querySelector(".youtube-short-item").offsetWidth + 15; // item width + gap
  let visibleItems = Math.floor(slider.parentElement.offsetWidth / itemWidth);
  const totalItems = items.length;
  let maxIndex = Math.max(0, totalItems - visibleItems);
  let autoplayInterval = null;
  let isUserInteracting = false;

  // Calculate dimensions
  function recalculateDimensions() {
    itemWidth = slider.querySelector(".youtube-short-item").offsetWidth + 15;
    visibleItems = Math.floor(slider.parentElement.offsetWidth / itemWidth);
    maxIndex = Math.max(0, totalItems - visibleItems);

    // Update controls visibility
    const controlsHeader = document.querySelector(".youtube-shorts-header");
    if (controlsHeader) {
      if (totalItems > visibleItems) {
        controlsHeader.style.display = "none";
      } else {
        controlsHeader.style.display = "flex";
      }
    }
  }

  // Initial calculation
  recalculateDimensions();

  // Update buttons state
  function updateButtons() {
    if (prevBtn && nextBtn) {
      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex >= maxIndex;
    }
  }

  // Slide function
  function slide(direction) {
    if (direction === "next") {
      if (currentIndex < maxIndex) {
        currentIndex++;
      } else {
        // Loop back to beginning
        currentIndex = 0;
      }
    } else if (direction === "prev" && currentIndex > 0) {
      currentIndex--;
    }

    const translateX = -(currentIndex * itemWidth);
    slider.style.transform = `translateX(${translateX}px)`;
    updateButtons();
  }

  // Autoplay function
  function startAutoplay() {
    if (totalItems <= visibleItems) return; // Don't autoplay if all items fit

    if (autoplayInterval) {
      clearInterval(autoplayInterval);
    }

    autoplayInterval = setInterval(() => {
      if (!isUserInteracting) {
        slide("next");
      }
    }, 4000); // Slide every 3 seconds
  }

  // Stop autoplay
  function stopAutoplay() {
    if (autoplayInterval) {
      clearInterval(autoplayInterval);
      autoplayInterval = null;
    }
  }

  // Event listeners for buttons (if they exist)
  if (prevBtn) {
    prevBtn.addEventListener("click", () => slide("prev"));
  }
  if (nextBtn) {
    nextBtn.addEventListener("click", () => slide("next"));
  }

  // Touch/swipe support
  let touchStartX = 0;
  let touchEndX = 0;

  slider.addEventListener("touchstart", (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  slider.addEventListener("touchend", (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });

  function handleSwipe() {
    if (touchEndX < touchStartX - 50) {
      slide("next");
    }
    if (touchEndX > touchStartX + 50) {
      slide("prev");
    }
  }

  // Function to play video
  function playVideo(item, autoplay = true, muted = true) {
    const player = item.querySelector(".youtube-short-player");
    const videoId = item.getAttribute("data-video-id");
    const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=${
      autoplay ? 1 : 0
    }&mute=${
      muted ? 1 : 0
    }&loop=1&playlist=${videoId}&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1&iv_load_policy=3&disablekb=1&fs=0`;

    // Create iframe
    const iframe = document.createElement("iframe");
    iframe.src = embedUrl;
    iframe.allow =
      "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;

    // Clear player and add iframe
    player.innerHTML = "";
    player.appendChild(iframe);

    // Show player, hide thumbnail
    item.classList.add("playing");
  }

  // Pause autoplay on hover
  slider.addEventListener("mouseenter", () => {
    isUserInteracting = true;
  });

  slider.addEventListener("mouseleave", () => {
    isUserInteracting = false;
  });

  // Play video on click (unmuted)
  items.forEach((item) => {
    const thumbnail = item.querySelector(".youtube-short-thumbnail");
    thumbnail.addEventListener("click", function () {
      // Pause autoplay when user interacts
      isUserInteracting = true;

      // Stop all other videos and restart them muted
      items.forEach((otherItem) => {
        if (otherItem !== item && otherItem.classList.contains("playing")) {
          otherItem.classList.remove("playing");
          const otherPlayer = otherItem.querySelector(".youtube-short-player");
          otherPlayer.innerHTML = "";
          // Restart muted autoplay for other videos
          playVideo(otherItem, true, true);
        }
      });
      // Play clicked video unmuted
      if (!item.classList.contains("playing")) {
        playVideo(item, true, false);
      } else {
        // If already playing, restart unmuted
        item.classList.remove("playing");
        item.querySelector(".youtube-short-player").innerHTML = "";
        playVideo(item, true, false);
      }

      // Resume autoplay after 5 seconds
      setTimeout(() => {
        isUserInteracting = false;
      }, 5000);
    });
  });

  // Autoplay all videos on page load (muted)
  if (items.length > 0) {
    setTimeout(() => {
      items.forEach((item) => {
        playVideo(item, true, true);
      });
    }, 500);
  }

  // Update on window resize
  let resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      // Recalculate dimensions
      recalculateDimensions();

      // Reset slider position
      currentIndex = 0;
      slider.style.transform = "translateX(0)";
      updateButtons();

      // Restart autoplay with new dimensions
      stopAutoplay();
      startAutoplay();
    }, 250);
  });

  // Initial setup
  updateButtons();

  // Start autoplay
  startAutoplay();
});
