if $( '.picture-mobile' ).length > 0
  img = $( '.picture-mobile img' )
  
  img.click ->
    $( this ).toggleClass "picture-mobile-active"