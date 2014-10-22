$('.AlpinePhotoTiles-image').each(function(){
    var imgwidth = $(this).width();
    var imgheight = $(this).height();

    if (imgwidth > imgheight) {
        $(this).addClass('wide-img');
        
    } else if (imgheight > imgwidth) {
        $(this).addClass('tall-img');
        
    } else {
        $(this).addClass('square');
    }
});