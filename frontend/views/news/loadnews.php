<?php 

	foreach($load['data']['articles']['items'] as $key =>$value) {
	?>

<div class="new-left-bot-li  grid-item zoomIn animated">
						<a href="<?php echo $value['category']['link']; ?>/<?php echo $value['link']; ?>-&<?php echo $value['id_post'] ?>.html">
							<div class="new-left-bot-li-img" style="background: url('https://kientruc.com/uploads/article/<?php echo $value['avatar']['name']; ?>');
							background-size: <?php if($value['avatar']['compare'] ==1) echo 'cover'; else echo '100%'; ?>
							">
								<img src="https://kientruc.com/uploads/article/430x280<?php echo $value['avatar']['name']; ?>" style="opacity: 0;">
							</div>
							<div class="new-left-bot-li-text">
								<div class="new-left-bot-title"><?php echo $value['name']; ?></div>
								<div class="news-block1-left-from">
									<div class="news-block1-left-folder">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
											<image xlink:href="images/icon-clock-2.svg" width="12"/>  
										</svg>
										<?php echo $value['category']['name']; ?>
									</div>
									<div class="clear"></div>
								</div>
								<div class="new-left-bot-li-tt">
									<?php echo $value['info']; ?>
								</div>
							</div>
						</a>
					</div>
					<?php }?>