jQuery(document).ready(function($) {
    
    // Filter form submission
    (function() {
        $('[name="spice-level"]').on('click', function() {
            $('.recipe-search').submit();
        });
    })();
});