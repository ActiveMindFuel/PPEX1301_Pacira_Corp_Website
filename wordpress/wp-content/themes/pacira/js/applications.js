jQuery(document).ready(function() {
	jQuery('.slickslider').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
  		autoplay: false,
  		autoplaySpeed: 5000,
	});

	// tabs activation (each tab needs to be activated individually)
	$('#paciraTabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
});