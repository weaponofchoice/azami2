# Client gallery
# most important difference: keyboardNav NOT enabled
if $('.gallery_clients').length > 0
	slider = $('.gallery')
	
	slider.royalSlider
		# options go here
		keyboardNavEnabled: false,
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		loop: true,
		transitionSpeed: 200

# Normal gallery
if $('.gallery').length > 0
	slider = $('.gallery')
	
	slider.royalSlider
		# options go here
		keyboardNavEnabled: true,
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		loop: true,
		transitionSpeed: 200,
		controlNavigation: 'none',
		arrowsNav: true,
		arrowsNavHideOnTouch: true
