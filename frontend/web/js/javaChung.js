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

/** MODAL ADD ALBUM **/
async function modalAddAlbum() {
    var jqxhr = await $.ajax('/site/ajax-add-album')
        .done(function (msg) {
            console.log('success');
            return msg;
        })
        .fail(function (msg) {
            console.log('error');
        })
        .always(function (msg) {
            console.log('complete');
        });
    var mod = await $('body').find('#myModal-see-album');
    await mod.find('.content-cus-see-album').html(jqxhr);
    await mod.modal({
        keyboard: false,
        show: true,
        backdrop: 'static'
    });
    await mod.css({'z-index': '99994'});
    await $('body').find('.modal-backdrop').last().addClass('important-99993');
}

/** TAO BIEU DO HINH TRON **/
function percentJs(json) {
    /**
     * json{ txt: '%', best: 100 }
     * @type {jQuery.fn.init|jQuery|HTMLElement}
     */
    var $ppc = $('.progress-pie-chart');
    $.each($ppc, function () {
        var number = $(this).data('percent');
        var percent = number * (100 / json.best);
        var deg = 360 * percent / 100;

        if (percent >= 75) {
            $(this).addClass('gt-50 mau-xanh');
        } else if (percent >= 50) {
            $(this).addClass('gt-50 mau-vang');
        } else {
            $(this).addClass('mau-do');
        }

        $(this).find('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
        $(this).find('.ppc-percents span').html(number + json.txt);
    });
}

/** SHOW ERROR **/
function showError(e, bol) {
    if (bol) {
        console.log(e);
    }
}

/** COUNT CHARACTER STRING **/
function countWords(s) {
    'use strict';
    s = s.replace(/(^\s*)|(\s*$)/gi, "");//exclude  start and end white-space
    s = s.replace(/[ ]{2,}/gi, " ");//2 or more space to 1
    s = s.replace(/\n /, "\n"); // exclude newline with a start spacing
    return s.split(' ').filter(function (str) {
        return str !== "";
    }).length;
}

function textCounter(field, id, maxlimit, maxWord) {
    'use strict';
    var txtThis = typeof field === 'object' ? field : document.getElementById(field);
    var cntfield = document.getElementById('count-character-' + id);
    var demTu = countWords(txtThis.value);
    if (demTu > maxWord) {
        //neu lon hon so ky tu cho phep
        //txtThis.value = txtThis.value.substring(0, txtThis.value.length - 1);
        txtThis.value = txtThis.value.substring(0, maxlimit);
        cntfield.innerHTML = 0;
    } else {
        if (txtThis.value.length > maxlimit) {// if too long...trim it!
            txtThis.value = txtThis.value.substring(0, maxlimit);
            // otherwise, update 'characters left' counter
        } else {
            //cntfield.innerHTML = maxlimit - txtThis.value.length;
            cntfield.innerHTML = maxWord - demTu;
        }
    }
}

function textCounterDiv(field, id, maxlimit, maxWord) {
    'use strict';
    var txtThis = typeof field === 'object' ? field : document.getElementById(field);
    var cntfield = document.getElementById('count-character-' + id);
    var demTu = countWords(txtThis.innerHTML);
    if (demTu > maxWord) {
        //neu lon hon so ky tu cho phep
        //txtThis.innerHTML = txtThis.innerHTML.substring(0, txtThis.innerHTML.length - 1);
        txtThis.innerHTML = txtThis.innerHTML.substring(0, maxlimit);
        cntfield.innerHTML = 0;
    } else {
        if (txtThis.innerHTML.length > maxlimit) {// if too long...trim it!
            txtThis.innerHTML = txtThis.innerHTML.substring(0, maxlimit);
            // otherwise, update 'characters left' counter
        } else {
            //cntfield.innerHTML = maxlimit - txtThis.innerHTML.length;
            cntfield.innerHTML = maxWord - demTu;
        }
    }
}
/** END COUNT CHARACTER STRING **/

function closeAllPopup(){
    $('.modal').modal('hide');
}

/** JAVA CHUNG **/
$(function () {
    'use strict';

    //button back on browser
    // window.addEventListener("popstate", function (e) {
    //     closeAllPopup();
    //     e.preventDefault();
    // });

    $('body').tooltip({selector: '[data-toggle="tooltip"]', trigger: 'hover'});

    $(document).on({
        'show.bs.modal': function () {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function () {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        },
        'hidden.bs.modal': function () {
            if ($('.modal:visible').length > 0) {
                // restore the modal-open class to the body element, so that scrolling works
                // properly after de-stacking a modal.
                setTimeout(function () {
                    $(document.body).addClass('modal-open');
                }, 0);
            }
        }
    }, '.modal');

    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (document.getElementById("truotMenu")) {
            var bg = document.getElementById("truotMenu").offsetTop;
            if (prevScrollpos > currentScrollPos) {
                //hien ra
                //$('body').find('div.kt-head').addClass('sticky');
                $('body').find('div.kt-head').css({'top': '0px'}).fadeIn();
                //$('body').find('div#sticky-item-01').css({'padding-top': '40px'});
                //document.getElementById("navbar").style.top = "0";
            } else {
                //mat di
                if (currentScrollPos >= bg) {
                    $('body').find('div.kt-head').css({'top': '-80px'}).fadeOut();
                    //$('body').find('div.kt-head').removeClass('sticky');
                    //$('body').find('div#sticky-item-01').css({'padding-top': '0'});
                    //document.getElementById("navbar").style.top = "-50px";
                }
            }
        }
        prevScrollpos = currentScrollPos;
    };




    // $('.js-viewUser').mousemove(function(){
    //     $(this).tooltipster({

    //         trigger: 'custom',
    //         triggerOpen: {
    //             mouseenter: true,
    //             touchstart: true
    //         },
    //         triggerClose: {
    //                 click: true,
    //                 scroll: true,
    //                 tap: true,
    //                 mouseleave:true,
    //         },
    //         contentAsHTML: true,
    //              interactive: true,
    //              zIndex: 1001,
    //             animation: 'fade',
    //              animationDuration: 100,
    //              updateAnimation: false,
    //              theme: ['tooltipster-light', 'tooltipster-noir-customized'],
    //              content: '<i class="fa fa-spinner fa-pulse fa fa-fw"></i>',
    //              functionBefore: function (instance, helper) {

    //                  var $origin = $(helper.origin),
    //                      dataOptions = {
    //                          type: $origin.attr('data-type'),
    //                          id: $origin.attr('data-item')
    //                      };
    //                  if ($origin.data('loaded') !== true) {

    //                      $.get('index/loaduser', dataOptions, function (data) {
    //                          instance.content(data);
    //                          $origin.data('loaded', true);
    //                      });
    //                  }
    //              }
    //     }).tooltipster('open');
    // }).on('mouseenter', '.js-viewUser:not(.tooltipstered)', function () {
    //     $(this)
    //         .tooltipster({
    //             trigger: 'custom',
    //             triggerOpen: {
    //                 mouseenter: true,
    //                 touchstart: true
    //             },
    //             triggerClose: {
    //                 mouseleave: true,
    //                 originClick: true,
    //                 touchleave: true
    //             },
    //             contentAsHTML: true,
    //             interactive: true,
    //             zIndex: 1001,
    //             animation: 'fade',
    //             animationDuration: 100,
    //             updateAnimation: false,
    //             minWidth: 300,
    //             theme: ['tooltipster-light', 'tooltipster-noir-customized'],
    //             content: '<i class="fa fa-spinner fa-pulse fa fa-fw"></i>',
    //             // 'instance' is basically the tooltip. More details in the "Object-oriented Tooltipster" section.
    //             functionBefore: function (instance, helper) {

    //                 var $origin = $(helper.origin),
    //                     dataOptions = {
    //                         id: $origin.attr('data-item')
    //                     };

    //                 // we set a variable so the data is only loaded once via Ajax, not every time the tooltip opens
    //                 if ($origin.data('loaded') !== true) {

    //                     $.get('index/loaduser', dataOptions, function (data) {

    //                         // call the 'content' method to update the content of our tooltip with the returned data.
    //                         // note: this content update will trigger an update animation (see the updateAnimation option)
    //                         instance.content(data);

    //                         // to remember that the data has been loaded
    //                         $origin.data('loaded', true);
    //                     });
    //                 }
    //             },
    //             functionPosition: function (instance, helper, position) {
    //                 if (position.coord.left + position.size.width < $(window).width()) {
    //                     position.coord.left += 120;
    //                 }
    //                 if (position.coord.left === 120) {
    //                     position.coord.left -= 83;
    //                 }
    //                 if (position.side === 'top') {
    //                     position.coord.bottom += 6;
    //                 }
    //                 if (position.side === 'bottom') {
    //                     position.coord.top += 8;
    //                 }

    //                 return position;
    //             }
    //         })
    //         .tooltipster('open');
    // }).on('mouseenter', '.js-viewUserMore:not(.tooltipstered)', function () {
    //     $(this)
    //         .tooltipster({
    //             trigger: 'custom',
    //             triggerOpen: {
    //                 mouseenter: true,
    //                 touchstart: true
    //             },
    //             triggerClose: {
    //                 mouseleave: true,
    //                 originClick: true,
    //                 touchleave: true
    //             },
    //             contentAsHTML: true,
    //             interactive: true,
    //             zIndex: 1001,
    //             animation: 'fade',
    //             animationDuration: 100,
    //             updateAnimation: false,
    //             theme: ['tooltipster-light', 'tooltipster-noir-customized'],
    //             content: '<i class="fa fa-spinner fa-pulse fa fa-fw"></i>',
    //             // 'instance' is basically the tooltip. More details in the "Object-oriented Tooltipster" section.
    //             functionBefore: function (instance, helper) {

    //                 var $origin = $(helper.origin),
    //                     dataOptions = {
    //                         id: $origin.attr('data-item')
    //                     };

    //                 // we set a variable so the data is only loaded once via Ajax, not every time the tooltip opens
    //                 if ($origin.data('loaded') !== true) {

    //                     $.get('/site/ajax-more', dataOptions, function (data) {

    //                         // call the 'content' method to update the content of our tooltip with the returned data.
    //                         // note: this content update will trigger an update animation (see the updateAnimation option)
    //                         instance.content(data);

    //                         // to remember that the data has been loaded
    //                         $origin.data('loaded', true);
    //                     });
    //                 }
    //             }
    //         })
    //         .tooltipster('open');
    // });


    $('body').on('mouseenter', '.js-loveLike:not(.tooltipstered)', function () {
        $(this)
            .tooltipster({
                trigger: 'custom',
                triggerOpen: {
                    mouseenter: true,
                    touchstart: true
                },
                triggerClose: {
                    click: true,
                    scroll: true,
                    tap: true
                },
                contentAsHTML: true,
                interactive: true,
                zIndex: 1001,
                animation: 'fade',
                animationDuration: 100,
                updateAnimation: false,
                theme: ['tooltipster-light', 'tooltipster-noir-customized'],
                content: '<i class="fa fa-spinner fa-pulse fa fa-fw"></i>',
                // 'instance' is basically the tooltip. More details in the "Object-oriented Tooltipster" section.
                functionBefore: function (instance, helper) {

                    var $origin = $(helper.origin),
                        dataOptions = {
                            type: $origin.attr('data-type'),
                            id: $origin.attr('data-item')
                        };

                    // we set a variable so the data is only loaded once via Ajax, not every time the tooltip opens
                    if ($origin.data('loaded') !== true) {

                        $.get('index/loaduser', dataOptions, function (data) {

                            // call the 'content' method to update the content of our tooltip with the returned data.
                            // note: this content update will trigger an update animation (see the updateAnimation option)
                            instance.content(data);

                            // to remember that the data has been loaded
                            $origin.data('loaded', true);
                        });
                    }
                }
            })
            .tooltipster('open');
    }).on('mouseenter', '.js-viewUser:not(.tooltipstered)', function () {
        $(this)
            .tooltipster({
                trigger: 'custom',
                triggerOpen: {
                    mouseenter: true,
                    touchstart: true
                },
                triggerClose: {
                    mouseleave: true,
                    originClick: true,
                    touchleave: true
                },
                contentAsHTML: true,
                interactive: true,
                zIndex: 1001,
                animation: 'fade',
                animationDuration: 100,
                updateAnimation: false,
                minWidth: 300,
                theme: ['tooltipster-light', 'tooltipster-noir-customized'],
                content: '<i class="fa fa-spinner fa-pulse fa fa-fw"></i>',
                // 'instance' is basically the tooltip. More details in the "Object-oriented Tooltipster" section.
                functionBefore: function (instance, helper) {

                    var $origin = $(helper.origin),
                        dataOptions = {
                            id: $origin.attr('data-item')
                        };

                    // we set a variable so the data is only loaded once via Ajax, not every time the tooltip opens
                    if ($origin.data('loaded') !== true) {

                        $.get('index/loaduser', dataOptions, function (data) {

                            // call the 'content' method to update the content of our tooltip with the returned data.
                            // note: this content update will trigger an update animation (see the updateAnimation option)
                            instance.content(data);

                            // to remember that the data has been loaded
                            $origin.data('loaded', true);
                        });
                    }
                },
                functionPosition: function (instance, helper, position) {
                    if (position.coord.left + position.size.width < $(window).width()) {
                        position.coord.left += 120;
                    }
                    if (position.coord.left === 120) {
                        position.coord.left -= 83;
                    }
                    if (position.side === 'top') {
                        position.coord.bottom += 6;
                    }
                    if (position.side === 'bottom') {
                        position.coord.top += 8;
                    }

                    return position;
                }
            })
            .tooltipster('open');
    }).on('mouseenter', '.js-viewUserMore:not(.tooltipstered)', function () {
        $(this)
            .tooltipster({
                trigger: 'custom',
                triggerOpen: {
                    mouseenter: true,
                    touchstart: true
                },
                triggerClose: {
                    mouseleave: true,
                    originClick: true,
                    touchleave: true
                },
                contentAsHTML: true,
                interactive: true,
                zIndex: 1001,
                animation: 'fade',
                animationDuration: 100,
                updateAnimation: false,
                theme: ['tooltipster-light', 'tooltipster-noir-customized'],
                content: '<i class="fa fa-spinner fa-pulse fa fa-fw"></i>',
                // 'instance' is basically the tooltip. More details in the "Object-oriented Tooltipster" section.
                functionBefore: function (instance, helper) {

                    var $origin = $(helper.origin),
                        dataOptions = {
                            id: $origin.attr('data-item')
                        };

                    // we set a variable so the data is only loaded once via Ajax, not every time the tooltip opens
                    if ($origin.data('loaded') !== true) {

                        $.get('/site/ajax-more', dataOptions, function (data) {

                            // call the 'content' method to update the content of our tooltip with the returned data.
                            // note: this content update will trigger an update animation (see the updateAnimation option)
                            instance.content(data);

                            // to remember that the data has been loaded
                            $origin.data('loaded', true);
                        });
                    }
                }
            })
            .tooltipster('open');
    });
});
jQuery(function ($) {
jQuery('#myModal-see-album').modal({"show":false,"backdrop":"static","keyboard":false,"focus":false});
jQuery('#myModal-see-project').modal({"show":false,"backdrop":"static","keyboard":false,"focus":false});
catchLink();

$('#w1').select2({
     minimumResultsForSearch: -1,

});

$('#w2').select2({
     minimumResultsForSearch: -1,
});
$('#w3').select2({
     minimumResultsForSearch: -1,
});
// if (jQuery('#w2').data('select2')) { jQuery('#w2').select2('destroy'); }
// jQuery.when(jQuery('#w2').select2(select2_055b6109)).done(initS2Loading('w2','s2options_6cc131ae'));

// if (jQuery('#w3').data('select2')) { jQuery('#w3').select2('destroy'); }
// jQuery.when(jQuery('#w3').select2(select2_4fc8a948)).done(initS2Loading('w3','s2options_6cc131ae'));

// jQuery('#w0').yiiActiveForm([], {"errorSummary":".alert.alert-danger","errorCssClass":"is-invalid","successCssClass":"is-valid","validationStateOn":"input"});
// jQuery("#container-id").owlCarousel(
// {"autoplay":false,"autoplayTimeout":4000,"items":10,"margin":0,"merge":true,"loop":true,"dots":false,"nav":false}
// );


$('b[role="presentation"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class="kt-icon grey size-9x9"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9"><path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z" fill-rule="evenodd"/></svg></i>');

});
$('.removeDropdow').hover(function(){
    $('.group-03').removeClass('show');
    $('.group-03 > button').attr("aria-haspopup","false");
    $('.group-03 .dropdown-menu').removeClass('show');
})