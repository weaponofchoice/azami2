// Generated by CoffeeScript 1.7.1
var arrow, intro, introHeight, page;

if ($('#arrow_scroll').length > 0) {
  arrow = $('#arrow_scroll');
  page = $(window);
  intro = $('#intro');
  introHeight = intro.height();
  arrow.click(function() {
    return page.scrollTo(introHeight, 500, 'ease-in-out');
  });
}