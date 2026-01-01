<div class="youtube-channel-widget yt-header" style="margin-bottom: 25px;">
    <div class="youtube-channel-inner">

        <div class="youtube-channel-user">
            <div class="youtube-channel-user-picture-wrapper">
                <a href="https://www.youtube.com/channel/{$channelId}?sub_confirmation=1"
                   title="YouTube Channel"
                   target="_blank"
                   rel="noopener noreferrer">
                    <img class="youtube-channel-user-picture yt-user-picture"
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80'%3E%3Crect fill='%23f0f0f0' width='80' height='80'/%3E%3C/svg%3E"
                         alt="Channel Avatar"
                         id="channelAvatar">
                </a>
            </div>

            <div class="youtube-channel-user-info">
                <div class="youtube-channel-user-info-name">
                    <a href="https://www.youtube.com/channel/{$channelId}?sub_confirmation=1"
                       title="YouTube Channel"
                       target="_blank"
                       rel="noopener noreferrer">
                        <div class="yt-user-full-name channel-name">Loading...</div>
                    </a>
                </div>

                <div class="youtube-channel-user-info-caption">
                    <a href="https://www.youtube.com/channel/{$channelId}?sub_confirmation=1"
                       title="YouTube Channel"
                       target="_blank"
                       rel="noopener noreferrer">
                        <div class="yt-user-username channel-handle">@loading</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="youtube-channel-stats">
            <div class="youtube-channel-stats-item" id="subscriberCount">
                <div class="youtube-channel-stats-item-value">-</div>
                <div class="youtube-channel-stats-item-label">Subskrybenci</div>
            </div>
        </div>

        <div class="youtube-channel-follow-button-wrapper">
            <a class="youtube-channel-follow-button yt-follow-button"
               href="https://www.youtube.com/channel/{$channelId}?sub_confirmation=1"
               target="_blank"
               rel="noopener noreferrer">
                <svg class="youtube-channel-follow-button-icon" viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
                <div class="youtube-channel-follow-button-label">Subskrybuj</div>
            </a>
        </div>

    </div>
</div>

<script>
    // Pass channel data to JavaScript
    window.YT_CHANNEL_ID = '{$channelId}';
    window.YT_API_KEY = '{$apiKey}';
</script>
