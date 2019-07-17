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
            $(this).addClass('gt-50 maufrom75');
        }else if (percent >= 50) {
            $(this).addClass('gt-50 maufrom50');
           
        }else{
            $(this).addClass('maufrom25');
          
        }

        $(this).find('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
        $(this).find('.ppc-percents span').html(number + json.txt);
    });
}

percentJs({txt: '%', best: 100});
	$(document).ready(function() {
		  $("#owl-data").owlCarousel({
		      navigation : false,
		      loop:true, // Show next and prev buttons
		      items:3,
		      singleItem:false,
		      dots:true,
		      margin:8,
		      dotsContainer:'.profileviewer-left-data-dots',
		  });
		
		// new WOW().init();
	});
	/*tooltip*/
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();  

	});
	$(document).ready(function(){
		var mb=$(window).width();
		if(mb<=900)
		{
			$('#menu').addClass('owl-carousel');
			$('#menu').addClass(' owl-theme');
			if(mb<=400)
			{$('#menu').append("<div class='profileviewer-right-menu-li'></div>")}
			$('.profileviewer-right-menu-li').addClass('item');
			$('#menu').owlCarousel({
				 items:3,
				 dots:false,
			});
			$('.owl-item').css("width","auto");
		}
		else if(mb<=1100)
		{

			$('#menu').addClass('owl-carousel');
			$('#menu').addClass(' owl-theme');
			$('.profileviewer-right-menu-li').addClass('item');
			$('#menu').owlCarousel({
				 items:4,
				 dots:false,
			});
			$('.owl-item').css("width","auto");
		}
	})