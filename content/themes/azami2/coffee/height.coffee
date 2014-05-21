if $('body').length > 0	
	# Declare variables
	article = $('.text .row')
	gallery = $('.gallery')
	intro = $('#intro')
	
	# Determine heights
	viewport = window.innerHeight
	article_height = article.height()
	
	# Apply heights
	article.css "height", article_height
	gallery.css "height", viewport
	intro.css "height", viewport
	
	$(window).on 'resize', ->
			# Recalculate window height
			viewport = window.innerHeight
			
			# Reapply heights
			article.css "height", article_height
			gallery.css "height", viewport
			intro.css "height", viewport