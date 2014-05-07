$(function () {

    "use strict";

    var $container = $('#masonry');

    $container.imagesLoaded(function () {

        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item',
            gutter: 0,
            transitionDuration: '1s'
        });


    }).done(function () {
        $(window).trigger('resize');
    });

});
