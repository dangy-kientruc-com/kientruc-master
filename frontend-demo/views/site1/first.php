<div class="kt-wrap">
    <div class="kt-main">

        <div class="grid-container-2">
            <div class="item" >
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
                        <div style="min-height: 90px"></div>
                        <h1>Chào mừng bạn trở lại với Kientruc.com</h1>

                        <div class="box-step">
                            <div class="row no-gutters">
                                <div class="col step active">
                                    <span class="">1</span>
                                    <b>Bạn là ai</b>
                                    <i>..........................</i>
                                </div>
                                <div class="col step">
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

                        <h2>Nhằm giúp trải nghiệm website được tốt hơn, bạn vui lòng cung cấp thêm thông tin cá nhân.</h2>

                        <p><b>Bạn tham gia kientruc.com với vai trò là ?*</b></p>
                        <p>Dựa vào đó chúng tôi sẽ hiển thị những thông tin và thông báo phù hợp cho bạn.</p>

                        <div class="table-grid">
                            <div class="td">
                                <button type="button" class="btn active" onclick="javascript:choiseLevel(this,1)">
                                    Chuyên gia
                                </button>
                            </div>
                            <div class="td td-1">
                                <p class="one">Bao gồm: Kiến Trúc Sư, Nhà Thiết Kế Nội Thất, Kỹ Sư Xây Dựng, Kết Cấu, Điện Nước</p>
                                <p class="two d-none">Bạn đã chọn chính xác</p>
                            </div>

                            <div class="td">
                                <button type="button" class="btn" onclick="javascript:choiseLevel(this,2)">
                                    Chủ nhà
                                </button>
                            </div>
                            <div class="td td-2">
                                <p class="one">Đang có nhu cầu tìm kiếm thông tin nhà cửa để thiết kế xây dựng ngôi nhà của mình</p>
                                <p class="two d-none">Bạn đã chọn chính xác</p>
                            </div>

                            <div class="td">
                                <button type="button" class="btn" onclick="javascript:choiseLevel(this,3)">
                                    Nhân viên kinh doanh
                                </button>
                            </div>
                            <div class="td td-3">
                                <p class="one">Tìm kiếm kết nối với các chuyên gia trong lĩnh vực thiết kế và thi công công trình dân dụng</p>
                                <p class="two d-none">Bạn đã chọn chính xác</p>
                            </div>
                        </div>

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
                                        <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z" fill-rule="evenodd"></path>
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
    async function choiseLevel(el,stt) {

        var ongnoi = await $(el).parent().parent();
        await ongnoi.find('button').each(function () {
           $(this).removeClass('active');
        });
        await ongnoi.find('.one').each(function () {
            $(this).removeClass('d-none');
        });
        await ongnoi.find('.two').each(function () {
            $(this).addClass('d-none');
        });

        await $(el).addClass('active');
        var par = $('body').find('.td-'+stt);
        par.find('.one').addClass('d-none');
        par.find('.two').removeClass('d-none');

    }
</script>

<?php
$this->registerCssFile("@web/css/wellcome.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

