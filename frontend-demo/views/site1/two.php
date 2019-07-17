<?php

use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\helpers\Url;

?>
    <div class="kt-wrap">
        <div class="kt-main">

            <div class="grid-container-2">
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
                                    <div class="col step active">
                                        <span class="">2</span>
                                        <b>Thông tin thêm</b>
                                        <i>..................</i>
                                    </div>
                                    <div class="col-md-auto step">
                                        <span class="">3</span>
                                        <b>Chọn chuyên gia</b>
                                    </div>
                                </div>
                            </div>

                            <h2>Nhằm giúp trải nghiệm website được tốt hơn, bạn vui lòng cung cấp thêm thông tin cá
                                nhân.</h2>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>

                            <p class="mb-1"><b>Tên của bạn ? *</b></p>
                            <p>Tên được sử dụng để hiển thị trên hệ thống</p>

                            <div class="form-group effect" style="max-width: 310px;">
                                <label for="exampleInputEmail1">Nhập tên của bạn</label>
                                <input type="text" class="form-control scale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                <small class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                            </div>

                            <p class="mb-1"><b>Lĩnh vực kiến trúc bạn yêu thích ? *</b></p>
                            <p>Dựa trên lĩnh vực bạn quan tâm, chúng tôi sẽ hiển thị các dự án phù hợp và dành riêng cho
                                bạn</p>

                            <div class="button-groups">
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Nhà phố
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Chung cư
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Sân vườn
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Nội thất
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Ngoại thất
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Nhà hàng
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Văn phòng
                                </button>
                                <button type="button" class="btn"
                                        onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                    Sân khấu
                                </button>
                            </div>

                            <p class="mb-1"><b>Địa chỉ của bạn ?</b></p>
                            <p>Dựa trên địa chỉ bạn cung cấp, chúng tôi sẽ tìm cho bạn những kiến trúc sư gần bạn nhất
                                để dễ dàng tham khảo</p>

                            <div class="height-50px">
                            <?= Select2::widget([
                                'name' => 'color_3',
                                'value' => 'red', // initial value
                                'data' => [0 => 'Ho Chi Minh', 1 => 'Ha noi'],
                                //'size' => Select2::MEDIUM,
                                'theme' => Select2::THEME_BOOTSTRAP,
                                'initValueText' => '', // set the initial display text
                                'options' => ['placeholder' => 'Địa chỉ của bạn'],
                                'pluginOptions' => [
                                    'allowClear' => false,
                                    'minimumInputLength' => 3,
                                    'language' => [
                                        'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                                    ],
                                    'ajax' => [
                                        'url' => Url::to(['city-list']),
                                        'dataType' => 'json',
                                        'data' => new JsExpression('function(params) { return {q:params.term}; }')
                                    ],
                                    'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                                    'templateResult' => new JsExpression('function(city) { return city.text; }'),
                                    'templateSelection' => new JsExpression('function (city) { return city.text; }'),
                                ]
                            ]); ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                            <div class="clearfix"></div>
                            <div style="min-height: 50px"></div>
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
                                    <span>Tiếp tục</span>
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
        par.children('label').css({'top':'4px','font-size':'10px'});
        $(this).css({'padding':'18px 15px 6px 15px'});
    });
    $('body').on('blur change','input.scale',function(){
        var par = $(this).parent();
        if($(this).val().length < 1){
            par.children('label').css({'top':'14px','font-size':'14px'});
            $(this).css({'padding':'12px 15px'});
        }else{
            par.css({'border-color':'#248444'});
            $(this).css({'padding':'18px 15px 6px 15px'});
        }
    })
");
$this->registerJs("
$('b[role=\"presentation\"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class=\"kt-icon grey size-9x9\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15 9\"><path d=\"M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z\" fill-rule=\"evenodd\"/></svg></i>');
");

