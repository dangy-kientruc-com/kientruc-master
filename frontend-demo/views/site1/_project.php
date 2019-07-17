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

                    <div class="kt-row">
                        <div class="col-md-8">
                            <?php
                            OwlCarouselWidget::begin([
                                'container' => 'div',
                                'containerOptions' => [
                                    'id' => 'container-id-02',
                                    'class' => 'nonloop-project owl-carousel owl-theme'
                                ],
                                'pluginOptions' => [
                                    'autoplay' => false,
                                    'autoplayTimeout' => 4000,
                                    'items' => 1,
                                    'margin' => 0,
                                    'loop' => false,
                                    'dots' => true,
                                    'nav' => false,
                                ]
                            ]);
                            ?>
                            <div class="kt-project-img-slide">
                                <a href="/site/detail-project" title="">
                                    <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="kt-project-img-slide">
                                <a href="/site/detail-project" title="">
                                    <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="kt-project-img-slide">
                                <a href="/site/detail-project" title="">
                                    <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <?php
                            OwlCarouselWidget::end();
                            ?>
                        </div>
                        <div class="col-md-4">
                            <div class="kt-project-head">
                                <button type="button" class="btn">
                                    <i class="fas fa-star"></i> DỰ ÁN TIÊU BIỂU
                                </button>
                                <h1>Khách sạn Condotel Đà Nẵng</h1>
                                <p><span>Nhà hàng</span> / <span>Khách sạn</span></p>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="list-unstyled kt-product-choise">
                                <li>
                                    <span>
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <b>1,256</b>
                                </li>
                                <li>
                                    <span>
                                        <i class="fas fa-comment-alt"></i>
                                    </span>
                                    <b>1,256</b>
                                </li>
                                <li>
                                    <span>
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <b>1,256</b>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div class="kt-project-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tellus id orci
                                lacinia convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames… <a href="/site/detail-project" title="">xem tiếp</a>
                            </div>
                            <div class="kt-row">
                                <div class="kt-project-info">
                                    <div class="col-md-6">
                                        <i class="fas fa-home"></i> Thể loại
                                    </div>
                                    <div class="col-md-6">
                                        <b>Nhà chung cư</b>

                                    </div>
                                    <div class="col-md-6">
                                        <i class="fas fa-arrows-alt-v"></i> Diện tích
                                    </div>
                                    <div class="col-md-6">
                                        <b>120m2</b>

                                    </div>
                                    <div class="col-md-6">
                                        <i class="fas fa-map-marker-alt"></i> Khu vực
                                    </div>
                                    <div class="col-md-6">
                                        <b>Tp.Hồ Chí Minh</b>

                                    </div>
                                    <div class="col-md-6">
                                        <i class="fas fa-dollar-sign"></i> Chi phí
                                    </div>
                                    <div class="col-md-6">
                                        <b>650.000.000 vnd</b>

                                    </div>
                                    <div class="col-md-6">
                                        <i class="fas fa-camera"></i> Trạng thái
                                    </div>
                                    <div class="col-md-6">
                                        <b>Ảnh chụp thực tế</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div style="min-height: 40px"></div>
                    <div class="kt-index-category">
                        <div class="kt-pull-left">
                            <h4>45 Dự án</h4>
                        </div>
                        <div class="kt-pull-right">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="" title="">
                                        <span>Sắp xếp theo</span>
                                    </a>
                                </li>

                                <li>
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" onclick="javascript:onClickView(1)">
                                                <input type="radio" name="options" id="option1" autocomplete="off"
                                                       checked>
                                                <i class="fas fa-list"></i>
                                            </label>
                                            <label class="btn btn-default active" onclick="javascript:onClickView(2)">
                                                <input type="radio" name="options" id="option2" autocomplete="off">
                                                <i class="fas fa-grip-horizontal"></i>
                                            </label>
                                            <label class="btn btn-default" onclick="javascript:onClickView(3)">
                                                <input type="radio" name="options" id="option3" autocomplete="off">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </label>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="kt-row">
                        <div id="change-view" class="grid-container-3">
                            <?php
                            for ($i=0;$i<10;$i++){
                                ?>
                                <div class="item transition">
                                    <div class="kt-project-item transition">
                                        <div class="view-option">
                                            <div class="item-image">
                                                <a href="/site/detail-project" title="">
                                                    <img src="/images/anh-3-4.jpg" alt=""
                                                         class="img-responsive">
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
                                                <div class="information">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed
                                                    tellus id
                                                    orci lacinia convallis. Pellentesque habitant morbi tristique senectus
                                                    et
                                                    netus
                                                    et malesuada fames… <a href="" title="">xem tiếp</a>
                                                </div>
                                            </div>
                                            <div class="item-option">
                                                <div class="kt-project-info">
                                                    <div class="col-md-6">
                                                        <i class="fas fa-home"></i> Thể loại
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Nhà chung cư</b>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <i class="fas fa-arrows-alt-v"></i> Diện tích
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>120m2</b>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <i class="fas fa-map-marker-alt"></i> Khu vực
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Tp.Hồ Chí Minh</b>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <i class="fas fa-dollar-sign"></i> Chi phí
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>650.000.000 vnd</b>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <i class="fas fa-camera"></i> Trạng thái
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Ảnh chụp thực tế</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                        <div id="change-view-map" class="hidden">
                            cai ban do o day
                        </div>
                    </div>

                </div>

            </div>

            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>
        </div>
    </div>
    <script type="text/javascript">
        function onClickView(tp) {
            switch (tp) {
                case 1:
                    $('body').find('#change-view').removeClass('hidden');
                    $('body').find('#change-view-map').addClass('hidden');
                    $('body').find('#change-view').removeClass('grid-container-3').addClass('grid-container-1');
                    break;
                case 2:
                    $('body').find('#change-view').removeClass('hidden');
                    $('body').find('#change-view-map').addClass('hidden');
                    $('body').find('#change-view').removeClass('grid-container-1').addClass('grid-container-3');
                    break;
                case 3:
                    $('body').find('#change-view').addClass('hidden');
                    $('body').find('#change-view-map').removeClass('hidden');
                    break;
            }
        }
    </script>
<?php
$this->registerCssFile("@web/css/user.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerCssFile("@web/css/project.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
