jQuery.noConflict();

(function( $ ) {


		$(".fancybox").fancybox();
		
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});

})( jQuery );
