jQuery.noConflict();

(function( $ ) {

    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('is-active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('is-active');
    }

    $('.accordion-section-title').click(function(event) {
      event.preventDefault();
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if($(event.target).is('.is-active')) {
            close_accordion_section();
            console.log('yes');
        }else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('is-active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('is-active');
        }

    });

})( jQuery );
