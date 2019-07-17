$('.grid').masonry({
	  		itemSelector: '.new-left-bot-li',
	 	 	gutter: 30,
	 	 	initLayout: true,
	 	 	columnWidth:'.new-left-bot-li',
	 	 	percentPosition: true,
	 	 	horizontalOrder: true
	 	 });

$(document).ready(function(){
	  $(".js-more-project-button").click(function(){
	  	$('.kt-icon').addClass('rote2s');
	  	setTimeout(function(){
	  		$('.kt-icon').removeClass('rote2s');
	  	}, 3000);
	  	load();
	    
	  });
	});
	function load()
	{
		var cate=$('#loadnews').attr("category");
		var page=$('#loadnews').attr("page");
		page=parseInt(page);
		page =page+1;
		$('#loadnews').attr("page",page);
		$.get('news/loadnews?id='+cate+'&page='+page+'',function(data){
			 var el = jQuery(data);
			 setTimeout(function(){
			 	$('.grid').append(el).masonry('appended',el,true);
			 },3000);
	    	
	    });
	   
		// new WOW().init();
	}
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

    calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);

    $(window).on('resize', function () {
        //calcWidth('#navMainParent0', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);

    });
    });