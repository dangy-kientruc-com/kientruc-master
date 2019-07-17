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
<div class="home">
		<div class="home-top">
			<div class="home-top-left">
                <div class="home-top-left-pc">
				    Dự án từ kiến trúc sư yêu thích của bạn
                </div>
                <div class="home-top-left-mb">
                    Dự án dành cho bạn
                </div>
			</div>
			<div class="home-top-right">
				<div class="home-top-right-title">Sắp xếp theo</div>
				<div class="form-select">
					<select name="lct" class="lct">
                        <?php foreach($home['data']['loaicongtrinh'] as $key => $value) {
                            # code...
                        ?>
						<option value="<?php echo $value['id_tag']; ?>" <?php if(isset($_GET['lct'])){ if($_GET['lct'] == $value['id_tag']){echo 'selected';}  } ?> ><?php echo $value['name']; ?></option>
                        <?php  }?>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="form-select">
					<select name="tt" class="tt">
    					 <?php foreach($home['data']['trangthai'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>" <?php if(isset($_GET['tt'])){ if($_GET['tt'] == $value['id_tag']){echo 'selected';}  } ?>    ><?php echo $value['name']; ?></option>
                        <?php  }?>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="form-select">
					<select name="pc" class="pc">
						<?php foreach($home['data']['phongcach'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>"<?php if(isset($_GET['pc'])){ if($_GET['pc'] == $value['id_tag']){echo 'selected';}  } ?>  ><?php echo $value['name']; ?></option>
                        <?php  }?>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="form-select">
					<select name="hm" class="hm">
						<?php foreach($home['data']['hangmuc'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>"<?php if(isset($_GET['hm'])){ if($_GET['hm'] == $value['id_tag']){echo 'selected';}  } ?>   ><?php echo $value['name']; ?></option>
                        <?php  }?>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
                <div class="form-selectmb">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sliders-v" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-sliders-v fa-w-14 fa-2x">
                        <path fill="#248444" d="M112 96H96V16c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v80H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h16v336c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V160h16c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm320 128h-16V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v208h-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h16v208c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V288h16c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM272 352h-16V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v336h-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h16v80c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-80h16c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16z">
                        </path>
                    </svg>
                </div>
			</div>
		</div>
		<div class="home-bot">
			<div class="home-bot-list">
				<div class=" grid-container-3 grid-masonry-project js-index-grid-01 home-category-masonry" style="">
                    <?php foreach ($home['data']['items'] as $key => $value) {
                        # code...
                     ?>
                    <div class="item wow fadeIn">
                                <div class="kt-project-item">
                                    <?php if($value['pro'] == 1) { ?>
                                    <i class="ipro kt-icon size-20x34">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                                <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </i>
                                    <?php  }?>
                                    <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo 'cover'; else echo '100%'; ?> ; background-repeat: no-repeat;">
                                        <a href="site/detail-project?id=<?php echo $value['id_post']; ?>" title="" data-modalajaxproject="true">
                                            <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h2>
                                            <a href="/site/detail-project" title="" data-modalajaxproject="true">
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
                                                <div class="avatar js-viewUser tooltipstered" data-item="0">
                                                    <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <a href="" title="">
                                                    <span><?php echo $value['customer']['full_name']; ?></span>
                                                </a>
                                            </div>
                                            <div class="float-right">
                                                 <div class="float-right" style="display: flex;align-items: center;justify-content: center;">
                                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;" status="1">
                                                        <i class="fas fa-heart" style="color: #FFF;"></i>
                                                    </button>
                                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                                                        <i class="fa fa-bookmark" style="color: #FFF;"></i>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                    </div>
                    <?php } ?>
               	</div>
                <div class="text-center" style="margin: 50px 0">
                    <a href="tag-project?lct=<?php if(isset($_GET['lct'])) echo $_GET['lct'];else echo 0;  ?>&tt=<?php if(isset($_GET['tt'])) echo $_GET['tt'];else echo 0;  ?>&pc=<?php if(isset($_GET['pc'])) echo $_GET['pc'];else echo 0;  ?>&hm=<?php if(isset($_GET['hm'])) echo $_GET['hm'];else echo 0;  ?>&page=<?php if(isset($_GET['page'])) echo $_GET['page']+1;else echo 2; ?>">
                    <button type="button" class="btn btn-default kt-btn-more js-more-project-button loadhomecategory" page='<?php if(isset($_GET['page'])) echo $_GET['page']+1;else echo 2;  ?>' 
                    lct ="<?php if(isset($_GET['lct'])) echo $_GET['lct'];else echo 0;  ?>"
                    tt ="<?php if(isset($_GET['tt'])) echo $_GET['tt'];else echo 0;  ?>"
                    pc ="<?php if(isset($_GET['pc'])) echo $_GET['pc'];else echo 0;  ?>"
                    hm ="<?php if(isset($_GET['hm'])) echo $_GET['hm'];else echo 0;  ?>"
                    >
                        <i class="kt-icon bo-tron green size-16x14">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i><span>Xem thêm</span>
                    </button>
                    </a>
                </div>
			</div>
		</div>
	</div>
<div class="bg-home">
        <div class="home-filter-mb">
            <div class="home-filter-mb-close">
                <i class="fa fa-times"></i>
            </div>
            <div class="home-filter-mb-title">Sắp xếp theo</div>
            <div class="home-filter-mb-form">
                <div class="home-filter-mb-form-select">
                    <select name="lct" class="lct-mb">
                         <?php foreach($home['data']['loaicongtrinh'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>" <?php if(isset($_GET['lct'])){ if($_GET['lct'] == $value['id_tag']){echo 'selected';}  } ?> ><?php echo $value['name']; ?></option>
                        <?php  }?>

                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="home-filter-mb-form-select">
                    <select name="tt" class="tt-mb">
                         <?php foreach($home['data']['trangthai'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>" <?php if(isset($_GET['tt'])){ if($_GET['tt'] == $value['id_tag']){echo 'selected';}  } ?> ><?php echo $value['name']; ?></option>
                        <?php  }?>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="home-filter-mb-form-select">
                    <select name="pc" class="pc-mb">
                        
                        <?php foreach($home['data']['phongcach'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>" <?php if(isset($_GET['pc'])){ if($_GET['pc'] == $value['id_tag']){echo 'selected';}  } ?> ><?php echo $value['name']; ?></option>
                        <?php  }?>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="home-filter-mb-form-select">
                    <select name="hm" class="hm-mb">
                       
                         <?php foreach($home['data']['hangmuc'] as $key => $value) {
                            # code...
                        ?>
                        <option value="<?php echo $value['id_tag']; ?>" <?php if(isset($_GET['hm'])){ if($_GET['hm'] == $value['id_tag']){echo 'selected';}  } ?> ><?php echo $value['name']; ?></option>
                        <?php  }?>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="home-filter-mb-form-submit">
                    Xác nhận
                </div>
            </div>
        </div>
</div>
<?php echo \frontend\widgets\footerWidget::widget() ?>