<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;

?>
<div class="kt-wrap">
    <div class="kt-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="left-50">
                        <div class="kt-logo">
                            <a href="/site/index" title="KIENTRUC.com" class="a-white">
                                <img alt="KIENTRUC.com" title="KIENTRUC.com"
                                     src="/images/logo icon.jpg"
                                     class="img-responsive img-logo">
                                <span class="span-name-website" style="color: white">KIENTRUC</span>
                                <span class="span-dot-com" style="color: white">.com</span>
                                <span class="span-slogan" style="color: white">Cùng bạn xây ước mơ</span>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <h1 class="titleH1">Trở thành Kiến trúc sư chuyên nghiệp để kết nối với khách hàng</h1>
                        <h2 class="titleH2">
                            Hệ thống mạng lưới Kientruc.com là MXH tuyệt vời để bạn có thể làm việc trực tiếp với
                            khách hàng
                            hoặc chia sẻ kiến thức thiết kế với đồng nghiệp.
                        </h2>
                        <div class="box-note">
                            <h3>Miễn phí</h3>
                            <p>Quảng bá hoàn toàn miễn phí các công trình của bạn.</p>
                        </div>
                        <div class="box-note">
                            <h3>Kết nối với khách hàng</h3>
                            <p>Kết nối trực tiếp giữa kiến trúc sư với khách hàng tiềm năng.</p>
                        </div>
                        <div class="box-note">
                            <h3>Giữ bản quyền thiết kế</h3>
                            <p>Kientruc.com bảo vệ tối đa bản quyền công trình của bạn</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="right-50">
                        <button type="button" class="btn btn-default btn-off-modal">
                            <i class="fas fa-times"></i>
                        </button>
                        <div class="box-right">
                            <h2>Nâng cấp tài khoản</h2>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>
                            <b>Xác nhận họ tên và số điện thoại</b>
                            <p>Chính sách của chúng tôi yêu cầu xác nhận họ tên chính xác trên CMND và xác minh qua
                                số điện
                                thoại.</p>
                            <div class="row">
                                <div class="col-6 mb-2">
                                    <div class="form-group effect">
                                        <label for="exampleInputEmail1">Họ và tên</label>
                                        <input type="text" class="form-control scale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                        <small class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-group effect">
                                        <label for="staticEmail3">Số điện thoại</label>
                                        <input type="text" class="form-control scale" id="staticEmail3" aria-describedby="emailHelp" placeholder="">
                                        <small class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                            </div>
                            <div style="min-height: 10px"></div>
                            <b>Bổ xung vị trí của bạn trên bản đồ Kiến trúc sư</b>
                            <p>Việc bổ xung vị trí của KTS giúp chủ nhà có thể tìm thấy KTS xung quanh mình, giúp
                                KTS dễ dàng
                                tiếp cận với khách hàng tiềm năng</p>
                            <div style="min-height: 10px"></div>

                            <label for="basic-url" class="d-none">Your vanity URL</label>
                            <div class="input-group no-scale mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">
                                        <i class="kt-icon grey size-10x12">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 12">
                                                <path d="M4.6 0A4.6 4.6 0 0 0 0 4.7c0 3.2 4 7 4.3 7.2h.6C5 11.7 9 7.9 9 4.7 9.1 2 7.1 0 4.6 0zm0 7C3.3 7 2.3 6 2.3 4.7c0-1.3 1-2.4 2.3-2.4 1.2 0 2.3 1 2.3 2.4C6.9 6 5.9 7 4.6 7z"
                                                      fill-rule="nonzero"/>
                                                </svg>
                                        </i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="validationTooltipUsername"
                                       placeholder="Địa chỉ của bạn"
                                       aria-describedby="validationTooltipUsernamePrepend">
                            </div>

                            <div class="clearfix">
                                <button type="button" class="btn btn-link float-left pl-0">Xác định tọa độ dựa trên
                                    vị
                                    trí của bạn
                                </button>
                                <button type="button" class="btn btn-link float-right pr-0">Xem thử trên bản đồ
                                </button>
                            </div>
                            <div style="min-height: 30px"></div>
                            <div class="grid-two-160">
                                <div class="item">
                                    <button id="nut-hinh-avatar" type="button" class="btn btn-add-avatar"
                                            onclick="javascript:openCutAvatar()">
                                        <div>
                                            <i class="kt-icon size-36x36">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                                    <path d="M18 0a18 18 0 1 0 0 36 18 18 0 0 0 0-36zm0 5.4a6 6 0 1 1 0 11.9 6 6 0 0 1 0-12zm0 25.9c-3.3 0-6.3-1.2-8.6-3.2-.6-.5-.9-1.2-.9-2a6 6 0 0 1 6-6h7a6 6 0 0 1 6 6c0 .8-.3 1.5-.9 2-2.3 2-5.3 3.2-8.6 3.2z"
                                                          fill="#D1D1D1" fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                        </div>
                                    </button>
                                    <div id="hinh-avatar" class="d-none"></div>
                                    <input type="hidden" name="" id="base64-image"/>
                                    <!--<div id="result-anh"></div>-->
                                    <input type="file" id="upload" class="d-none"/>
                                    <div class="text-center d-none">
                                        <!--<button type="button" class="btn btn-primary btn-sm" id="fromFace">Lấy ảnh từ facebook ?</button>-->

                                        <button type="button" id="btnSubmitCutimage"
                                                class="btn btn-warning btn-sm hidden">
                                            <i class="fas fa-cut"></i>
                                        </button>

                                        <button class="btn btn-success btn-sm" onclick="javascript:catanhthuvien()"
                                                name="login-button" type="button">
                                            <i class="fas fa-save"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="item">
                                    <b>Bổ xung hình ảnh đại diện</b>
                                    <p>Để nâng cao sự chuyên nghiệp, yêu cầu sử dụng hình ảnh chân dung của chính
                                        bạn làm hình
                                        ảnh đại diện. </p>
                                    <p>Kéo thả hình ảnh vào khu vực bên trái hoặc
                                        <button type="button" class="btn btn-link btn-xs px-0 py-0"
                                                onclick="javascript:openCutAvatar()">bấm vào đây
                                        </button>
                                        để tải hình ảnh từ máy
                                        tính của
                                        bạn.
                                    </p>
                                    <button type="button" class="btn btn-link btn-sm pl-0" onclick="javascript:resetUploadAvatar()">
                                        <span style="color: #FF5A5A">Xóa hình ảnh</span>
                                    </button>
                                </div>
                            </div>
                            <div class="grid-two-160">
                                <div class="item">
                                    <button type="button" class="btn btn-add-project"
                                            onclick="javascript:modalAddProject();">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="item">
                                    <b>Đăng công trình</b>
                                    <p>Để trở thành kiến trúc sư trên hệ thống MXH Kientruc.com, chúng tôi yêu cầu
                                        bắt buộc mọi
                                        KTS cần đăng tải ít nhất 1 công trình. Đội ngũ admin sẽ kiểm duyệt và thông
                                        báo tới bạn
                                        sớm nhất có thể</p>
                                    <a href="javascript:modalAddProject();"
                                       style="color: #248444;font-size: 12px;font-weight: 500;">Thêm dự án</a>
                                </div>
                            </div>
                            <div style="min-height: 30px"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 20px"></div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Tôi đã đọc và hoàn
                                            toàn đồng ý với <span style="color: #248444;">điều
                                                khoản và chính sách bảo mật</span> của <span style="font-weight: 600">kientruc.com</span></label>
                                    </div>
                                </div>
                                <div class="col-5 text-right">
                                    <button type="button" class="btn submitBut">
                                        <span>Nâng cấp tài khoản</span>
                                        <i class="kt-icon bo-tron green">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                                                <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                                      fill-rule="evenodd"></path>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div style="min-height: 30px"></div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    div.cr-boundary {
        border-radius: 4px;
    }

    div.cr-boundary div.cr-viewport.cr-vp-square {
        border-radius: 240px;
        box-shadow: 0 0 2000px 2000px rgba(218, 218, 218, 0.4);
        border-width: 1px;
    }

    div.croppie-container .cr-slider-wrap {
        width: 100%;
        margin: 5px 0 0 0;
    }

    div.modal-dialog.modal-cus-900 {
        min-width: 900px;
    }
