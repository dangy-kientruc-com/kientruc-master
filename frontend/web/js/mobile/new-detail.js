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
	$('.comment-top .comment-text').keydown(function(e){
			$('.comment-top .comment-placeholder').html("");
	  		var text = $(this).html();
	 		if($(this).html()!= "")
	 		{
	 			
	 			$('.comment-form-send').addClass("active");
	 		}
	 		else
	 		{
	 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
	 			$('.comment-form-send').removeClass("active");
	 		}

	  	})
	 	$('.comment-top .comment-text').keyup(function(e){
	 		$('.comment-top .comment-placeholder').html("");

	 		if($(this).html()!= "")
	 		{
	 			$('.comment-top .comment-placeholder').html("");
	 			$('.comment-form-send').addClass("active");
	 		}
	 		else
	 		{
	 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
	 			$('.comment-form-send').removeClass("active");
	 		}
	 	})
	 	$('.comment-form-send').click(function(){
	 		var text = $(".comment-text").html();
	 		text = text.replace("<br><br>","<br>");
	 		text = text.replace("<div><br></div><div><br></div><div><br></div>","");
	 		text = text.replace("<div><br></div><div><br></div>","");
	 		console.log(text);
	 		if(text != "")
	 		{
	 			

	 			
	 			$('.comment-top').before("<div class='comment-bot1'><div class='comment-bot1-img'><img src='images/avatar.png'></div><div class='comment-bot1-right'><div class='comment-bot1-question'><div class='comment-bot1-name'>Tuấn Linh</div><div class='comment-bot1-text'>"+text+"</div></div><div class='comment-bot1-choise'><div>Cảm ơn</div><div> Trả lời</div><div>1 ngày trước</div></div></div><div class='clear'></div></div>");
	 			$('.comment-top .comment-placeholder').html("Bình luận tại đây");
	 			$(".comment-text").html("");
	 			$(this).removeClass('active');
	 		}
	 	})



	 	calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);
   		$(window).on('resize', function () {
        calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);

    });
