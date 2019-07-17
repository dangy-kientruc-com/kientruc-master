<?php echo \frontend\widgets\headerWidget::widget() ?>
<div style="width: 1380px; margin:auto;">
	<div style="min-height: 50px"></div>
	<div class="">
		<div class="clearfix index-category" id="navMainParent0">
		<div class="float-left menuH4">
		    <a href="/site/category" title="">
		         <h4 class="active">Kiến trúc sư đang Online</h4>
		    </a>
		</div>
		</div>
	</div>
	<div style="min-height: 20px"></div>
	<div class="index-right-scroll">
		<div class="scroll-box">
		    	<div class="nonloop-index owl-carousel owl-theme" id="owl-demo">

			        <?php 
			        	foreach($home['kts'] as $key =>$value)
			        	{

			        ?>
			            <div class="item-kts wow fadeIn item">
			                <a href="<?php echo $value['link_view'] ?>" title="">
			                    <div class="avatar js-viewUser" data-item="<?php echo $value['id_customer']; ?>">
			                        <div class="bg">
			                            <img src="<?php echo $value['avatar_link']; ?>" alt=""
			                                 class="img-fluid">
			                        </div>
                                    <?php  ?>
			                        <i class="fas fa-circle" style="color: <?php if($value['online'] == 0) echo 'rgba(0,0,0,0.3)'; ?>"></i>
                                <?php  ?>
			                    </div>
			                    <div class="fullname">
			                        <b><?php echo $value['full_name']; ?></b>
			                        <i class="kt-icon black size-10x10" style="opacity: 0.8;">
			                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
			                                <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
			                                      fill-rule="nonzero" fill="#474747"/>
			                            </svg>
			                        </i>
			                        <span><?php echo $value['province']; ?></span>
			                    </div>
			                </a>
			            </div>
			        <?php  }?>
			    </div>
		</div>
	</div>
	<div style="min-height: 20px"></div>
	<style type="text/css">
        div.index-right-scroll div.scroll-box div.item-kts div.fullname b 
        {
                overflow: hidden;
                height: 16px;
        }
	</style>
	<div class="">
        <div class="clearfix index-category" id="navMainParent1">
            <div class="float-left menuH4">
                <a href="/site/category" title="">
                    <h4 class="active">Dự án dành cho bạn</h4>
                </a>
            </div>
            <div class="float-right menuUl">
                <ul class="list-unstyled">
                    <li>
                        <a href="/site/category" title="" class="clr">
                            <button type="button" class="btn xem-them-more">
                                <span>Xem tất cả</span>
                                <i class="kt-icon bo-tron green size-6x10">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z" fill-rule="evenodd"></path>
                                    </svg>
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="dropdown more" style="display: none;">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="kt-icon grey size-12x8">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                    <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z" fill-rule="evenodd"></path>
                                </svg>
                            </i>
                        </button>
                        <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="home-bot-list">
		<div class=" grid-container-3 grid-masonry-project home-login-mansory" style="">
			<?php foreach ($home['projectforyou'] as $key => $value) {
				# code...
			?>
            <div class="item wow fadeIn">
                        <div class="kt-project-item">
                            <i class="ipro kt-icon size-20x34">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                        <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </i>
                            <div class="kt-flex-container kt-share-box hover transition">
                                <button type="button" class="btn" onclick="javascript:modalAddAlbum()" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo '100%'; else echo 'cover'; ?>">
                                <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                    <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                </a>
                            </div>
                            <div class="item-info">
                                <h2>
                                    <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                          <?php echo ucwords(mb_strtolower($value['name'],'UTF-8')); ?>
                                    </a>
                                </h2>
                                <div class="view">
                                    <div class="float-left">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                                            <li><i class="fa fa-heart"></i> <span><?php echo $value['total_like']; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right">
                                            <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="">
                                                   <?php echo $value['tag']['name']; ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="kt-line kt-grey"></div>
                                <div class="customer">
                                    <div class="float-left">
                                        <div class="avatar js-viewUser tooltipstered" data-item="0">
                                            <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <a href="" title="">
                                            <span><?php echo $value['customer']['full_name']; ?></span>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right-2">
                                            <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                    <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z" fill-rule="nonzero" fill="#474747"></path>
                                                </svg>
                                            </i>
                                            <span>Nghệ An</span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
            </div>
        	<?php } ?>
       	</div>
	</div>
	<div class="">
        <div class="clearfix index-category" id="navMainParent1">
            <div class="float-left menuH4">
                <a href="/site/category" title="">
                    <h4 class="active">Dự án từ kiến trúc sư yêu thích của bạn</h4>
                </a>
            </div>
            <div class="float-right menuUl">
                <ul class="list-unstyled">
                    <li>
                        <a href="/site/category" title="" class="clr">
                            <button type="button" class="btn xem-them-more">
                                <span>Xem tất cả</span>
                                <i class="kt-icon bo-tron green size-6x10">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z" fill-rule="evenodd"></path>
                                    </svg>
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="dropdown more" style="display: none;">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="kt-icon grey size-12x8">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                    <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z" fill-rule="evenodd"></path>
                                </svg>
                            </i>
                        </button>
                        <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="home-bot-list">
		<div class=" grid-container-3 grid-masonry-project home-login-mansory" style="">
            <?php foreach ($home['projectlove'] as $key => $value) {
				# code...
			?>
            <div class="item wow fadeIn">
                        <div class="kt-project-item">
                            <i class="ipro kt-icon size-20x34">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                        <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </i>
                            <div class="kt-flex-container kt-share-box hover transition">
                                <button type="button" class="btn" onclick="javascript:modalAddAlbum()" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo '100%'; else echo 'cover'; ?>">
                                <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                    <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                </a>
                            </div>
                            <div class="item-info">
                                <h2>
                                    <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                          <?php echo ucwords(mb_strtolower($value['name'],'UTF-8')); ?>
                                    </a>
                                </h2>
                                <div class="view">
                                    <div class="float-left">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                                            <li><i class="fa fa-heart"></i> <span><?php echo $value['total_like']; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right">
                                            <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="">
                                                   <?php echo $value['tag']['name']; ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="kt-line kt-grey"></div>
                                <div class="customer">
                                    <div class="float-left">
                                        <div class="avatar js-viewUser tooltipstered" data-item="0">
                                            <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <a href="" title="">
                                            <span><?php echo $value['customer']['full_name']; ?></span>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right-2">
                                            <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                    <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z" fill-rule="nonzero" fill="#474747"></path>
                                                </svg>
                                            </i>
                                            <span></span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
            </div>
        	<?php } ?>
       	</div>
	</div>
	<div class="">
        <div class="clearfix index-category" id="navMainParenthot">
            <div class="float-left menuH4hot" style="display: flex">
                <h4 class="nav-li active" tag="1" style="font-size: 24px; margin-right: 30px; color: #474747 ;cursor: pointer;">Dự án nổi bật</h4>
            </div>
            <div class="float-right menuUlhot">
                <ul class="list-unstyled">
                	<!-- <?php foreach($home['category'] as $key =>$value) { ?>
                		<li>
                			<a href="">
                				<span><?php echo $value['name']; ?></span>
                			</a>
                		</li>
                	<?php } ?> -->
                    <li>
                        <a href="/site/category" title="" class="clr">
                            <button type="button" class="btn xem-them-more">
                                <span>Xem tất cả</span>
                                <i class="kt-icon bo-tron green size-6x10">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z" fill-rule="evenodd"></path>
                                    </svg>
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="dropdown more" style="display: none;">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="kt-icon grey size-12x8">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                    <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z" fill-rule="evenodd"></path>
                                </svg>
                            </i>
                        </button>
                        <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="home-bot-list">
		<div class=" grid-container-3 grid-masonry-project home-login-tag1 tag1 tag" >
		<?php foreach ($home['projecthot'] as $key => $value) {
			# code...
		 ?>
            <div class="item wow fadeIn">
                        <div class="kt-project-item">
                            <i class="ipro kt-icon size-20x34">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                        <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </i>
                            <div class="kt-flex-container kt-share-box hover transition">
                                <button type="button" class="btn" onclick="javascript:modalAddAlbum()" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo 'cover'; else echo '100%'; ?>;background-repeat: no-repeat;">
                                <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                    <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                </a>
                            </div>
                            <div class="item-info">
                                <h2>
                                    <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                          <?php echo ucwords(mb_strtolower($value['name'],'UTF-8')); ?>
                                    </a>
                                </h2>
                                <div class="view">
                                    <div class="float-left">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                                            <li><i class="fa fa-heart"></i> <span><?php echo $value['total_like']; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right">
                                            <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="">
                                                   <?php echo $value['tag']['name']; ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="kt-line kt-grey"></div>
                                <div class="customer">
                                    <div class="float-left">
                                        <div class="avatar js-viewUser tooltipstered" data-item="0">
                                            <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <a href="" title="">
                                            <span><?php echo $value['customer']['full_name']; ?></span>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right-2">
                                            <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                    <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z" fill-rule="nonzero" fill="#474747"></path>
                                                </svg>
                                            </i>
                                            <span></span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
            </div>
        <?php }?>
       	</div>
	</div>
	<!-- <div class="home-bot-list">
	    <div class=" grid-container-3 grid-masonry-project home-login-tag2 tag2 tag" style="display: none;">
		<?php foreach ($home['projectnew'] as $key => $value) {
			# code...
		 ?>
            <div class="item wow fadeIn">
                        <div class="kt-project-item">
                            <i class="ipro kt-icon size-20x34">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                        <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </i>
                            <div class="kt-flex-container kt-share-box hover transition">
                                <button type="button" class="btn" onclick="javascript:modalAddAlbum()" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo 'cover'; else echo '100%'; ?>;background-repeat: no-repeat;">
                                <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                    <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                </a>
                            </div>
                            <div class="item-info">
                                <h2>
                                    <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                          <?php echo ucwords(mb_strtolower($value['name'],'UTF-8')); ?>
                                    </a>
                                </h2>
                                <div class="view">
                                    <div class="float-left">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                                            <li><i class="fa fa-heart"></i> <span><?php echo $value['total_like']; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right">
                                            <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="">
                                                   <?php echo $value['tag']['name']; ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="kt-line kt-grey"></div>
                                <div class="customer">
                                    <div class="float-left">
                                        <div class="avatar js-viewUser tooltipstered" data-item="0">
                                            <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <a href="" title="">
                                            <span><?php echo $value['customer']['full_name']; ?></span>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <p class="kt-text-right-2">
                                            <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                    <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z" fill-rule="nonzero" fill="#474747"></path>
                                                </svg>
                                            </i>
                                            <span></span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
            </div>
        <?php }?>
       	</div>
    </div> -->
       	<!-- <div class="text-center">
            <button type="button" class="btn btn-default kt-btn-more js-more-project-button">
                <i class="kt-icon bo-tron green size-16x14">
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
                              fill-rule="evenodd"/>
                    </svg>
                </i><span>Xem thêm</span>
            </button>
        </div> -->
</div>
<style>
	div.grid-masonry-project div.item
	{
		padding: 0 !important;
		width: 317px;
	}
	.scroll-box
	{
		padding-left: 0 !important;
	}
	.nav-li.active
	{
		color: #000000 !important;
	}
</style>
<?php echo \frontend\widgets\footerWidget::widget() ?>