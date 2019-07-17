$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();  

	});
	var section=0;
	  $.each($('.detail-content h2, .detail-content h1, .detail-content h3, .detail-content h4'),function(){
	  	var a = $(this).html();
	  	$(this).attr("id","section" + section);
	  	
	  	$('.detail-vỉewfast-ul ul').append("<li><a href='#section"+section+"'>"+a+"</a></li>");
	  	section=section+1;
	 })
	  $('.detail-viewfast').click(function(){
	  	if($(this).hasClass('active'))
	  	{
	  		$(this).removeClass('active');
	  		$(this).find('.detail-vỉewfast-ul').slideToggle("fast",function(){});
	  	}
	  	else
	  	{
	  		$(this).find('.detail-vỉewfast-ul').slideToggle("fast",function(){});
	  		$(this).addClass('active');
	  	}
	  })

  	$('.hrefimg').append("<div class='img-xemthem'><a href=''>Xem thêm</a></div>");
  	var kt=$('.hrefimg img').width();
  	$('.href-info').css("width",kt);
  	// var a = parseInt($('.new-bot-right').offset().top);
  	// var left = parseInt($('.new-bot-right').offset().left);
  	// var width=$('.new-bot-right').width();
  	// $(window).scroll(function(){
  	// 	var scroll =$(window).scrollTop();
  	// 	if(scroll >= a)
  	// 	{
  	// 		$('.new-bot-right').addClass("fixed-right");
  	// 		$('.new-bot-right').css("left",left);
  	// 		$('.new-bot-right').css("width",width);
  	// 	}
  	// 	else
  	// 	{
  	// 		$('.new-bot-right').removeClass("fixed-right");
  	// 		$('.new-bot-right').css("left",left);
  	// 		$('.new-bot-right').css("width",width);
  	// 	}
  	// })
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
  	// binh luan top
  	$('.comment-top .comment-text').keydown(function(e){
  		var text = $(this).html();

  		if(e.keyCode == 13  && e.shiftKey)
 		{
 			
 		}	
  		else if(e.keyCode == 13)
 		{
 			$(".comment-text").html("");
 			if(text == "")
 			{

 			}
 			else 
 			{
 				$('.comment-bot').append("<div class='comment-bot1'><div class='comment-bot1-img'><img src='images/avatar.png'></div><div class='comment-bot1-right'><div class='comment-bot1-question'><div class='comment-bot1-name'>Tuấn Linh</div><div class='comment-bot1-text'>"
 					+text+
 					"</div></div><div class='comment-bot1-choise'><div>Cảm ơn</div><div> Trả lời</div><div>0 phút trước</div></div></div><div class='clear'></div></div>");
 			}
 			return false;
 		}
 		if($(this).html()!= "")
 		{
 			$('.comment-top .comment-placeholder').html("");
 		}
 		else
 		{
 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
 		}
  	})
 	$('.comment-top .comment-text').keyup(function(e){
 		$('.comment-top .comment-placeholder').html("");

 		if($(this).html()!= "")
 		{
 			$('.comment-top .comment-placeholder').html("");
 		}
 		else
 		{
 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
 		}
 	})
 	// tra loi binh luan
 	$('.comment-bot-form .comment-text').keydown(function(e){
 		var text = $(this).html();
  		if(e.keyCode == 13  && e.shiftKey)
 		{
 			
 		}	
  		else if(e.keyCode == 13)
 		{
 			if(text == "")
 			{
 				alert("Vui lòng nhập bình luận");
 			}
 			else 
 			{
 				$('.comment-bot-form').before("<div class='comment-bot2'><div class='comment-bot2-img'><img src='images/avatar.png'></div><div class='comment-bot2-right'><div class='comment-bot2-question'><div class='comment-bot2-name'>Tuấn Linh <span>Kiến trúc sư</span></div><div class='comment-bot2-text'>"
 					+text+
 					"</div><div class='comment-totaltks'><div><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 15 14'><path d='M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z' ></path> </svg></div>99</div></div><div class='clear'></div><div class='comment-bot2-choise'><div class='active'>Cảm ơn</div><div> Trả lời</div><div>0 phút trước</div></div></div><div class='clear'></div></div>");
 			}
 			$(".comment-text").html("");
 			return false;
 		}
 		if($(this).html()!= "")
 		{
 			$('.comment-bot-form .comment-placeholder').html("");
 		}
 		else
 		{
 			$('.comment-bot-form .comment-placeholder').html("Bình luận tại đây");
 		}
  	})
 	$('.comment-bot-form .comment-text').keyup(function(e){
 		$('.comment-bot-form .comment-placeholder').html("");

 		if($(this).html()!= "")
 		{
 			$('.comment-bot-form .comment-placeholder').html("");
 		}
 		else
 		{
 			$('.comment-bot-form .comment-placeholder').html("Bình luận tại đây");
 		}
 	})
 	// setInterval(function(){
 	// 	$.get("/kientruc/load-new-detail.html",{id:0},function(data){
 	// 		$('.comment').html(data);
 	// 		$('.comment-top .comment-text').keydown(function(e){
	 //  		var text = $(this).html();

	 //  		if(e.keyCode == 13  && e.shiftKey)
	 // 		{
	 			
	 // 		}	
	 //  		else if(e.keyCode == 13)
	 // 		{
	 // 			$(".comment-text").html("");
	 // 			if(text == "")
	 // 			{

	 // 			}
	 // 			else 
	 // 			{
	 // 				$('.comment-bot').append("<div class='comment-bot1'><div class='comment-bot1-img'><img src='images/avatar.png'></div><div class='comment-bot1-right'><div class='comment-bot1-question'><div class='comment-bot1-name'>Tuấn Linh</div><div class='comment-bot1-text'>"
	 // 					+text+
	 // 					"</div></div><div class='comment-bot1-choise'><div>Cảm ơn</div><div> Trả lời</div><div>0 phút trước</div></div></div><div class='clear'></div></div>");
	 // 			}
	 // 			return false;
	 // 		}
	 // 		if($(this).html()!= "")
	 // 		{
	 // 			$('.comment-top .comment-placeholder').html("");
	 // 		}
	 // 		else
	 // 		{
	 // 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
	 // 		}
	 //  	})
	 // 	$('.comment-top .comment-text').keyup(function(e){
	 // 		$('.comment-top .comment-placeholder').html("");

	 // 		if($(this).html()!= "")
	 // 		{
	 // 			$('.comment-top .comment-placeholder').html("");
	 // 		}
	 // 		else
	 // 		{
	 // 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
	 // 		}
	 // 	})
	 // 	// tra loi binh luan
	 // 	$('.comment-bot-form .comment-text').keydown(function(e){
	 // 		var text = $(this).html();
	 //  		if(e.keyCode == 13  && e.shiftKey)
	 // 		{
	 			
	 // 		}	
	 //  		else if(e.keyCode == 13)
	 // 		{
	 // 			if(text == "")
	 // 			{
	 // 				alert("Vui lòng nhập bình luận");
	 // 			}
	 // 			else 
	 // 			{
	 // 				$('.comment-bot-form').before("<div class='comment-bot2'><div class='comment-bot2-img'><img src='images/avatar.png'></div><div class='comment-bot2-right'><div class='comment-bot2-question'><div class='comment-bot2-name'>Tuấn Linh <span>Kiến trúc sư</span></div><div class='comment-bot2-text'>"
	 // 					+text+
	 // 					"</div><div class='comment-totaltks'><div><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 15 14'><path d='M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z' ></path> </svg></div>99</div></div><div class='clear'></div><div class='comment-bot2-choise'><div class='active'>Cảm ơn</div><div> Trả lời</div><div>0 phút trước</div></div></div><div class='clear'></div></div>");
	 // 			}
	 // 			$(".comment-text").html("");
	 // 			return false;
	 // 		}
	 // 		if($(this).html()!= "")
	 // 		{
	 // 			$('.comment-bot-form .comment-placeholder').html("");
	 // 		}
	 // 		else
	 // 		{
	 // 			$('.comment-bot-form .comment-placeholder').html("Bình luận tại đây");
	 // 		}
	 //  	})
	 // 	$('.comment-bot-form .comment-text').keyup(function(e){
	 // 		$('.comment-bot-form .comment-placeholder').html("");

	 // 		if($(this).html()!= "")
	 // 		{
	 // 			$('.comment-bot-form .comment-placeholder').html("");
	 // 		}
	 // 		else
	 // 		{
	 // 			$('.comment-bot-form .comment-placeholder').html("Bình luận tại đây");
	 // 		}
	 // 	})
	 // 		});
 	// },10000)


 	$('#news-right-project').owlCarousel({
 		loop:true,
        dots:true,
        navigation : false,
        items:2,
        margin:20,
        nav:false,
        autoplay:500,
        dotsContainer:'.owl-dots-top',
 	})