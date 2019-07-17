$(function () {
    'use strict';

    function calcWidth3(par, lf, rt) {
        try {
            var navwidth = 0;
            var thisLeft = $(par).find(lf);
            var thisRight = $(par).find(rt).children();
            var morewidth = thisRight.find('.more').outerWidth(true);
            thisRight.children('li:not(.more)').each(function () {
                navwidth += $(this).outerWidth(true);
            });
            //var availablespace = $('nav').outerWidth(true) - morewidth;
            var availablespace = $(par).width() - morewidth - thisLeft.width() - 120;
            if (navwidth > availablespace) {
                var lastItem = thisRight.children('li:not(.more)').last();
                lastItem.attr('data-width', lastItem.outerWidth(true));
                lastItem.prependTo(thisRight.find('.more ul'));
                calcWidth3(par, lf, rt);
            } else {
                var firstMoreElement = thisRight.find('li.more li').first();
                if (navwidth + firstMoreElement.data('width') < availablespace) {
                    firstMoreElement.insertBefore(thisRight.find('.more'));
                }
            }
            thisRight.find('.more').css('display', thisRight.find('.more li').length > 0 ? 'block' : 'none');
        } catch (e) {
            showError(e,true);
        }
    }
    calcWidth3('#elMenu', '.el01', '.el02');
    $(window).on('resize', function () {
        calcWidth3('#elMenu', '.el01', '.el02');
    });

});