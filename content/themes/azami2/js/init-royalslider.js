// Generated by CoffeeScript 1.7.1
var slider;

if ($('.gallery_clients').length > 0) {
  slider = $('.gallery');
  slider.royalSlider({
    keyboardNavEnabled: false,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    loop: true,
    transitionSpeed: 200
  });
}

if ($('.gallery').length > 0) {
  slider = $('.gallery');
  slider.royalSlider({
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    loop: true,
    transitionSpeed: 200,
    controlNavigation: 'none',
    arrowsNav: true,
    arrowsNavHideOnTouch: true
  });
}
