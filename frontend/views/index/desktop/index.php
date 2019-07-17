<?php echo \frontend\widgets\headerWidget::widget() ?>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/22/2019
 * Time: 10:17 AM
 */

use yii\bootstrap4\Modal;

?>
<?php
Modal::begin([
    'headerOptions' => false,
    'closeButton' => false,
    'id' => 'myModal-see-project',
    'size' => 'modal-full',
    //'tabIndex' => false,
    'clientOptions' => [
        'backdrop' => 'static',
        'keyboard' => false,
        'focus' => false,
    ],
]);
?>
<button type="button" class="close btn-fixed-close"
        data-dismiss="modal" aria-label="Close">
    <i class="kt-icon size-24x24">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"></path>
        </svg>
    </i>
</button>
<div class="content-cus-see-project"></div>
<?php
Modal::end();
?>
<div class="kt-grid grid-2">
    <div class="grid-item" style="background-color: #e6f1f9; max-width: 480px;position: relative;">
        <div style="    position: fixed;
    bottom: 0;
    left: 0;
    height: 100%;
    width: 480px;
    z-index: 0;
    background-image: url(images/home-bg.png);
    background-size: 100% auto;
    background-repeat: no-repeat;
    background-position: bottom;"></div>
        <div class="index-left-box" >
		    <div style="min-height: 100px"></div>
			<h1>Cộng đồng<br>kiến trúc sư Việt Nam.
            </h1>
           
			<div class="index-text">
				    Nơi tập hợp tất cả kiến trúc sư, nhà thiết kế nội thất, kỹ sư xây dựng xuất sắc nhất Việt Nam.
				    Liên hệ tư vấn thiết kế , giám sát thi công với bất kì chuyên gia nào.
			</div>
			<div class="index-slogan">
				    <b>TRỰC TIẾP - NHANH CHÓNG - ĐƠN GIẢN</b>
				        chỉ với 1 click chuột.
			</div>
			<ul class="list-unstyled">
				    <li>
				        <b>+<?php  echo $home['left']['kts'];  ?></b>
				        <span>Kiến trúc sư</span>
				   	</li>
				    <li>
				        <b>+<?php  echo number_format($home['left']['project']);  ?></b>
				        <span>Dự án kiến trúc</span>
				    </li>
				    <li>
				        <b>+<?php  echo number_format($home['left']['user']);  ?></b>
				        <span>Thành viên</span>
				    </li>
				    <li>
				        <b>+<?php  echo number_format($home['left']['photo']);  ?></b>
				        <span>Hình ảnh công trình</span>
				    </li>
			</ul>
			<div class="clearfix"></div>
			<div style="min-height: 15px"></div>
			<a href="" title="">
				<button type="button" class="btn index-btn-default">
				            Đăng ký miễn phí ngay
				</button>
		    </a>
		</div>
    </div>
    <div class="grid-item">
        <div class="bg-search">
        			<div style="height: 10px;"></div>
                    <div class="box-form">
                        <h2>TÌM KIẾM KIẾN TRÚC SƯ NHANH CHÓNG - DỄ DÀNG</h2>
                        <form id="w0" action="/controller/action" method="get">
	                        <div class="grid-search-5">
	                            <div class="td item-01">
	                                <div class="height-50px">
                                        <select id="w1" class="form-control " name="select1" data-s2-options="s2options_6cc131ae" data-krajee-select2="select2_5f599892" tabindex="-1" aria-hidden="true">
                                            <option value="" aria-disabled="true" aria-selected="true">Địa điểm</option>
                                            <?php  
                                                foreach($home['rtop']['province'] as $key =>$value)
                                                {

                                            ?>
                                            <option value="<?php echo $value['provinceid']; ?>"><?php echo $value['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
	                            </div>
	                            <div class="td item-02">
	                                <div class="height-50px">
	                                    <select id="w2" class="form-control " name="select2" data-s2-options="s2options_6cc131ae" data-krajee-select2="select2_055b6109"  tabindex="-1" aria-hidden="true">
											<option value="" aria-selected="true">Loại công trình</option>
											<?php  
												foreach($home['rtop']['typeCT'] as $key =>$value)
												{

											?>
											<option value="<?php echo $value['id_tag']; ?>"><?php echo $value['name']; ?></option>
											<?php } ?>
										</select>
									</div>
	                            </div>
	                            <div class="td item-03">
	                                <div class="height-50px">
	                                    <select id="w3" class="form-control " name="select3" data-s2-options="s2options_6cc131ae" data-krajee-select2="select2_4fc8a948"  tabindex="-1" aria-hidden="true">
											<option value="" aria-selected="true">Hạng mục thiết kế</option>
											
											<?php  
												foreach($home['rtop']['typeHM'] as $key =>$value)
												{

											?>
											<option value="<?php echo $value['id_tag']; ?>"><?php echo $value['name']; ?></option>
											<?php } ?>
										</select>
									</div>
	                            </div>
	                            <div class="td item-04">
	                                <button type="button" class="btn btn-submit-single hover">
	                                    <i class="kt-icon white size-14x14">
	                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
	                                            <path d="M13.7 12l-3-3h-.1c.6-1 1-2 1-3.2a5.8 5.8 0 1 0-2.7 4.8l3.1 3a1.2 1.2 0 0 0 1.7-1.6zm-8-2.5a3.8 3.8 0 1 1 0-7.5 3.8 3.8 0 0 1 0 7.5z" fill-rule="nonzero"></path>
	                                        </svg>
	                                    </i>
	                                    <span>Tìm kiến trúc sư</span>
	                                </button>
	                            </div>
	                        </div>
                        </form>        
                        <style>
                        	.select2-container--default .select2-results__option[aria-selected=true] {
                            display: none;
                        }
                            .select2-container--default .select2-selection--single
                            {
                                border: none !important;
                            }
                            .select2-container
                            {
                                width: 100% !important;
                            }
                        	span.select2-selection.select2-selection--single {
                                    outline: none;
                                }
                            .select2-container--default .select2-selection--single .select2-selection__rendered
                            {
                                line-height: 32px !important;
                            }
                            .select2-selection__arrow
                            {
                                display: flex;align-items: center;justify-content: center;
                            }
                        </style>                
                        <div style="min-height: 50px"></div>
                    </div>
        </div>
        <div class="clearfix"></div>
        <div style="min-height: 30px"></div>
        <div class="padding-box-desktop">
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
			        	foreach($home['rkts'] as $key =>$value)
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

		<div class="padding-box-desktop">
            <div class="clearfix index-category" id="navMainParent1">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Dự án nổi bật</h4>
                            </a>
                        </div>
                        <div class="float-right menuUl">
                            <ul class="list-unstyled pagehome">
                            	<?php $i=1;
                                if(isset($_GET['tag']))
                                {
                                    $tag=$_GET['tag'];
                                }
                            	foreach($home['rdatb']['menu'] as $key =>$value) { ?>
                                <li class="<?php if(isset($_GET['tag'])) { if($tag==$value['link']) echo 'active'; }?>">
                                    <a href="?tag=<?php echo $value['link']; ?>" tag="<?php echo $value['link']; ?>" title="">
                                        <span><?php echo $value['name']; ?></span>
                                    </a>
                                </li>
                            <?php $i++; } ?>
                                <li>
                                    <a href="" title="" class="clr">
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
        <div class="kt-row">
            <div class="grid-container-3 grid-masonry-project js-index-grid-01">
            	<?php
                    $total_number=0;
                 foreach($home['rdatb']['project'] as $key =>$value){
                    $total_number++;
                  ?>
               	<div class="item wow fadeIn" >
                    <div class="kt-project-item"  id="<?php echo $value['id_post']; ?>">
                    	<a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html">
                            <?php if($value['pro'] == "1") { ?>
                       	<i class="ipro kt-icon size-20x34">
                           <svg xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                           <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                                <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                        </i>
                        <?php } ?>
                        <div class="kt-flex-container kt-share-box hover transition">
                           
                        </div>
                        <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo '100%'; else echo 'cover'; ?>">
                                        <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" >
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
                                        
                                        <li><i class="fas fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                                        <li><i class="fas fa-heart"></i> <span><?php echo $value['total_like']; ?></span></li>
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
                                                <div class="avatar" data-item="<?php echo $value['id_customer']; ?>" data-toggle="tooltip" title="" data-original-title="Xem thêm chyuyên gia">
                                                    <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <a href="" title="">
                                                    <span><?php echo $value['customer']['full_name']; ?></span>
                                                </a>
                                </div>

                                <div class="float-right" style="display: flex;align-items: center;justify-content: center;">
                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;" status="1">
                                        <i class="fas fa-heart" style="color: #FFF;"></i>
                                    </button>
                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                                        <i class="fa fa-bookmark" style="color: #FFF;"></i>
                                    </button>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    	</a>
                    </div>
            	</div>  
            	<?php } ?>                         
            </div>
            <div class="">
					<div class="text-center">
						<button type="button" class="btn btn-default kt-btn-more js-more-project-button" total_number="<?php echo $total_number; ?>" tag="<?php if(isset($_GET['tag'])) echo $_GET['tag']; ?>">
							<i class="kt-icon bo-tron green size-16x14">
								<svg xmlns="http://www.w3.org/2000/svg">
	                                <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
	                                      fill-rule="evenodd"/>
	                            </svg>
							</i><span>Xem thêm</span>
						</button>
					</div>
			</div>
            <div class="page-load-status text-center" style="display:none;width: 100%;">
                        <div class="loader-ellips infinite-scroll-request">
                            <span class="loader-ellips__dot"></span>
                            <span class="loader-ellips__dot"></span>
                            <span class="loader-ellips__dot"></span>
                            <span class="loader-ellips__dot"></span>
                        </div>
                        <p class="infinite-scroll-last">End of content</p>
                        <p class="infinite-scroll-error">No more pages to load</p>
            </div>

        </div>
        <div class="padding-box-desktop">
                    <div class="clearfix index-category" id="navMainParent2">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Showroom</h4>
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
        <div class="kt-row">
            <div class="grid-container-4 grid-masonry-category js-index-grid-02" >
            	<?php
            		foreach($home['rmenusp'] as $key =>$value ){
            	 ?>
                <div class="item wow fadeIn" >
                                <div class="kt-category-item">
                                    <div class="item-image">
                                        <a href="<?php echo $value['link']; ?>" title="" target="_blank">
                                            <img src="https://kientruc.com/uploads/category/<?php echo $value['image'] ?>" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h3>
                                            <a href="<?php echo $value['link']; ?>" title="">
                                               <?php echo $value['name']; ?>
                                            </a>
                                        </h3>
                                        <h4>
                                            <b><?php echo $value['total_product']; ?></b>
                                            <span>sản phẩm</span>
                                        </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                </div>
                <?php  }?>
            </div>
        </div>
        <div class="padding-box-desktop">
                    <div class="clearfix index-category" id="navMainParent3">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Tin tức</h4>
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
        <div class="kt-row">
		    <div class="grid-container-3 grid-masonry-news js-index-grid-03">
		    	<?php
		    	foreach($home['rnews'] as $key => $value)
		    	{

		    	 ?>
		        <div class="item wow fadeIn">
		                <div class="kt-news-item">
		                    <div class="item-image">
		                        <a href="<?php echo $value['category']['link']; ?>/<?php echo $value['link']; ?>-&<?php echo $value['id_post']; ?>.html" title="">
		                            <img src="https://kientruc.com/uploads/article/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid">
		                        </a>
		                    </div>
		                    <div class="item-tag">
		                        <a href="<?php echo $value['category']['link']; ?>-C<?php echo $value['id_category']; ?>" title="">
		                            <button type="button" class="btn">
		                                <span><?php echo $value['category']['name']; ?></span>
		                            </button>
		                        </a>
		                    </div>
		                    <h3>
		                        <a href="/site/detail-news" title="">
		                           <?php echo $value['name']; ?>
		                        </a>
		                    </h3>
		                    <div class="item-info">
		                        <?php echo $value['info']; ?>
		                    </div>
		                    <div class="clearfix"></div>
		                </div>
		        </div>
		        <?php 
		    }?>
		    </div>
		</div>



		<div class="index-right-scroll" style="padding-left: 20px;">
		    <div class="kt-line kt-grey"></div>
			<footer>
			    <div class="kt-footer">
			        <div class="float-left">
			            <div class="logo-footer">
			                <a href="" title="">
			                    <img src="/images/logo%20icon.jpg" alt="" class="img-fluid">
			                </a>
			            </div>
			            <div class="company-footer">
			                <h5>
			                    © 2015-2019 <b>KIENTRUC.com</b> jsc. All right reserved
			                </h5>
			                <ul class="list-unstyled">
			                    <li>
			                        <a href="" title="">Cộng đồng</a>
			                    </li>
			                    <li>
			                        <a href="" title="">Hỏi chuyên gia</a>
			                    </li>
			                    <li>
			                        <a href="" title="">Về chúng tôi</a>
			                    </li>
			                    <li>
			                        <a href="" title="">Câu hỏi thường gặp</a>
			                    </li>
			                    <li>
			                        <a href="" title="">Điều khoản</a>
			                    </li>
			                    <li>
			                        <a href="" title="">Liên hệ</a>
			                    </li>
			                </ul>
			            </div>
			        </div>
			        <div class="float-right">
			            <p class="mb-0"><b style="font-size: 12px;line-height: 16px;display: block;margin-bottom: 5px;">Mạng xã hội</b></p>
			            <div class="social">
			                <a href="" title="">
			                    <button type="button" class="btn sface">
			                        <i class="fab fa-facebook-f"></i>
			                    </button>
			                </a>
			                <a href="" title="">
			                    <button type="button" class="btn sgoogle">
			                        <i class="fab fa-google"></i>
			                    </button>
			                </a>
			                <a href="" title="">
			                    <button type="button" class="btn stwitter">
			                        <i class="fab fa-twitter"></i>
			                    </button>
			                </a>
			                <a href="" title="">
			                    <button type="button" class="btn srss">
			                        <i class="fas fa-rss"></i>
			                    </button>
			                </a>
			            </div>
			        </div>
			        <div class="clearfix"></div>
			    </div>
			</footer>            
		</div>
	</div>
</div>





<div class="style"></div>
<style>
    div.grid-search-5 div.td div.height-50px
    {
        padding:8px 0;
    }
    .height-50px .form-control
    {
        opacity: 0;
    }
    .select2-dropdown
    {
        border: none;
       box-shadow: 1px 3px  5px rgba(0,0,0,0.8);
       border-radius: 5px !important;
       top: 25px;

    }
    .select2-selection__rendered
    {

    }
    .select2-dropdown:before
    {
        content: '';
        position: absolute;top: -8px;
        z-index: 100;
        left: 50px;
        border-left: 
        width: 0px;height: 0px ;
        border-left: 10px solid transparent;
          border-right: 10px solid transparent;

          border-bottom: 8px solid #FFF;
    }
    .select2-container
    {
        background-color: transparent;
        padding: 0 15px;
        padding-right: 25px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow
    {
        right: 10px;
    }
    .select2-container--default .select2-results>.select2-results__options
    {
        overflow-y: auto;
    }
    .select2-container--default .select2-results>.select2-results__options::-webkit-scrollbar {
         width: 4px;
        background-color: #EFEFEF;
        opacity: 0;
    }

    .select2-container--default .select2-results>.select2-results__options::-webkit-scrollbar-thumb {
         background-color: #C4C4C4;
        border-radius: 4px;
         opacity: 0;
    }
    .select2-results
    {
        padding: 10px;
    }
    .select2-results ul li 
    {
        padding-left: 20px;
        color: rgba(0,0,0,0.5);
        font-weight: 500;
        position: relative;
    }
    .select2-results ul li:before
    {
        position: absolute;
        content: "";
        height: 5px;
        width: 5px;
        border-radius: 5px;
        background-color: rgba(0,0,0,0.5);
        left: 5px;
        top: 12px;
    }
    .select2-container--default .select2-results__option--highlighted[aria-selected]
    {
        background-color: #FFF;
        color: black;
    }

</style>