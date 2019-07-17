<?php echo \frontend\widgets\headerWidget::widget() ?>
<div class="news-main">
	<div class="news-main-top">
		<div class="top-text">
			<div class="news-main-top_title">Tin mới</div>
			<div class="news-main-top_top10"><?php echo $news['data']['tophot'][0]['name']; ?></div>
		</div>
		<div class="news-main-top_info">
			<div class="news-main-top_info-li">
				<a href="<?php echo $news['data']['tophot'][0]['category']['link']; ?>/<?php echo $news['data']['tophot'][0]['link']; ?>-&<?php echo $news['data']['tophot'][0]['id_post']; ?>.html">
					<div><img src="https://www.kientruc.com/uploads/article/430x280<?php echo $news['data']['tophot'][0]['avatar']['name']; ?>"></div>
					<div class="news-main-top_info-li-tt">
						<div class="news-main-top_info-li-tt_block">
							<?php echo $news['data']['tophot'][0]['category']['name']; ?>
						</div>
						<div class="clear news-main-top_info-li-tt_title">
							<?php echo $news['data']['tophot'][0]['name']; ?>
						</div>
						<div class="news-block1-left-from">
							<div class="clear"></div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="news-main-bot">
		<div class="news-main-left">
			<?php foreach($news['data']['category'] as $key => $value) {
				if($key<=1) {
			  ?>
			<div class="news-main-block1">
				<div class="news-block1-top">
					<div class="news-block1-title">
						<?php echo $value['parent']['name']; ?>
					</div>
					<div class="news-block1-category">
						<div class="news-viewall"><a href="<?php echo $value['parent']['link']; ?>-C<?php echo $value['parent']['id_category'];  ?>">Xem tất cả</a></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="news-block1-left">
					<a href="<?php echo $value['article'][0]['category']['link']; ?>/<?php echo $value['article'][0]['link']; ?>-&<?php echo $value['article'][0]['id_post']; ?>.html">
						<div><img src="https://kientruc.com/uploads/article/430x280<?php echo $value['article'][0]['avatar']['name']; ?>"></div>
						<div class="news-block1-left-title">
							<?php echo $value['article'][0]['name']; ?>
						</div>
						<div class="news-block1-left-from">
							<div class="news-block1-left-folder">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
									<image xlink:href="images/icon-clock-2.svg" width="12"/>  
								</svg>
								<?php echo $value['article'][0]['category']['name']; ?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="news-block1-left-tt">
							<?php echo $value['article'][0]['info']; ?>
						</div>
					</a>
				</div>
				<div class="news-block1-right">
					<?php 
					foreach($value['article'] as $key2 =>$value2) {
						if( $key2>=1 && $key2 <=3)
						{
					 ?>
					
					<div class="news-block1-right-li">
						<a href="<?php echo $value2['category']['link']; ?>/<?php echo $value2['link']; ?>-&<?php echo $value2['id_post']; ?>.html">
							<div class="news-block1-right-li-left">
								<img src="https://kientruc.com/uploads/article/430x280<?php echo $value2['avatar']['name']; ?>">
							</div>
							<div class="news-block1-right-li-right">
								<div class="news-block1-right-li-title"><?php echo $value2['name']; ?></div>
								<div class="news-block1-right-li-date">
									<div class="news-block1-left-date">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
										<?php echo $value2['category']['name']; ?>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</a>
					</div>
					<?php } }?>
				</div>
				<div class="clear"></div>
			</div>
			<?php } }?>
			<!-- <div class="news-main-block2">
				<div class="news-block2-top">
					<div class="news-block2-title">
						Phong thủy
					</div>
					<div class="news-block2-category">
						<div class="news-viewall"><a href="">Xem tất cả</a></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="news-block2-bot">
					<div class="news-block2-bot-top">
						<div class="news-block2-bot-top-li">
							<a href="">
								<div class="news-block2-bot-top-li-img">
									<img src="images/block2-1.png">
								</div>
								<div class="news-block2-bot-top-li-title">
									Cách trang trí phòng khách hợp phong thuỷ với người Việt
								</div>
								<div class="news-block1-left-from">
									<div class="news-block1-left-date">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
											21/1/2019
									</div>
									<div class="news-block1-left-folder">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
											Nội thất
									</div>
									<div class="clear"></div>
								</div>
								<div class="news-block2-bot-top-li-tt">
									Phòng khách là căn phòng được coi là giữ lửa hạnh phúc và yêu thương cho mỗi gia đình, vì vậy ngoài việc quan tâm tới một bản thiết kế thật đẹp..
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="news-block2-bot-bot">
						<div class="news-block2-bot-bot-li">
							<a href="">
								<div class="news-block2-bot-bot-li-left">
									<img src="images/block2-1.png">
								</div>
								<div class="news-block2-bot-bot-li-right">
									<div class="news-block2-bot-bot-li-title">10 mẫu thiết kế nội thất hoàn hảo với phông màu xanh</div>
									<div class="news-block1-left-date">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
											21/1/2019
									</div>
								</div>
								<div class="clear"></div>
							</a>
						</div>
						<div class="news-block2-bot-bot-li">
							<a href="">
								<div class="news-block2-bot-bot-li-left">
									<img src="images/block2-1.png">
								</div>
								<div class="news-block2-bot-bot-li-right">
									<div class="news-block2-bot-bot-li-title">10 mẫu thiết kế nội thất hoàn hảo với phông màu xanh</div>
									<div class="news-block1-left-date">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
											21/1/2019
									</div>
								</div>
								<div class="clear"></div>
							</a>
						</div>
						<div class="news-block2-bot-bot-li">
							<a href="">
								<div class="news-block2-bot-bot-li-left">
									<img src="images/block2-1.png">
								</div>
								<div class="news-block2-bot-bot-li-right">
									<div class="news-block2-bot-bot-li-title">10 mẫu thiết kế nội thất hoàn hảo với phông màu xanh</div>
									<div class="news-block1-left-date">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
											21/1/2019
									</div>
								</div>
								<div class="clear"></div>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div> -->
		</div>
		<div class="clear"></div>
	</div>
</div>


<?php echo \frontend\widgets\footerWidget::widget() ?>