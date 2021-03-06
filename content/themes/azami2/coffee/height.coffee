if $('body').length > 0	
  # Declare variables
  article = $('.text_quote .row')
  gallery = $('.gallery')
  intro = $('#intro')
  footer = $('footer')
  push = $('.push-footer')
  content = $('#content')
  alpine = $('.alpines')
  
  # Determine heights
  viewport = window.innerHeight
  viewport_width = window.innerWidth
  article_height = article.height()
  footer_height = footer.height()

  # Apply heights
  article.css "height", article_height
  gallery.css "height", viewport / 1.25
  alpine.css "height", viewport_width / 2
  intro.css "height", viewport
  footer.css "height", footer_height
  push.css "height", footer_height
  content.css "margin-bottom", -footer_height

  $(window).on 'resize', ->
    article = $('.text_quote .row')
    gallery = $('.gallery')
    intro = $('#intro')
    footer = $('footer')
    push = $('.push-footer')
    content = $('#content')

    footer.css "height", "auto"

    # Recalculate heights
    viewport = window.innerHeight
    viewport_width = window.innerWidth
    article_height = article.height()
    footer_height = footer.height()

    # Reapply heights
    article.css "height", article_height
    gallery.css "height", viewport
    alpine.css "height", viewport_width / 2
    intro.css "height", viewport

    footer.css "height", footer_height
    push.css "height", footer_height
    content.css "margin-bottom", -footer_height