 function toggleDesign(el) {
            if ($(el).hasClass('open')) {
                $(el).html('Mở rộng');
                $(el).removeClass('open');
            } else {
                $(el).html('Thu gọn');
                $(el).addClass('open');
            }
            $('body').find('.group-design').slideToggle();
        }

        function viewPhoto(id) {
            if (id === 1) {
                $('body').find('.box-image').addClass('break');
            } else {
                $('body').find('.box-image').removeClass('break');
            }
        }
percentJs2({txt:'',best:5});
function percentJs2(json) {
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
            $(this).addClass('gt-50 mau-xanh ');
        } else if (percent >= 50) {
            $(this).addClass('gt-50 mau-vang');
        } else {
            $(this).addClass('mau-do');
        }

        $(this).find('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
        $(this).find('.ppc-percents span').html(number + json.txt);
    });
}