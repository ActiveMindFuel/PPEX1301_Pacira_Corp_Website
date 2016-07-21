jQuery(document).ready(function() {
	jQuery('#navigation span').addClass('dropdown-toggle');
	jQuery('#navigation span').attr("data-toggle", "dropdown");
	jQuery('#navigation span').on('mouseover',function() {
		jQuery(this).css('color','##c61017');
		//$('.dropdown-menu').css('display','block');
	});

	jQuery('.slickslider').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
  		autoplay: true,
  		dots: true,
  		autoplaySpeed: 5000,
	});

	// tabs activation (each tab needs to be activated individually)
	$('#paciraTabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});

	$('body :not(script)').contents().filter(function() {
   	return this.nodeType === 3;
		}).replaceWith(function() {
	   	return this.nodeValue.replace(/[™®]/g, '<sup>$&</sup>');
	});
});