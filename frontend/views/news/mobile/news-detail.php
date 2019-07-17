<?php echo \frontend\widgets\headerWidget::widget() ?>
<div class="new-main">	
	<div class="new-bot">
		<div class="new-bot-left">
			<div class="new-top" id="navMainParent1">
				<div class="new-top-left menuH4">
				
		            <a href="/tap-chi"><div class="new-top-left-li">Tạp chí</div></a>
		            <?php foreach($detail['data']['breadcrumb'] as $key =>$value) { ?>
	             	<div style="float: left; line-height: 32px; margin: 0 15px; color:#474747 !important;"><i class="fa fa-chevron-right"></i></div>

		            <a href="<?php if($key == 1) { echo $detail['data']['breadcrumb'][0]['link'];echo "/"; }?><?php echo $value['link']; ?>-C<?php echo $value['id']; ?>">
		            	<div class="new-top-left-li">
		                <?php echo $value['name']; ?>

		            	</div>
		        	</a>
		        	<?php }?>
				</div>
				<!-- <div class="new-top-right menuUl">
					<ul class="list-unstyled">
	                    <li class="active">
	                                    <a href="/site/category" title="">
	                                        <span>Đồ nội thất</span>
	                                    </a>
	                    </li>
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
				</div> -->
				<style>
					.dropdown
					{
						height: 30px;
						color: #474747;	font-family: Roboto;	font-size: 14px;	line-height: 22px;
					}
					.dropdown-toggle
					{
						line-height: 30px;
					}
					.dropdown-menu
					{
						transform: translate3d(0px, 0px, 0px) !important;
						right: 0 !important;
						min-width: 250px;
					}
					.dropdown-menu
					{
						top: 100% !important;
						left: auto !important;
						right: 0;
					}
					.dropdown-menu li
					{
						padding:6px 0;
					}
					.dropdown-menu li a
					{
						padding: 6px 15px;
						color: #2d2d2d;
					}
				</style>
				<div class="clear"></div>
				<div class="detail-info">
					<div class="detail-info-images">
						<img src="https://www.kientruc.com/uploads/article/430x280<?php echo $detail['data']['detail']['avatar']['name']; ?>">
					</div>
					<div class="detail-info-title">
						<?php echo $detail['data']['detail']['name']; ?>
					</div>
					<div class="">
						<div class="news-block1-left-from left">
							<div class="news-block1-left-folder">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
									<image xlink:href="images/icon-clock-2.svg" width="12"/>  
								</svg>
								<?php 
									if(isset($detail['data']['breadcrumb'][1]))
									{
										echo $detail['data']['breadcrumb'][1]['name'];
									}
									else
									{
										echo $detail['data']['breadcrumb'][0]['name'];
									}
								?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="news-block1-left-from right">
							<div class="news-block1-left-date size-17x12 grey">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                                      fill-rule="nonzero"/>
                                </svg>
									<?php echo $detail['data']['detail']['view']; ?>
							</div>
							<div class="news-block1-left-date size-17x12 grey">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                                      fill-rule="nonzero"/>
                                </svg>
									<?php echo $detail['data']['detail']['total_photo']; ?>
							</div>
							<div class="news-block1-left-folder size-17x12 grey">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                                      fill-rule="nonzero"/>
                                </svg>
										<?php echo $detail['data']['detail']['total_like']; ?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="detail-viewfast">
						<div class="detail-viewfast-title"><i class="fas fa-list"></i> Xem nhanh</div>
						<div class="detail-viewfast-arrow">

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="detail-vỉewfast-ul">
							<ul>
								
							</ul>
						</div>
					</div>
					<div class="clear"></div>
					<div class="detail-content">
						<?php
							echo $detail['data']['detail']['full'];

						?>
					</div>
					
				</div>
				<div class="detail-g">
					<div class="detail-like-number">
						<i class="fa fa-thumbs-up"></i>
						Like
						<span><?php echo $detail['data']['detail']['total_like']; ?></span>
					</div>
					<div class="detail-share">
						<div class="detail-share-li fab">
							<span class="fa-facebook-f"></span>
						</div>
						<div class="detail-share-li glus">
							<span class="fab fa-google"></span>
						</div>
						<div class="detail-share-li tw">
							<span class="fab fa-google"></span>
						</div>
						<div class="detail-share-li rss">
							<span class="fas fa-rss"></span>
						</div>
					</div>
				</div>
				<div class="detail-d">
					<div class="detail-d-li left">
						<div class="detail-d-t">
							BÀI TRƯỚC
						</div>
						<a href="<?php echo $detail['data']['breadcrumb'][0]['link']; ?>/<?php echo $detail['data']['prev']['link']; ?>-&<?php echo $detail['data']['prev']['id_post']; ?>.html">
							<div class="default-d-title">
								<?php echo $detail['data']['prev']['name'] ?>
							</div>
							<div class="news-block1-left-date">
								
							</div>
						</a>
					</div>
					<div class="detail-d-li right">
						<div class="detail-d-t">
							BÀI SAU
						</div>
						<a href="<?php echo $detail['data']['breadcrumb'][0]['link']; ?>/<?php echo $detail['data']['next']['link']; ?>-&<?php echo $detail['data']['next']['id_post']; ?>.html">
							<div class="default-d-title">
								<?php echo $detail['data']['next']['name']; ?>
							</div>
							<div class="news-block1-left-date">
								
							</div>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="comment">
					<div class="comment-numer">
						<div class="comment-total">
							 Bình luận
						</div>
						<div class="comment-choise">
							<div class="comment-choise-li">Lên đầu</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>

					
					<div class="comment-bot1">

						<div class="comment-bot1-img">
							<img src="images/avatar.png">
						</div>
						<div class="comment-bot1-right">
							<div class="comment-bot1-question">
								<div class="comment-bot1-name">
									Tuấn Linh
								</div>
								<div class="comment-bot1-text">
									áđâsdsad
								</div>
							</div>
							<div class="comment-bot1-choise">
								<div>Cảm ơn</div>
								<div> Trả lời</div>
								<div>1 ngày trước</div>
							</div>
						</div>
						<div class="clear"></div>

					</div>
					
					<!-- <div class="comment-bot2">
								<div class="comment-bot2-img">
									<img src="images/avatar.png">
								</div>
								<div class="comment-bot2-right">
									<div class="comment-bot2-question">
										<div class="comment-bot2-name">
											Tuấn Linh <span>Kiến trúc sư</span>
										</div>
										<div class="comment-bot2-text">
											Phải viết là ai thích đống cổ phần đóng luôn và hướng luôn mức lương cao như vậy có tuyển dc người đấy.
											Phải viết là ai thích đống cổ phần đóng luôn và hướng luôn mức lương cao như vậy có tuyển dc người đấy.
										</div>
										<div class="comment-totaltks">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                                    <path d="M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z" ></path>
                                                </svg>
											</div>
											99
										</div>
									</div>
									<div class="clear"></div>
									<div class="comment-bot2-choise">
										<div class="active">Cảm ơn</div>
										<div> Trả lời</div>
										<div>1 ngày trước</div>
									</div>
								</div>
								<div class="clear"></div>
					</div>
					<div class="comment-bot2">
								<div class="comment-bot2-img">
									<img src="images/avatar.png">
								</div>
								<div class="comment-bot2-right">
									<div class="relative">
										<div class="comment-bot2-questionimg">
											<div class="comment-bot2-questionimg-name">
												Nhân <span> Kiến trúc sư</span>
											</div>
											<div class="comment-img">
												<img src="images/new1.png">
											</div>
											<div class="comment-totaltks">
												<div>
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
	                                                    <path d="M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z" ></path>
	                                                </svg>
												</div>
												99
											</div>
											<div class="comment-edit" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa hoặc xóa bình luận này">
												...
											</div>
										</div>
										<div class="clear"></div>
									</div>
									<div class=" clear comment-bot2-choise">
										<div>1 ngày trước</div>
									</div>
								</div>
								<div class="clear"></div>
					</div> -->
					<div class="comment-top">
						<div class="comment-form">
							<div class="comment-picture">
								<i class="fas fa-camera"></i>
								<input type="file" name="">
							</div>
							<div class="comment-text" type="text" contenteditable="true"></div> 
							<div class="comment-placeholder">
								Bình luận tại đây
							</div>
						</div>
						<div class="comment-form-send">
							<i class="fas fa-share"></i>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php echo \frontend\widgets\footerWidget::widget() ?>