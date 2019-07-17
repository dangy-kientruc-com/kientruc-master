$(function () {
    'use strict';


    /*function calcWidth(ltitle, id, parent) {
        var navwidth = 0;
        var morewidth = $(id + ' .more').outerWidth(true);
        $(id + ' > li:not(.more)').each(function () {
            navwidth += $(this).outerWidth(true);
        });
        //var availablespace = $('nav').outerWidth(true) - morewidth;
        var availablespace = $(parent).width() - morewidth - $(parent).find(ltitle).width();

        if (navwidth > availablespace) {
            var lastItem = $(id + ' > li:not(.more)').last();
            lastItem.attr('data-width', lastItem.outerWidth(true));
            lastItem.prependTo($(id + ' .more ul'));
            calcWidth(ltitle, id, parent);
        } else {
            var firstMoreElement = $(id + ' li.more li').first();
            if (navwidth + firstMoreElement.data('width') < availablespace) {
                firstMoreElement.insertBefore($(id + ' .more'));
            }
        }
        $(id + ' .more').css('display', $(id + ' .more li').length > 0 ? 'block' : 'none');
    }*/

    function calcWidth2(par, lf, rt) {
        try {
            var navwidth = 0;
            var thisLeft = $(par).find(lf);
            var thisRight = $(par).find(rt);
            var morewidth = thisRight.find('.more').outerWidth(true);
            thisRight.children('li:not(.more)').each(function () {
                navwidth += $(this).outerWidth(true);
            });
            //var availablespace = $('nav').outerWidth(true) - morewidth;
            var availablespace = $(par).width() - morewidth - thisLeft.width();
            if (navwidth > availablespace) {
                var lastItem = thisRight.children('li:not(.more)').last();
                lastItem.attr('data-width', lastItem.outerWidth(true));
                lastItem.prependTo(thisRight.find('.more ul'));
                calcWidth2(par, lf, rt);
            } else {
                var firstMoreElement = thisRight.find('li.more li').first();
                if (navwidth + firstMoreElement.data('width') < availablespace) {
                    firstMoreElement.insertBefore(thisRight.find('.more'));
                }
            }
            thisRight.find('.more').css('display', thisRight.find('.more li').length > 0 ? 'block' : 'none');
        }catch (e) {
            showError(e,true);
        }
    }

    calcWidth2('#navMainParent0', '.menuH4', '.menuUl');
    calcWidth2('#navMainParent1', '.menuH4', '.menuUl');
    calcWidth2('#navMainParent2', '.menuH4', '.menuUl');
    $(window).on('resize', function () {
        //calcWidth('.menuH4', '#menuID', '#nav-main');
        calcWidth2('#navMainParent0', '.menuH4', '.menuUl');
        calcWidth2('#navMainParent1', '.menuH4', '.menuUl');
        calcWidth2('#navMainParent2', '.menuH4', '.menuUl');
    });


    var $grid = $('.grid-index-01').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true
    });
    //------------------//

    // Get an API key for your demos at https://unsplash.com/developers
    var unsplashID = '9ad80b14098bcead9c7de952435e937cc3723ae61084ba8e729adb642daf0251';

    // get Masonry instance
    var msnry = $grid.data('masonry');

    $grid.infiniteScroll({
        path: function () {
            return 'https://api.unsplash.com/photos?client_id='
                + unsplashID + '&page=' + this.pageIndex;
        },
        // load response as flat text
        responseType: 'text',
        outlayer: msnry,
        loadOnScroll: false,
        button: '.view-more-button',
        // load pages on button click
        scrollThreshold: false,
        // disable loading on scroll
        status: '.page-load-status',
        history: false
    });

    $grid.on('load.infiniteScroll', function (event, response) {

        //console.log(response);
        // parse response into JSON data
        var data = JSON.parse(response);
        // compile data into HTML
        var itemsHTML = data.map(getItemHTML).join('');
        // convert HTML string into elements
        var $items = $(itemsHTML);
        // append item elements
        $items.imagesLoaded(function () {
            $grid.infiniteScroll('appendItems', $items)
                .masonry('appended', $items);
        })

    });

    // load initial page
    //$grid.infiniteScroll('loadNextPage');
    //------------------//

    var itemTemplateSrc = $('#photo-item-template').html();

    function getItemHTML(photo) {
        return microTemplate(itemTemplateSrc, photo);
    }

    // micro templating, sort-of
    function microTemplate(src, data) {
        // replace {{tags}} in source
        return src;

        /*return src.replace( /\{\{([\w\-_\.]+)\}\}/gi, function( match, key ) {
            // walk through objects to get value
            var value = data;
            key.split('.').forEach( function( part ) {
                value = value[ part ];
            });
            return value;
        });*/
    }

    $('.grid-index-02').masonry({
        itemSelector: '.item',
        //columnWidth: 232.5,
        isFitWidth: true
    });

    $('.grid-index-03').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true
    });

});