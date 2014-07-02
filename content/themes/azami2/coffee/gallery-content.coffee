if $('body').length > 0	
	# Declare variables
	image = $('.gallery_content .image')
	
	# Determine heights
	imageWidth = image.width()
	
	# Apply heights
	image.css "height", imageWidth * 0.5625
	
	$(window).on 'resize', ->
		# Redetermine heights
		imageWidth = image.width()
		# Reapply heights
		image.css "height", imageWidth * 0.5625