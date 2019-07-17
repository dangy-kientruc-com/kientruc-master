<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/6/2019
 * Time: 5:32 PM
 */

use yii\bootstrap4\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use yii\web\JsExpression;
use kartik\sortable\Sortable;

?>
    <div class="box-skill">
        <h3 class="mb-4">Thêm thông tin Học vấn & Kinh nghiệm</h3>
        <?php
        $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['controller/action'],
        ]);
        ?>
        <div class="grid-130-auto">
            <div class="td">
                <b>Tiêu đề</b>
            </div>
            <div class="td">
                <div class="form-group no-effect" id="hovaten">
                    <input id="i-txt1" type="text" class="form-control"
                           value="Sunshine in the rain - The Sun Avenue Quận 4">
                </div>
            </div>
        </div>
        <div class="grid-130-auto">
            <div class="td">
                <b>Thời gian</b>
            </div>
            <div class="td">
                <div class="height-50px"
                     style="max-width: 150px;margin-right: 10px;display: inline-block;margin-bottom: 12px">
                    <?php
                    // Change orientation of datepicker as well as markup type
                    echo DatePicker::widget([
                        'name' => 'date_123',
                        'id' => 'date_123',
                        'value' => '10 / 2004',
                        'removeButton' => false,
                        'type' => DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'calendarWeeks' => true,
                            'orientation' => 'top right',
                            'format' => 'mm / yyyy',
                            'autoclose' => true,
                            'todayHighlight' => true
                        ]
                    ]);
                    ?>
                </div>
                <div class="height-50px"
                     style="max-width: 150px;margin-right: 10px;display: inline-block;margin-bottom: 12px">
                    <?php
                    // Change orientation of datepicker as well as markup type
                    echo DatePicker::widget([
                        'name' => 'date_321',
                        'id' => 'date_321',
                        'value' => '10 / 2006',
                        'removeButton' => false,
                        'type' => DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'calendarWeeks' => true,
                            'orientation' => 'top right',
                            'format' => 'mm / yyyy',
                            'autoclose' => true,
                            'todayHighlight' => true
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="grid-130-auto">
            <div class="td">
                <b>Kết quả</b>
            </div>
            <div class="td">
                <div class="form-group no-effect" id="hovaten">
                    <input id="i-txt1" type="text" class="form-control"
                           value="Sunshine in the rain - The Sun Avenue Quận 4">
                </div>
            </div>
        </div>
        <div class="grid-130-auto">
            <div class="td">
                <b>Bằng cấp liên quan</b>
            </div>
            <div class="td">
                <div class="d-none">
                <?= FileInput::widget([
                    'name' => 'image-file49[]',
                    'id' => 'image-file49',
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
                <div style="overflow-y: hidden;overflow-x: auto;">
                    <?php Sortable::begin([
                        'id' => 'congaas',
                        //'showHandle' => true,
                        //'connected' => true,
                        'type' => 'grid',
                        'itemOptions' => [
                            'class' => 'alert alert-warning'
                        ],
                    ]) ?>

                    <?php Sortable::end() ?>
                </div>

                <button id="uploadButton" type="button" class="btn" style="border: 1px dashed #ccc;height: 80px;width: 80px;"
                        onclick="javascript:buttonUploadImage2(this)">
                    <i class="kt-icon grey size-30x32" style="opacity: 0.2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32">
                            <path d="M29 29.6c0-1.2-1.2-2.2-2.6-2.2H2.7c-1.5 0-2.6 1-2.6 2.3C0 31 1.2 32 2.7 32h23.7c1.4 0 2.6-1 2.7-2.2v-.2zM8 13.1l3.9-4v12.7c0 1.5 1.2 2.7 2.7 2.7 1.5 0 2.7-1.2 2.7-2.7V9.2l3.9 3.9c1 1 2.8 1 3.9 0 1-1 1-2.8 0-3.9L16.5.8c-.4-.5-1-.7-1.7-.8h-.4c-.7 0-1.3.3-1.8.8L4.1 9.2c-1 1-1 2.8 0 3.9 1 1 2.8 1 3.9 0z"
                                  fill-rule="evenodd"></path>
                        </svg>
                    </i>
                </button>

                <button type="button" class="btn btn-success d-none" onclick="javascript:resultSort()">Result
                </button>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="text-right">
            <button type="button" class="btn submitBut no-border" data-dismiss="modal" aria-label="Close">
                <span style="font-weight: 500;">Hủy bỏ</span>
            </button>
            <button type="button" class="btn submitBut hover">
                <span style="font-weight: 500;">Thêm thông tin</span>
            </button>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <style type="text/css">
        div.grid-130-auto {
            display: grid;
            grid-template-columns: 130px 438px;
            grid-gap: 20px;
        }

        button.submitBut.no-border {
            border-color: transparent;
            background-color: transparent;
        }

        button.submitBut.hover {
            background-color: #248444;
            border-color: transparent;
        }

        button.submitBut span {
            opacity: 1;
        }

        button.submitBut.hover span {
            color: white;
        }

        .sortable {
            border-width: 0;
        }

        .sortable.grid{
            overflow: initial;
            white-space: nowrap;
            margin-bottom: 0;
        }

        .sortable li:focus, .sortable li:hover {
            background-color: #F7F7F7;
        }

        .sortable li {
            margin: 5px;
            padding: 0;
            border-radius: 5px;
        }

        .sortable.grid li{
            display: inline-block;
            float: inherit;
            margin-left: 0;
        }

        div.box-item-image-temp {
            position: relative;
        }

        div.box-item-image-temp img {
            height: 80px;
            width: 80px;
            border-radius: 4px;
        }

        div.box-item-image-temp button {
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
    <script type="text/javascript">
        function buttonUploadImage2(el) {
            $('body').find('#image-file49').click();
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
                    '<img src="' + value.image + '" alt="" class="img-fluid">' +
                    '<button type="button" onclick="javascript:delImageTemp(\'' + value.id + '\')" class="float-right" style="background-color: transparent;border-color: transparent;"><i class="kt-icon size-13x14">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14"><path d="M1.7 13s.3 1 1.5 1H9c1.2 0 1.5-1 1.5-1l1.1-9.3H.6L1.7 13zm6.6-7.9c0-.2.3-.4.6-.4s.5.2.5.4l-.5 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l.5-7zm-2.7 0c0-.2.2-.4.5-.4s.6.2.6.4v7c0 .3-.3.5-.6.5s-.5-.2-.5-.5v-7zm-2.2-.4c.3 0 .5.2.5.4l.6 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l-.6-7c0-.2.2-.4.6-.4zm7.9-2.8H8.9v-1c0-.7-.3-.9-1.1-.9H4.5c-.8 0-1.1.3-1.1 1v.9H.9c-.5 0-.9.3-.9.7 0 .3.4.7 1 .7h10.3c.5 0 .9-.4.9-.7 0-.4-.4-.7-1-.7zm-3.5 0H4.5v-1h3.3v1z" fill="#474747" fill-rule="evenodd"/></svg>' +
                    '</i></button>' +
                    '</div>' +
                    '</li>';
            });
            await $('body').find('#congaas').append(str);
        }
    </script>

<?php
$this->registerCssFile("@web/css/add-skill.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
jQuery('#image-file49').on('filebatchselected', async function(event, files) {
    //await jQuery('#img-step-one').addClass('d-none');
    var json = await getInfoImage();
    await showItemSortImage(json);
    //console.log(json);    
});
$('b[role=\"presentation\"]').css({'visibility': 'hidden'});
$('.select2-selection__arrow').append('<i class=\"kt-icon grey size-9x9\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15 9\"><path d=\"M7.5 6.1L12.7 1a1 1 0 0 1 1.5 0c.3.3.3 1 0 1.4l-6 6a1 1 0 0 1-.7.2 1 1 0 0 1-.8-.3l-5.9-6A1 1 0 0 1 .8 1a1 1 0 0 1 1.4 0L7.5 6z\" fill-rule=\"evenodd\"/></svg></i>');
");
