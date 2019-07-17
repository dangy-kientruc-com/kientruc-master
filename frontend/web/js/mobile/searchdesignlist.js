$(document).ready(function(){
		$('.search-top-right').click(function(){
			$('.background').css("display","block");
			$('.filter').addClass('active');
		})
		$('.background').click(function(){
			
			$('.filter').removeClass('active');
			$('.background').css("display","none");
		})
		$('.filter-close').click(function(){
			$('.filter').removeClass('active');
			$('.background').css("display","none");
		})
	})