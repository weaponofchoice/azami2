if $('.gallery_clients').length > 0
	image = $('.lightbox')
	
	overlayOn = ->
		$( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' )
	overlayOff = ->
		$( '#imagelightbox-overlay' ).remove();
	closeButtonOn = ->
		$('<a id=\"imagelightbox-close\"></a>').appendTo( 'body' ).on "click", ->
			$( this ).remove()
	closeButtonOff = ->
		$( '#imagelightbox-close' ).remove();
	
	image.imageLightbox
		enableKeyboard: true,
		quitOnImgClick: true,
		animationSpeed: 100,
		onStart: ->
			overlayOn()
			closeButtonOn()
		,
		onEnd: ->
			overlayOff()
			closeButtonOff()