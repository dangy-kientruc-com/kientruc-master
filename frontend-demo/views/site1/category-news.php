<?php

use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

/**
 * css description:
 * Page index: prefix kt-index-???
 * Noprefix -index- is use public website
 */
?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

        <div class="container">
            <div class="kt-row">
                <div style="min-height: 20px"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tạp chí</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <i class="kt-icon grey size-6x10">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                            Nội thất
                        </li>
                    </ol>
                </nav>
                <div class="kt-line grey"></div>
                <div style="min-height: 15px"></div>
            </div>
        </div>

        <div class="container">
            <div class="kt-row">
                <div class="kt-row">
                    <div class="grid-container-3-fix">
                        <div class="left">
                            <div class="transition sticky" style="padding: 15px;top: 60px;">
                                <ul class="list-unstyled menu-left">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        ?>
                                        <li class="menu-left-item">
                                            <a href="phong-thuy-C8" title="PHONG THỦY">PHONG THỦY</a>
                                            <button type="button" class="btn transition" onclick="javascript:openMenu(this)">
                                                <i class="kt-icon grey size-6x10">
                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                              fill-rule="evenodd"></path>
                                                    </svg>
                                                </i>
                                            </button>

                                            <ul class="list-unstyled menu-left-sub">
                                                <li class="menu-left-item">
                                                    <a href="phong-thuy/phong-thuy-nha-C9" title="PHONG THỦY NHÀ ">
                                                        PHONG THỦY NHÀ </a>
                                                </li>
                                                <li class="menu-left-item">
                                                    <a href="phong-thuy/xem-huong-nha-C10" title="XEM HƯỚNG NHÀ">
                                                        XEM HƯỚNG NHÀ </a>
                                                </li>
                                                <li class="menu-left-item">
                                                    <a href="phong-thuy/mau-sac-phong-thuy-C11" title="MÀU SẮC PHONG THỦY">
                                                        MÀU SẮC PHONG THỦY </a>
                                                </li>
                                                <li class="menu-left-item">
                                                    <a href="phong-thuy/xem-tuoi-lam-nha-C15" title="XEM TUỔI LÀM NHÀ">
                                                        XEM TUỔI LÀM NHÀ </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="grid-container-2">
                                <?php
                                for ($i = 0; $i < 10; $i++) {
                                    ?>
                                    <div class="item item-news">
                                        <div class="col-one">
                                            <div class="image">
                                                <a href="" title="">
                                                    <img src="/images/565x422.jpg" alt=""
                                                         class="img-fluid">
                                                </a>
                                            </div>
                                            <a href="" title="">
                                                <h3 class="title">Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất
                                                    hiện
                                                    nay</h3>
                                            </a>
                                            <ul class="list-unstyled date">
                                                <!--<li>
                                                    <i class="kt-icon black size-14x12">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                                            <g fill-rule="evenodd">
                                                                <path d="M7.6 0a7 7 0 1 0 0 13.9A7 7 0 0 0 7.6 0zm0 12a5.1 5.1 0 1 1 0-10.2 5.1 5.1 0 0 1 0 10.3z"
                                                                      fill-rule="nonzero"/>
                                                                <path d="M10.1 6H8.6V3.3a.9.9 0 1 0-1.8 0V7c0 .5.4 1 .9 1H10a1 1 0 0 0 0-1.9z"/>
                                                            </g>
                                                        </svg>
                                                    </i>
                                                    <span>21/1/2019</span>
                                                </li>-->
                                                <li>
                                                    <i class="kt-icon black size-15x13">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                            <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                                  fill-rule="nonzero"/>
                                                        </svg>
                                                    </i>
                                                    <span>Nội thất</span>
                                                </li>
                                            </ul>
                                            <a href="" title="">
                                                <h4 class="info">Một trong những ý tưởng trang trí phòng khách hot nhất
                                                    hiện
                                                    nay
                                                    không thể không
                                                    bỏ
                                                    qua đó chính là phong cách hiện đại. Một giải pháp thiết kế không
                                                    bao
                                                    giờ bị
                                                    lỗi
                                                    thời...</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div style="min-height: 30px"></div>
        <?= \frontend\widgets\footerWidget::widget() ?>

    </div>

    <script type="text/javascript">
        function openMenu(el) {
            $('body').find('.menu-left-sub').each(function (e) {
                $(this).slideUp();
                $(this).prev('button').removeClass('rotate');
            });
            $(el).addClass('rotate');
            $(el).next().slideDown();
        }
    </script>

<?php
$this->registerCssFile("@web/css/category-news.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
