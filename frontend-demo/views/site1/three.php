<?php

use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\helpers\Url;

?>
    <div class="kt-wrap">
        <div class="kt-main">

            <div class="grid-container-2-50">
                <div class="item">
                    <div class="wel-left" style="background-image: url(/images/tall.jpg)">
                        <div class="kt-logo">
                            <a href="/site/index" title="KIENTRUC.com" class="a-white">
                                <img alt="KIENTRUC.com" title="KIENTRUC.com" src="/images/logo icon.jpg"
                                     class="img-responsive img-logo">
                                <span class="span-name-website" style="color: white">KIENTRUC</span>
                                <span class="span-dot-com" style="color: white">.com</span>
                                <span class="span-slogan" style="color: white">Cùng bạn xây ước mơ</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wel-right">
                        <div class="wel-box-right">

                            <h1>Chào mừng bạn trở lại với Kientruc.com</h1>

                            <div class="box-step">
                                <div class="row no-gutters">
                                    <div class="col step pass">
                                        <span class="">
                                            <label class="kt-icon white size-12x8">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                                <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                                      fill-rule="nonzero" opacity=".9"/>
                                                </svg>
                                            </label>
                                        </span>
                                        <b>Bạn là ai</b>
                                        <i>..........................</i>
                                    </div>
                                    <div class="col step pass">
                                        <span class="">
                                            <label class="kt-icon white size-12x8">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                                <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                                      fill-rule="nonzero" opacity=".9"/>
                                                </svg>
                                            </label>
                                        </span>
                                        <b>Thông tin thêm</b>
                                        <i>..................</i>
                                    </div>
                                    <div class="col-md-auto step active">
                                        <span class="">3</span>
                                        <b>Chọn chuyên gia</b>
                                    </div>
                                </div>
                            </div>

                            <p><b>Bạn vui lòng quan tâm ít nhất 3 chuyên gia làm các sự án trong lĩnh vực bạn yêu
                                    thích.</b></p>

                            <div class="autoBoxHeight" style="display: block;height: 510px;overflow: hidden">
                                <div class="box-scroll-public">
                                    <div class="container">
                                        <?php
                                        for ($i = 0; $i < 5; $i++) {
                                            ?>
                                            <div class="row border">
                                                <div class="col-3 px-0 td">
                                                    <div class="box-left-avatar">
                                                        <div class="icon-pro">
                                                            <i class="kt-icon size-22x30">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 22 30">
                                                                    <g transform="translate(1 1)" fill="none"
                                                                       fill-rule="evenodd">
                                                                        <path d="M6.5 22v5.6l3.6-1.8 3.4 1.8V22a12.5 12.5 0 0 1-7 0z"
                                                                              stroke="#3F8944" fill="#98D37E"/>
                                                                        <circle stroke="#3F8944" fill="#98D37E"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                cx="10" cy="10" r="10.5"/>
                                                                        <circle stroke="#3F8944" fill="#98D37E"
                                                                                opacity=".5"
                                                                                cx="10"
                                                                                cy="10" r="6.5"/>
                                                                        <path d="M4.7 11v1.7H2.6v-6h2.5c.4 0 .9 0 1.2.2a2 2 0 0 1 1.2 2 2 2 0 0 1-.7 1.5c-.4.3-1 .5-1.7.5h-.4zm0-1.8H5l.3-.1v-.2-.4h-.7v.7zm4.8 1.7v1.8H7.3v-6h2.4c.7 0 1.3.1 1.7.5.5.3.7.8.7 1.5 0 .4 0 .8-.3 1 0 .3-.3.4-.5.6l1 1.8v.6h-2l-1-1.8zm0-1.8h.6v-.3-.3h-.7V9zm7.9.7c0 .6-.1 1-.3 1.5a2.5 2.5 0 0 1-2.4 1.5c-.5 0-1-.2-1.4-.4-.4-.2-.7-.6-1-1L12 9.9v-.3c0-.6.1-1.1.4-1.5.2-.5.5-.9 1-1.1.3-.3.8-.4 1.3-.4s1 .1 1.4.4c.4.2.7.6 1 1 .2.5.3 1 .3 1.6v.2zm-2-.2c0-.5-.2-.8-.3-1a.4.4 0 0 0-.4-.2c-.4 0-.6.3-.6 1v.4c0 .4 0 .8.2 1l.4.2c.2 0 .3 0 .4-.2l.2-1v-.2z"
                                                                              stroke="#248444" stroke-width=".8"
                                                                              fill="#FFF"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                    </g>
                                                                </svg>
                                                            </i>
                                                        </div>
                                                        <a href="" title="">
                                                        <span class="avatar"><img src="/images/avatar.png"
                                                                                  alt="" class="img-fluid"><i
                                                                    class="fas fa-circle"></i></span>
                                                            <b class="fullname">Nguyễn Huy Hoàng</b>
                                                            <p class="mb-0 address">
                                                                <i class="kt-icon black size-8x10">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 11 14">
                                                                        <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                                                              fill-rule="nonzero"/>
                                                                    </svg>
                                                                </i>
                                                                <span>Hà Nội</span>
                                                            </p>
                                                            <p class="star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </p>
                                                            <p class="contact">
                                                                <button type="button"
                                                                        class="btn kt-icon black size-15x14">
                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M14.552 11.067l-2.163-2.163c-.43-.43-1.144-.416-1.59.03L9.71 10.023l-.215-.12c-.688-.38-1.63-.903-2.62-1.895-.994-.994-1.517-1.937-1.9-2.625-.04-.073-.079-.144-.117-.21l.731-.73.36-.36c.446-.447.458-1.16.029-1.59L3.815.33c-.43-.43-1.143-.417-1.59.03l-.61.613.018.016c-.205.26-.376.562-.503.886-.117.309-.19.603-.223.898-.286 2.368.796 4.531 3.732 7.467 4.058 4.058 7.328 3.752 7.47 3.737.307-.037.601-.11.9-.227.322-.125.623-.296.883-.5l.014.012.617-.605c.446-.446.458-1.16.029-1.59z"
                                                                              fill-rule="evenodd"/>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="btn">
                                                                    <i class="fas fa-envelope"></i>
                                                                </button>
                                                                <button type="button"
                                                                        class="btn kt-icon black size-15x13">
                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                                                                              fill-rule="evenodd"/>
                                                                    </svg>
                                                                </button>
                                                            </p>
                                                            <p class="mb-0 addfriend">
                                                                <button type="button" class="btn">
                                                                    <i class="far fa-bookmark"></i> Quan tâm
                                                                </button>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-9 px-0 td">
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
                                                        <div style="">
                                                            <?php
                                                            OwlCarouselWidget::begin([
                                                                'container' => 'div',
                                                                'containerOptions' => [
                                                                    'id' => 'container-id'.$i,
                                                                    'class' => 'nonloop-index owl-carousel owl-theme'
                                                                ],
                                                                'pluginOptions' => [
                                                                    'autoplay' => false,
                                                                    'autoplayTimeout' => 4000,
                                                                    'items' => 1,
                                                                    'margin' => -30,
                                                                    'loop' => false,
                                                                    'dots' => false,
                                                                    'nav' => false,
                                                                    'responsive' => [
                                                                        0 => [
                                                                            'items' => 2,
                                                                        ],
                                                                        600 => [
                                                                            'items' => 2,
                                                                        ],
                                                                        1000 => [
                                                                            'items' => 2,
                                                                        ],
                                                                        1200 => [
                                                                            'items' => 2,
                                                                        ],
                                                                        1600 => [
                                                                            'items' => 2,
                                                                        ],
                                                                    ],
                                                                ]
                                                            ]);
                                                            ?>

                                                            <div class="item-kts">
                                                                <div style="margin-right: 40px">
                                                                    <a href="" title="">
                                                                        <img src="/images/anh-3-4.jpg"
                                                                             alt="" class="img-fluid">
                                                                        <div class="title transition">
                                                                            <b>Chung Cư Thạch Bàn</b>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="item-kts">
                                                                <div style="margin-right: 40px">
                                                                    <a href="" title="">
                                                                        <img src="/images/anh-3-4.jpg"
                                                                             alt="" class="img-fluid">
                                                                        <div class="title transition">
                                                                            <b>Chung Cư Thạch Bàn</b>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="item-kts">
                                                                <div style="margin-right: 40px">
                                                                    <a href="" title="">
                                                                        <img src="/images/anh-3-4.jpg"
                                                                             alt="" class="img-fluid">
                                                                        <div class="title transition">
                                                                            <b>Chung Cư Thạch Bàn</b>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="item-kts">
                                                                <div style="margin-right: 40px">
                                                                    <a href="" title="">
                                                                        <img src="/images/anh-3-4.jpg"
                                                                             alt="" class="img-fluid">
                                                                        <div class="title transition">
                                                                            <b>Chung Cư Thạch Bàn</b>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <?php
                                                            OwlCarouselWidget::end();
                                                            ?>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                    </div>

                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div style="min-height: 20px"></div>
                            <div class="float-left">
                                <button type="button" class="btn submitBut text-left" disabled>
                                    <i class="kt-icon bo-tron green">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                            <path d="M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z"
                                                  fill-rule="evenodd"/>
                                        </svg>
                                    </i>
                                    <span>Quay lại</span>
                                </button>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn submitBut text-right" disabled>
                                    <span>Hoàn thành</span>
                                    <i class="kt-icon bo-tron green">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                  fill-rule="evenodd"></path>
                                        </svg>
                                    </i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        async function choise3El(parameters) {
            let json = parameters.json;
            var el = json.el;
            var min = typeof json.min !== 'undefined' ? json.min : 0;
            var max = typeof json.max !== 'undefined' ? json.max : 100;

            if ($(el).hasClass('active')) {
                $(el).removeClass('active');
            } else {
                $(el).addClass('active');
            }
        }

    </script>

<?php
$this->registerCssFile("@web/css/wellcome.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

$this->registerJs("
$('body').on('click','input.scale',function(){
    var par = $(this).parent();
    par.children('label').css({'top':'6px','font-size':'10px'});
});
$('input.scale').on('blur',function(){
    var par = $(this).parent();
    if($(this).val().length < 1){        
        par.children('label').css({'top':'18px','font-size':'12px'});
    }else{
        par.css({'border-color':'#248444'});
    }
});
$('.box-scroll-public').slimScroll({height: 'auto'});
");

