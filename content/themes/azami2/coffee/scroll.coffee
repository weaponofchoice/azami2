if $('#arrow_scroll').length > 0
	arrow = $('#arrow_scroll')
	page = $(window)
	intro = $('#intro')
	introHeight = intro.height()
	
	arrow.click ->
		page.scrollTo introHeight, 500, 'ease-in-out'
		
	# $(window).on 'resize', ->
	#		page.scrollTo introHeight, 500, 'ease-in-out'