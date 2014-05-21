# Left gallery
if $('.gallery_left').length > 0
	slider = $('.royalSlider')
	
	slider.royalSlider
		# options go here
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		loop: true,
		transitionSpeed: 200,
		transitionType: 'fade',
		controlNavigation: 'none',
		arrowsNav: false,
		autoplay:
			enabled: true,
			delay: 3000,
			pauseOnHover: false

# Right gallery
if $('.gallery_right').length > 0
	slider = $('.royalSlider')
	
	slider.royalSlider
		# options go here
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		loop: true,
		transitionSpeed: 500,
		transitionType: 'fade',
		controlNavigation: 'none',
		arrowsNav: false,
		autoplay:
			enabled: true,
			delay: 2500,
			pauseOnHover: false