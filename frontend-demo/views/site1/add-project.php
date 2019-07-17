<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/8/2019
 * Time: 1:08 PM
 */

use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use yii\web\JsExpression;
use kartik\sortable\Sortable;

?>
    <div class="create-add">
        <div id="step-first">
            <?php
            $form = ActiveForm::begin([
                'method' => 'get',
                'action' => ['controller/action'],
            ]);
            ?>
            <div class="clearfix">
                <div class="float-left">
                    <h2 class="title-modal">Thêm dự án</h2>
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-form white">
                        <span>Hủy bỏ</span>
                    </button>
                    <button type="button" class="btn btn-form grey">
                        <i class="kt-icon grey size-14x14" style="vertical-align: text-top;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                <path d="M6.8 4.7h3.6V2H6.8v2.6zM3 14h7.3V7.8H3V14zm10.4-9.7V0v2.3L11.2 0H1.5h-.4C.5 0 .1.5.1 1.2v11.6c0 .7.4 1.2 1 1.2h1v-.3V7.8c0-.8.3-1 1-1h7.3c.8 0 1 .2 1 1V14h1c.6 0 1-.5 1-1.2V4.3zm-2-.2c0 .8-.3 1-1.1 1H3.7c-.8 0-1-.2-1-1V2.6c0-.8.2-1 1-1h6.7c.8 0 1 .2 1 1V4z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i>
                        <span>Lưu vào nháp</span>
                    </button>
                </div>
            </div>
            <div style="min-height: 30px"></div>
            <div class="box-step">
                <div class="row no-gutters">
                    <div class="col step active">
                        <span class="">1</span>
                        <b>Tên &amp; mô tả dự án</b>
                        <i>..................................</i>
                    </div>
                    <div class="col step">
                        <span class="">2</span>
                        <b>Thông tin chi tiết</b>
                        <i>..................................</i>
                    </div>
                    <div class="col-md-auto step">
                        <span class="">3</span>
                        <b>Hình ảnh dự án</b>
                    </div>
                </div>
            </div>

            <div class="grid-two-300">
                <div class="item">
                    <label for="">Hình đại diện</label>

                    <div id="box-hinh-avatar2" class="d-none">
                        <button type="button" class="btn btn-close" onclick="javascript:resetUploadImage(this)">
                            <i class="kt-icon size-24x24">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <circle fill="#FF5A5A" cx="12" cy="12" r="12"/>
                                        <path d="M13.2 12l3.5-3.6a.8.8 0 1 0-1.2-1.2L12 10.8 8.4 7.2a.8.8 0 1 0-1.2 1.2l3.6 3.6-3.6 3.5a.8.8 0 0 0 1.2 1.2l3.6-3.5 3.5 3.5a.8.8 0 1 0 1.2-1.2L13.2 12z"
                                              fill="#FFF"/>
                                    </g>
                                </svg>
                            </i>
                        </button>
                        <div id="hinh-avatar2"></div>
                    </div>
                    <button id="uploadButton" type="button" class="btn"
                            onclick="javascript:buttonUploadImage(this)">
                        <i class="kt-icon grey size-30x32">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32">
                                <path d="M29 29.6c0-1.2-1.2-2.2-2.6-2.2H2.7c-1.5 0-2.6 1-2.6 2.3C0 31 1.2 32 2.7 32h23.7c1.4 0 2.6-1 2.7-2.2v-.2zM8 13.1l3.9-4v12.7c0 1.5 1.2 2.7 2.7 2.7 1.5 0 2.7-1.2 2.7-2.7V9.2l3.9 3.9c1 1 2.8 1 3.9 0 1-1 1-2.8 0-3.9L16.5.8c-.4-.5-1-.7-1.7-.8h-.4c-.7 0-1.3.3-1.8.8L4.1 9.2c-1 1-1 2.8 0 3.9 1 1 2.8 1 3.9 0z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i><br>
                        <p>Kéo thả hoặc <b>bấm vào đây</b> để đăng hình <br> từ máy tính của bạn</p>
                    </button>


                    <input type="hidden" name="" id="base64-image2"/>
                    <!--<div id="result-anh"></div>-->
                    <input type="file" id="upload2" class="d-none"/>
                    <div class="text-center d-none">
                        <!--<button type="button" class="btn btn-primary btn-sm" id="fromFace">Lấy ảnh từ facebook ?</button>-->
                        <button type="button" id="btnSubmitCutimage2"
                                class="btn btn-warning btn-sm hidden">
                            <i class="fas fa-cut"></i>
                        </button>
                        <button class="btn btn-success btn-sm" onclick="javascript:catanhthuvien2()"
                                name="login-button" type="button">
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                    <p class="mt-3 txt-note"><b>Lưu ý:</b> Để hiển thị tốt nhất, bạn vui lòng sử dụng hình ảnh đại diện
                        cho
                        dự án theo tỷ lệ
                        4:3. Kích
                        thước tối thiểu là 800x600px.</p>
                </div>
                <div class="item">
                    <div class="scroll-470px">
                        <div class="box-scroll-public" style="padding-right: 10px;">

                            <div class="form-group no-effect mb-2">
                                <label for="i-txt1">Tên dự án</label>
                                <input type="text" class="form-control" id="i-txt1" aria-describedby="emailHelp"
                                       value="Một căn Officetel bé xíu mà đẩy đủ mọi tiện nghi"
                                       placeholder="" onKeyDown="javascript:textCounter(this,'txt1',400,50)"
                                       onKeyUp="javascript:textCounter(this,'txt1',400,50)"
                                       onblur="javascript:textCounter(this,'txt1',400,50)">
                                <small class="form-text text-muted d-none">We'll never share your email with
                                    anyone else.
                                </small>
                            </div>
                            <p class="text-right" style="font-size: 12px;line-height: 18px;">
                                Còn <i id="count-character-txt1"><span class="fas fa-spinner fa-pulse"></span></i> chữ
                            </p>

                            <label for="" onclick="javascript:onOff(this)"><span class="verify-ok"><i
                                            class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"/>
                                </svg>
                            </i></span> Mô tả dự án</label>
                            <div class="clearfix mb-2">
                                <textarea name="example" class="d-none"></textarea>
                                <div id="i-txt2" class="textarea-html" contenteditable="true"
                                     onKeyDown="javascript:textCounterDiv(this,'txt2',1200,200)"
                                     onKeyUp="javascript:textCounterDiv(this,'txt2',1200,200)"
                                     onblur="javascript:textCounterDiv(this,'txt2',1200,200)">
                                    Một căn Officetel bé xíu mà đẩy đủ mọi tiện nghi, chỗ làm việc,
                                    khu vực tiếp khách, bàn ăn, giường ngủ v.v là một yêu cầu không
                                    quá khó, nhưng để làm mọi thứ đẹp theo cách mà chủ
                                    nhà xinh đẹp mong muốn, một “Vương Quốc Hạnh Phúc”
                                    mang thẩm mỹ tinh tế vào khéo léo thì lại là một bài toán không dễ.
                                    Nhưng KAT hiểu được, Hạnh Phúc là “Đủ”, cho dù là căn hộ chỉ gần
                                    40m2 nhưng đủ đẹp, đủ thông minh, đủ tiện nghi thì mọi thứ
                                    sẽ trở nên hoàn hảo
                                </div>
                            </div>
                            <p class="text-right" style="font-size: 12px;line-height: 18px;">
                                Còn <i id="count-character-txt2"><span class="fas fa-spinner fa-pulse"></span></i> chữ
                            </p>

                            <label for="">Thiết kế theo nhóm</label>
                            <div class="grid-3-fix-40">
                                <div class="item">
                                    <div class="btnCus position-name">
                                        <b>Chủ trì</b>
                                    </div>
                                </div>
                                <div class="item">
                                    <div id="this-01" class="btnCus avatar">
                                        <span style="background-image: url(/images/avatar.png)"></span>
                                        <b>Bạn</b>
                                    </div>

                                    <?php
                                    /** @var TYPE_NAME $formatJs */
                                    $formatJs = "var formatRepo = function (repo) { if (repo.loading) {return repo.text;}  
                                        var obj = repo.text.split(',');
                                        return '<div style=\"overflow:hidden;\"><div class=\"row no-gutters\">' + 
                                        '<div class=\"col-md-auto\"><img src=\"' + obj[1] + '\" class=\"rounded-circle\" style=\"width:30px\" /></div>'+
                                        '<div class=\"col\"><b style=\"margin-left:5px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 160px;display: block;line-height: 30px\">' + obj[0] + '</b></div>' +
                                        '</div></div>';};
                                        
                                        
                                        var formatRepoSelection = function (repo) {
                                            var obj = repo.text.split(',');                                         
                                            var str = '<i class=\"icon-avatar\"><svg width=\"14\" height=\"16\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"#474747\" fill-rule=\"nonzero\"><circle cx=\"7\" cy=\"3.8\" r=\"3.8\"/><path d=\"M7 9a7 7 0 0 0-7 7H14a7 7 0 0 0-7-7z\"/></g></svg></i>';
                                            /*var str = '<i class=\"icon-avatar\"><span style=\"background-image:url(/images/avatar.png)\"></span></i>';*/                                         
                                            if (repo.id !== '') {
                                                var str = '<img src=\"' + obj[1] + '\" class=\"img-avatar rounded-circle\" style=\"width:30px\" />';
                                            }
                                            str += '<b class=\"name-avatar\">';
                                            str += obj[0] || repo.text;
                                            str += '</b>';                                            
                                            return str;
                                        }";

                                    // Register the formatting script
                                    $this->registerJs($formatJs, \yii\web\View::POS_HEAD);

                                    // script to parse the results into the format expected by Select2
                                    $resultsJs = "function (data, params) {params.page = params.page || 1;return {results: data.items,pagination: {more: (params.page * 5) < data.total_count}};}";
                                    ?>

                                    <div id="this-02" class="height-50px d-none">

                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'id' => 'idd14',
                                            'name' => 'select1',
                                            //'data' => new JsExpression('jsonData'),
                                            'data' => [
                                                1 => "con vit,/images/avatar.png",
                                                2 => "con heo,/images/avatar.png",
                                                3 => "con ga,/images/avatar.png",
                                                4 => "con cho,/images/avatar.png",
                                                5 => "con vit,/images/avatar.png",
                                                6 => "con heo,/images/avatar.png",
                                                7 => "con ga,/images/avatar.png",
                                                8 => "con cho,/images/avatar.png",
                                                9 => "con vit,/images/avatar.png",
                                                10 => "con heo,/images/avatar.png",
                                                11 => "con ga,/images/avatar.png",
                                                12 => "con cho,/images/avatar.png",
                                                13 => "con vit,/images/avatar.png",
                                                14 => "con heo,/images/avatar.png",
                                                15 => "con ga,/images/avatar.png",
                                                16 => "con cho,/images/avatar.png",
                                                17 => "con vit,/images/avatar.png",
                                                18 => "con heo,/images/avatar.png",
                                                19 => "con ga,/images/avatar.png",
                                                20 => "con cho,/images/avatar.png",
                                                21 => "con vit,/images/avatar.png",
                                                22 => "con heo,/images/avatar.png",
                                                23 => "con ga,/images/avatar.png",
                                                24 => "con cho,/images/avatar.png",
                                                25 => "con vit,/images/avatar.png",
                                                26 => "con heo,/images/avatar.png",
                                                27 => "con ga,/images/avatar.png",
                                                28 => "con cho,/images/avatar.png",

                                            ],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => [
                                                'placeholder' => 'Nhập tên kiến trúc sư...',
                                            ],
                                            'pluginOptions' => [
                                                'allowClear' => true,
                                                'processResults' => new JsExpression($resultsJs),
                                                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                                                'templateResult' => new JsExpression('formatRepo'),
                                                'templateSelection' => new JsExpression('formatRepoSelection'),
                                            ],
                                        ]); ?>

                                    </div>

                                </div>
                                <div class="item text-right">
                                    <button type="button" class="btn btn-link" onclick="javascript:delTeam(this,1)"
                                            style="text-align: center;padding: 14px 0;border-width: 0;width: 100%;">
                                        <i class="kt-icon grey size-9x10">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                                                <path d="M1.7 13s.3 1 1.5 1H9c1.2 0 1.5-1 1.5-1l1.1-9.3H.6L1.7 13zm6.6-7.9c0-.2.3-.4.6-.4s.5.2.5.4l-.5 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l.5-7zm-2.7 0c0-.2.2-.4.5-.4s.6.2.6.4v7c0 .3-.3.5-.6.5s-.5-.2-.5-.5v-7zm-2.2-.4c.3 0 .5.2.5.4l.6 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l-.6-7c0-.2.2-.4.6-.4zm7.9-2.8H8.9v-1c0-.7-.3-.9-1.1-.9H4.5c-.8 0-1.1.3-1.1 1v.9H.9c-.5 0-.9.3-.9.7 0 .3.4.7 1 .7h10.3c.5 0 .9-.4.9-.7 0-.4-.4-.7-1-.7zm-3.5 0H4.5v-1h3.3v1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span style="font-weight: 400;font-size: 12px;">Xóa</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-3-fix-40">
                                <div class="item">
                                    <div class="btnCus position-name">
                                        <b>Điện nước</b>
                                        <!--<i class="kt-icon grey size-9x9">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9">
                                                <path d="M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>-->
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="btnCus avatar">
                                        <span style="background-image: url(/images/avatar.png)"></span>
                                        <b>Quang hưng</b>
                                        <i class="kt-icon grey size-15x15" data-toggle="tooltip"
                                           data-original-title="Chờ xác nhận">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                                <div class="item text-right">
                                    <button type="button" class="btn btn-link" onclick="javascript:delTeam(this,2)"
                                            style="text-align: center;padding: 14px 0;border-width: 0;width: 100%;">
                                        <i class="kt-icon grey size-9x10">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                                                <path d="M1.7 13s.3 1 1.5 1H9c1.2 0 1.5-1 1.5-1l1.1-9.3H.6L1.7 13zm6.6-7.9c0-.2.3-.4.6-.4s.5.2.5.4l-.5 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l.5-7zm-2.7 0c0-.2.2-.4.5-.4s.6.2.6.4v7c0 .3-.3.5-.6.5s-.5-.2-.5-.5v-7zm-2.2-.4c.3 0 .5.2.5.4l.6 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l-.6-7c0-.2.2-.4.6-.4zm7.9-2.8H8.9v-1c0-.7-.3-.9-1.1-.9H4.5c-.8 0-1.1.3-1.1 1v.9H.9c-.5 0-.9.3-.9.7 0 .3.4.7 1 .7h10.3c.5 0 .9-.4.9-.7 0-.4-.4-.7-1-.7zm-3.5 0H4.5v-1h3.3v1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span style="font-weight: 400;font-size: 12px;">Xóa</span>
                                    </button>
                                </div>
                            </div>

                            <div class="addThemTeam"></div>

                            <div class="grid-3-fix-40">
                                <div class="item">
                                    <div class="height-50px">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select1',
                                            'data' => [2 => "Điện nước", 3 => "Cảnh quan", 4 => "Kỹ sư dự toán"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => [
                                                'placeholder' => 'Dự án mới nhất',
                                                'options' => [
                                                    1 => ['disabled' => true],
                                                ]
                                            ],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="height-50px">
                                        <?= Select2::widget([
                                            'name' => 'kv-repo-template',
                                            //'value' => '14719648',
                                            //'initValueText' => 'kartik-v/yii2-widgets',
                                            'data' => [
                                                1 => "con vit,/images/avatar.png",
                                                2 => "con heo,/images/avatar.png",
                                                3 => "con ga,/images/avatar.png",
                                                4 => "con cho,/images/avatar.png",
                                                5 => "con vit,/images/avatar.png",
                                                6 => "con heo,/images/avatar.png",
                                                7 => "con ga,/images/avatar.png",
                                                8 => "con cho,/images/avatar.png",
                                                9 => "con vit,/images/avatar.png",
                                                10 => "con heo,/images/avatar.png",
                                                11 => "con ga,/images/avatar.png",
                                                12 => "con cho,/images/avatar.png",
                                                13 => "con vit,/images/avatar.png",
                                                14 => "con heo,/images/avatar.png",
                                                15 => "con ga,/images/avatar.png",
                                                16 => "con cho,/images/avatar.png",
                                                17 => "con vit,/images/avatar.png",
                                                18 => "con heo,/images/avatar.png",
                                                19 => "con ga,/images/avatar.png",
                                                20 => "con cho,/images/avatar.png",
                                                21 => "con vit,/images/avatar.png",
                                                22 => "con heo,/images/avatar.png",
                                                23 => "con ga,/images/avatar.png",
                                                24 => "con cho,/images/avatar.png",
                                                25 => "con vit,/images/avatar.png",
                                                26 => "con heo,/images/avatar.png",
                                                27 => "con ga,/images/avatar.png",
                                                28 => "con cho,/images/avatar.png",

                                            ],
                                            'options' => [
                                                'placeholder' => 'Nhập tên kiến trúc sư...',
                                            ],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'pluginOptions' => [
                                                'allowClear' => true,
                                                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                                                'templateResult' => new JsExpression('formatRepo'),
                                                'templateSelection' => new JsExpression('formatRepoSelection'),
                                            ],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                                <div class="item text-right">
                                    <button type="button" class="btn btn-link" onclick="javascript:addTeam(this)"
                                            style="text-align: center;border-width: 0;width: 100%;background-color: #f5f5f5;height: 50px;display: block;vertical-align: middle;padding: 0;font-size: 12px;">
                                        Thêm
                                    </button>
                                </div>
                            </div>

                            <!--<div class="clearfix">
                                <button type="button" class="btn btn-link py-0 px-0">
                                    <i class="kt-icon green size-13x12">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 12">
                                            <path d="M6 5.1V1a.9.9 0 0 1 1.7 0V5H12A.9.9 0 0 1 12 7H7.7V11a.9.9 0 1 1-1.7 0V7H1.7a.9.9 0 0 1 0-1.8H6z"
                                                  fill-rule="evenodd"/>
                                        </svg>
                                    </i>
                                    <span style="font-weight: 400;">Thêm thành viên</span>
                                </button>
                            </div>-->

                        </div>
                    </div>
                </div>
            </div>

            <div style="min-height: 30px"></div>
            <div class="kt-line grey"></div>
            <div style="min-height: 30px"></div>

            <div class="text-right">
                <button type="button" class="btn submitBut" onclick="javascript:next()">
                    <span>Tiếp tục</span>
                    <i class="kt-icon bo-tron green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"></path>
                        </svg>
                    </i>
                </button>
            </div>
            <?php ActiveForm::end(); ?>

            <style type="text/css">
                div#hinh-avatar2 {
                    height: auto !important;
                }

                div.cr-boundary {
                    border-radius: 4px;
                }

                div.cr-boundary div.cr-viewport.cr-vp-square {
                    box-shadow: 0 0 2000px 2000px rgba(218, 218, 218, 0.4);
                    border-style: dashed;
                    border-color: #D1D1D1;
                    background-color: transparent;
                }

                div.croppie-container .cr-slider-wrap {
                    width: 100%;
                    margin: 5px 0 0 0;
                }

                div#hinh-avatar2 div.cr-boundary div.cr-viewport.cr-vp-square {
                    border-radius: 0 !important;
                    border-width: 1px;
                }
            </style>
            <script type="text/javascript">
                function catanhthuvien2() {
                    $('body').find('#btnSubmitCutimage2').click();
                }

                function loadThuVien2() {
                    var el = document.getElementById('hinh-avatar2');
                    var resize = new Croppie(el, {
                        enableExif: true,
                        viewport: {width: 300, height: 225},
                        boundary: {width: 300, height: 225},
                        showZoomer: true,
                        enableResize: false,
                        enableOrientation: true,
                        mouseWheelZoom: 'ctrl'
                    });

                    function readFile(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                resize.bind({
                                    url: e.target.result,
                                });
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $('#upload2').on('change', function () {
                        readFile(this);
                    });

                    /*function readFileFromFace() {
                        var where = '';
                        if (where === 'fb') {
                            resize.bind({
                                url: 'https://graph.facebook.com//picture?type=large',
                            });
                        } else {
                            alert('Lỗi: Chỉ là tài khoản từ facebook mới có thể truy cập được hình ảnh');
                        }
                    }

                    $('#fromFace2').on('click', function () {
                        readFileFromFace();
                    });*/

                    $('#btnSubmitCutimage2').on('click', function () {
                        if (document.getElementById("upload2").files.length === 1) {
                            //on button click
                            resize.result('base64').then(function (blob) {
                                // do something with cropped blob
                                //$('#result-anh').html('<img src="' + blob + '" />');
                                $('#base64-image2').val(blob);
                                if ($('body').find('#base64-image2').val().length > 0) {
                                    ajaxSubmitForm($('#modal-update-avatar-form'));
                                } else {
                                    alert('Lỗi: Lưu hình ảnh không thành công!');
                                }
                            });
                        }
                    });

                }

                /*function loadRefresh2() {
                    window.location.reload(true);
                }*/

                async function buttonUploadImage(el) {
                    await $('#upload2').click();
                    await $('#box-hinh-avatar2').removeClass('d-none');
                    await $(el).addClass('d-none');
                }

                async function resetUploadImage(el) {
                    await $('#box-hinh-avatar2').addClass('d-none');
                    await $('#uploadButton').removeClass('d-none');
                }

                function delTeam(el, ty) {
                    if (ty === 1) {
                        $(el).fadeOut('slow');
                        //an 1
                        $('body').find('#this-01').addClass('d-none');
                        //hien 2
                        $('body').find('#this-02').removeClass('d-none');
                    } else {
                        //an het
                        $(el).parent().parent().fadeOut('slow');
                    }
                }

                function addTeam(el) {
                    $('body').find('.addThemTeam').append(
                        '<div class="grid-3-fix-40">' +
                        '<div class="item">' +
                        '<div class="btnCus position-name">' +
                        '<b>Điện nước</b>' +
                        '</div>' +
                        '</div>' +
                        '<div class="item">' +
                        '<div class="btnCus avatar">' +
                        '<span style="background-image: url(/images/avatar.png)"></span>' +
                        '<b>Quang hưng</b>' +
                        '<i class="kt-icon grey size-15x15" data-toggle="tooltip"' +
                        'data-original-title="Chờ xác nhận" title="Chờ xác nhận">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">' +
                        '<path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"' +
                        'fill-rule="nonzero"/>' +
                        '</svg>' +
                        '</i>' +
                        '</div>' +
                        '</div>' +
                        '<div class="item text-right">' +
                        '<button type="button" class="btn btn-link" onclick="javascript:delTeam(this,2)"' +
                        'style="text-align: center;padding: 14px 0;border-width: 0;width: 100%;">' +
                        '<i class="kt-icon grey size-9x10">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">' +
                        '<path d="M1.7 13s.3 1 1.5 1H9c1.2 0 1.5-1 1.5-1l1.1-9.3H.6L1.7 13zm6.6-7.9c0-.2.3-.4.6-.4s.5.2.5.4l-.5 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l.5-7zm-2.7 0c0-.2.2-.4.5-.4s.6.2.6.4v7c0 .3-.3.5-.6.5s-.5-.2-.5-.5v-7zm-2.2-.4c.3 0 .5.2.5.4l.6 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l-.6-7c0-.2.2-.4.6-.4zm7.9-2.8H8.9v-1c0-.7-.3-.9-1.1-.9H4.5c-.8 0-1.1.3-1.1 1v.9H.9c-.5 0-.9.3-.9.7 0 .3.4.7 1 .7h10.3c.5 0 .9-.4.9-.7 0-.4-.4-.7-1-.7zm-3.5 0H4.5v-1h3.3v1z"' +
                        'fill-rule="evenodd"/>' +
                        '</svg>' +
                        '</i>' +
                        ' <span style="font-weight: 400;font-size: 12px;">Xóa</span>' +
                        '</button>' +
                        '</div>' +
                        '</div>'
                    );
                }

            </script>
            <?php
            $this->registerCssFile("@web/library/copiece/croppie.css", [
                'depends' => [\frontend\assets\AppAsset::className()],
            ]);
            $this->registerJsFile("@web/library/copiece/croppie.js", [
                'depends' => [\frontend\assets\AppAsset::className()],
            ]);
            $this->registerJs("
                loadThuVien2();
                $('.box-scroll-public').slimScroll({height: 470,alwaysVisible: true,});
                textCounter('i-txt1','txt1',400,50);
                textCounterDiv('i-txt2','txt2',1200,200);
            ");
            ?>
        </div>
        <div id="step-second" class="d-none">
            <?php
            $form = ActiveForm::begin([
                'method' => 'get',
                'action' => ['controller/action'],
            ]);
            ?>
            <div class="clearfix">
                <div class="float-left">
                    <h2 class="title-modal">Thêm dự án</h2>
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-form white">
                        <span>Hủy bỏ</span>
                    </button>
                    <button type="button" class="btn btn-form grey">
                        <i class="kt-icon grey size-14x14" style="vertical-align: text-top;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                <path d="M6.8 4.7h3.6V2H6.8v2.6zM3 14h7.3V7.8H3V14zm10.4-9.7V0v2.3L11.2 0H1.5h-.4C.5 0 .1.5.1 1.2v11.6c0 .7.4 1.2 1 1.2h1v-.3V7.8c0-.8.3-1 1-1h7.3c.8 0 1 .2 1 1V14h1c.6 0 1-.5 1-1.2V4.3zm-2-.2c0 .8-.3 1-1.1 1H3.7c-.8 0-1-.2-1-1V2.6c0-.8.2-1 1-1h6.7c.8 0 1 .2 1 1V4z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i>
                        <span>Lưu vào nháp</span>
                    </button>
                </div>
            </div>
            <div style="min-height: 30px"></div>
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
                        <b>Tên &amp; mô tả dự án</b>
                        <i>..................................</i>
                    </div>
                    <div class="col step active">
                        <span class="">2</span>
                        <b>Thông tin chi tiết</b>
                        <i>..................................</i>
                    </div>
                    <div class="col-md-auto step">
                        <span class="">3</span>
                        <b>Hình ảnh dự án</b>
                    </div>
                </div>
            </div>

            <div class="grid-two-200">
                <div class="item">
                    <h2 class="category-part">Thông tin bắt buộc</h2>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-6">
                            <label for="">Loại công trình</label>
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
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <label for="">Số tầng</label>
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
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <label for="">Style</label>
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
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <label for="">Hạng mục</label>
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
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <label for="">Trạng thái</label>
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
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <label for="">Phần mềm</label>
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
                            <div style="min-height: 30px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-two-200">
                <div class="item">
                    <h2 class="category-part">Thông tin thêm</h2>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group no-effect mb-2">
                                <label for="exampleInput1" onclick="javascript:onOff(this)"
                                       style="color: rgb(175, 175, 175);"><span><i
                                                class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"></path>
                                </svg>
                                </i></span> Chủ đầu tư
                                </label>
                                <input type="text" class="form-control" id="exampleInput1" value="Chung cư">
                            </div>
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group no-effect mb-2">
                                <label for="exampleInput2" onclick="javascript:onOff(this)"
                                       style="color: rgb(175, 175, 175);"><span><i
                                                class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"></path>
                                </svg>
                                </i></span> Diện tích đất (m2)</label>
                                <input id="exampleInput2" type="text" class="form-control"
                                       value="Chung cư"/>
                            </div>
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group no-effect mb-2">
                                <label for="exampleInput3" onclick="javascript:onOff(this)"
                                       style="color: rgb(175, 175, 175);"><span><i
                                                class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"></path>
                                </svg>
                                </i></span> Diện tích thiết kế (m2)</label>
                                <input id="exampleInput3" type="text" class="form-control"
                                       value="Chung cư"/>
                            </div>
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group no-effect mb-2">
                                <label for="exampleInput4" onclick="javascript:onOff(this)"
                                       style="color: rgb(175, 175, 175);"><span><i
                                                class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"></path>
                                </svg>
                                </i></span> Giá trị công trình ( VNĐ )</label>
                                <input id="exampleInput4" type="text" class="form-control"
                                       value="Chung cư"/>
                            </div>
                            <div style="min-height: 30px"></div>
                        </div>

                        <div class="col-6">
                            <label for="" onclick="javascript:onOff(this)" style="color: rgb(175, 175, 175);"><span><i
                                            class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"></path>
                                </svg>
                            </i></span> Năm thiết kế</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="height-50px">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select1',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Tháng 11'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="height-50px">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select1',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Năm 2018'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div style="min-height: 30px"></div>
                        </div>
                        <div class="col-6">
                            <label for="" onclick="javascript:onOff(this)" style="color: rgb(175, 175, 175);"><span><i
                                            class="kt-icon white size-10x6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                    <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                          fill-rule="nonzero" opacity=".9"></path>
                                </svg>
                            </i></span> Năm hoàn thành</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="height-50px">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select1',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Tháng 3'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="height-50px">
                                        <?= Select2::widget([
                                            'bsVersion' => '4.x',
                                            'hideSearch' => true,
                                            'name' => 'select1',
                                            'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                            'options' => ['placeholder' => 'Năm 2019'],
                                            'pluginOptions' => [
                                                'allowClear' => false
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div style="min-height: 30px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-two-200">
                <div class="item">
                    <h2 class="category-part">Định vị trên bản đồ</h2>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">Tỉnh/Thành phố</label>
                            <div class="height-50px">
                                <?= Select2::widget([
                                    'bsVersion' => '4.x',
                                    'hideSearch' => true,
                                    'name' => 'select1',
                                    'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                    'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                    'options' => ['placeholder' => 'Tp Hồ Chí Minh'],
                                    'pluginOptions' => [
                                        'allowClear' => false
                                    ],
                                ]); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Quận/huyện</label>
                            <div class="height-50px">
                                <?= Select2::widget([
                                    'bsVersion' => '4.x',
                                    'hideSearch' => true,
                                    'name' => 'select1',
                                    'data' => [1 => "Mới nhất", 2 => "Lượt xem", 3 => "Yêu thích", 4 => "Đánh giá"],
                                    'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                    'options' => ['placeholder' => 'Quận 2'],
                                    'pluginOptions' => [
                                        'allowClear' => false
                                    ],
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div style="min-height: 30px"></div>

                    <div class="form-group no-effect mb-2">
                        <label for="exampleInput5">Địa chỉ</label>
                        <input id="exampleInput5" type="text" class="form-control"
                               value="88 Song Hành, Phường An Phú"/>
                    </div>

                    <button type="button" class="btn btn-link float-right pr-0">Hoặc tùy chỉnh thủ công trên bản đồ
                    </button>
                    <div class="clearfix"></div>
                    <div style="min-height: 30px"></div>
                    <div style="height: 300px;width: 100%;border-radius: 5px;background-color: #EDEDED;"></div>
                    <p style="color: #afafaf;font-size: 12px;font-weight: 400;line-height: 30px">Địa chỉ bạn chọn(Tương
                        đối) : Thôn Kim Giao, Bình Ba, Châu Đức, Bà Rịa - Vũng Tàu, Việt Nam</p>
                </div>
            </div>

            <div style="min-height: 30px"></div>
            <div class="kt-line grey"></div>
            <div style="min-height: 30px"></div>

            <div class="clearfix">
                <div class="float-left">
                    <button type="button" class="btn submitBut text-left" onclick="javascript:prev()">
                        <i class="kt-icon bo-tron green">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                <path d="M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z"
                                      fill-rule="evenodd"></path>
                            </svg>
                        </i>
                        <span>Quay lại</span>
                    </button>
                </div>
                <div class="float-right">
                    <button type="button" class="btn submitBut" onclick="javascript:next()">
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
            <?php ActiveForm::end(); ?>
        </div>
        <div id="step-three" class="d-none">
            <?php
            $form = ActiveForm::begin([
                'method' => 'get',
                'action' => ['controller/action'],
            ]);
            ?>
            <div class="clearfix">
                <div class="float-left">
                    <h2 class="title-modal">Thêm dự án</h2>
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-form white">
                        <span>Hủy bỏ</span>
                    </button>
                    <button type="button" class="btn btn-form grey">
                        <i class="kt-icon grey size-14x14" style="vertical-align: text-top;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                <path d="M6.8 4.7h3.6V2H6.8v2.6zM3 14h7.3V7.8H3V14zm10.4-9.7V0v2.3L11.2 0H1.5h-.4C.5 0 .1.5.1 1.2v11.6c0 .7.4 1.2 1 1.2h1v-.3V7.8c0-.8.3-1 1-1h7.3c.8 0 1 .2 1 1V14h1c.6 0 1-.5 1-1.2V4.3zm-2-.2c0 .8-.3 1-1.1 1H3.7c-.8 0-1-.2-1-1V2.6c0-.8.2-1 1-1h6.7c.8 0 1 .2 1 1V4z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i>
                        <span>Lưu vào nháp</span>
                    </button>
                </div>
            </div>
            <div style="min-height: 30px"></div>
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
                        <b>Tên &amp; mô tả dự án</b>
                        <i>..................................</i>
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
                        <b>Thông tin chi tiết</b>
                        <i>..................................</i>
                    </div>
                    <div class="col-md-auto step active">
                        <span class="">3</span>
                        <b>Hình ảnh dự án</b>
                    </div>
                </div>
            </div>

            <div class="grid-two-200">
                <div class="item">
                    <label for="">Hình ảnh dự án</label>
                    <button id="uploadButton" type="button" style="height: 150px;" class="btn"
                            onclick="javascript:buttonUploadImage2(this)">
                        <i class="kt-icon grey size-30x32">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32">
                                <path d="M29 29.6c0-1.2-1.2-2.2-2.6-2.2H2.7c-1.5 0-2.6 1-2.6 2.3C0 31 1.2 32 2.7 32h23.7c1.4 0 2.6-1 2.7-2.2v-.2zM8 13.1l3.9-4v12.7c0 1.5 1.2 2.7 2.7 2.7 1.5 0 2.7-1.2 2.7-2.7V9.2l3.9 3.9c1 1 2.8 1 3.9 0 1-1 1-2.8 0-3.9L16.5.8c-.4-.5-1-.7-1.7-.8h-.4c-.7 0-1.3.3-1.8.8L4.1 9.2c-1 1-1 2.8 0 3.9 1 1 2.8 1 3.9 0z"
                                      fill-rule="evenodd"></path>
                            </svg>
                        </i><br>
                        <p>Kéo thả hoặc <b>bấm vào đây</b><br> để đăng hình từ máy tính<br> của bạn</p>
                    </button>
                </div>
                <div class="item">
                    <div style="min-height: 35px"></div>
                    <div id="img-step-one">
                        <?= \kartik\file\FileInput::widget([
                            'name' => 'image-file48[]',
                            'id' => 'image-file48',
                            'options' => [
                                'multiple' => true
                            ],
                            'pluginOptions' => [
                                //'browseOnZoneClick' => true,
                                'uploadUrl' => \yii\helpers\Url::to(['media/file-upload']),
                                'uploadExtraData' => [
                                    'album_id' => 20,
                                    'cat_id' => 'Nature'
                                ],
                                'maxFileCount' => 40,
                                'layoutTemplates' => [
                                    'footer' => Yii::$app->controller->renderPartial('input-file/_footer'),
                                    'actions' => Yii::$app->controller->renderPartial('input-file/_actions'),
                                    'progress' => Yii::$app->controller->renderPartial('input-file/_progress'),
                                    //'stats'=>Yii::$app->controller->renderPartial('input-file/_stats'),
                                ],
                                'previewTemplates' => ['image' => Yii::$app->controller->renderPartial('input-file/_image')],
                                'fileActionSettings' => ['removeIcon' => '<i class="kt-icon size-24x24"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><circle fill="#FF5A5A" cx="12" cy="12" r="12"/><path d="M13.2 12l3.5-3.6a.8.8 0 1 0-1.2-1.2L12 10.8 8.4 7.2a.8.8 0 1 0-1.2 1.2l3.6 3.6-3.6 3.5a.8.8 0 0 0 1.2 1.2l3.6-3.5 3.5 3.5a.8.8 0 1 0 1.2-1.2L13.2 12z" fill="#FFF"/></g></svg></i>',],
                                //'showAjaxErrorDetails' => false,
                                //'resumableUploadOptions' => ['showErrorLog' => false]
                            ]

                        ]); ?>
                    </div>
                    <div id="img-step-two">
                        <?php Sortable::begin([
                            'id' => 'congaas',
                            'showHandle' => true,
                            'connected' => true,
                            'itemOptions' => [
                                'class' => 'alert alert-warning'
                            ],
                        ]) ?>

                        <?php Sortable::end() ?>

                        <button type="button" class="btn btn-success d-none" onclick="javascript:resultSort()">Result
                        </button>
                    </div>
                </div>
            </div>


            <div style="min-height: 30px"></div>
            <div class="kt-line grey"></div>
            <div style="min-height: 30px"></div>

            <div class="clearfix">
                <div class="float-left">
                    <button type="button" class="btn submitBut text-left" onclick="javascript:prev()">
                        <i class="kt-icon bo-tron green">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                <path d="M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z"
                                      fill-rule="evenodd"></path>
                            </svg>
                        </i>
                        <span>Quay lại</span>
                    </button>
                </div>
                <div class="float-right">
                    <button type="button" class="btn submitBut" onclick="javascript:next()">
                        <span>Hoàn tất</span>
                        <i class="kt-icon bo-tron green">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                                <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                      fill-rule="evenodd"></path>
                            </svg>
                        </i>
                    </button>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <style type="text/css">
                .sortable {
                    border-width: 0;
                }

                .sortable li:focus, .sortable li:hover {
                    background-color: #F7F7F7;
                }

                .sortable li {
                    margin: 5px 0;
                    padding: 10px 0;
                    border-radius: 5px;
                }

                .i-txt-lala {
                    min-height: 90px;
                    padding: 12px 15px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
            </style>

            <script type="text/javascript">
                function buttonUploadImage2(el) {
                    $('body').find('#image-file48').click();
                }

                async function resultSort() {
                    var json = [];
                    var serialized = await sortable('#congaas', 'serialize');
                    await $.each(serialized[0].items, function (key, value) {
                        json[key] = {
                            id: $(value.html).attr('data-imgtemp'),
                            index: value.index,
                        };
                    });
                    //console.log(json);
                    return json;
                }

                async function delImageTemp(id) {
                    var par = await $('body').find('div#' + id);
                    var chid = await par.find('button.kv-file-remove');
                    await chid.click();
                    await $('body').find('li[data-imgTemp=' + id + ']').fadeOut("slow");
                    await $('body').find('li[data-imgTemp=' + id + ']').remove();
                }

                async function getInfoImage() {
                    var json = [];
                    var result = await resultSort();
                    var dem = 0;
                    await $('body').find('div[id^=preview-]').each(function (k, v) {
                        // so sanh xem khong co thi tao moi
                        var has = false;
                        var el = $(this).attr('id');
                        $.each(result, function (key, value) {
                            if (value.id === el) {
                                has = true;
                                return false;
                            }
                        });

                        if (!has) {
                            json[dem++] = {
                                id: el,
                                name: $(this).find('.file-caption-info').html(),
                                image: $(this).find('.kv-file-content').children('img').attr('src'),
                            };
                        }
                    });
                    return json;
                }

                async function showItemSortImage(json) {
                    //show hinh ra
                    var str = '';
                    await $.each(json, function (key, value) {
                        str +=
                            '<li draggable="true" role="option" aria-grabbed="false" data-imgTemp="' + value.id + '">' +
                            '<div class="box-item-image-temp">' +
                            '<div class="grid-image-temp">' +
                            '<div class="item-01"><span class="handle" draggable="true"><i class="fas fa-arrows-alt"></i></span></div>' +
                            '<div class="item-02"><img src="' + value.image + '" alt="" class="img-fluid"></div>' +
                            '<div class="item-03">' +
                            '<label for="comment">Mô tả hình ảnh</label>' +
                            '<button type="button" onclick="javascript:delImageTemp(\'' + value.id + '\')" class="float-right" style="background-color: transparent;border-color: transparent;"><i class="kt-icon size-13x14">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14"><path d="M1.7 13s.3 1 1.5 1H9c1.2 0 1.5-1 1.5-1l1.1-9.3H.6L1.7 13zm6.6-7.9c0-.2.3-.4.6-.4s.5.2.5.4l-.5 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l.5-7zm-2.7 0c0-.2.2-.4.5-.4s.6.2.6.4v7c0 .3-.3.5-.6.5s-.5-.2-.5-.5v-7zm-2.2-.4c.3 0 .5.2.5.4l.6 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l-.6-7c0-.2.2-.4.6-.4zm7.9-2.8H8.9v-1c0-.7-.3-.9-1.1-.9H4.5c-.8 0-1.1.3-1.1 1v.9H.9c-.5 0-.9.3-.9.7 0 .3.4.7 1 .7h10.3c.5 0 .9-.4.9-.7 0-.4-.4-.7-1-.7zm-3.5 0H4.5v-1h3.3v1z" fill="#474747" fill-rule="evenodd"/></svg>' +
                            '</i></button>' +
                            '<div class="not-scale mb-2" style="background-color: white">' +
                            '<textarea name="example" class="d-none"></textarea>' +
                            '<div class="i-txt-lala" contenteditable="true" ' +
                            'onKeyDown="javascript:textCounterDiv(this,\'txt-' + value.id + '\',1200,200)" ' +
                            'onKeyUp="javascript:textCounterDiv(this,\'txt-' + value.id + '\',1200,200)" ' +
                            'onblur="javascript:textCounterDiv(this,\'txt-' + value.id + '\',1200,200)" ></div>' +
                            '</div>' +
                            '<p class="text-right" style="font-size: 12px;line-height: 18px;">Còn <i id="count-character-txt-' + value.id + '">200</i> chữ</p>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</li>';
                    });
                    await $('body').find('#congaas').append(str);
                }
            </script>
        </div>
    </div>

    <div class="process-done d-none">
        <div class="row no-gutters">
            <div class="col-6 col-xs-6">
                <img src="/images/450x600.jpg" style="width: 100%" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-xs-6">
                <div class="text-center note-success">
                    <div class="img">
                        <img src="/images/450x600.jpg" alt="" class="img-fluid">
                    </div>
                    <h1>Xin chúc mừng!</h1>
                    <p>Dựa án <b>Sunshine in the rain - The Sun Avenue Quận 4</b> của bạn đã được gửi đi thành công.
                        Chúng tôi sẽ gửi cho bạn thông báo ngay sau khi dự án được kiểm duyệt… </p>
                    <button type="button" class="btn">Xem thử dự án</button>
                    <a href="" title="">
                        <b>Quay lại trang cá nhân</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var defi_step = 1;

        function prev() {
            defi_step = defi_step > 1 ? defi_step - 1 : 1;
            switch (defi_step) {
                case 1:
                    $('body').find('#step-first').removeClass('d-none');
                    $('body').find('#step-second').addClass('d-none');
                    $('body').find('#step-three').addClass('d-none');
                    break;
                case 2:
                    $('body').find('#step-first').addClass('d-none');
                    $('body').find('#step-second').removeClass('d-none');
                    $('body').find('#step-three').addClass('d-none');
                    break;
                case 3:
                    $('body').find('#step-first').addClass('d-none');
                    $('body').find('#step-second').addClass('d-none');
                    $('body').find('#step-three').removeClass('d-none');
                    break;
            }
        }

        function next() {
            defi_step = defi_step < 4 ? defi_step + 1 : 3;
            switch (defi_step) {
                case 1:
                    $('body').find('#step-first').removeClass('d-none');
                    $('body').find('#step-second').addClass('d-none');
                    $('body').find('#step-three').addClass('d-none');
                    break;
                case 2:
                    $('body').find('#step-first').addClass('d-none');
                    $('body').find('#step-second').removeClass('d-none');
                    $('body').find('#step-three').addClass('d-none');
                    break;
                case 3:
                    $('body').find('#step-first').addClass('d-none');
                    $('body').find('#step-second').addClass('d-none');
                    $('body').find('#step-three').removeClass('d-none');
                    break;
                case 4:
                    $('body').find('.create-add').addClass('d-none');
                    $('body').find('.process-done').removeClass('d-none');
                    break;
            }
        }

        function onOff(el) {
            var span = $(el).children('span');
            if (span.hasClass('verify-ok')) {
                span.removeClass('verify-ok');
                $(el).css({'color': '#afafaf'});
            } else {
                span.addClass('verify-ok');
                $(el).css({'color': '#1B1B1B'});
            }
        }
    </script>
<?php
$this->registerCssFile("@web/css/add-project.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
jQuery('#image-file48').on('filebatchselected', async function(event, files) {
    await jQuery('#img-step-one').addClass('d-none');
    var json = await getInfoImage();
    await showItemSortImage(json);
    //console.log(json);    
});
$('b[role=\"presentation\"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class=\"kt-icon grey size-9x9\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15 9\"><path d=\"M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z\" fill-rule=\"evenodd\"/></svg></i>');
");