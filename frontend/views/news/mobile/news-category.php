<?php echo \frontend\widgets\headerWidget::widget() ?>
<div class="new-main">
	<div class="new-top index-category" id="navMainParent1">
		<div class="new-top-left float-left menuH4">
			<div class="new-top-left-li"><a href="tap-chi">Tạp chí</a></div>
			 <?php foreach($newcategory['data']['breadcrumb'] as $key =>$value) { ?>
			<div style="float: left; line-height: 32px; margin: 0 15px; color:#474747 !important;"><i class="fa fa-chevron-right"></i></div>
			<div class="new-top-left-li">
				<a href="<?php if($key == 1) { echo $newcategory['data']['breadcrumb'][0]['link'];echo "/"; }?><?php echo $value['link']; ?>-C<?php echo $value['id']; ?>">
				<?php echo $value['name']; ?>
					</a>
				</div>
			 <?php } ?>
		</div>
		<div class="new-top-right menuUl">
			<ul class=" float-right  list-unstyled ">
	            <?php
                $i=2;
                if(isset($newcategory['data']['menuchildren'])) {
                    foreach ($newcategory['data']['menuchildren'] as $key => $value) {
                        # code...
                
                    

                ?>
	            <li class="active">
	            	<a href="<?php echo $newcategory['data']['category']['link']; ?>/<?php echo $value['link']; ?>-C<?php echo $value['id_category']; ?>" title="">
	                      <span><?php echo $value['name']; ?></span>
	                </a>
	            </li>
	            <?php $i++;}} ?>
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
		<div class="clear"></div>
	</div>
	<div class="new-bot">
		<div class="new-bot-left">
			<div class="new-left-bot ">
				<div class="grid">
					<?php foreach($newcategory['data']['articles']['items'] as $key =>$value)  {?>
					<div class="new-left-bot-li wow grid-item zoomIn animated">
						<a href="<?php echo $value['category']['link']; ?>/<?php echo $value['link']; ?>-&<?php echo $value['id_post']; ?>.html">
							<div class="new-left-bot-li-img">
								<img src="https://kientruc.com/uploads/article/430x280<?php echo $value['avatar']['name']; ?>">
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
				</div>
				<div class="clear"></div>
				<div class="text-center">
					<button type="button" id="loadnews" class="btn btn-default kt-btn-more js-more-project-button" category ="<?php echo $newcategory['data']['category']['id_category']; ?>" page="1">
						<i class="kt-icon bo-tron green size-16x14">
							<svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
                                      fill-rule="evenodd"/>
                            </svg>
						</i><span>Xem thêm</span>
					</button>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php echo \frontend\widgets\footerWidget::widget() ?>