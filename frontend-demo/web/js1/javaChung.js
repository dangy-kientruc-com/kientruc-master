/**************** count character***************/
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
/**************** end count character***************/

//phan tram vong tron
function percentJs(json) {
    /**
     * json{ txt: '%', best: 100 }
     * @type {jQuery.fn.init|jQuery|HTMLElement}
     */
    var $ppc = $('.progress-pie-chart');
    $.each($ppc, function () {
        var number = $(this).data('percent');
        var percent = number*(100/json.best);
        var deg = 360 * percent / 100;

        if (percent >= 75) {
            $(this).addClass('gt-50 mau-xanh');
        }else if (percent >= 50) {
            $(this).addClass('gt-50 mau-vang');
        }else{
            $(this).addClass('mau-do');
        }

        $(this).find('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
        $(this).find('.ppc-percents span').html(number + json.txt);
    });
}


function showError(e,bol){
    if(bol) {
        console.log(e);
    }
}

$(function () {
    'use strict';

    $.xhrPool = [];
    $.xhrPool.abortAll = function () {
        $(this).each(function (i, jqXHR) {   //  cycle through list of recorded connection
            jqXHR.abort();  //  aborts connection
            $.xhrPool.splice(i, 1); //  removes from list by index
        });
    };
    $.ajaxSetup({
        beforeSend: function (jqXHR) {
            $.xhrPool.push(jqXHR);
        }, //  annd connection to list
        complete: function (jqXHR) {
            var i = $.xhrPool.indexOf(jqXHR);   //  get index for current connection completed
            if (i > -1) $.xhrPool.splice(i, 1); //  removes from list by index
        }
    });

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

    //$.fancybox.defaults.hash = false;
    $('body').tooltip({selector: '[data-toggle="tooltip"]',trigger: 'hover'});

    new WOW({
        mobile: true,       // default
        live: true        // default
    }).init();

    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if(document.getElementById("truotMenu")) {
            var bg = document.getElementById("truotMenu").offsetTop;
            if (prevScrollpos > currentScrollPos) {
                //hien ra
                //$('body').find('div.kt-head').addClass('sticky');
                $('body').find('div.kt-head').css({'top': '0px'});
                //$('body').find('div#sticky-item-01').css({'padding-top': '40px'});
                //document.getElementById("navbar").style.top = "0";
            } else {
                //mat di
                if (currentScrollPos >= bg) {
                    $('body').find('div.kt-head').css({'top': '-80px'});
                    //$('body').find('div.kt-head').removeClass('sticky');
                    //$('body').find('div#sticky-item-01').css({'padding-top': '0'});
                    //document.getElementById("navbar").style.top = "-50px";
                }
            }
        }
        prevScrollpos = currentScrollPos;
    };

    $('.scroll-giai-thuong').slimScroll({/* options */});

    $('body').on('mouseenter', '.loveLike:not(.tooltipstered)', function () {
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

                        $.get('/site/ajax', dataOptions, function (data) {

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
    }).on('mouseenter', '.viewUser:not(.tooltipstered)', function () {
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

                        $.get('/site/ajax', dataOptions, function (data) {

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
                    if (position.side == 'top') {
                        position.coord.bottom += 6;
                    }
                    if (position.side == 'bottom') {
                        position.coord.top += 8;
                    }

                    return position;
                }
            })
            .tooltipster('open');
    }).on('mouseenter', '.viewUserMore:not(.tooltipstered)', function () {
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
    }).on('click', '[data-modalAjaxProject="true"]',  function () {
        //chuyen sang xai modal
        var $mod = $('body').find('#myModal-see-project');
        var request = $.ajax({
            url: "/site/detail-project-modal",
            method: "POST",
            //data: { id : menuId },
            dataType: "html"
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });

        request.done(function (msg) {
            $mod.find('.content-cus-see-project').html(msg);
            $mod.modal({
                keyboard: false,
                show: true,
                backdrop: 'static'
            });
        });    

        return false;
    });

});