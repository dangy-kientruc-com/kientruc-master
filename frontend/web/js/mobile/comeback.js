$('.comeback-step1-choise-input').click(function(){
		if($(this).hasClass('active'))
		{
			//$(this).removeClass('active');
		}
		else
		{
			$('.comeback-step1-choise-input').removeClass('active');	
			$(this).addClass('active');
		}
	})
	$('.comeback-step-li-button').click(function(){
		var step=$(this).attr("step");
		if(step == 3 )
		{	
			var name = $('.inputfullname').val();
			if(name)
			{

			}
			else
			{
				alert('Nhập tên của bạn');
				return false;
			}
			var choise =$("input[type='checkbox']:checked").length;
			if(choise < 3)
			{
				alert('Bạn vui long chọn ít nhất 3 lĩnh vực mà bạn quan tâm');
				return false;
			}
			var address = $(".step2-select").val();
			if(address==0)
			{
				alert('Bạn vui lòng chọn địa điểm');
				return false;
			}
			var arr = [];
			$("input[type='checkbox']:checked").each(function(){
				arr.push( $(this).val());
			});
			$.get('getstep3.php',{tag:arr,tp:address},function(data){
				console.log(data);
			})
			
		}
		$('.head-step-li-'+step).addClass('active');
		$('.comeback-step-li.active').removeClass('active');
		$('.comeback-step'+step).addClass('active');
	})
	$('.search-tab-1-li-right a').click(function(e){
		return false;
	})



	$('.list-choise-li').click(function(){
		if($(this).hasClass('active')==true)
		{
			$(this).removeClass('active');
		}
		else
		{
			
			$(this).addClass('active');
		}
	})




	//step3
	$(".owl-carousel").owlCarousel({
		      navigation : false,
		      loop:true, // Show next and prev buttons
		      items:5,
		      singleItem:false,
		      dots:false,
		      margin:20
		  });