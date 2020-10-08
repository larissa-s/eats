//testing

jQuery(document).ready(function($) {
	
	jQuery('.menu-toggle').on('click', function() {
 	jQuery('.header-menu').toggleClass('hidden-mobile');
 	jQuery('.icon-menu').toggleClass('hidden-mobile');
 	jQuery('.icon-close').toggleClass('hidden-mobile');
})
});

