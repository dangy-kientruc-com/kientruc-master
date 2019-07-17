<?php echo \frontend\widgets\headerWidget::widget() ?>
<div class="news-main">
	<div class="news-main-top">
		<div class="news-main-top-c">
			<div class="news-main-top_title">Tin mới</div>
			<div class="news-main-top_top10">
				<ul>
					<?php
					 foreach ($news['data']['tophot'] as $key => $value) {
					?>
					<li><?php echo $value['name']; ?></li>
				<?php } ?>
				</ul>
			</div>
			<div class="news-main-top_time">Đăng ngày 20/2/2019 trong chuyên mục Thiết kế nội thất</div>
			<div class="news-main-top-next-back">
				<div class="news-main-top-back"></div>
				<div class="news-main-top-next"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="news-main-top_info">
			<?php foreach ($news['data']['tophot'] as $key => $value) {
				# code...
			 ?>
			<div class="news-main-top_info-li">
				<a href="<?php echo $value['category']['link']; ?>/<?php echo $value['link']; ?>-&<?php echo $value['id_post']; ?>.html">
					<div><img src="https://www.kientruc.com/uploads/article/430x280<?php echo $value['avatar']['name']; ?>"></div>
					<div class="news-main-top_info-li-tt">
						<div class="news-main-top_info-li-tt_block">
							<?php echo $value['category']['name']; ?>
						</div>
						<div class="clear news-main-top_info-li-tt_title">
							<?php echo $value['name']; ?>
						</div>
						<div class="news-main-top_info-li-tt_from">
							<div class="clear"></div>
						</div>
					</div>
				</a>
			</div>
		<?php } ?>
		<div class="clear"></div>
	</div>
	<div class="news-main-bot">
		<?php
			$i=1;
		 foreach($news['data']['category'] as $key => $value) { 
			if($key<=3) {
			?>
		<div class="news-main-block1">
				<div class="news-block1-top">
					<div class="padding-box-desktop" style="padding: 0">
	                    <div class="clearfix index-category" id="navMainParent<?php echo $i; ?>">
	                        <div class="float-left menuH4<?php echo $i; ?>">
	                            <a href="<?php echo $value['parent']['link']; ?>-C<?php echo $value['parent']['id_category']; ?>" title="">
	                                <h4 class="active"><?php echo $value['parent']['name']; ?></h4>
	                            </a>
	                        </div>
	                        <div class="float-right menuUl<?php echo $i; ?>">
	                            <ul class="list-unstyled">
	                            	<?php foreach ($value['children'] as $key2 => $value2) {
	                            		
	                            	 ?>
	                                <li class="">
	                                    <a href="<?php echo $value['parent']['link']; ?>/<?php echo $value2['link']; ?>-C<?php echo $value2['id_category']; ?>" title="">
	                                        <span> <?php echo $value2['name']; ?></span>
	                                    </a>
	                                </li>
	                               	<?php } ?>
	                                <li class="dropdown more" style="display: none">
	                                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
	                                            aria-haspopup="true" aria-expanded="false">
	                                        <i class="kt-icon grey size-12x8">
	                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
	                                                <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z"
	                                                      fill-rule="evenodd"></path>
	                                            </svg>
	                                        </i>
	                                    </button>
	                                    <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
               	 	</div>
					<div class="clear"></div>
				</div>
				<div class="news-block1-left">
					<?php foreach ($value['article'] as $key2 => $value2) {
						# code...
						if($key2==0) {
							
					 ?>
					<a href="">
						<div>
							 <img src="https://www.kientruc.com/uploads/article/430x280<?php echo $value2['avatar']['name']; ?>">
						</div>
						<div class="news-block1-left-title">
							<?php echo $value2['name']; ?>
						</div>
						<div class="news-block1-left-from">
							<!-- <div class="news-block1-left-date">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
									<image xlink:href="images/icon-clock-2.svg" width="12"/>  
								</svg>
									21/1/2019
							</div> -->
							<div class="news-block1-left-folder">
								<i class="far fa-folder" style="margin-right: 10px;"></i>
								<?php echo $value2['category']['name']; ?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="news-block1-left-tt">
							<?php echo $value2['info']; ?>
						</div>
					</a>
					<?php  }}?>
				</div>
				<div class="news-block1-right">
					<?php foreach ($value['article'] as $key2 => $value2) {
						if($key2 !=0) {
					?>
					<div class="news-block1-right-li">
						<a href="">
							<div class="news-block1-right-li-left">
								
							 	<img src="https://www.kientruc.com/uploads/article/430x280<?php echo $value2['avatar']['name']; ?>">
							</div>
							<div class="news-block1-right-li-right">
								<div class="news-block1-right-li-title"><?php echo $value2['name']; ?></div>
								<div class="news-block1-right-li-date">
									<div class="news-block1-left-date">
										<i class="far fa-folder" style="margin-right: 10px;"></i>
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
		<?php $i++; } } ?>
		<?php
		foreach($news['data']['category'] as $key => $value) { 
			if($key==4) {
		 ?> 
		<div class="news-main-block2">
				<div class="news-block2-top">
					<div class="padding-box-desktop" style="padding: 0">
	                    <div class="clearfix index-category" id="navMainParent<?php echo $i; ?>">
	                        <div class="float-left menuH4<?php echo $i; ?> title">
	                            <a href="<?php echo $value['parent']['link']; ?>-C<?php echo $value['parent']['id_category']; ?>">
	                                <h4 class="active"><?php echo $value['parent']['name']; ?></h4>
	                            </a>
	                        </div>
	                        <div class="float-right menuUl<?php echo $i; ?>">
	                            <ul class="list-unstyled">
	                            		
	                            	<?php foreach($value['children'] as $key2 =>$value2) { ?>
	                                <li class="">
	                                    <a href="<?php echo $value['parent']['link'] ?>/<?php echo $value2['link']; ?>-C<?php echo $value2['id_category']; ?>" title="">
	                                        <span><?php echo $value2['name']; ?></span>
	                                    </a>
	                                </li>
	                            	<?php } ?>
	                                <li class="dropdown more" style="display: none">
	                                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
	                                            aria-haspopup="true" aria-expanded="false">
	                                        <i class="kt-icon grey size-12x8">
	                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
	                                                <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z"
	                                                      fill-rule="evenodd"></path>
	                                            </svg>
	                                        </i>
	                                    </button>
	                                    <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
               	 	</div>
					<div class="clear"></div>
				</div>
				<div class="news-block2-bot">
					
					<div class="news-block2-bot-top">
						<?php foreach($value['article'] as $key2 =>$value2)  {
							if($key2 <= 2) {
							?>
						<div class="news-block2-bot-top-li">
							<a href="<?php echo $value2['category']['link'] ?>/<?php echo $value2['link']; ?>-&<?php echo $value2['id_post']; ?>.html">
								<div class="news-block2-bot-top-li-img">
									
							 		<img src="https://www.kientruc.com/uploads/article/430x280<?php echo $value2['avatar']['name']; ?>">
								</div>
								<div class="news-block2-bot-top-li-title">
								
								</div>
								<div class="news-block1-left-from">
									<div class="news-block1-left-folder">
										<i class="far fa-folder" style="margin-right: 10px;"></i>
										<?php echo $value2['category']['name']; ?>
									</div>
									<div class="clear"></div>
								</div>
								<div class="news-block2-bot-top-li-tt">
									<?php echo $value2['name']; ?>
								</div>
							</a>
						</div>
						<?php } }?>
						<div class="clear"></div>
					</div>
					
					<div class="news-block2-bot-bot">
						<?php foreach($value['article'] as $key2 =>$value2)  {
							if($key2 <= 8 && $key2 >=3) {
							?>
						<div class="news-block2-bot-bot-li">
							<a href="<?php echo $value2['category']['link'] ?>/<?php echo $value2['link']; ?>-&<?php echo $value2['id_post']; ?>.html">
								<div class="news-block2-bot-bot-li-left">
									
									<img src="https://www.kientruc.com/uploads/article/430x280<?php echo $value2['avatar']['name']; ?>">
								</div>
								<div class="news-block2-bot-bot-li-right">
									<div class="news-block2-bot-bot-li-title"><?php echo $value2['name']; ?></div>
									<div class="news-block1-left-date">
										<i class="far fa-folder" style="margin-right: 10px;"></i>
											<?php echo $value2['category']['name']; ?>
									</div>
								</div>
								<div class="clear"></div>
							</a>
						</div>
						<?php } }?>
					</div>
				
					<div class="clear"></div>
				</div>
		</div>
		<?php }} ?>
		<div class="clear"></div>
	</div>
</div>
<?php echo \frontend\widgets\footerWidget::widget() ?>