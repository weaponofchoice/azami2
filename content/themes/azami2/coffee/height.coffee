if $('body').length > 0	
	# Declare variables
	article = $('.text_quote .row')
	gallery = $('.gallery')
	intro = $('#intro')
	footer = $('footer')
	push = $('.push-footer')
	content = $('#content')
	
	# Determine heights
	viewport = window.innerHeight
	article_height = article.height()
	footer_height = footer.height()
	
	# Apply heights
	article.css "height", article_height
	gallery.css "height", viewport / 1.25
	intro.css "height", viewport
	footer.css "height", footer_height
	push.css "height", footer_height
	content.css "margin-bottom", -footer_height
	
	$(window).on 'resize', ->
			# Recalculate heights
			viewport = window.innerHeight
			article_height = article.height()
			footer_height = footer.height()
			
			# Reapply heights
			article.css "height", article_height
			gallery.css "height", viewport
			intro.css "height", viewport
			footer.css "height", footer_height
			push.css "height", footer_height
			content.css "margin-bottom", -footer_height