if ('#home-NL').length or ('#home-EN').length > 0
	text = $('.text_quote')
	first = text.first()
	
	# This is needed for extra margin
	first.addClass "first"