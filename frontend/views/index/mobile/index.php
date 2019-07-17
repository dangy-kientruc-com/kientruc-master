<?php echo \frontend\widgets\headerWidget::widget() ?>

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
                        	select.form-control
                        	{
                        		border: none;
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
                        </style>                
                        <div style="min-height: 50px"></div>
                    </div>
    </div>
</div>
<div class="clearfix"></div>
<div style="min-height: 30px"></div>
<div class="padding-box-desktop">
    <div class="clearfix index-category" id="navMainParent0">
         <div class="float-left menuH4">
            <a href="/site/category" title="">
                <h4 class="active">Kiến trúc sư tiêu biểu</h4>
            </a>
        </div>
    </div>
</div>
<div style="min-height: 20px"></div>

<div class="index-right-scroll">
    <div class="scroll-box">
    	<div class="nonloop-index owl-carousel owl-theme owl-loaded owl-drag" id="container-id">
    		<?php 
			        	foreach($home['rkts'] as $key =>$value)
			        	{

			        ?>
        	<div class="item-kts wow fadeIn">
                <a href="<?php echo $value['link_view'] ?>" title="">
                    <div class="avatar js-viewUser" data-item="<?php echo $value['id_customer']; ?>">
                        <div class="bg">
                            <img src="<?php echo $value['avatar_link']; ?>" alt=""
                                 class="img-fluid">
                        </div>
                        <?php if($value['online'] == 1) { ?>
                        <i class="fas fa-circle"></i>
                        <?php } ?>
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
        <?php } ?>
        </div>
    </div>
</div>
<div style="min-height: 45px"></div>
<div class="padding-box-desktop">
   <div class="clearfix index-category" id="navMainParent1">
      	<div class="float-left menuH4">
	        <a href="/site/category" title="">
	            <h4 class="active">Dự án nổi bật</h4>
	         </a>
    	</div>
        <div class="float-right menuUl">
            <ul class="list-unstyled">
                <?php $i=1;
					foreach($home['rdatb']['menu'] as $key =>$value) { ?>
                    <li class="<?php if($i==1) echo 'active'; ?>">
                        <a href="/site/category" title="">
                           <span><?php echo $value['name']; ?></span>
                        </a>
                    </li>
                <?php $i++; } ?>
                <li>
                    <a href="/site/category" title="" class="clr">
                        <button type="button" class="btn xem-them-more">
                            <span>Xem tất cả</span>
                                <i class="kt-icon bo-tron green size-6x10">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                    </svg>
                                </i>
                    	</button>
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
        </div>
    </div>
</div>
<div style="min-height: 5px"></div>
<div class="kt-row">
            <div class="grid-container-3 grid-masonry-project js-index-grid-01">
            	<?php
                    $total_number=0;
                 foreach($home['rdatb']['project'] as $key =>$value){
                    $total_number++;
                  ?>
               	<div class="item wow fadeIn" >
                    <div class="kt-project-item">
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
                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                <i class="far fa-bookmark"></i>
                            </button>
                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                        <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo 'cover'; else echo '100%'; ?>;background-repeat:no-repeat;  ">
                                        <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                            <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                        </a>
                        </div>
                        <div class="item-info">
                            <h2>
                                <a href="<?php echo $value['link']; ?>-<?php echo $value['id_post']; ?>.html" title="" data-modalajaxproject="true">
                                  <?php echo $value['name']; ?>
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
                                       <a href="" title="">
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
                                                <div class="avatar js-viewUser" data-item="<?php echo $value['id_customer']; ?>">
                                                    <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <a href="" title="">
                                                    <span><?php echo $value['customer']['full_name']; ?></span>
                                                </a>
                                </div>
                                <div class="float-right" style="display: flex;align-items: center;justify-content: center;">
                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" style="background-color: rgba(0,0,0,0.2); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                                        <i class="fas fa-heart"></i>
                                    </button>   
                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" style="background-color: rgba(0,0,0,0.2); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px; font-size: 10px;">
                                        <i class="far fa-bookmark"></i>
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
						<button type="button" class="btn btn-default kt-btn-more js-more-project-button" total_number="<?php echo $total_number; ?>">
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
<div style="min-height: 10px"></div>
<div style="min-height: 85px"></div>
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
                                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                        </button>
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
                                        <a href="<?php echo $value['link']; ?>" title="">
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
<div class="clearfix"></div>
<div style="min-height: 45px"></div>
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
                                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                        </button>
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
                        </div>
                    </div>
                </div>
<div class="index-box-news">
	<div class="grid-container-3 grid-index-03">
		<div id="container-id-2" class="owl-carousel owl-theme">
			<?php
		    	foreach($home['rnews'] as $key => $value)
		    	{

		    	 ?>
			<div class="item wow fadeIn">
                <div class="kt-news-item">
                    <div class="item-image">
                        <a href="<?php echo $value['category']['link']; ?>/<?php echo $value['link']; ?>-&<?php echo $value['id_post']; ?>.html" title="">
                            <img src="https://kientruc.com/uploads/article/430x280<?php echo $value['avatar']['name']; ?>" alt=""
                                 class="img-fluid">
                        </a>
                    </div>
                    <div class="item-tag">
                        <a href="<?php echo $value['category']['link']; ?>-C<?php echo $value['id_category']; ?>" title="">
                            <button type="button" class="btn">
                                <span<?php echo $value['category']['name']; ?></span>
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
</div>
<div class="popup" style='position:fixed;top:0;left:0;width:100%;height:100vh;background-color:#fff;z-index:10000;display: none;background-color:#e6f1f9'>
        <div class="bg-popup"></div>
    </div>
    <style>
        .bg-popup
        {   
           
            
            line-height: 100vw;
            margin:30px auto;
            max-height: calc(100% - 60px);
            animation-name: cate;
            animation-duration: 200ms;
            animation-iteration-count: 1;
            animation-timing-function: linear;
            overflow-y: auto;
            max-width: 350px;
            padding: 0 10px;

        }
        .bg-popup::-webkit-scrollbar {
             width: 0px;
            background-color: #EFEFEF;
            opacity: 0;
        }
        .bg-popup::-webkit-scrollbar-thumb {
            background-color: #C4C4C4;
            border-radius: 0px;
            opacity: 0;
        }
        @keyframes cate { 
            from { 
                transform: scale(0);
            } 
            to{ 
                transform: scale(1);
            }
        }
        .bg-popup div
        {
            height:35px; width:100%; border:1px solid rgba(0,0,0,0.3);
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 0 15px;
            line-height: 35px;
            box-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            font-size: 15px;
            font-weight: bold;
            background-color: #FFF;
        }
        .popup-li-selected
        {
            background-color: #248445 !important;
            color: #FFF;
        }

</style>
<?php echo \frontend\widgets\footerWidget::widget() ?>