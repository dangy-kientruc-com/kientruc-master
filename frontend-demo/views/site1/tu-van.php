<?php
/**
 * css description:
 * Page user: prefix kt-user-???
 * Noprefix -user- is use public website
 */
?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget() ?>

        <div class="kt-main">

            <div style="min-height: 70px"></div>

            <div class="kt-user-main grid-container-2-user">

                <?= \frontend\widgets\leftWidget::widget() ?>

                <div class="kt-user-right">

                    <?= \frontend\widgets\menuUserWidget::widget() ?>
                    <div class="clearfix"></div>
                    <div style="min-height: 30px"></div>

                    <div class="kt-index-category">
                        <div class="kt-pull-left">
                            <h4>12 Chủ đề đã tư vấn</h4>
                        </div>
                        <div class="kt-pull-right">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/frontend/web/index.php?r=site/category" title="">
                                        <span>Sắp xếp theo: </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/frontend/web/index.php?r=site/category" title="" class="clr">
                                        <button type="button" class="btn xem-them-more">Xem tất cả
                                            <i class="kt-icon bo-tron green size-6x10">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="kt-row">
                        <div class="grid-container-1">
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                                ?>
                                <div class="item">
                                    <div class="box-tu-van">
                                        <div class="col-2">
                                            <div class="pull-left head-left">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <img src="/frontend/web/images/avatar.png" alt="" class="img-responsive">
                                                    </li>
                                                    <li>
                                                        <b>Nguyễn an</b>
                                                    </li>
                                                    <li>
                                                        hỏi <i class="kt-icon grey size-6x10">
                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z" fill-rule="evenodd"></path>
                                                            </svg>
                                                        </i>
                                                    </li>
                                                    <li>
                                                        <a href="" title="">
                                                            <button type="button" class="btn">Nội thất</button>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pull-right head-right">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <button type="button" class="btn btn-link">
                                                            <i class="fas fa-comment-alt"></i> <span>12 bình luận</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-link">
                                                            <i class="fas fa-heart"></i> <span>12 bình luận</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-link">
                                                            <i class="fas fa-bookmark"></i> <span>12 bình luận</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2>Tư Vấn Về Nâng Cấp Khách Sạn</h2>
                                            <div class="descript">
                                                Tôi có 1 Khách sạn 2* ở Đăk Nông, với nhịp cột tối đa là 6m, cột
                                                300x300, có 5 tầng và cao 21.8m, Xây từ năm 2007. Tôi muốn nâng cấp lên
                                                và tăng thêm số tầng thì tôi tăng được tối đa bao nhiêu tầng? KTS tư vấn
                                                cho tôi với.
                                            </div>
                                            <div class="comment">
                                                <div class="avatar">
                                                    <img src="/frontend/web/images/avatar.png" alt=""
                                                         class="img-responsive">
                                                </div>
                                                <div class="box-text-comment">
                                                    <div class="pull-left cmm-head-left">
                                                        <b>Phạm Ngọc Dũng</b>
                                                        <i class="far fa-clock"></i> <span>2 ngày trước</span>
                                                    </div>
                                                    <div class="pull-right cmm-head-right text-right">
                                                        <span>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <b>15 đánh giá từ chuyên gia</b>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="text-info">
                                                        1. phải thực hiện quan trắc lún (nôm na là kiểm tra công trình
                                                        của bạn có bị lún không?, tốc độ lún như thế nào?) 2. check lại
                                                        toàn bộ kết cấu móng , hệ dầm cột có chất lượng như thế nào? (
                                                        hồ sơ hoàn công cũ, đào thăm móng, siêu âm cột, dầm, sàn)
                                                    </div>
                                                    <ul class="list-unstyled cmm-footer">
                                                        <li>
                                                            <button type="button" class="btn btn-link">
                                                                <i class="fas fa-comment-alt"></i> <span>12 bình luận</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-link">
                                                                <i class="fas fa-comment-alt"></i> <span>12 bình luận</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-link">
                                                                <i class="fas fa-comment-alt"></i> <span>12 bình luận</span>
                                                            </button>
                                                        </li>
                                                        <li class="pull-right">
                                                            <button type="button" class="btn btn-link">
                                                                <i class="fas fa-comment-alt"></i>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <b>Hình minh họa</b>
                                            <a href="/frontend/web/index.php?r=site/detail-tu-van" title="">
                                                <img src="/frontend/web/images/anh-3-4.jpg" alt="" class="img-responsive">
                                            </a>
                                            <b>Từ khóa</b>
                                            <button type="button" class="btn">
                                                <i class="fas fa-tag"></i> Giải pháp thi công
                                            </button>
                                            <button type="button" class="btn">
                                                <i class="fas fa-tag"></i> Kết cấu
                                            </button>
                                            <button type="button" class="btn">
                                                <i class="fas fa-tag"></i> Vật liệu xây dựng
                                            </button>
                                            <button type="button" class="btn">
                                                <i class="fas fa-tag"></i> Kết cấu
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>

            </div>

            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>
        </div>
    </div>


<?php

$this->registerCssFile("@web/css/user.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerCssFile("@web/css/tu-van.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);