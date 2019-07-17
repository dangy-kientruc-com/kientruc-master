if($(window).width()>1300)
	{
		$('.contact-phone').mouseover(function(){
			$('.contact-message').addClass('scale08');
		})
		$('.contact-phone').mouseout(function(){
			$('.contact-message').removeClass('scale08');
		})
	}
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
		
		  $("#owl").owlCarousel({
		      navigation : true, // Show next and prev buttons
		      items:1,
		      singleItem:true,
		      dotsContainer:'.profileviewer-right-top-dots',
		  });
		// new WOW().init();
	});
	/*tooltip*/
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();  

	});
	/*click tab*/
	$(document).ready(function(){
		$('.profileviewer-right-bot-tab-li').click(function(){
			$('.profileviewer-right-bot-tab-li').removeClass('active');
			$(this).addClass('active');
			var active=$(this).attr('tab');
			$('.profileviewer-show-tab').removeClass('active');
			$('.profileviewer-show-tab'+active).addClass('active');
		})
	})
	/*loadmore*/
	$(document).ready(function(){
		$(".js-more-project-button").click(function(){
	  	
		  	$('.kt-icon').addClass('rote2s');
		  	setTimeout(function(){
		  		$('.kt-icon').removeClass('rote2s');
		  	}, 3000);
		  	setTimeout(load, 3000);
		});
		function load(tab=1)
		{
			var tab =$('.profileviewer-show-tab.active').attr('tab');
			if(tab==1)
			{
				$.get('/kientruc/loadsearch.html',function(data){
					 var el = jQuery(data);
			    	$('.profileviewer-show-tab1').append(el);
			    });
			}
			else if(tab==2)
			{
				$.get('/kientruc/loadsearch2.html',function(data){
					 var el = jQuery(data);
			    	$('.profileviewer-show-tab2').append(el);
			    });
			}
		   
			// new WOW().init();
		}
	})
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
	// Bo Loc
	// Loc loai nha
	$(document).ready(function(){
		$('.select-type').change(function(){
			var a =$(this).val();
			if(a!=0)
			{
				$.each($('.profileviewer-show-tab1-li'),function(){
					var ad=$(this).find('.show-address').html();
					if(a == ad)
					{
						$(this).removeClass('type-none');
					}
					else
					{
						$(this).addClass('type-none');
					}
				});
				$.each($('.profileviewer-show-tab2-li'),function(){
					var ad=$(this).find('.show-address').html();
					if(a == ad)
					{
						$(this).removeClass('type-none');
					}
					else
					{
						$(this).addClass('type-none');
					}
				})
			}
			else
			{
				$('.profileviewer-show-tab1-li').removeClass('type-none');
				$('.profileviewer-show-tab2-li').removeClass('type-none');
			}
		});
		$('.select-new').change(function(){
			var a = $(this).val();
			var arr = [];
			var arr2=[];
			$.each($('.profileviewer-show-tab2-li'),function(){

					if($(this).hasClass('type-none'))
					{
						var data = {
							html:$(this).html(),
							number:$(this).attr('stt'),
							class:'type-none',
						}
					}
					else
					{
						var data = {
							html:$(this).html(),
							number:$(this).attr('stt'),
							class:'',
						}
					}
					arr2.push(data);
			})
			$.each($('.profileviewer-show-tab1-li'),function(){

					if($(this).hasClass('type-none'))
					{
						var data = {
							html:$(this).html(),
							number:$(this).attr('stt'),
							class:'type-none',
						}
					}
					else
					{
						var data = {
							html:$(this).html(),
							number:$(this).attr('stt'),
							class:'',
						}
					}
					arr.push(data);
				})
			if(a ==1)
			{
				arr.sort(function(a,b){
				 	return b.number - a.number;
				});
				arr2.sort(function(a,b){
				 	return b.number - a.number;
				});
			}
			else
			{
				arr.sort(function(a,b){
				 	return a.number - b.number;
				});
				arr2.sort(function(a,b){
				 	return a.number - b.number;
				});
			}
			$('.profileviewer-show-tab1 .more').html('');
			
			for(i=0 ;i<arr.length;i++)
			{
				$('.profileviewer-show-tab1 .more').append("<div class='profileviewer-show-tab1-li "+ arr[i].class+"' stt='"+arr[i].number+"'>"+arr[i].html+"</div>");
			}
			$('.profileviewer-show-tab2-in .more').html('');
			for(i=0 ;i<arr2.length;i++)
			{
				$('.profileviewer-show-tab2-in .more').append("<div class='profileviewer-show-tab2-li "+ arr2[i].class+"' stt='"+arr2[i].number+"'>"+arr2[i].html+"</div>");
			}
		})
	})