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

        <div class="clearfix"></div>
        <div class="kt-category-bo-loc">
            <div class="float-left">
                <h2>Dự án của kiến trúc sư đã quan tâm</h2>
            </div>
            <div class="float-right" style="min-width: 200px">

                <?php
                $form = ActiveForm::begin([
                    'method' => 'get',
                    'action' => ['controller/action'],
                ]);
                ?>
                <div class="grid-container-5" style="grid-gap: 10px;">
                    <div class="td">
                        <b style="line-height: 34px;white-space: nowrap;color: #474747;margin-right: 13px;">Sắp xếp theo</b>
                    </div>
                    <div class="td">
                        <?= Select2::widget([
                            'bsVersion' => '4.x',
                            'hideSearch' => true,
                            'name' => 'select1',
                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                            'options' => ['placeholder' => 'Dự án mới nhất'],
                            'pluginOptions' => [
                                'allowClear' => false
                            ],
                        ]); ?>
                    </div>
                    <div class="td">
                        <?= Select2::widget([
                            'bsVersion' => '4.x',
                            'hideSearch' => true,
                            'name' => 'select2',
                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                            'options' => ['placeholder' => 'Trạng thái'],
                            'pluginOptions' => [
                                'allowClear' => false
                            ],
                        ]); ?>
                    </div>
                    <div class="td">
                        <?= Select2::widget([
                            'bsVersion' => '4.x',
                            'hideSearch' => true,
                            'name' => 'select3',
                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                            'options' => ['placeholder' => 'Phong cách'],
                            'pluginOptions' => [
                                'allowClear' => false
                            ],
                        ]) ?>
                    </div>
                    <div class="td">
                        <?= Select2::widget([
                            'bsVersion' => '4.x',
                            'hideSearch' => true,
                            'name' => 'select4',
                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                            'options' => ['placeholder' => 'Hạng mục'],
                            'pluginOptions' => [
                                'allowClear' => false
                            ],
                        ]) ?>
                    </div>
                </div>

                <?php ActiveForm::end();?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="kt-main">
            <div style="min-height: 20px"></div>
            <div class="kt-index-page">
                <div class="kt-row">
                    <div class="grid-container-4" style="grid-gap: 8px;">
                        <?php
                        for ($i = 0; $i < 16; $i++) {
                            ?>
                            <div class="item wow fadeIn">
                                <div class="kt-project-item">
                                    <i class="ipro kt-icon size-20x34">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z"
                                                      stroke="#70BC4E" fill="#98D37E"/>
                                                <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z"
                                                      stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                    </i>
                                    <div class="kt-flex-container kt-share-box hover transition">
                                        <button type="button" class="btn" data-toggle="tooltip" title=""
                                                data-original-title="Lưu lại">
                                            <i class="far fa-bookmark"></i>
                                        </button>
                                        <button type="button" class="btn" data-toggle="tooltip" title=""
                                                data-original-title="Yêu thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="item-image">
                                        <a href="/frontend/web/index.php?r=site/detail-project" title="">
                                            <img src="/frontend/web/images/anh-3-4.jpg" alt=""
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h2>
                                            <a href="/frontend/web/index.php?r=site/detail-project" title="">
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
                                        <div class="kt-line grey"></div>
                                        <div class="customer">
                                            <div class="float-left">
                                                <div class="avatar viewUser" data-item="0">
                                                    <img src="/frontend/web/images/avatar.png" alt=""
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
                    <div class="clearfix"></div>
                    <div style="min-height: 35px;"></div>
                    <div class="text-center">
                        <a href="" title="">
                            <button type="button" class="btn btn-default kt-btn-more">
                                <i class="kt-icon bo-tron green size-16x14">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i> <span>Xem thêm</span>
                            </button>
                        </a>
                    </div>
                    <div style="min-height: 80px;"></div>
                </div>
            </div>

            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>

        </div>
    </div>

<?php
$this->registerCssFile("@web/css/category.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
$('b[role=\"presentation\"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class=\"kt-icon grey size-9x9\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15 9\"><path d=\"M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z\" fill-rule=\"evenodd\"/></svg></i>');
");