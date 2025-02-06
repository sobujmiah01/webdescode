(function($) {
    $(document).ready(function() {
        if (typeof wp !== 'undefined' && typeof wp.customize !== 'undefined') {
            wp.customize('header_background_color', function(value) {
                value.bind(function(newval) {
                    $('header.site-header').css('background-color', newval);
                });
            });
        }
    });
})(jQuery);