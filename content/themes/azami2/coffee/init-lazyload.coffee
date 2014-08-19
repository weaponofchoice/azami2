if $('.gallery_content').length > 0
	gallery = $('.gallery_content')
	image = $('.gallery_content .image')
	
	image.lazyload
		effect: 'fadeIn',
