$(function () {
    'use strict';

    //calcWidth('#navMainParent0', '.menuH4', '.menuUl', 10);
    calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);
    calcWidth('#navMainParent2', '.menuH4', '.menuUl', 10);
    calcWidth('#navMainParent3', '.menuH4', '.menuUl', 10);
    $(window).on('resize', function () {
        //calcWidth('#navMainParent0', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent2', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent3', '.menuH4', '.menuUl', 10);
    });

    var $grid = $('.js-index-grid-01').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true
    });
    //------------------//

    // Get an API key for your demos at https://unsplash.com/developers
    // var unsplashID = '9ad80b14098bcead9c7de952435e937cc3723ae61084ba8e729adb642daf0251';

    // // get Masonry instance
    // var msnry = $grid.data('masonry');

    // $grid.infiniteScroll({
    //     path: function () {
    //         return 'https://api.unsplash.com/photos?client_id='
    //             + unsplashID + '&page=' + this.pageIndex;
    //     },
    //     // load response as flat text
    //     responseType: 'text',
    //     outlayer: msnry,
    //     loadOnScroll: false,
    //     button: '.js-more-project-button',
    //     // load pages on button click
    //     scrollThreshold: false,
    //     // disable loading on scroll
    //     status: '.page-load-status',
    //     history: false
    // });

    // $grid.on('load.infiniteScroll', function (event, response) {

    //     //console.log(response);
    //     // parse response into JSON data
    //     console.log('123');
    //     var data = JSON.parse(response);
    //     // compile data into HTML
    //     var itemsHTML = data.map(getItemHTML).join('');
    //     // convert HTML string into elements
    //     var $items = $(itemsHTML);
    //     // append item elements
    //     $items.imagesLoaded(function () {
    //         $grid.infiniteScroll('appendItems', $items)
    //             .masonry('appended', $items);
    //     })

    // });

    // // load initial page
    // //$grid.infiniteScroll('loadNextPage');
    // //------------------//

    // var itemTemplateSrc = $('#photo-item-template').html();

    // function getItemHTML(photo) {
    //     return microTemplate(itemTemplateSrc, photo);
    // }

    // // micro templating, sort-of
    // function microTemplate(src, data) {
    //     // replace {{tags}} in source
    //     return src;

    //     /*return src.replace( /\{\{([\w\-_\.]+)\}\}/gi, function( match, key ) {
    //         // walk through objects to get value
    //         var value = data;
    //         key.split('.').forEach( function( part ) {
    //             value = value[ part ];
    //         });
    //         return value;
    //     });*/
    // }

    $('.js-index-grid-02').masonry({
        itemSelector: '.item',
        //columnWidth: 232.5,
        isFitWidth: true
    });
    

});