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
            <div style="min-height: 40px"></div>
            <div class="clearfix"></div>
            <div class="kt-container">
                <div class="grid-container-2-fix">
                    <div class="item1">
                        <div class="detail-ask-left">
                            <ul class="list-unstyled link">
                                <li>
                                    <img src="/frontend/web/images/avatar.png" alt="" class="img-responsive">
                                </li>
                                <li>
                                    <b>Nguyễn An</b>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Đà nẵng
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <h1>Sàn Nhà Bằng Gỗ Có Tốt Không?</h1>
                            <div class="pull-right save">
                                <button type="button" class="btn">
                                    <i class="far fa-bookmark"></i> Quan tâm
                                </button>
                            </div>
                            <ul class="list-unstyled option">
                                <li>
                                    <i class="fas fa-eye"></i> <b>213</b>
                                </li>
                                <li>
                                    <i class="fas fa-comment-alt"></i> <b>213</b>
                                </li>
                                <li>
                                    <i class="fas fa-heart"></i> <b>213</b>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>
                            <div class="full">
                                Tôi có 1 Khách sạn 2* ở Đăk Nông, với nhịp cột tối đa là 6m, cột 300x300, có 5 tầng và
                                cao
                                21.8m, Xây từ năm 2007. Tôi muốn nâng cấp lên và tăng thêm số tầng thì tôi tăng được tối
                                đa
                                bao nhiêu tầng? KTS tư vấn cho tôi với.
                            </div>
                            <div class="slide-image">
                                <div class="item">
                                    <img src="/frontend/web/images/anh-3-4.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="/frontend/web/images/anh-3-4.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="/frontend/web/images/anh-3-4.jpg" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tag">
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
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <?=\frontend\widgets\commentWidget::widget()?>

                        </div>
                    </div>
                    <div class="item2">
                        <div class="detail-ask-right">
                            <button type="button" class="btn button-ask">
                                Đặt câu hỏi
                            </button>
                            <div class="h2">Từ khóa Hot</div>
                            <div class="tag">
                                <?php
                                for ($i = 0; $i < 6; $i++) {
                                    ?>
                                    <a href="" title="">
                                        <button type="button" class="btn">
                                            <i class="fas fa-tag"></i> <b>Giải pháp thi công</b> <span>235</span>
                                        </button>
                                    </a>
                                    <a href="" title="">
                                        <button type="button" class="btn">
                                            <i class="fas fa-tag"></i> <b>Kết cấu</b> <span>36</span>
                                        </button>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>

                            <div class="register">
                                <a href="" title="">
                                    <button type="button" class="btn button-register">
                                        Đặt câu hỏi
                                    </button>
                                </a>
                            </div>

                            <div class="h2">Cùng chủ đề</div>
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                                ?>
                                <div class="item-right">
                                    <div class="thumb">
                                        <img src="/frontend/web/images/anh-3-4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="info">
                                        <h3>Tôi Cần Làm Mới Lại Nhà Phố 4x15 , 3 Lầu</h3>
                                        <b>
                                            <i class="fas fa-comment-alt"></i>
                                            3 phản hồi
                                        </b>
                                    </div>
                                    <div class="clearfix"></div>
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
$this->registerCssFile("@web/css/detail-tu-van.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);