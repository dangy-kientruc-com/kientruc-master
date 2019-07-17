<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/25/2019
 * Time: 10:39 AM
 */

use yii\bootstrap4\ActiveForm;

?>
    <div class="modal-white">
        <div class="add-album-01 text-left d-none">
            <div class="clearfix">
                <div class="float-left">
                    <h2 class="title-fr">Thêm album mới</h2>
                </div>
            </div>
            <div style="min-height: 50px"></div>
            <?php
            $form = ActiveForm::begin([
                'method' => 'get',
                'action' => ['controller/action'],
            ]);
            ?>
            <div class="row no-gutters grid-2-fix-400">
                <div class="col-sm-6 col-md-6">
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
                <div class="col-sm-6 col-md-6">
                    <label for="">Tên dự án</label>
                    <div class="not-scale form-group mb-2">
                        <input id="i-txt1" type="text" class="form-control"
                               value="Sunshine in the rain - The Sun Avenue Quận 4"
                               onKeyDown="javascript:textCounter(this,'txt1',400,50)"
                               onKeyUp="javascript:textCounter(this,'txt1',400,50)"
                               onblur="javascript:textCounter(this,'txt1',400,50)">
                    </div>
                    <p class="text-right" style="font-size: 12px;line-height: 18px;">Còn <i
                                id="count-character-txt1"><span class="fas fa-spinner fa-pulse"></span></i> chữ
                    </p>
                    <label for="">Thể loại album</label>
                    <div class="clearfix">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                   class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Hình ảnh</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                   class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Dự án</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div style="min-height: 50px"></div>
            <div class="kt-line kt-grey"></div>
            <div style="min-height: 30px"></div>
            <div class="text-right">
                <button type="button" class="btn submitBut hover" onclick="javascript:next()">
                    <span>Tạo Album</span>
                    <i class="kt-icon bo-tron green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"></path>
                        </svg>
                    </i>
                </button>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="add-album-02 text-left">
            <div class="clearfix">
                <div class="float-left">
                    <h2 class="title-fr">Thêm dự án vào album</h2>
                </div>
            </div>
            <div style="min-height: 20px"></div>
            <?php
            $form = ActiveForm::begin([
                'method' => 'get',
                'action' => ['controller/action'],
            ]);
            ?>
            <div class="not-scale mb-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">
                    <i class="kt-icon grey size-14x14">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                        <path d="M13.7 12l-3-3h-.1c.6-1 1-2 1-3.2a5.8 5.8 0 1 0-2.7 4.8l3.1 3a1.2 1.2 0 0 0 1.7-1.6zm-8-2.5a3.8 3.8 0 1 1 0-7.5 3.8 3.8 0 0 1 0 7.5z"
                              fill="#474747" fill-rule="nonzero"/>
                        </svg>
                    </i>
                </span>
                    </div>
                    <input id="myInput" type="text" class="form-control"
                           style="padding-left: 10px;"
                           value="" onkeyup="searchKeyAlbum()"
                           placeholder="Tìm tên album.."
                           aria-describedby="validationTooltipUsernamePrepend">
                </div>
            </div>
            <div style="min-height: 10px"></div>
            <div class="box-container-fix" style="height: 300px">
                <ul class="list-unstyled" id="myList">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        ?>
                        <li>
                            <label for="male<?= $i ?>" onclick="javascript:selected(this)">
                                <div class="first">
                                    <img src="/images/anh-3-4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="two">
                                    <b><?= $i ?> Phòng ngủ phong cách cổ điển</b>
                                    <p class="mb-0">
                                        <i class=""></i> 15 dự án
                                    </p>
                                </div>
                                <div class="three">
                                    <i class=""></i> 6 tháng trước
                                </div>
                            </label>
                            <input type="radio" name="gender" id="male<?= $i ?>" value="male" class="d-none">
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="clearfix"></div>
            <div style="min-height: 30px"></div>
            <div class="kt-line kt-grey"></div>
            <div style="min-height: 30px"></div>
            <div class="clearfix">
                <div class="float-left">
                    <button type="button" class="btn submitBut green no-border" onclick="javascript:prev()">
                        <span>Tạo Album mới</span>
                    </button>
                </div>
                <div class="float-right">
                    <button type="button" class="btn submitBut hover" onclick="javascript:next()">
                        <span>Xác nhận</span>
                    </button>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <style type="text/css">
        div.modal-white{
            background-color: white;
            padding: 15px;
            border-radius: 4px;
        }
        ul#myList {
            padding-right: 10px;
        }

        ul#myList li label {
            display: grid;
            grid-template-columns: 70px auto 100px;
            grid-gap: 10px;
            border: 1px solid #E8E8E8;
            border-radius: 3px;
            margin-bottom: 5px;
            padding: 10px;
            width: 100%;
        }

        ul#myList li label.active{
            background-color: #e8e8e8;
        }

        ul#myList li div.first,
        ul#myList li div.first img {
            border-radius: 4px;
        }

        ul#myList li div.two {
        }

        ul#myList li div.two b {
            color: #000000;
            display: block;
            font-size: 16px;
            font-weight: 500;
            line-height: 20px;
            min-height: 34px;
        }

        ul#myList li div.two span {
            color: #474747;
            display: block;
            font-size: 12px;
            font-weight: 500;
            line-height: 14px;
        }

        ul#myList li div.three {
            color: #727272;
            font-size: 12px;
            line-height: 20px;
        }

        div.custom-control.custom-radio {
            padding-left: 30px;
        }

        div.custom-control.custom-radio label {
            line-height: 24px;
            margin-bottom: 0;
            font-weight: 400;
        }

        div.custom-control.custom-radio label:before {
            height: 24px;
            width: 24px;
            top: 0;
            left: -30px;
        }

        div.custom-control.custom-radio label:after {
            height: 24px;
            width: 24px;
            top: 0;
            left: -30px;
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            border-color: #248444;
            background-color: white;
        }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
            background-image: none;
            background-color: #248444;
            border-radius: 240px;
            height: 12px;
            width: 12px;
            left: -24px;
            top: 6px;
        }

        button.btn-form {
            border-radius: 17.5px;
            padding: 6px 15px;
            text-align: center;
            color: #474747;
            font-size: 14px;
            line-height: 22px;
            border-width: 0;
        }

        button.btn-form.grey {
            background-color: #F3F3F3;
        }

        h2.title-fr {
            color: #000000;
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
            margin: 0;
        }
        div.grid-2-fix-400{
            max-width: 640px;
        }
        div.grid-2-fix-400 label {
            color: #1B1B1B;
            font-size: 14px;
            font-weight: 600;
            line-height: 16px;
            margin-bottom: 10px;
            display: inline-flex;
        }

        button#uploadButton {
            display: block;
            width: 100%;
            border: 1px dashed #D1D1D1;
            height: 225px;
            background-color: #F9F9F9;
            max-width: 300px;
            margin: 0 auto;
        }

        button#uploadButton p {
            color: #474747;
            font-size: 12px;
            line-height: 18px;
            text-align: center;
            padding-top: 20px;
        }

        .txt-note {
            color: #474747;
            font-size: 12px;
            line-height: 18px;
        }

        form input[type=text], form input[type=email], form input[type=password] {
            border-width: 0;
            padding: 0 15px;
            color: #1B1B1B;
            font-size: 14px;
            line-height: 20px;
            position: relative;
            background-color: transparent !important;
        }

        form div.not-scale {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 7px 15px;
            min-height: 50px;
        }

        form div.not-scale input {
            padding-left: 0;
        }

        form div.not-scale span.input-group-text {
            border-color: transparent;
            background-color: transparent;
            padding: 0;
        }

        div#hinh-avatar2 {
            height: auto !important;
        }

        #box-hinh-avatar2 {
            position: relative;
        }

        #box-hinh-avatar2 button.btn-close {
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 4;
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

        button.submitBut span {
            opacity: 1;
        }

        button.submitBut.green span {
            color: #248444;
        }

        button.submitBut.red span {
            color: #FF5A5A;
        }

        button.submitBut.no-border {
            border-color: transparent;
            background-color: transparent;
        }

        button.submitBut.hover {
            background-color: #248444;
            border-color: transparent;
        }

        button.submitBut.hover span {
            color: white;
        }

        button.submitBut.hover i {
            background-color: #EEF7F1;
            border-radius: 240px;
        }
        @media only screen and (max-width: 425px) {
            ul#myList li label {
                grid-template-columns: 70px auto;
            }
            ul#myList li label .three {
                grid-column-start: 1;
                grid-column-end: 3;
                text-align: right;
            }
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

        function searchKeyAlbum() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myList");
            tr = table.getElementsByTagName("li");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("div")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function selected(el) {
            $(el).addClass('active');
            $(el).parent().siblings().each(function () {
                $(this).children('label').removeClass('active');
            });
        }

        var defi_step = 1;

        function prev() {
            defi_step = defi_step > 1 ? defi_step - 1 : 1;
            switch (defi_step) {
                case 1:
                    $('body').find('.add-album-01').removeClass('d-none');
                    $('body').find('.add-album-02').addClass('d-none');
                    break;
                case 2:
                    $('body').find('.add-album-02').removeClass('d-none');
                    $('body').find('.add-album-01').addClass('d-none');
                    break;
            }
        }

        function next() {
            defi_step = defi_step < 3 ? defi_step + 1 : 2;
            switch (defi_step) {
                case 1:
                    $('body').find('.add-album-01').removeClass('d-none');
                    $('body').find('.add-album-02').addClass('d-none');
                    break;
                case 2:
                    $('body').find('.add-album-02').removeClass('d-none');
                    $('body').find('.add-album-01').addClass('d-none');
                    break;
            }
        }
    </script>
<?php
$this->registerJs("
        loadThuVien2();
        textCounter('i-txt1','txt1',400,50);
        $('#myList').slimScroll({height: 'auto',disableFadeOut:true});
    ");
?>