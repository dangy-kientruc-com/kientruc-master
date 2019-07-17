<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/17/2019
 * Time: 10:30 AM
 */
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

echo $this->render('render/modal');
if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    echo $this->render('mobile/index-modal');

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    echo $this->render('mobile/index-modal');

} else {
    //la desktop
    echo $this->render('desktop/index-modal');
}
?>

    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 1]) ?>
        <div class="kt-grid grid-2">
            <div class="grid-item" style="background-color: #e6f1f9;">
                <?php
                if (\Yii::$app->mobileDetect->isDescktop()) {
                    //la desktop
                    echo $this->render('desktop/index-left');
                }
                ?>
            </div>
            <div class="grid-item">

                <div class="bg-search">
                    <div class="box-form">
                        <h2>TÌM KIẾM KIẾN TRÚC SƯ NHANH CHÓNG - DỄ DÀNG</h2>
                        <?php
                        $form = ActiveForm::begin([
                            'method' => 'get',
                            'action' => ['controller/action'],
                        ]);
                        ?>
                        <div class="grid-search-5">
                            <div class="td item-01">
                                <div class="height-50px">
                                    <?= Select2::widget([
                                        'bsVersion' => '4.x',
                                        'hideSearch' => true,
                                        'name' => 'select1',
                                        'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                        'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                        'options' => ['placeholder' => 'Địa điểm'],
                                        'pluginOptions' => [
                                            'allowClear' => false
                                        ],
                                    ]); ?>
                                </div>
                            </div>
                            <div class="td item-02">
                                <div class="height-50px">
                                    <?= Select2::widget([
                                        'bsVersion' => '4.x',
                                        'hideSearch' => true,
                                        'name' => 'select2',
                                        'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                        'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                        'options' => ['placeholder' => 'Loại công trình'],
                                        'pluginOptions' => [
                                            'allowClear' => false
                                        ],
                                    ]); ?>
                                </div>
                            </div>
                            <div class="td item-03">
                                <div class="height-50px">
                                    <?= Select2::widget([
                                        'bsVersion' => '4.x',
                                        'hideSearch' => true,
                                        'name' => 'select3',
                                        'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                        'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                        'options' => ['placeholder' => 'Hạng mục thiết kế'],
                                        'pluginOptions' => [
                                            'allowClear' => false
                                        ],
                                    ]) ?>
                                </div>
                            </div>
                            <div class="td item-04">
                                <button type="button" class="btn btn-submit-single hover">
                                    <i class="kt-icon white size-14x14">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                            <path d="M13.7 12l-3-3h-.1c.6-1 1-2 1-3.2a5.8 5.8 0 1 0-2.7 4.8l3.1 3a1.2 1.2 0 0 0 1.7-1.6zm-8-2.5a3.8 3.8 0 1 1 0-7.5 3.8 3.8 0 0 1 0 7.5z"
                                                  fill-rule="nonzero"></path>
                                        </svg>
                                    </i>
                                    <span>Tìm kiến trúc sư</span>
                                </button>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                        <div style="min-height: 50px"></div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div style="min-height: 30px"></div>
                <div class="padding-box-desktop">
                    <div class="clearfix index-category" id="navMainParent0">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Kiến trúc sư tiêu biểu</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="min-height: 20px"></div>

                <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/index-slide');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/index-slide');

                } else {
                    //la desktop
                    echo $this->render('desktop/index-slide');
                }
                ?>

                <div style="min-height: 45px"></div>
                <div class="padding-box-desktop">
                    <div class="clearfix index-category" id="navMainParent1">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Dự án nổi bật</h4>
                            </a>
                        </div>
                        <div class="float-right menuUl">
                            <ul class="list-unstyled">
                                <li class="active">
                                    <a href="/site/category" title="">
                                        <span>Tất cả</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span>Nhà chung cư</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span>Nhà phố</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span>Văn phòng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span>Nhà hàng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="">
                                        <span>Sân vườn</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/category" title="" class="clr">
                                        <button type="button" class="btn xem-them-more">
                                            <span>Xem tất cả</span>
                                            <i class="kt-icon bo-tron green size-6x10">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </a>
                                </li>
                                <li class="dropdown more" style="display: none">
                                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="kt-icon grey size-12x8">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                                <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z"
                                                      fill-rule="evenodd"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div style="min-height: 5px"></div>
                <div class="kt-row">
                    <div class="grid-container-3 grid-masonry-project js-index-grid-01">
                        <?php
                        for ($i = 0; $i < 6; $i++) {
                            ?>
                            <div class="item wow fadeIn">
                                <div class="kt-project-item">
                                    <i class="ipro kt-icon size-20x34">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z"
                                                      stroke="#70BC4E" fill="#98D37E"/>
                                                <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z"
                                                      stroke-opacity=".5" stroke="#248444" stroke-width=".8"
                                                      fill="#FFF" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                    </i>
                                    <div class="kt-flex-container kt-share-box hover transition">
                                        <button type="button" class="btn" onclick="javascript:modalAddAlbum()"
                                                data-toggle="tooltip" title=""
                                                data-original-title="Lưu lại">
                                            <i class="far fa-bookmark"></i>
                                        </button>
                                        <button type="button" class="btn" data-toggle="tooltip" title=""
                                                data-original-title="Yêu thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="item-image">
                                        <a href="/site/detail-project" title=""
                                           data-modalAjaxProject="true">
                                            <img src="/images/anh-3-4.jpg" alt=""
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h2>
                                            <a href="/site/detail-project" title=""
                                               data-modalAjaxProject="true">
                                                Chung cư Thạch Bàn
                                            </a>
                                        </h2>
                                        <div class="view">
                                            <div class="float-left">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="kt-icon middle grey size-17x12">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 20 14">
                                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                                      fill-rule="nonzero"/>
                                                            </svg>
                                                        </i>
                                                        <span>1,266</span>
                                                    </li>
                                                    <li><i class="fas fa-camera"></i> <span>5</span></li>
                                                    <li><i class="fas fa-heart"></i> <span>89</span></li>
                                                </ul>
                                            </div>
                                            <div class="float-right">
                                                <p class="kt-text-right">
                                                    <a href="" title="">
                                                        Chung cư
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="kt-line kt-grey"></div>
                                        <div class="customer">
                                            <div class="float-left">
                                                <div class="avatar js-viewUser" data-item="0">
                                                    <img src="/images/avatar.png" alt=""
                                                         class="img-fluid">
                                                </div>
                                                <a href="" title="">
                                                    <span>Phạm Ngọc Dũng</span>
                                                </a>
                                            </div>
                                            <div class="float-right">
                                                <p class="kt-text-right-2">
                                                    <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                            <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                                                  fill-rule="nonzero" fill="#474747"/>
                                                        </svg>
                                                    </i>
                                                    <span>Nghệ An</span>
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
                    <div class="page-load-status text-center" style="display:none;width: 100%;">
                        <div class="loader-ellips infinite-scroll-request">
                            <span class="loader-ellips__dot"></span>
                            <span class="loader-ellips__dot"></span>
                            <span class="loader-ellips__dot"></span>
                            <span class="loader-ellips__dot"></span>
                        </div>
                        <p class="infinite-scroll-last">End of content</p>
                        <p class="infinite-scroll-error">No more pages to load</p>
                    </div>
                    <!-- .photo-item template HTML -->
                    <script type="text/html" id="photo-item-template">
                        <div class="item">
                            <div class="kt-project-item">
                                <i class="ipro kt-icon size-20x34">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z"
                                                  stroke="#70BC4E" fill="#98D37E"/>
                                            <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z"
                                                  stroke-opacity=".5" stroke="#248444" stroke-width=".8"
                                                  fill="#FFF" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </i>
                                <div class="kt-flex-container kt-share-box hover transition">
                                    <button type="button" class="btn" onclick="javascript:modalAddAlbum()"
                                            data-toggle="tooltip" title=""
                                            data-original-title="Lưu lại">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                    <button type="button" class="btn" data-toggle="tooltip" title=""
                                            data-original-title="Yêu thích">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                                <div class="item-image">
                                    <a href="/site/detail-project" title=""
                                       data-modalAjaxProject="true">
                                        <img src="/images/anh-3-4.jpg" alt=""
                                             class="img-fluid">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <h2>
                                        <a href="/site/detail-project" title=""
                                           data-modalAjaxProject="true">
                                            Chung cư Thạch Bàn
                                        </a>
                                    </h2>
                                    <div class="view">
                                        <div class="float-left">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="kt-icon middle grey size-17x12">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 20 14">
                                                            <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                                  fill-rule="nonzero"/>
                                                        </svg>
                                                    </i>
                                                    <span>1,266</span>
                                                </li>
                                                <li><i class="fas fa-camera"></i> <span>5</span></li>
                                                <li><i class="fas fa-heart"></i> <span>89</span></li>
                                            </ul>
                                        </div>
                                        <div class="float-right">
                                            <p class="kt-text-right">
                                                <a href="" title="">
                                                    Chung cư
                                                </a>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="kt-line kt-grey"></div>
                                    <div class="customer">
                                        <div class="float-left">
                                            <div class="avatar js-viewUser" data-item="0">
                                                <img src="/images/avatar.png" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <a href="" title="">
                                                <span>Phạm Ngọc Dũng</span>
                                            </a>
                                        </div>
                                        <div class="float-right">
                                            <p class="kt-text-right-2">
                                                <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                        <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                                              fill-rule="nonzero" fill="#474747"/>
                                                    </svg>
                                                </i>
                                                <span>Nghệ An</span>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </script>
                </div>

                <div style="min-height: 10px"></div>
                <div class="text-center">
                    <button type="button" class="btn btn-default kt-btn-more js-more-project-button">
                        <i class="kt-icon bo-tron green size-16x14">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i> <span>Xem thêm</span>
                    </button>
                </div>

                <div style="min-height: 85px"></div>
                <div class="padding-box-desktop">
                    <div class="clearfix index-category" id="navMainParent2">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Showroom</h4>
                            </a>
                        </div>
                        <div class="float-right menuUl">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/site/category" title="" class="clr">
                                        <button type="button" class="btn xem-them-more">
                                            <span>Xem tất cả</span>
                                            <i class="kt-icon bo-tron green size-6x10">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </a>
                                </li>
                                <li class="dropdown more" style="display: none">
                                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="kt-icon grey size-12x8">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                                <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z"
                                                      fill-rule="evenodd"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div style="min-height: 7px"></div>
                <div class="kt-row">
                    <div class="grid-container-4 grid-masonry-category js-index-grid-02">
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="item wow fadeIn">
                                <div class="kt-category-item">
                                    <div class="item-image">
                                        <a href="" title="">
                                            <img src="/images/funiture.jpg" alt=""
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h3>
                                            <a href="" title="">
                                                Thiết bị phòng tắm
                                            </a>
                                        </h3>
                                        <h4>
                                            <b>132</b>
                                            <span>sản phẩm</span>
                                        </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div style="min-height: 45px"></div>
                <div class="padding-box-desktop">
                    <div class="clearfix index-category" id="navMainParent3">
                        <div class="float-left menuH4">
                            <a href="/site/category" title="">
                                <h4 class="active">Tin tức</h4>
                            </a>
                        </div>
                        <div class="float-right menuUl">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/site/category" title="" class="clr">
                                        <button type="button" class="btn xem-them-more">
                                            <span>Xem tất cả</span>
                                            <i class="kt-icon bo-tron green size-6x10">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </a>
                                </li>
                                <li class="dropdown more" style="display: none">
                                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="kt-icon grey size-12x8">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                                <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z"
                                                      fill-rule="evenodd"></path>
                                            </svg>
                                        </i>
                                    </button>
                                    <ul class="list-unstyled dropdown-menu dropdown-menu-right"></ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/index-news');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/index-news');

                } else {
                    //la desktop
                    echo $this->render('desktop/index-news');
                }
                ?>

                <div style="min-height: 30px"></div>
                <?= \frontend\widgets\footerWidget::widget() ?>
            </div>
        </div>
    </div>

<?php
$this->registerCssFile("@web/css/index.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/js/index.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
$('b[role=\"presentation\"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class=\"kt-icon grey size-9x9\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15 9\"><path d=\"M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z\" fill-rule=\"evenodd\"/></svg></i>');
");
if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/index.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/index.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/desktop/index.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
}
