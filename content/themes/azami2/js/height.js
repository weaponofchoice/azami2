// Generated by CoffeeScript 1.8.0
var alpine, article, article_height, content, footer, footer_height, gallery, intro, push, viewport;

if ($('body').length > 0) {
  article = $('.text_quote .row');
  gallery = $('.gallery');
  intro = $('#intro');
  footer = $('footer');
  push = $('.push-footer');
  content = $('#content');
  alpine = $('.AlpinePhotoTiles_inpost_container');
  viewport = window.innerHeight;
  article_height = article.height();
  footer_height = footer.height();
  article.css("height", article_height);
  gallery.css("height", viewport / 1.25);
  alpine.css("height", viewport / 1.25);
  intro.css("height", viewport);
  footer.css("height", footer_height);
  push.css("height", footer_height);
  content.css("margin-bottom", -footer_height);
  $(window).on('resize', function() {
    article = $('.text_quote .row');
    gallery = $('.gallery');
    intro = $('#intro');
    footer = $('footer');
    push = $('.push-footer');
    content = $('#content');
    footer.css("height", "auto");
    viewport = window.innerHeight;
    article_height = article.height();
    footer_height = footer.height();
    article.css("height", article_height);
    gallery.css("height", viewport);
    alpine.css("height", viewport / 1.25);
    intro.css("height", viewport);
    footer.css("height", footer_height);
    push.css("height", footer_height);
    return content.css("margin-bottom", -footer_height);
  });
}
