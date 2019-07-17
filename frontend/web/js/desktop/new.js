	/** SCALE MENU **/
function calcWidth(par, lf, rt, i) {
    try {
        var navwidth = 0;
        var thisLeft = $(par).find(lf);
        var thisRight = $(par).find(rt + ' > ul');
        var morewidth = thisRight.find('.more').outerWidth(true);
        thisRight.children('li:not(.more)').each(function () {
            navwidth += $(this).outerWidth(true);
        });
        //var availablespace = $('nav').outerWidth(true) - morewidth;
        var availablespace = $(par).width() - morewidth - thisLeft.width() - i;
        if (navwidth > availablespace) {
            var lastItem = thisRight.children('li:not(.more)').last();
            lastItem.attr('data-width', lastItem.outerWidth(true));
            lastItem.prependTo(thisRight.find('li.more > ul'));
            calcWidth(par, lf, rt, i);
        } else {
            var firstMoreElement = thisRight.find('li.more > ul > li').first();
            if (navwidth + firstMoreElement.data('width') < availablespace) {
                firstMoreElement.insertBefore(thisRight.find('.more'));
            }
        }
        if (thisRight.find('.more li').length > 0) {
            thisRight.find('.more').css('display', 'block');
            thisRight.addClass('hasChangeMenu');
        } else {
            thisRight.find('.more').css('display', 'none');
            thisRight.removeClass('hasChangeMenu');
        }

    } catch (e) {
        showError(e, true);
    }
}

$(function () {
    'use strict';

    calcWidth('#navMainParent1', '.menuH41', '.menuUl1', 10);
    calcWidth('#navMainParent2', '.menuH42', '.menuUl2', 10);
    calcWidth('#navMainParent3', '.menuH43', '.menuUl3', 10);
    calcWidth('#navMainParent4', '.menuH44', '.menuUl4', 10);
    $(window).on('resize', function () {
        //calcWidth('#navMainParent0', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent1', '.menuH41', '.menuUl1', 10);
        calcWidth('#navMainParent2', '.menuH42', '.menuUl2', 10);
        calcWidth('#navMainParent3', '.menuH43', '.menuUl3', 10);
        calcWidth('#navMainParent4', '.menuH44', '.menuUl4', 10);

    });
    });


 var dd =$('.news-main-top_top10').easyTicker({
        direction: 'up',
        easing: 'easeInOutBack',
        speed: 'slow',
        interval: 2000,
        height: '25',
        visible: 1,
        controls: {
            up: '.news-main-top-next',
            down: '.news-main-top-back',
            
        }
}).data('easyTicker');