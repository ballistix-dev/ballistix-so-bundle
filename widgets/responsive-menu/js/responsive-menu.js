
jQuery.noConflict();

(function( $ ) {
  
  $.fn.extend({
  responsiveMenu: function () {

    var mainObject = $(this);

    // $(document).click(function() {
    //   mainObject.find('.is-active').removeClass('is-active');
    // });
    //
    $(this).on('click', '*[data-toggle]', function(event) {
      event.preventDefault();

      var target = $(this).data('target');

      mainObject.find(target).toggleClass('is-active');
      $(this).toggleClass('is-active');
      $('#site-wrap').toggleClass('is-active');
      return false;
    })


    // $(this).on('mouseenter', 'li', function(){
    //   if ($('html').hasClass('no-touch'))  {
    //     $(this).addClass('is-active');
    //   }
    // }).on('mouseleave', 'li', function(){
    //   if ($('html').hasClass('no-touch'))  {
    //     $(this).removeClass('is-active');
    //   }
    // })

    $(this).on('click', '.menu > .menu-item-has-children > a', function(event){
      //if ( $('html').hasClass('touch') ){
        event.preventDefault();
        event.stopPropagation();
        if ($(this).closest('li').hasClass('is-active')) {
          $(this).closest('li').removeClass('is-active');
        } else {
          $(this).closest('ul').find('li.is-active').removeClass('is-active');
          $(this).closest('li').toggleClass('is-active');
        }
      //}
    })
    return this;
  }
});

$('.so-widget-ballistix-responsive-menu-widget').responsiveMenu();

})( jQuery );
