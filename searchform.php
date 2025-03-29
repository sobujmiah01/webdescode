<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field" placeholder="Search …" value="" name="s" id="search-input">
    </label>
    <input type="submit" class="search-submit" value="Search">
</form>

<!-- Search Popup HTML -->
<div class="search-popup" id="search-popup">
    <div class="search-popup-container">
        <form role="search" method="get" class="search-popup-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" class="search-popup-field" placeholder="What are you looking for?" value="" name="s" autofocus>
            <button type="submit" class="search-popup-submit">Search</button>
            <button type="button" class="search-popup-close" id="search-popup-close">&times;</button>
        </form>
    </div>
</div>