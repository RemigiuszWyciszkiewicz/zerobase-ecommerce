/**
 * YouTube Channel Widget
 * Fetches channel data using YouTube Data API
 */

document.addEventListener("DOMContentLoaded", function () {
  const channelId = window.YT_CHANNEL_ID;
  const API_KEY = window.YT_API_KEY;
  const subscriberCountEl = document.getElementById("subscriberCount");
  const avatarEl = document.getElementById("channelAvatar");

  if (!channelId) return;

  // Fetch channel data
  async function fetchChannelData() {
    try {
      // If no API key, use placeholder data
      if (!API_KEY || API_KEY === "") {
        console.warn("YouTube API key not configured. Using placeholder data.");
        displayPlaceholderData();
        return;
      }

      const response = await fetch(
        `https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=${channelId}&key=${API_KEY}`
      );

      if (!response.ok) {
        throw new Error("Failed to fetch channel data");
      }

      const data = await response.json();

      if (data.items && data.items.length > 0) {
        const channel = data.items[0];
        displayChannelData(channel);
      } else {
        displayPlaceholderData();
      }
    } catch (error) {
      console.error("Error fetching channel data:", error);
      displayPlaceholderData();
    }
  }

  function displayChannelData(channel) {
    // Update subscriber count
    const subscriberCount = parseInt(channel.statistics.subscriberCount);
    const formattedCount = formatSubscriberCount(subscriberCount);

    if (subscriberCountEl) {
      subscriberCountEl.innerHTML = `
        <div class="youtube-channel-stats-item-value">${formattedCount}</div>
        <div class="youtube-channel-stats-item-label">Subskrybenci</div>
      `;
    }

    // Update avatar
    if (avatarEl && channel.snippet.thumbnails) {
      const avatarUrl =
        channel.snippet.thumbnails.high?.url ||
        channel.snippet.thumbnails.medium?.url ||
        channel.snippet.thumbnails.default?.url;

      if (avatarUrl) {
        avatarEl.src = avatarUrl;
      }
    }

    // Update channel name
    const channelNameEl = document.querySelector(".channel-name");
    if (channelNameEl && channel.snippet.title) {
      channelNameEl.textContent = channel.snippet.title;
    }

    // Update channel handle (customUrl)
    const channelHandleEl = document.querySelector(".channel-handle");
    if (channelHandleEl && channel.snippet.customUrl) {
      channelHandleEl.textContent = "@" + channel.snippet.customUrl;
    }
  }

  function displayPlaceholderData() {
    if (subscriberCountEl) {
      subscriberCountEl.innerHTML = `
        <div class="youtube-channel-stats-item-value">-</div>
        <div class="youtube-channel-stats-item-label">Subskrybenci</div>
      `;
    }
  }

  function formatSubscriberCount(count) {
    if (count >= 1000000) {
      return (count / 1000000).toFixed(1) + "M";
    } else if (count >= 1000) {
      return (count / 1000).toFixed(1) + "K";
    }
    return count.toString();
  }

  // Fetch data on load
  fetchChannelData();
});