</style>

<script type="text/javascript">
    function catanhthuvien() {
        $('body').find('#btnSubmitCutimage').click();
    }

    function loadThuVien() {
        var el = document.getElementById('hinh-avatar');
        var resize = new Croppie(el, {
            enableExif: true,
            viewport: {width: 130, height: 130},
            boundary: {width: 160, height: 160},
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

        $('#upload').on('change', function () {
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

        $('#fromFace').on('click', function () {
            readFileFromFace();
        });*/

        $('#btnSubmitCutimage').on('click', function () {
            if (document.getElementById("upload").files.length === 1) {
                //on button click
                resize.result('base64').then(function (blob) {
                    // do something with cropped blob
                    //$('#result-anh').html('<img src="' + blob + '" />');
                    $('#base64-image').val(blob);
                    if ($('body').find('#base64-image').val().length > 0) {
                        ajaxSubmitForm($('#modal-update-avatar-form'));
                    } else {
                        alert('Lỗi: Lưu hình ảnh không thành công!');
                    }
                });
            }
        });

    }

    /*function loadRefresh() {
        window.location.reload(true);
    }*/

    function openCutAvatar(){
        $('#upload').click();
        $('body').find('#nut-hinh-avatar').addClass('d-none');
        $('body').find('#hinh-avatar').removeClass('d-none');
    }

    function resetUploadAvatar(){
        $('body').find('#nut-hinh-avatar').removeClass('d-none');
        $('body').find('#hinh-avatar').addClass('d-none');
    }

    async function modalAddProject() {
        var $modal = $('#myModal-add-project');
        await $.ajax({
            url: "/site/add-project",
            method: "POST",
            //data: { id : menuId },
            dataType: "html"
        }).done(async function (msg) {
            await $modal.find('.content-cus').html(msg);
        });
        await $modal.modal({
            keyboard: false,
            show: true,
            backdrop: 'static'
        });
    }
</script>

<?php
Modal::begin([
    'headerOptions' => false,
    'closeButton' => false,
    'id' => 'myModal-add-project',
    'size' => 'modal-cus-900',
    //'tabIndex' => false,
    'clientOptions' => [
        'backdrop' => 'static',
        'keyboard' => false,
        'focus' => false,
    ],
]);
?>
<button type="button" class="close btn-fixed-close transition"
        data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="content-cus"></div>
<?php
Modal::end();
?>

<?php
$this->registerCssFile("@web/css/upgrade.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerCssFile("@web/library/copiece/croppie.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/library/copiece/croppie.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
    loadThuVien()
");

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
?>
