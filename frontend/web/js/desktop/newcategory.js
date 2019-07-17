$(document).ready(function(){
		var total=$('.new-top-catelory').attr('total');
		var w=$('.new-top-catelory-li.active').width();
		var ac=$('.new-top-catelory-li.active').attr('vl-tt');
		w =w +20;
		$('.magic-line').css('width',w);
		var kttotal=0;
			for(i=1;i<ac;i++)
			{
				var vl=$('.new-top-catelory-li-'+i).width();
				kttotal=kttotal+vl+20;

			}
			$('.magic-line').css({"-webkit-transform":"translate("+kttotal+"px,0)"});

		$('.new-top-catelory-li').hover(function(){
			var ac=$(this).attr('vl-tt');
			var w=$(this).width();
			w =w +20;
			$('.magic-line').css('width',w);
			var kttotal=0;
			for(i=1;i<ac;i++)
			{
				var vl=$('.new-top-catelory-li-'+i).width();
				kttotal=kttotal+vl+20;

			}
			$('.magic-line').css({"-webkit-transform":"translate("+kttotal+"px,0)"});
		})
	})
	$(document).ready(function() {
		  $("#owl-demo").owlCarousel({
		      navigation : true, // Show next and prev buttons
		      items:1,
		      singleItem:true
		 
		      // "singleItem:true" is a shortcut for:
		      // items : 1, 
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false
		 
		  });
		 
		// new WOW().init();
	});

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
	  	setTimeout(load, 3000);
	    
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
	    	$('.grid').append(el).masonry('appended',el,true);
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

var a = parseInt($('.new-bot-right').offset().top);
  	var left =parseInt($('.new-bot-left').offset().left);
  	var widthleft =parseInt($('.new-bot-left').width());
  	var width=$('.new-bot-right').width();
  	left= left+ widthleft + 30;
  	$('.new-bot-right').css("left",left);
  	$('.new-bot-right').css("width",width);
  	var scroll  =$(window).scrollTop();
  	if(scroll >= a)
   	{
  		$('.new-bot-right').addClass("fixed-right");	
  	}
  	else
  	{
  	 		$('.new-bot-right').removeClass("fixed-right");
  	}
 	$(window).scroll(function(){
 		var scroll  =$(window).scrollTop();
 		console.log(scroll);
 		if(scroll >= a)
   		{

  			$('.new-bot-right').addClass("fixed-right");
  	 		
  	 	}
  	 	else
  		{
  	 		$('.new-bot-right').removeClass("fixed-right");

  	 	}
 	})
  	 $(window).on("resize",function(){
  	 		$('.new-bot-right').removeClass("fixed-right");
		  	var a = parseInt($('.new-bot-right').offset().top);
		  	var left =parseInt($('.new-bot-left').offset().left);
		  	var widthleft =parseInt($('.new-bot-left').width());
		  	var width=$('.new-bot-right').width();
		  	left= left+ widthleft + 30;
		  	$('.new-bot-right').css("left",left);
		  	$('.new-bot-right').css("width",width);
		  	var scroll  =$(window).scrollTop();
		  	if(scroll >= a)
		   	{
		  		$('.new-bot-right').addClass("fixed-right");	
		  	}
		  	else
		  	{
		  	 		$('.new-bot-right').removeClass("fixed-right");
		  	}
		 	$(window).scroll(function(){
		 		var scroll  =$(window).scrollTop();
		 		if(scroll >= a)
		   		{
		  			$('.new-bot-right').addClass("fixed-right");
		  	 		
		  	 	}
		  	 	else
		  		{
		  	 		$('.new-bot-right').removeClass("fixed-right");
		  	 		
		  	 	}
		 	})
  	 });