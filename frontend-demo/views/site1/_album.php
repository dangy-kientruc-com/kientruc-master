<?php

use kv4nt\owlcarousel\OwlCarouselWidget;

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
                    <div class="kt-title-page">
                        <div class="pull-left">
                            <h2>8 Album</h2>
                        </div>
                        <div class="pull-right">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#">
                                        <span>Tất cả</span>
                                    </a></li>
                                <li><a href="#">
                                        <span>Album hình ảnh (3)</span>
                                    </a></li>
                                <li><a href="#">
                                        <span>Album dự án (5)</span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="kt-line grey"></div>

                    <div style="min-height: 30px"></div>
                    <div class="kt-row">
                        <div class="grid-container-3">
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                                ?>
                                <div class="item">
                                    <div class="kt-project-item">
                                        <div class="item-image">
                                            <a href="/site/idea-project" title="">
                                                <img src="/images/anh-3-4.jpg" alt=""
                                                     class="img-responsive">
                                            </a>
                                            <i>pro</i>
                                        </div>
                                        <div class="item-info">
                                            <h2>
                                                <a href="/site/idea-project" title="">
                                                    Chung cư thạch bàn
                                                </a>
                                            </h2>
                                            <div class="view">
                                                <div class="pull-left">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-home"></i> <span>325 dự án</span></li>
                                                    </ul>
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
                                                    <div class="box-share-button">
                                                        <a href="" title="">
                                                            <button type="button" class="btn"><i
                                                                        class="far fa-bookmark"></i></button>
                                                        </a>
                                                        <a href="" title="">
                                                            <button type="button" class="btn"><i
                                                                        class="far fa-clone"></i>
                                                            </button>
                                                        </a>
                                                        <a href="" title="">
                                                            <button type="button" class="btn"><i
                                                                        class="fas fa-share-alt"></i></button>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="kt-project-item">
                                        <div class="item-image">
                                            <a href="/site/idea-album" title="">
                                                <img src="/images/anh-3-4.jpg" alt=""
                                                     class="img-responsive">
                                            </a>
                                            <i>pro</i>
                                        </div>
                                        <div class="item-info">
                                            <h2>
                                                <a href="/site/idea-album" title="">
                                                    Chung cư thạch bàn
                                                </a>
                                            </h2>
                                            <div class="view">
                                                <div class="pull-left">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-image"></i> <span>325 hình ảnh</span></li>
                                                    </ul>
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
                                                    <div class="box-share-button">
                                                        <a href="" title="">
                                                            <button type="button" class="btn"><i
                                                                        class="far fa-bookmark"></i></button>
                                                        </a>
                                                        <a href="" title="">
                                                            <button type="button" class="btn"><i
                                                                        class="far fa-clone"></i>
                                                            </button>
                                                        </a>
                                                        <a href="" title="">
                                                            <button type="button" class="btn"><i
                                                                        class="fas fa-share-alt"></i></button>
                                                        </a>
                                                    </div>
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
$this->registerCssFile("@web/css/album.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
