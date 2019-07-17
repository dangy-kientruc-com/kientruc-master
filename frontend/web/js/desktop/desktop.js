function createHistory(link,tt){
    document.title = tt;
    history.pushState({}, "", link);
}

function closeModalViewDiscuss(el) {
    closeAllPopup();
    window.history.back();
}

$(function () {
    'use strict';

    calcWidth('#js-elMenu', '.js-elMenu01', '.js-elMenu02', 70);
    $(window).on('resize', function () {
        calcWidth('#js-elMenu', '.js-elMenu01', '.js-elMenu02', 70);
    });

    $('body').on('click', '.kt-project-item',  function () {
        var id =$(this).attr('id');
        console.log(id);
        var href=$(this).find('a').attr("href");
        //chuyen sang xai modal
        var $mod = $('body').find('#myModal-see-project');
        var request = $.ajax({
            url: 'site/detail-project?id='+id+'',
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

        createHistory(href,'detail project');

        return false;
    });

});