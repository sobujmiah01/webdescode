<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <!-- Visible Label for the Search Field -->
    <label for="search-field" class="screen-reader-text">
        <?php echo esc_html_x('Search for:', 'label', 'webdescode'); ?>
    </label>
    
    <!-- Search Field -->
    <input 
        type="search" 
        id="search-field" 
        class="search-field" 
        placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'webdescode'); ?>" 
        value="<?php echo esc_attr(get_search_query()); ?>" 
        name="s" 
        autocomplete="off"
        required
    />
    
    <!-- Submit Button -->
    <button type="submit" class="search-submit" aria-label="<?php echo esc_attr_x('Submit search', 'button label', 'webdescode'); ?>">
        <i class="fas fa-search" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php echo esc_html_x('Submit search', 'submit button', 'webdescode'); ?></span>
    </button>
</form>