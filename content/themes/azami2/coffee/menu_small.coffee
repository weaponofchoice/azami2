if $('#menu_small').length > 0
	menu = $('#menu_small_collapsed')
	trigger = $('#hamburger')
	
	trigger.click ->
		menu.toggleClass "active"