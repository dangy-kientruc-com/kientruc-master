<?php

use kv4nt\owlcarousel\OwlCarouselWidget;

/**
 * css description:
 * Page user: prefix kt-user-???
 * Noprefix -user- is use public website
 */
?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

        <div class="kt-main">

            <div style="min-height: 70px"></div>

            <div class="kt-user-main grid-container-2-user">

                <?= \frontend\widgets\leftWidget::widget() ?>

                <div class="kt-user-right">

                    <?= \frontend\widgets\menuUserWidget::widget() ?>
                    <div class="clearfix"></div>
                    <div style="min-height: 30px"></div>

                    <ol class="list-unstyled kt-link-back">
                        <li><a href="/shop-noi-that-C2.html" title="SHOP NỘI THẤT">Album</a>
                            <i class="kt-icon grey size-6x10">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                        </li>
                        <li><a href="/shop-noi-that/thiet-bi-bep-an-C433.html" title="Thiết Bị Bếp &amp; Ăn">Dự án</a>
                        </li>
                    </ol>

                    <h1>Phòng ngủ phong cách cổ điển</h1>
                    <div class="kt-user-date">Album được tạo bởi <b>Phạm Ngọc Dũng</b> ngày 12/2/2019</div>
                    <div class="kt-user-box-share">
                        <div class="share">
                            <a href="" title="">
                                <button type="button" class="btn"><i class="fas fa-eye"></i> Đang theo dõi</button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn"><i class="far fa-clone"></i> Coppy</button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn"><i class="fas fa-share-alt"></i> Chia sẽ</button>
                            </a>
                        </div>
                    </div>

                    <div style="min-height: 40px"></div>
                    <div class="kt-row">
                        <div class="grid-container-3">
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                                ?>
                                <div class="item">
                                    <div class="kt-project-item">
                                        <div class="kt-flex-container kt-share-box">
                                            <button type="button" class="btn" data-toggle="tooltip" title="Lưu lại">
                                                <i class="far fa-bookmark"></i>
                                            </button>
                                            <button type="button" class="btn" data-toggle="tooltip" title="Yêu thích">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="item-image">
                                            <a href="/site/detail-project" title="">
                                                <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                                            </a>
                                            <i>pro</i>
                                        </div>
                                        <div class="item-info">
                                            <h2>
                                                <a href="/site/detail-project" title="">
                                                    Chung cư thạch bàn
                                                </a>
                                            </h2>
                                            <div class="view">
                                                <div class="pull-left">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-eye"></i> <span>325</span></li>
                                                        <li><i class="fas fa-camera"></i> <span>325</span></li>
                                                        <li><i class="fas fa-heart"></i> <span>325</span></li>
                                                    </ul>
                                                </div>
                                                <div class="pull-right">
                                                    <p class="kt-text-right">
                                                        Chung cư
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="kt-line grey"></div>
                                            <div class="customer">
                                                <div class="pull-left">
                                                    <div class="avatar">
                                                        <img src="/images/avatar.png" alt=""
                                                             class="img-responsive">
                                                    </div>
                                                    <b>Phạm ngọc dũng</b>
                                                </div>
                                                <div class="pull-right">
                                                    <p class="kt-text-right">
                                                        <i class="fas fa-map-marker-alt"></i> Nghe An
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
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