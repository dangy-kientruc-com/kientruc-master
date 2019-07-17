if(localStorage.getItem('tab'))
	{
		var tab= localStorage.getItem('tab');
		$('.search-choise-tab-li').removeClass('active');
		$(".search-choise-tab-li:nth-child("+tab+")").addClass('active');
		$(".search-bot-tab-"+tab+"").addClass('active');
	}
	else
	{
		$(".search-choise-tab-li:nth-child(1)").addClass('active');
		$(".search-bot-tab-1").addClass('active');
	}
	$('#w1').select2({
	});


	$('#w2').select2();
	$('#w3').select2();
	$('#w4').select2();
	$(document).ready(function() {
		  $(".owl-carousel").owlCarousel({
		      navigation : false,
		      loop:true, // Show next and prev buttons
		      items:5,
		      singleItem:false,
		      dots:false,
		      margin:20
		  });
		 
		// new WOW().init();
	});
	$(document).ready(function(){
		/*seart nang cao*/
		$('.submit-top-form-input button').click(function(event){
			event.preventDefault();
		})
		$('.search-nc').click(function(){
			if($('.form-search-nc').hasClass('active'))
			{
				$('.form-search-nc').removeClass('active');
				$('.search-nc').html("Tìm kiếm nâng cao");
			}
			else 
			{
				$('.form-search-nc').addClass('active');
				$('.search-nc').html("<i class='fa fa-times' style='font-size:18px;margin-right:5px'></i>Đóng tìm kiếm nâng cao");
			}
		})
		/*bat tab*/
		$('.search-choise-tab-li').click(function(){
			$('.search-choise-tab-li').removeClass('active');
			var tab =$(this).attr('tab');
			localStorage.setItem('tab',tab);
			$(this).addClass('active');
			$('.search-bot-tab.active').removeClass('active');
			$('.search-bot-tab-'+tab).addClass('active');
		})
	  $(".js-more-project-button").click(function(){
	  	
	  	$('.kt-icon').addClass('rote2s');
	  	setTimeout(function(){
	  		$('.kt-icon').removeClass('rote2s');
	  	}, 3000);
	  	setTimeout(load, 3000);
	  });
	});
	function load(tab=1)
	{
		var tab =$('.search-bot-tab.active').attr('tab');
		if(tab==1)
		{
			$.get('/kientruc/loadsearch.html',function(data){
				 var el = jQuery(data);
		    	$('.search-bot-tab-1 .more').append(el);
		    	$(".owl-carousel").owlCarousel({
		      navigation : true,
		      loop:false, // Show next and prev buttons
		      items:5,
		      singleItem:false,
		      dots:false,
		      margin:20
		  });
		    });
		}
		else if(tab==2)
		{
			$.get('/kientruc/loadsearch2.html',function(data){
				 var el = jQuery(data);
		    	$('.search-bot-tab-2 .more').append(el);
		    });
		}
	   
		// new WOW().init();
	}
	$(document).ready(function(){
		$('.select-address').change(function(){
		var a=$('.select-address').val();
		var tab =$('.search-choise-tab-li.active').attr('tab');
		var txt=$('.search-bot-tab-1').find('.more' + ' > .search-bot-tab-1-li');
		var txt2=$('.search-bot-tab-2').find('.more' + ' > .search-bot-tab-2-li');
		if(a!=0)
		{
			// for(i=1;i<=txt.length;i++)
			// {
			// 	var add =$(".search-bot-tab-1-li:nth-child("+i+") .search-tab-1-li-address span").html();
			// 	 if(a!=add)
			// 	 {
			// 	 	$(".search-bot-tab-1-li:nth-child("+i+")").addClass("none");
			// 	 }
			// 	 else
			// 	 {
			// 	 	$(".search-bot-tab-1-li:nth-child("+i+")").removeClass("none");
			// 	 }
			// }
			$.each($('.search-bot-tab-1-li'),function(){
					var exp = $(this).find('.search-tab-1-li-address span').html();
					if(a != exp)
					{
						$(this).addClass("none");
					}
					else
					{
						$(this).removeClass("none");
					}
				});
			// for(i=1;i<=txt2.length;i++)
			// {
			// 	var add =$(".search-bot-tab-2-li:nth-child("+i+") .search-bot-tab-2-li-address span").html();
			// 	 if(a!=add)
			// 	 {
			// 	 	$(".search-bot-tab-2-li:nth-child("+i+")").addClass("tab2-none");
			// 	 }
			// 	 else
			// 	 {
			// 	 	$(".search-bot-tab-2-li:nth-child("+i+")").removeClass("tab2-none");
			// 	 }
			// }
			$.each($('.search-bot-tab-2-li'),function(){
					var exp = $(this).find('.search-bot-tab-2-li-address span').html();
					if(a != exp)
					{
						$(this).addClass("tab-exp-none");
					}
					else
					{
						$(this).removeClass("tab-exp-none");
					}
				})
		}
		else
		{
			$('.search-bot-tab-2-li').removeClass('tab2-none');
			$('.search-bot-tab-1-li').removeClass("none");
		}
		
	})

	//Loc EXP
	$('.select-exp').change(function(){
			 var a=$('.select-exp').val();
			var txt=$('.search-bot-tab-1').find('.more' + ' > .search-bot-tab-1-li');
			var txt2=$('.search-bot-tab-2').find('.more' + ' > .search-bot-tab-2-li');
			if(a!=0)
			{
				$.each($('.search-bot-tab-1-li'),function(){
					var exp = $(this).find('.search-tab-1-li-exp').attr('val-exp');
					if(a != exp)
					{
						$(this).addClass("tab-exp-none");
					}
					else
					{
						$(this).removeClass("tab-exp-none");
					}
				});
				$.each($('.search-bot-tab-2-li'),function(){
					var exp = $(this).find('.search-bot-tab-2-li-exp').attr('val-exp');
					if(a != exp)
					{
						$(this).addClass("tab-exp-none");
					}
					else
					{
						$(this).removeClass("tab-exp-none");
					}
				})
			}
			else
			{
				$('.search-bot-tab-2-li').removeClass('tab-exp-none');
				$('.search-bot-tab-1-li').removeClass("tab-exp-none");
			}
		})
	//Sort
		$('.select-project').change(function(){
			var arr = [];

			var a=$('.select-project').val();
			var txt=$('.search-bot-tab-1').find(".more" + " > .search-bot-tab-1-li");
			$.each($('.search-bot-tab-1-li'),function(){
				if($(this).hasClass('none') && $(this).hasClass('tab-exp-none') )
					{
						var data= {
						html:$(this).html(),
						number:$(this).find ('.number-project').html(),
						class1:'none tab-exp-none',
						};
					}
					else if( $(this).hasClass('none'))
					{
						var data= {
						html:$(this).html(),
						number:$(this).find ('.number-project').html(),
						class1:'none',
						};
					}
					else if( $(this).hasClass('tab-exp-none'))
					{
						var data= {
						html:$(this).html(),
						number:$(this).find ('.number-project').html(),
						class1:'tab-exp-none',
						};
					}
					else
					{
						 var data= {
						 	html:$(this).html(),
						 	number:$(this).find ('.number-project').html(),
						 	class1:''
						 };
					}
					arr.push(data);
			})
			if(a==1)
			{
				
				arr.sort(function(a,b){
				 	return b.number - a.number;
				});
			}
			else
			{
			 	
				arr.sort(function(a,b){
				 	return a.number - b.number;
				});
			}
			
			$('.search-bot-tab-1 .more').html('');
			for(i=0 ;i<arr.length;i++)
			{
				$('.search-bot-tab-1 .more').append("<div class='search-bot-tab-1-li "+ arr[i].class1+"'>"+arr[i].html)+"</div>";
			}			
		})
	})