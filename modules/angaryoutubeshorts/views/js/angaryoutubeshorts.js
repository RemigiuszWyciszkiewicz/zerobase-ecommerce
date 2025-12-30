/**
 * YouTube Shorts Slider
 */
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.youtube-shorts-slider');
    const prevBtn = document.querySelector('.yt-shorts-prev');
    const nextBtn = document.querySelector('.yt-shorts-next');
    const items = document.querySelectorAll('.youtube-short-item');

    if (!slider) return;

    let currentIndex = 0;
    const itemWidth = slider.querySelector('.youtube-short-item').offsetWidth + 15; // item width + gap
    const visibleItems = Math.floor(slider.parentElement.offsetWidth / itemWidth);
    const totalItems = items.length;
    const maxIndex = Math.max(0, totalItems - visibleItems);

    // Update buttons state
    function updateButtons() {
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;
    }

    // Slide function
    function slide(direction) {
        if (direction === 'next' && currentIndex < maxIndex) {
            currentIndex++;
        } else if (direction === 'prev' && currentIndex > 0) {
            currentIndex--;
        }

        const translateX = -(currentIndex * itemWidth);
        slider.style.transform = `translateX(${translateX}px)`;
        updateButtons();
    }

    // Event listeners for buttons
    prevBtn.addEventListener('click', () => slide('prev'));
    nextBtn.addEventListener('click', () => slide('next'));

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            slide('next');
        }
        if (touchEndX > touchStartX + 50) {
            slide('prev');
        }
    }

    // Function to play video
    function playVideo(item, autoplay = true, muted = true) {
        const player = item.querySelector('.youtube-short-player');
        const videoId = item.getAttribute('data-video-id');
        const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=${autoplay ? 1 : 0}&mute=${muted ? 1 : 0}&loop=1&playlist=${videoId}&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1&iv_load_policy=3&disablekb=1&fs=0`;

        // Create iframe
        const iframe = document.createElement('iframe');
        iframe.src = embedUrl;
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;

        // Clear player and add iframe
        player.innerHTML = '';
        player.appendChild(iframe);

        // Show player, hide thumbnail
        item.classList.add('playing');
    }

    // Play video on click (unmuted)
    items.forEach(item => {
        const thumbnail = item.querySelector('.youtube-short-thumbnail');
        thumbnail.addEventListener('click', function() {
            // Stop all other videos and restart them muted
            items.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('playing')) {
                    otherItem.classList.remove('playing');
                    const otherPlayer = otherItem.querySelector('.youtube-short-player');
                    otherPlayer.innerHTML = '';
                    // Restart muted autoplay for other videos
                    playVideo(otherItem, true, true);
                }
            });
            // Play clicked video unmuted
            if (!item.classList.contains('playing')) {
                playVideo(item, true, false);
            } else {
                // If already playing, restart unmuted
                item.classList.remove('playing');
                item.querySelector('.youtube-short-player').innerHTML = '';
                playVideo(item, true, false);
            }
        });
    });

    // Autoplay all videos on page load (muted)
    if (items.length > 0) {
        setTimeout(() => {
            items.forEach(item => {
                playVideo(item, true, true);
            });
        }, 500);
    }

    // Update on window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            currentIndex = 0;
            slider.style.transform = 'translateX(0)';
            updateButtons();
        }, 250);
    });

    // Initial button state
    updateButtons();
});
