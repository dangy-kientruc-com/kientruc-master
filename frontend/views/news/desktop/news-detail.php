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
<div class="new-main">
    <div class="new-top">
        <div class="new-top-left">
            
                    <a href="tap-chi"><div class="new-top-left-li">Tạp chí</div></a>
                    <?php foreach($detail['data']['breadcrumb'] as $key =>$value) { ?>
                    <div style="float: left; line-height: 32px; margin: 0 15px; color:#474747 !important;"><i class="fa fa-chevron-right"></i></div>

                    <a href="<?php if(isset($detail['data']['breadcrumb']) && $key ==1) {echo $detail['data']['breadcrumb'][0]['link']; echo "/";} ?><?php echo $value['link']; ?>-C<?php echo $value['id']; ?>">
                        <div class="new-top-left-li">
                        <?php echo $value['name']; ?>

                        </div>
                    </a>
                    <?php }?>
        </div>
        <div class="new-top-right">
            <div class="new-top-right-share">Chia sẻ <div class="new-top-right-share-icon"><i class="fa fa-share-alt"></i></div></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="new-mid">
        <div class="new-mid-left">
            <div class="detail-title"><?php echo $detail['data']['detail']['name']; ?></div>
            <div class="detail-tt">
               <?php echo $detail['data']['detail']['info'];  ?>
            </div>
            <div class="detail-comment-save">
                <div class="detail-comment">
                    <i class="far fa-comment-alt"></i>
                    <span>Bình luận</span>
                </div>
                <div class="detail-save">
                    <i class="far fa-bookmark"></i>
                    <span>Lưu vào album</span>
                </div>
            </div>
        </div>
        <div class="new-mid-right">
            <img src="https://www.kientruc.com/uploads/article/430x280<?php echo $detail['data']['detail']['avatar']['name']; ?>">
        </div>
        <div class="clear"></div>
    </div>
    <div class="new-bot">
        <div class="new-bot-left">
            <div class="">
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
                <div class="detail-info">
                    <div class="clear"></div>
                    <div class="detail-content">
                        <?php echo $detail['data']['detail']['full'];  ?>
                    </div>
                    
                </div>
                <div class="detail-lq">
                    <div class="detail-lq-title">Bài viết tương tự</div>
                    <ul>
                        <li><a href="">7 điều chủ nhà là người văn minh cần biết</a></li>
                        <li><a href="">Phong thủy cho nhà ở</a></li>
                        <li><a href="">Tìm kiến trúc sư chuyên thiết kế ở đâu</a></li>

                    </ul>
                </div>
                <div class="detail-keyword">
                    <div class="detail-keyword-title"> Từ khóa</div>
                    <div class="detail-keyword-ul">
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Diễn họa 3D</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Tk Điện nước</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Triển Khai kết cấu</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>

                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>
                        <div class="detail-keyword-li">
                            <a href=""><i></i> Làm phim</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="detail-g">
                    <div class="detail-like-number">
                        <i class="fa fa-thumbs-up"></i>
                        Like
                        <span>1</span>
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
                        <a href="">
                            <div class="default-d-title">
                                <?php echo $detail['data']['prev']['name']; ?>
                            </div>
                            <div class="news-block1-left-date">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
                                    <image xlink:href="images/icon-clock-2.svg" width="12"/>  
                                </svg>
                                21/1/2019
                            </div>
                        </a>
                    </div>
                    <div class="detail-d-li right">
                        <div class="detail-d-t">
                            BÀI SAU
                        </div>
                        <a href="">
                            <?php if(!$detail['data']['next']['name']) {   ?>
                            <div class="default-d-title">
                                <?php echo $detail['data']['next']['name']; ?>
                            </div>
                            <div class="news-block1-left-date">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
                                    <image xlink:href="images/icon-clock-2.svg" width="12"/>  
                                </svg>
                                21/1/2019
                            </div>
                        <?php } ?>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="comment">
                <div class="comment-top">
                    <div class="comment-top-img">
                        <img src="images/avatar.png">
                    </div>
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
                    <div class="clear"></div>
                </div>
                <div class="comment-numer">
                    <div class="comment-total">
                        16 Bình luận
                    </div>
                    <div class="comment-choise">
                        <div class="comment-choise-li active">Mới nhất</div>
                        <div class="comment-choise-li">Tiêu biểu nhất</div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="comment-bot">
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
                                    Phải viết là ai thích đống cổ phần đóng luôn và hướng luôn mức lương cao như vậy có tuyển dc người đấy.
                                    Phải viết là ai thích đống cổ phần đóng luôn và hướng luôn mức lương cao như vậy có tuyển dc người đấy.
                                </div>
                            </div>
                            <div class="comment-bot1-choise">
                                <div>Cảm ơn</div>
                                <div> Trả lời</div>
                                <div>1 ngày trước</div>
                            </div>
                            <div class="comment-bot2">
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
                            </div>
                            <div class="comment-bot2">
                                <div class="comment-bot2-img">
                                    <img src="images/avatar.png">
                                </div>
                                <div class="comment-bot2-right">
                                    <div class="relative">
                                        <div class="comment-bot2-question">
                                            <div class="comment-bot2-name">
                                                Tuấn Linh <span>Kiến trúc sư</span>
                                            </div>
                                            <div class="comment-bot2-text">
                                                Phải viết là ai thích đống cổ phần đóng luôn và hướng luôn          

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
                                    <div class="comment-bot2-choise">
                                        <div>1 ngày trước</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="comment-bot-form">
                                <div class="comment-top-img">
                                    <img src="images/avatar.png">
                                </div>
                                <div class="comment-form">
                                    <div class="comment-picture">
                                        <i class="fas fa-camera"></i>
                                        <input type="file" name="">
                                    </div>
                                     <div class="comment-text" type="text" contenteditable="true">
                                    </div> 
                                    <div class="comment-placeholder">
                                        Bình luận tại đây
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="text-center mt-30">
                    <button type="button" class="btn btn-default kt-btn-more js-more-project-button">
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
        <div class="new-bot-right">
            <div class="news-main-right-featured">
                <div class="news-main-right-featured-title">
                    Bài viết cùng chủ đề
                </div>
                <div class="news-main-right-featured-list">
                    <?php foreach($detail['data']['articlehot'] as $key =>$value) { ?>
                    <div class="news-main-right-featured-li">
                        <a href="">
                        <div class="news-main-right-featured-li-left">
                            <img src="https://www.kientruc.com/uploads/article/430x280<?php echo $value['avatar']['name']; ?>">
                        </div>
                        <div class="news-main-right-featured-li-right">
                            <div class="news-main-right-featured-li-title"><?php echo $value['name']; ?></div>
                          <!--   <div class="news-block1-left-date">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="12" width="12">
                                    <image xlink:href="images/icon-clock-2.svg" width="12"/>  
                                </svg>
                                    21/1/2019
                            </div> -->
                        </div></a>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="news-main-right-tb">
                <div class="news-main-right-tb-top">
                    <div class="news-main-right-title">
                        Dự án nổi bật
                    </div>
                    <div class="owl-dots-top">
                        <button role="button" class="owl-dot active"></button>
                        <button role="button" class="owl-dot"></button>
                        <button role="button" class="owl-dot"></button>
                        <button role="button" class="owl-dot"></button>
                        <button role="button" class="owl-dot"></button>
                    </div>
                </div>
                <div class="news-main-right-tb-bot">
                    <div class="news-main-right-tb-bot-in owl-carousel owl-theme owl-loaded owl-drag" id="news-right-project">
                        <?php foreach($detail['data']['projecthot'] as $key =>$value) { ?>
                        <div class="item wow fadeIn">
                                <div class="kt-project-item">
                                    <?php if($value['pro'] ==1) { ?>
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
                                    <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload'] ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare'] == 1 ) echo 'cover' ; else echo '100%'; ?>; background-repeat: no-repeat;">
                                        <a href="site/detail-project?id=<?php echo $value['id_post']; ?>" title="" data-modalajaxproject="true">
                                            <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload'] ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h2>
                                            <a href="/site/detail-project" title="" data-modalajaxproject="true">
                                                <?php echo $value['name']; ?>
                                            </a>
                                        </h2>
                                        
                                       <!--  <div class="clearfix"></div>
                                        <div class="kt-line kt-grey"></div> -->
                                        <!-- <div class="customer">
                                            <div class="float-left">
                                                <div class="avatar js-viewUser tooltipstered" data-item="0" data-toggle="tooltip" title="" data-original-title="Xem thêm chuyên gia">
                                                    <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <a href="" title="">
                                                    <span><?php echo $value['customer']['full_name']; ?></span>
                                                </a>
                                            </div>
                                            <div class="float-right" style="display: flex;align-items: center;justify-content: center;">
                                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                                                    <i class="fas fa-heart" style="color: #FFF;"></i>
                                                </button>
                                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                                                    <i class="fa fa-bookmark" style="color: #FFF;"></i>
                                                </button>
                                                
                                            </div>
                                            <div class="clearfix"></div>
                                        </div> -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php echo \frontend\widgets\footerWidget::widget() ?>