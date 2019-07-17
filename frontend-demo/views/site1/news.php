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
                <div class="box-ticker-news">
                    <div class="td td1">
                        <span>Tin mới</span>
                    </div>
                    <div class="td td2" id="findWidth">
                        <div class="vticker">
                            <ul class="list-unstyled">
                                <li>
                                    <h2>
                                        <a href="" title="">
                                            Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay
                                        </a>
                                    </h2>
                                    <p>
                                        <a href="" title="">
                                            Trong chuyên mục <b>Thiết kế nội thất</b>
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <h2>
                                        <a href="" title="">
                                            Hey !!! Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay
                                        </a>
                                    </h2>
                                    <p>
                                        <a href="" title="">
                                            Trong chuyên mục <b>Thiết kế nội thất</b>
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <h2>
                                        <a href="" title="">
                                            Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay
                                        </a>
                                    </h2>
                                    <p>
                                        <a href="" title="">
                                            Trong chuyên mục <b>Thiết kế nội thất</b>
                                        </a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="td td3">
                        <button type="button" class="btn up">
                            <i class="kt-icon bo-tron green size-8x10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                    <path d="M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                        </button>
                        <button type="button" class="btn down">
                            <i class="kt-icon bo-tron green size-8x10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                          fill-rule="evenodd"></path>
                                </svg>
                            </i>
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="container">
            <div class="kt-row">
                <div class="box-head-news">
                    <div class="item1">
                        <div class="box-news">
                            <a href="" title="">
                                <img style="height: 422px" src="/images/565x422.jpg" alt=""
                                     class="img-fluid">
                            </a>
                            <div class="title">
                                <a href="" title="">
                                    <button type="button" class="btn">Mẫu nhà đẹp</button>
                                </a>
                                <a href="" title="">
                                    <h2>Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay</h2>
                                </a>
                                <ul class="list-unstyled">
                                    <!--<li>
                                        <i class="kt-icon white size-14x12">
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
                                        <i class="kt-icon white size-15x13">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                        <span>Nội thất</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item2">
                        <div class="box-news">
                            <a href="" title="">
                                <img style="height: 206px" src="/images/560x220.jpg" alt=""
                                     class="img-fluid">
                            </a>
                            <div class="title">
                                <a href="" title="">
                                    <button type="button" class="btn">Mẫu nhà đẹp</button>
                                </a>
                                <a href="" title="">
                                    <h2>Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item3">
                        <div class="box-news">
                            <a href="" title="">
                                <img style="height: 206px" src="/images/270x220.jpg" alt=""
                                     class="img-fluid">
                            </a>
                            <div class="title">
                                <a href="" title="">
                                    <button type="button" class="btn">Mẫu nhà đẹp</button>
                                </a>
                                <a href="" title="">
                                    <h2>Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item4">
                        <div class="box-news">
                            <a href="" title="">
                                <img style="height: 206px" src="/images/270x220_2.jpg" alt=""
                                     class="img-fluid">
                            </a>
                            <div class="title">
                                <a href="" title="">
                                    <button type="button" class="btn">Mẫu nhà đẹp</button>
                                </a>
                                <a href="" title="">
                                    <h2>Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện nay</h2>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php
        for ($k = 0; $k < 3; $k++) {
            ?>
            <div class="container">
                <div class="kt-row">
                    <div style="min-height: 30px"></div>
                    <div class="kt-index-category">
                        <div class="kt-pull-left">
                            <a href="/site/category" title="">
                                <h4 class="active">Nội thất</h4>
                            </a>
                        </div>
                        <div class="kt-pull-right">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/site/category" title="">
                                        <span style="font-weight: 500">Đồ nội thất</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span style="font-weight: 500">Phòng khách</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span style="font-weight: 500">Nhà bếp</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span style="font-weight: 500">Phòng ngủ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span style="font-weight: 500">Phòng ăn</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span style="font-weight: 500">Khác</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div style="min-height: 13px"></div>
                    <div class="kt-line grey"></div>
                    <div style="min-height: 15px"></div>
                    <div class="kt-row">
                        <div class="grid-container-3">
                            <div class="item first-item">
                                <div class="col-one">
                                    <div class="image">
                                        <a href="" title="">
                                            <img src="/images/565x422.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <a href="" title="">
                                        <h3 class="title">Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện
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
                                        <h4 class="info">Một trong những ý tưởng trang trí phòng khách hot nhất hiện nay
                                            không thể không
                                            bỏ
                                            qua đó chính là phong cách hiện đại. Một giải pháp thiết kế không bao giờ bị
                                            lỗi
                                            thời...</h4>
                                    </a>
                                </div>
                            </div>
                            <?php
                            for ($i = 0; $i < 10; $i++) {
                                ?>
                                <div class="item second-item">
                                    <div class="col-two">
                                        <div class="image">
                                            <a href="" title="">
                                                <img src="/images/565x422.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <a href="" title="">
                                            <h3 class="title">Thiết kế nội thất hoàn hảo với phông màu xanh.</h3>
                                        </a>
                                        <ul class="list-unstyled date">
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
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

        <div class="container">
            <div class="kt-row">
                <div style="min-height: 30px"></div>
                <div class="kt-index-category">
                    <div class="kt-pull-left">
                        <a href="/site/category" title="">
                            <h4 class="active">Nội thất</h4>
                        </a>
                    </div>
                    <div class="kt-pull-right">
                        <ul class="list-unstyled">
                            <li>
                                <a href="/site/category" title="">
                                    <span style="font-weight: 500">Đồ nội thất</span>
                                </a>
                            </li>
                            <li>
                                <a href="/site/category" title="">
                                    <span style="font-weight: 500">Phòng khách</span>
                                </a>
                            </li>
                            <li>
                                <a href="/site/category" title="">
                                    <span style="font-weight: 500">Nhà bếp</span>
                                </a>
                            </li>
                            <li>
                                <a href="/site/category" title="">
                                    <span style="font-weight: 500">Phòng ngủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="/site/category" title="">
                                    <span style="font-weight: 500">Phòng ăn</span>
                                </a>
                            </li>
                            <li>
                                <a href="/site/category" title="">
                                    <span style="font-weight: 500">Khác</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div style="min-height: 13px"></div>
                <div class="kt-line grey"></div>
                <div style="min-height: 15px"></div>
                <div class="kt-row">
                    <div class="grid-container-3">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <div class="item">
                                <div class="col-one">
                                    <div class="image">
                                        <a href="" title="">
                                            <img src="/images/565x422.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <a href="" title="">
                                        <h3 class="title">Top 10 mẫu thiết kế nội thất phòng khách đẳng cấp nhất hiện
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
                                        <h4 class="info">Một trong những ý tưởng trang trí phòng khách hot nhất hiện nay
                                            không thể không
                                            bỏ
                                            qua đó chính là phong cách hiện đại. Một giải pháp thiết kế không bao giờ bị
                                            lỗi
                                            thời...</h4>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div style="min-height: 20px"></div>
                                <div class="col-two">
                                    <div class="image">
                                        <a href="" title="">
                                            <img src="/images/565x422.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <a href="" title="">
                                        <h3 class="title">Thiết kế nội thất hoàn hảo với phông màu xanh.</h3>
                                    </a>
                                    <ul class="list-unstyled date">
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
                                </div>
                                <div class="clearfix"></div>
                                <div style="min-height: 20px"></div>
                                <div class="col-two">
                                    <div class="image">
                                        <a href="" title="">
                                            <img src="/images/565x422.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <a href="" title="">
                                        <h3 class="title">Thiết kế nội thất hoàn hảo với phông màu xanh.</h3>
                                    </a>
                                    <ul class="list-unstyled date">
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
                                </div>
                                <div class="clearfix"></div>
                                <div style="min-height: 20px"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div style="min-height: 30px"></div>
        <?= \frontend\widgets\footerWidget::widget() ?>

    </div>

    <script type="text/javascript">
        async function newsTicker() {
            var hei = await $('body').find('#findWidth').width();
            await $('.vticker').css({'width': hei + 'px'}).easyTicker({
                direction: 'up',
                easing: 'easeInOutBack',
                speed: 'slow',
                interval: 2000,
                height: 'auto',
                visible: 1,
                mousePause: 0,
                controls: {
                    up: '.up',
                    down: '.down',
                    //toggle: '.toggle',
                    //stopText: 'Stop !!!'
                }
            }).data('easyTicker');
        }
    </script>

<?php
$this->registerCssFile("@web/css/news.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/library/jquery.easing.min.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/library/jquery.easy-ticker.min.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("newsTicker();");