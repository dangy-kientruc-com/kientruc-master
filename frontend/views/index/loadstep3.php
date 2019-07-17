<?php 

	$a=$_GET['tp'];
	$b=$_GET['tag'];
	$tag="";
	for($i=0;$i < count($b) ;$i++)
	{
		$tag = $tag."&tag=".$b[$i];
	}
	$step3=file_get_contents('http://ktdemov1.kientruc.com/api/v1/pages/step-three?tp=79'.$tag);
	$step3=json_decode($step3,JSON_UNESCAPED_UNICODE);
?>
<?php foreach ($step3['data'] as $key => $value) {
	# code... 
	 ?>
<div class="search-bot-tab-1-li">
						<div class="search-tab-1-li-left">
							<div class="search-tab-1-li-pro">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
										<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
									</svg>
							</div>
							<div class="search-tab-1-li-exp" style="display: none" val-exp ='1'>
								
							</div>
							<div class="search-tab-1-li-img">
								<img src="<?php echo $value['avatar_link']; ?>">
							</div>
							<div class="search-tab-1-li-name">
								<?php echo $value['full_name']; ?>
							</div>
							<div class="search-tab-1-li-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="search-tab-1-li-contact">
								<div class="search-tab-1-li-contact-li">
									<i class="material-icons">local_phone</i>
								</div>
								<div class="search-tab-1-li-contact-li">
										<i class="material-icons">mail</i>
								</div>
								<div class="search-tab-1-li-contact-li">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-alt-dots" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-comment-alt-dots fa-w-16"><path fill="currentColor" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2 15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zM128 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg>
								</div>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
								<input type="checkbox" name="quantam[]"  value="<?php echo $value['id_customer']; ?>">
							</div>
						</div>
						<div class="search-tab-1-li-right">
							<div class="search-tab-1-right-top">
								<div class="search-tab-1-right-number">
									<div class="search-tab-1-right-number-li"><i class="fa fa-university"></i><span class="number-project">87</span> dự án</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-male"></i>213 người theo dõi</div>

								</div>
								<div class="clear"></div>
							</div>
							<div class="search-tab-1-right-bot">
								<div class="serch-tab-1-right-bot-c owl-carousel owl-theme" id="owl-demo">
									<?php foreach ($value['project'] as $key2 => $value2) {
										# code...
									 ?>
									<div class="search-tab-1-right-bot-li item" style="background: url(https://www.kientruc.com/uploads/images/<?php echo $value['folder_upload']; ?>/images_rz/430x280<?php echo $value2['avatar']['name']; ?>) no-repeat; background-size:<?php if($value2['avatar']['compare'] ==1) echo "cover"; else echo "100%"; ?> ;">
										<a href="">
											<img src="https://www.kientruc.com/uploads/images/<?php echo $value['folder_upload']; ?>/images_rz/430x280<?php echo $value2['avatar']['name']; ?>" style="opacity:0 ">
											
										</a>
									</div>
									<?php } ?>
								</div>

							</div>
						</div>
					</div>
<?php  }?>

<script>
		$(".owl-carousel").owlCarousel({
		      navigation : false,
		      loop:true, // Show next and prev buttons
		      items:5,
		      singleItem:false,
		      dots:false,
		      margin:20
		  });
		$(' .search-tab-1-li-care button').click(function(e){
			e.preventDefault();
		})
		var a =0;
		$('.search-tab-1-li-care').click(function(){
			if($(this).hasClass('active'))
			{
				$(this).removeClass('active');
				a=a-1;
			}
			else
			{
				a=a+1;
				$(this).addClass('active');
			}
			console.log(a);
			if(a>=3)
			{
				$('.button button').removeAttr('disabled');
				$('.button button').addClass('success');
			}
			else
			{
				$('.button button').attr('disabled','disabled');
				$('.button button').removeClass('success');
			}
		})

</script>