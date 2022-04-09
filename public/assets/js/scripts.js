/*-----------------------------------------------------------------------------------

    Theme Name: aruna
    Version: 1.0

-----------------------------------------------------------------------------------*/


$(function () {

	"use strict";

	var wind = $(window);



	/* ----------------------------------------------------------------
	                [ Navbar ( scrollIt ) ]
	-----------------------------------------------------------------*/

	$.scrollIt({
		upKey: 38, // key code to navigate to the next section
		downKey: 40, // key code to navigate to the previous section
		easing: 'swing', // the easing function for animation
		scrollTime: 600, // how long (in ms) the animation takes
		activeClass: 'active', // class given to the active nav element
		onPageChange: null, // function(pageIndex) that is called when page is changed
		topOffset: 0 // offste (in px) for fixed top navigation
	});



	/* ----------------------------------------------------------------
	                [ Navbar ]
	-----------------------------------------------------------------*/


	// close navbar-collapse when a  clicked
	$(".navbar-nav a").on('click', function () {
		$(".navbar-collapse").removeClass("show");
	});


	$(".side-menu").on('click', '.icon-open', function () {
		$(".nav-menu").addClass("menu-open");
	});


	$(".side-menu").on('click', '.icon-close, .menu-item', function () {
		$(".nav-menu").removeClass("menu-open");
	});


	/* ----------------------------------------------------------------
	                [ Sections Background Image With Data ]
	-----------------------------------------------------------------*/

	var pageSection = $(".bg-img, section");
	pageSection.each(function (indx) {

		if ($(this).attr("data-background")) {
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});


	/* ----------------------------------------------------------------
	                [ Owl-Carousel ]
	-----------------------------------------------------------------*/


	$('.wrapper.bg-slider').slick({
		dots: false,
		infinite: true,
		speed: 2000,
		fade: true,
		rtl: true,
		autoplay: true,
		autoplaySpeed: 5000,
		cssEase: 'linear'
	});


	// Testimonials owlCarousel
	$('.testimonials .testim').owlCarousel({
		loop: true,
		rtl: true,
		items: 1,
		margin: 15,
		mouseDrag: false,
		autoplay: true,
		smartSpeed: 500
	});


	// Clients owlCarousel
	$('.clients .owl-carousel').owlCarousel({
		loop: true,
		rtl: true,
		margin: 60,
		dots: false,
		responsiveClass: true,
		responsive: {
			0: {
				margin: 10,
				items: 2
			},
			600: {
				items: 4
			},
			1000: {
				items: 6
			}
		}
	});

	// === End owl-carousel === //


	/* ----------------------------------------------------------------
	                [ magnificPopup ]
	-----------------------------------------------------------------*/

	$('.gallery').magnificPopup({
		delegate: '.popimg',
		type: 'image',
		gallery: {
			enabled: true,
			tPrev: 'قبلی',
			tNext: 'بعدی',
			tCounter: '%curr% از %total%'
		},
		tClose: "بستن",
		tLoading: "در حال بارگذاری ...",
		image: {
			tError: '<a href="%url%">تصویر</a> بارگذاری نشد.'
		},
		ajax: {
			tError: '<a href="%url%">درخواست</a> ناموفق بود.'
		}
	});


	/* ----------------------------------------------------------------
	                [ countUp ]
	-----------------------------------------------------------------*/

	$('.numbers .count').countUp({
		delay: 10,
		time: 1500
	});


});


// === window When Loading === //

$(window).on("load", function () {

	var wind = $(window);

	/* ----------------------------------------------------------------
	                [ Preloader ]
	-----------------------------------------------------------------*/

	$(".loading").fadeOut(500);


	/* ----------------------------------------------------------------
	                [ stellar ( Parallax ) ]
	-----------------------------------------------------------------*/

	wind.stellar();


	/* ----------------------------------------------------------------
	                [ isotope Portfolio ( Masonery Style ) ]
	-----------------------------------------------------------------*/

	$('.gallery').isotope({
		// options
		itemSelector: '.items',
		isOriginLeft: false
	});

	var $gallery = $('.gallery').isotope({
		// options
		isOriginLeft: false
	});

	// filter items on button click
	$('.filtering').on('click', 'span', function () {

		var filterValue = $(this).attr('data-filter');

		$gallery.isotope({
			filter: filterValue,
			isOriginLeft: false
		});

	});

	$('.filtering').on('click', 'span', function () {

		$(this).addClass('active').siblings().removeClass('active');

	});


	// contact form validator
	$.fn.validator.Constructor.FOCUS_OFFSET = 75;
	$('#contact-form').validator();

	$('#contact-form').on('submit', function (e) {
		if (!e.isDefaultPrevented()) {
			var url = "php/contact.php";

			$.ajax({
				type: "POST",
				url: url,
				data: $(this).serialize(),
				success: function (data) {
					var messageAlert = 'alert-' + data.type;
					var messageText = data.message;

					var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
					if (messageAlert && messageText) {
						$('#contact-form').find('.messages').html(alertBox);
						if(data.type == 'success'){
							$('#contact-form')[0].reset();
						}
					}
				}
			});
			return false;
		}
	});

});

$(window).scroll(function () {

	var header = $(".header").outerHeight() - 100;

	$(".header .caption").css("opacity", 1 - $(window).scrollTop() / header);
});
