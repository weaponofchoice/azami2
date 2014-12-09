# Left gallery
if $('.gallery_left').length > 0
	slider = $('.gallery_left .royalSlider')
	
	slider.royalSlider
		# options go here
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		sliderDrag: false,
		sliderTouch: false,
		loop: true,
		transitionSpeed: 250,
		transitionType: 'fade',
		controlNavigation: 'none',
		navigateByClick: false,
		arrowsNav: false,
		autoplay:
			enabled: true,
			delay: 3000,
			pauseOnHover: false

# Right gallery
if $('.gallery_right').length > 0
	slider = $('.gallery_right .royalSlider')
	
	slider.royalSlider
		# options go here
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		sliderDrag: false,
		sliderTouch: false,
		loop: true,
		transitionSpeed: 250,
		transitionType: 'fade',
		controlNavigation: 'none',
		navigateByClick: false,
		arrowsNav: false,
		autoplay:
			enabled: true,
			delay: 2500,
			pauseOnHover: false