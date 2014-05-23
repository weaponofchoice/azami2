# Normal gallery
if $('.gallery').length or $('.gallery_content').length > 0
	slider = $('.royalSlider')
	
	slider.royalSlider
		# options go here
		keyboardNavEnabled: true,
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		loop: true,
		transitionSpeed: 200,
		controlNavigation: 'none',
		arrowsNav: true,
		arrowsNavHideOnTouch: true,
		globalCaption: true