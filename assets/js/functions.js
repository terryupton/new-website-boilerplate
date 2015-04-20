jQuery( document ).ready( function( $ ) {

	/* ==========================================================================
		TOGGLE MAIN MENU
		//http://codepen.io/bradfrost/pen/sHvaz
	========================================================================== */
		$('body').addClass('js');
		var $menu = $('#nav'),
		$menulink = $('.nav-toggle');

		$menulink.click(function(e) {
			e.preventDefault();
			$menulink.toggleClass('nav-toggle--active');
			$menu.toggleClass('menu--main--active');

			$loginlink.removeClass('login-toggle--active');
			$login.removeClass('header__login--active');
		});


	/* ==========================================================================
		BACK TO TOP
		//http://www.developerdrive.com/2013/07/using-jquery-to-add-a-dynamic-back-to-top-floating-button-with-smooth-scroll/
	========================================================================== */
		var offset = 100;
		var duration = 200;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('#back-to-top').fadeIn(duration);
			} else {
				jQuery('#back-to-top').fadeOut(duration);
			}
		});

		$('#back-to-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0});
			return false;
		});


	// /* ==========================================================================
	// 	//SHOW & HIDE CONTENT
	// 	//hide the all of the element with class msg_body
	// ========================================================================== */

	// $(".expand-block__body").hide();
	// //toggle the componenet with class msg_body
	// $(".expand-block__head").click(function() {
	// 	// use the callback of slideToggle to change the text
	// 	// requires some DOM traversal, but code is tidier
	// 	$(this).next(".expand-block__body").slideToggle(600, function(){
	// 		if($(this).is(':visible')) {
	// 			 $(this).prev('.expand-block__head').find(".show").html('( - hide details  )');
	// 		} else {
	// 			$(this).prev('.expand-block__head').find(".show").html('( + show details )');
	// 		}
	// 	});
	// });


});
// END DOCUMENT.READY


/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */
//http://codepen.io/micahgodbolt/pen/FgqLc

equalheight = function(container){

var currentTallest = 0,
		currentRowStart = 0,
		rowDivs = new Array(),
		$el,
		topPosition = 0;
	$(container).each(function() {
		$el = $(this);
		$($el).height('auto')
		topPostion = $el.position().top;

		if (currentRowStart != topPostion) {
		for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
			rowDivs[currentDiv].height(currentTallest);
		}
		rowDivs.length = 0; // empty the array
		currentRowStart = topPostion;
		currentTallest = $el.height();
		rowDivs.push($el);
		} else {
		rowDivs.push($el);
		currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	}
		for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		rowDivs[currentDiv].height(currentTallest);
		}
	});
}

$(window).load(function() {
	equalheight('.equal-height');
});

$(window).resize(function(){
	equalheight('.equal-height');
});