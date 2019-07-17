<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/7/2019
 * Time: 3:31 PM
 */

use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use kv4nt\owlcarousel\OwlCarouselWidget;

?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>
        <div class="clearfix"></div>
        <div class="bg-search">
            <div class="box-form">
                <h2>Tìm kiến trúc sư</h2>
                <?php
                $form = ActiveForm::begin([
                    'method' => 'get',
                    'action' => ['controller/action'],
                ]);
                ?>
                <div class="grid-search-5" style="grid-gap: 10px;">
                    <div class="td">
                        <div class="height-50px">
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
                    </div>
                    <div class="td">
                        <div class="height-50px">
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
                    </div>
                    <div class="td">
                        <div class="height-50px">
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
                    </div>
                    <div class="td">
                        <div class="height-50px">
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
                    <div class="td">
                        <button type="button" class="btn submitBut hover">
                            <i class="kt-icon white size-14x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M13.7 12l-3-3h-.1c.6-1 1-2 1-3.2a5.8 5.8 0 1 0-2.7 4.8l3.1 3a1.2 1.2 0 0 0 1.7-1.6zm-8-2.5a3.8 3.8 0 1 1 0-7.5 3.8 3.8 0 0 1 0 7.5z"
                                          fill-rule="nonzero"></path>
                                </svg>
                            </i>
                            <span>Tìm kiến trúc sư</span>
                        </button>
                        <p class="mb-0 mt-3">Tìm kiếm nâng cao</p>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="kt-main">

            <div class="kt-index-page">
                <div style="min-height: 30px"></div>
                <div class="kt-category-bo-loc">
                    <div class="float-left">
                        <h2>78 Kiến trúc sư</h2>
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
                                <b style="line-height: 34px;white-space: nowrap;color: #474747;margin-right: 13px;">Sắp
                                    xếp theo</b>
                            </div>
                            <div class="td">
                                <div class="height-34px">
                                    <b class="inline">Số lượng dự án:</b>
                                    <div class="inline">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select5',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Dự án mới nhất'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="td">
                                <div class="height-34px">
                                    <b class="inline">Kinh nghiệm:</b>
                                    <div class="inline">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select6',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Trạng thái'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="td">
                                <div class="height-34px">
                                    <b class="inline">Lọc theo địa điểm</b>
                                    <div class="inline">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select7',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Phong cách'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="td">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="kt-icon grey size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <g fill-rule="evenodd">
                                                    <rect width="4" height="4" rx="2"/>
                                                    <rect x="5" width="4" height="4" rx="2"/>
                                                    <rect x="10" width="4" height="4" rx="2"/>
                                                    <rect x="10" y="5" width="4" height="4" rx="2"/>
                                                    <rect x="10" y="10" width="4" height="4" rx="2"/>
                                                    <rect x="5" y="5" width="4" height="4" rx="2"/>
                                                    <rect x="5" y="10" width="4" height="4" rx="2"/>
                                                    <rect y="5" width="4" height="4" rx="2"/>
                                                    <rect y="10" width="4" height="4" rx="2"/>
                                                </g>
                                            </svg>
                                        </i>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i class="kt-icon grey size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <g fill-rule="evenodd">
                                                    <rect width="4" height="4" rx="2"/>
                                                    <rect y="5" width="4" height="4" rx="2"/>
                                                    <rect y="10" width="4" height="4" rx="2"/>
                                                    <rect x="5" y="11" width="9" height="2" rx="1"/>
                                                    <rect x="5" y="6" width="9" height="2" rx="1"/>
                                                    <rect x="5" y="1" width="9" height="2" rx="1"/>
                                                </g>
                                            </svg>
                                        </i>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i class="kt-icon grey size-10x12">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 12">
                                                <path d="M4.6 0A4.6 4.6 0 0 0 0 4.7c0 3.2 4 7 4.3 7.2h.6C5 11.7 9 7.9 9 4.7 9.1 2 7.1 0 4.6 0zm0 7C3.3 7 2.3 6 2.3 4.7c0-1.3 1-2.4 2.3-2.4 1.2 0 2.3 1 2.3 2.4C6.9 6 5.9 7 4.6 7z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div style="min-height: 30px"></div>

                <div class="grid-auto-440px two">
                    <div class="td">
                        <div class="imaps"></div>
                    </div>
                    <div class="td">
                        <ul class="list-unstyled list-kts">
                            <li class="active">
                                <div class="part-left">
                                    <div class="avatar">
                                        <img src="/images/avatar.png" alt="" class="img-fluid">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                    <div class="info">
                                        <b>Hà Trung Dũng</b>
                                        <p>
                                            <i class="kt-icon grey size-10x12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 12">
                                                    <path d="M4.6 0A4.6 4.6 0 0 0 0 4.7c0 3.2 4 7 4.3 7.2h.6C5 11.7 9 7.9 9 4.7 9.1 2 7.1 0 4.6 0zm0 7C3.3 7 2.3 6 2.3 4.7c0-1.3 1-2.4 2.3-2.4 1.2 0 2.3 1 2.3 2.4C6.9 6 5.9 7 4.6 7z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                            <span>Hà nội</span>
                                        </p>
                                    </div>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="contact">
                                        <button type="button" class="btn">
                                            <i class="kt-icon white size-14x14">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                    <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                        </button>
                                        <button type="button" class="btn">
                                            <i class="kt-icon white size-14x14">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                    <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                        </button>
                                        <button type="button" class="btn">
                                            <i class="kt-icon white size-14x14">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                    <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="quan-tam">
                                        <button type="button" class="btn">
                                            <i class="kt-icon white size-14x14">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                    <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                            <span>Quan tâm</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="part-right">
                                    <div class="box-right-project">
                                        <div class="float-left">
                                            <ul class="list-unstyled follow">
                                                <li>
                                                    <i class="kt-icon grey size-15x12">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 15 14">
                                                            <g fill-rule="evenodd">
                                                                <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                                            </g>
                                                        </svg>
                                                    </i>
                                                    <span>87 dự án</span>
                                                </li>
                                                <li>
                                                    <i class="kt-icon grey size-15x12">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 19 16">
                                                            <g fill-rule="nonzero">
                                                                <path d="M14.868 10.055l-1.114-.162-.498-1.009a.368.368 0 0 0-.66 0l-.498 1.01-1.113.161a.368.368 0 0 0-.204.628l.805.785-.19 1.11a.368.368 0 0 0 .534.387l.996-.523.996.523a.367.367 0 0 0 .171.043h.001a.368.368 0 0 0 .358-.458l-.186-1.082.806-.785a.368.368 0 0 0-.204-.628z"/>
                                                                <path d="M12.926 5.69c-1.692 0-3.197.82-4.137 2.084a5.647 5.647 0 0 0-2.398.016 5.666 5.666 0 0 0-4.055 3.538 5.617 5.617 0 0 0-.355 1.97c0 .406.33.736.737.736h6.164a5.147 5.147 0 0 0 4.044 1.963 5.16 5.16 0 0 0 5.154-5.153 5.16 5.16 0 0 0-5.154-5.154zm0 8.835a3.682 3.682 0 0 1-3.681-3.681c0-.983.388-1.875 1.017-2.536a3.67 3.67 0 0 1 2.664-1.145 3.685 3.685 0 0 1 3.681 3.68 3.685 3.685 0 0 1-3.68 3.682zM1.601 3.101c0 1.162.902 2.116 2.042 2.202a4.524 4.524 0 0 1-.57-2.202c0-.798.207-1.549.57-2.201A2.21 2.21 0 0 0 1.6 3.1zM4.588 6.863A3.814 3.814 0 0 0 0 10.593c0 .405.33.735.736.735h.05a7.15 7.15 0 0 1 3.802-4.465zM5.115 1.321a3.062 3.062 0 0 0-.57 1.78c0 .663.212 1.277.57 1.78a3.078 3.078 0 0 0 5.59-1.78 3.078 3.078 0 1 0-5.59-1.78z"/>
                                                            </g>
                                                        </svg>
                                                    </i>
                                                    <span>1.352 Người theo dõi</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="btn target">
                                                <span>Vào trang cá nhân</span>
                                                <i class="kt-icon bo-tron green size-5x10">
                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                              fill-rule="evenodd"></path>
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div style="min-height: 15px"></div>
                                        
                                    </div>
                                    <div class="grid-50">
                                        <div class="it">Tổng dự án
                                        </div>
                                        <div class="it text-right">87</div>
                                        <div class="it">Người theo dõi
                                        </div>
                                        <div class="it text-right">123</div>
                                        <div class="it">Lượt cám ơn
                                        </div>
                                        <div class="it text-right">35</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div style="min-height: 30px"></div>


            </div>


            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>

        </div>
    </div>

<?php
$this->registerCssFile("@web/css/find-kts.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
$('b[role=\"presentation\"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class=\"kt-icon grey size-9x9\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15 9\"><path d=\"M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z\" fill-rule=\"evenodd\"/></svg></i>');
");
