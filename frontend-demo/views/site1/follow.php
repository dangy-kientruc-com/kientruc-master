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
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="kt-row">
                        <div id="change-view" class="grid-container-5">
                            <?php
                            for ($i = 0; $i < 15; $i++) {
                                ?>
                                <div class="item">
                                    <div class="box-user">
                                        <div class="col-1">
                                            <b class="kt-icon-level">
                                                <i class="">i</i>
                                            </b>

                                            <div class="avatar viewUserMore" data-item="0">
                                                <img src="/frontend/web/images/avatar.png" alt=""
                                                     class="img-responsive">
                                                <i class="fas fa-circle"></i>
                                            </div>
                                            <h2>
                                                <a href="/frontend/web/index.php?r=site/personal" title="">Nguyễn Huy
                                                    Hoàng</a>
                                            </h2>
                                            <div class="pull-left address">
                                                <i class="fas fa-map-marker-alt"></i> Hà nội
                                            </div>
                                            <div class="pull-right review">
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <ul class="list-unstyled thong-ke">
                                                <li>
                                                    <i class="fas fa-home"></i>
                                                    <span>Tổng dự án</span>
                                                    <b>87</b>
                                                </li>
                                                <li>
                                                    <i class="fas fa-home"></i>
                                                    <span>Người theo dõi</span>
                                                    <b>2.365</b>
                                                </li>
                                                <li>
                                                    <i class="fas fa-home"></i>
                                                    <span>Lời cảm ơn</span>
                                                    <b>156</b>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <div class="call-phone">
                                                <button type="button" class="btn kt-icon black size-15x14">
                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.552 11.067l-2.163-2.163c-.43-.43-1.144-.416-1.59.03L9.71 10.023l-.215-.12c-.688-.38-1.63-.903-2.62-1.895-.994-.994-1.517-1.937-1.9-2.625-.04-.073-.079-.144-.117-.21l.731-.73.36-.36c.446-.447.458-1.16.029-1.59L3.815.33c-.43-.43-1.143-.417-1.59.03l-.61.613.018.016c-.205.26-.376.562-.503.886-.117.309-.19.603-.223.898-.286 2.368.796 4.531 3.732 7.467 4.058 4.058 7.328 3.752 7.47 3.737.307-.037.601-.11.9-.227.322-.125.623-.296.883-.5l.014.012.617-.605c.446-.446.458-1.16.029-1.59z"
                                                              fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                                <button type="button" class="btn">
                                                    <i class="fas fa-envelope"></i>
                                                </button>
                                                <button type="button" class="btn kt-icon black size-15x13">
                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                                                              fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="button text-center">
                                                <button type="button" class="btn">
                                                    <i class="far fa-bookmark"></i> Ưu tiên
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="row-01 love-category">
                                                <div class="pull-left">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <i class="fas fa-home"></i>
                                                            <span>87 dự án</span>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-home"></i>
                                                            <span>1.352 Người theo dõi</span>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-home"></i>
                                                            <span>256 Lời cảm ơn</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="pull-right">
                                                    <button type="button" class="btn">
                                                        Vào trang cá nhân
                                                        <i class="kt-icon bo-tron green size-6x10">
                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="row-02">
                                                <div class="item-img">
                                                    <a href="" title="">
                                                        <img src="/frontend/web/images/anh-3-4.jpg" alt=""
                                                             class="img-responsive">
                                                    </a>
                                                    <div class="title-pro transition">
                                                        <h2>
                                                            <a href="" title="">Chung cư Thạch Bàn</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="item-img">
                                                    <a href="" title="">
                                                        <img src="/frontend/web/images/anh-3-4.jpg" alt=""
                                                             class="img-responsive">
                                                    </a>
                                                    <div class="title-pro transition">
                                                        <h2>
                                                            <a href="" title="">Chung cư Thạch Bàn</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="item-img">
                                                    <a href="" title="">
                                                        <img src="/frontend/web/images/anh-3-4.jpg" alt=""
                                                             class="img-responsive">
                                                    </a>
                                                    <div class="title-pro transition">
                                                        <h2>
                                                            <a href="" title="">Chung cư Thạch Bàn</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
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

    <script type="text/javascript">
        function onClickView(tp) {
            switch (tp) {
                case 1:
                    $('body').find('#change-view').removeClass('grid-container-5').addClass('grid-container-1');
                    break;
                case 2:
                    $('body').find('#change-view').removeClass('grid-container-1').addClass('grid-container-5');
                    break;
            }
        }
    </script>


<?php

$this->registerCssFile("@web/css/user.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerCssFile("@web/css/love.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);