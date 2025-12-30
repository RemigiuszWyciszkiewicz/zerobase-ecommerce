<div class="youtube-shorts-container">
    <div class="youtube-shorts-header">
        <h2 class="youtube-shorts-title">SOCIAL FEED</h2>
        <div class="youtube-shorts-controls">
            <button class="yt-shorts-prev" aria-label="Previous">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="yt-shorts-next" aria-label="Next">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <div class="youtube-shorts-slider-wrapper">
        <div class="youtube-shorts-slider">
            {foreach from=$videoIds item=videoId}
                <div class="youtube-short-item" data-video-id="{$videoId}">
                    <div class="youtube-short-thumbnail">
                        <img src="https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg" alt="YouTube Short">
                        <div class="youtube-short-badge">
                            <svg viewBox="0 0 30 20" preserveAspectRatio="xMidYMid meet">
                                <g>
                                    <path d="M27.9727 3.12324C27.6435 1.89323 26.6768 0.926623 25.4468 0.597366C23.2197 2.24288e-07 14.285 0 14.285 0C14.285 0 5.35042 2.24288e-07 3.12323 0.597366C1.89323 0.926623 0.926623 1.89323 0.597366 3.12324C2.24288e-07 5.35042 0 10 0 10C0 10 2.24288e-07 14.6496 0.597366 16.8768C0.926623 18.1068 1.89323 19.0734 3.12323 19.4026C5.35042 20 14.285 20 14.285 20C14.285 20 23.2197 20 25.4468 19.4026C26.6768 19.0734 27.6435 18.1068 27.9727 16.8768C28.5701 14.6496 28.5701 10 28.5701 10C28.5701 10 28.5677 5.35042 27.9727 3.12324Z" fill="#FF0000"/>
                                    <path d="M11.4253 14.2854L18.8477 10.0004L11.4253 5.71533V14.2854Z" fill="white"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="youtube-short-player" style="display: none;"></div>
                </div>
            {/foreach}
        </div>
    </div>

</div>
