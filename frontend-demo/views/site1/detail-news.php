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

        <div class="container">
            <div class="kt-row">
                <div style="min-height: 20px"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tạp chí</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <i class="kt-icon grey size-6x10">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                            Nội thất
                        </li>
                    </ol>
                </nav>
                <div class="kt-line grey"></div>
                <div style="min-height: 15px"></div>
            </div>
        </div>

        <div class="container">
            <div class="kt-row">
                <div class="kt-row">
                    <div class="grid-head-10">
                        <div class="item1">
                            <div class="head-left">
                                <h1>Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại</h1>
                                <h2>Biệt thự là một trong những loại hình nhà ở cao cấp nhất hiện nay, vì vậy những yêu
                                    cầu về một không gian sống không chỉ là tính thẩm mỹ mà còn là công năng và xa hơn
                                    nữa là khẳng định được đẳng cấp của chủ sở hữu. Thế nên, khi lựa chọn một công ty
                                    thiết kế nội thất các chủ căn biệt thự thường rất kỹ càng và ưu tiên những công ty
                                    giàu kinh nghiệm.</h2>
                                <div class="clearfix">
                                    <ul class="list-unstyled float-left share">
                                        <li>
                                            <i class="kt-icon black size-15x13">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                    <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                            <span>Nội Thất</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled float-right share">
                                        <li>
                                            <i class="kt-icon black size-15x12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                    <path d="M13.4 0H2.1C1 0 0 1 0 2v7.3c0 1 1 2 2 2h.6V14l4.6-2.5h6.2c1 0 2-1 2-2V2c0-1-1-2-2-2z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                            <span>24</span>
                                        </li>
                                        <li>
                                            <i class="kt-icon black size-17x12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                    <path d="M12.3.3c-1.4 0-2.7.7-3.4 1.8 0 0-.3.4-.7.4-.4 0-.6-.4-.6-.4A4.1 4.1 0 0 0 .3 6c1.2 3.6 6.3 7.8 8 8 1.5-.2 6.7-4.4 7.8-8A4.1 4.1 0 0 0 12.3.3z"
                                                          fill-rule="evenodd"/>
                                                </svg>
                                            </i>
                                            <span>89</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item2">
                            <div class="head-right">
                                <img src="/images/565x422.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="kt-row">
                <div class="kt-row">
                    <div class="grid-2-360">
                        <div class="item1">
                            <div class="detail-info">
                                <div class="detai-text-full">
                                    <h2><span style="color: #008000;"><strong>15 mẫu thiết kế nội thất biệt thự đẹp và hiện đại</strong></span>
                                    </h2>
                                    <p>
                                        <span style="float: left; font-size: 45px; font-weight: 600; line-height: 0.9; margin-right: 3px; color: #248445;">N</span>ội
                                        thất Kientruc.com tự hào là một trong những đối tác được nhiều gia chủ lựa chọn.
                                        Ngay sau đây, chúng tôi xin được mời quý vị Chiêm ngưỡng 15 mẫu thiết kế nội
                                        thất biệt thự đẹp theo phong cách hiện đại ấn tượng nhất 2019.</p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 1: Thiết kế nội thất biệt thự đẹp với phong cách hiện đại</strong></span>
                                    </h3>
                                    <p>Không gian phòng khách của căn biệt thự này thực sự rất rộng rãi và được sắp xếp
                                        thừa ra khá nhiều khoảng trống. Một ngôi nhà vừa đẹp lại vừa có nhiều không gian
                                        đẹp như thế này còn gì tuyệt vời hơn. Không chuộng theo những đồ nội thất chi
                                        tiết, nơi đây hầu như được chọn lựa những trang trí đơn giản nhưng lại khá ấn
                                        tượng và độc đáo.</p>
                                    <p><img id="84991" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại7"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780217.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780217">
                                    </p>
                                    <p>Chiếc sofa văng dài khá bề thế, kết hợp cùng chiếc bàn trà mặt vuông kính cường
                                        lực màu đen quyền lực. Hay chiếc kệ tivi để đặt hoa cây cảnh ngay sát cửa sổ.
                                        Chiếc đèn chùm độc đáo tỏa ánh sáng dịu nhẹ xuống căn phòng …. Tất cả đều rất
                                        hài hòa và hợp lý.</p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 2: Không gian phòng khách hiện đại với đồ nội thất đơn giản</strong></span>
                                    </h3>
                                    <p>Ở không gian này cũng được thiết kế theo phong cách hiện đại, bằng việc sử dụng
                                        gam màu sáng như màu gỗ, màu sơn trắng hay màu vàng của rèm đã giúp nơi đây sang
                                        trọng hơn rất nhiều. Cách nhấn nhấn bằng màu đen từ chiếc gối ôm, ghế đơn hay
                                        đèn bàn là một cách để phòng khách bớt đơn điệu và nhàm chán. Không gian phòng
                                        khách rộng rãi và còn thừa khá nhiều diện tích cho việc đi lại.</p>
                                    <p><img id="84985" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại1"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780181.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780181">
                                    </p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 3: Thiết kế nội thất biệt thự với các phòng công năng</strong></span>
                                    </h3>
                                    <p>Căn biệt thự này được chia làm từng khu khá rõ ràng. Khu phòng khách, phòng sinh
                                        hoạt chung và khu vực bếp ăn nấu nướng riêng. Do có lợi thế về mặt diện tích nên
                                        các kiến trúc sư đã tận dụng điều này để tạo nên sự tiện nghi cho không gian. Ở
                                        mỗi khu vực có sự liên kết và hài hòa với nhau, không bị tách biệt so với tổng
                                        thể chung. Và phong cách thiết kế tối giản luôn được các vị đại gia yêu
                                        thích.</p>
                                    <p><img id="84992" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại8"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780228.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780228">
                                    </p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 4: Không gian rộng rãi của phòng khách biệt thự với nội thất sang trọng</strong></span>
                                    </h3>
                                    <p>Thiết kế theo phong cách tân cổ điển hoàng gia, căn phòng này đã làm tôn lên sự
                                        bề thế cho không gian của gia chủ. Không gian rất rộng rãi được phân chia làm 2
                                        khu vực là phòng khách và phòng sinh hoạt chung, hay phòng tiếp khách cũng được.
                                        Sự cầu kỳ của những chi tiết trên đồ nội thất đã cho thấy gu thẩm mỹ tinh tế của
                                        gia chủ cũng như tiềm lực về kinh tế.</p>
                                    <p><img id="84987" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại3"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780193.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780193">
                                    </p>
                                    <p>Ý tưởng thiết kế này rất hữu ích với những căn biệt thự có diện tích rộng rãi và
                                        thích hợp cho những gia chủ chịu đầu tư. Sự kết hợp giữa những không gian xanh
                                        vào càng làm căn phòng tinh tế và hút mắt hơn.</p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 5: Không gian nội thất biệt thự gộp chung các phòng với nhau</strong></span>
                                    </h3>
                                    <p>Không gian căn biệt thự này tuy không quá rộng nhưng cũng rất thoải mái. Phương
                                        án lựa chọn thiết kế gộp chung các căn phòng lại với nhau là khá hợp lý vì tạo
                                        nên sự tiện lợi cũng như khiến không gian chung được rộng rãi hơn. Màu sắc trẻ
                                        trung được áp dụng vào bản thiết kế này và những đồ decor khác biệt cũng được sử
                                        dụng nhiều hơn. Ví dụ như chiếc bàn trà thông minh, bộ bàn ghế ăn form dáng lạ
                                        mắt hay chiếc đèn bàn phòng ăn …</p>
                                    <p><img id="84984" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại0"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780180.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780180">
                                    </p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 6: Thiết kế nội thất biệt thự đẹp kết hợp hiện đại và tân cổ</strong></span>
                                    </h3>
                                    <p>Không gian trở nên đẹp hơn khi có sự góp mặt của chiếc bàn trà thực sự ấn tượng
                                        làm từ mặt kính cường lực và inox 304 mạ vàng titan sang trọng. Những chiếc ghế
                                        sofa nhã nhặn kết hợp hài hòa cùng thảm sản cùng tông màu đã tôn lên sự trang
                                        nhã cho không gian. Không gian nơi đây rất rộng và xứng đáng với sự bề thế của
                                        một không gian căn biệt thự cao cấp.</p>
                                    <p><img id="84990" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại6"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780216.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780216">
                                    </p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 7: Mẫu thiết kế phòng khách biệt thự trang nhã</strong></span>
                                    </h3>
                                    <p>Nhìn vào bản thiết kế này chúng ta cảm nhận được sự nhã nhặn và trang trọng của
                                        không gian. Căn phòng khách được tách riêng một khu và có sử dụng khá nhiều ghế
                                        sofa tiếp khách. Chiếc bàn gỗ tự nhiên 4 chân đơn giản mix cùng bộ ghế sofa rất
                                        đẹp và không cần phải cầu kỳ. Không gian sân vườn được ngắm trọn vẹn hơn nhờ vào
                                        hệ cửa sổ rất rộng làm từ những tấm rèm mắt vì vậy, vừa có thể thưởng trà vừa có
                                        thể ngắm nhìn không gian cây xanh ở ngoài sẽ đem lại cho gia chủ cảm giác thật
                                        thoải mái.</p>
                                    <p><img id="84989" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại5"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780205.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780205">
                                    </p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 8: Mẫu thiết kế nội thất biệt thự phòng khách mới lạ theo phong cách trẻ trung</strong></span>
                                    </h3>
                                    <p>Căn phòng có sự trẻ trung và phá cách vì vậy hợp hơn với gia chủ có gu thẩm mỹ
                                        độc và dị một chút. Hầu như căn phòng này không tuân thủ theo quy mẫu thiết kế
                                        nào mà hướng tới sự sáng tạo và khác biệt nhiều hơn. Không gian với bức tường đá
                                        truyền thống, những bộ sofa tối màu, chiếc ghế đơn khá cổ và khu vực phòng bếp
                                        độc đáo.</p>
                                    <p><img id="84988" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại4"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780204.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780204">
                                    </p>
                                    <h3><span style="color: #ff6600;"><strong>Mẫu 9: Không gian phòng khách sang trọng và tối giản</strong></span>
                                    </h3>
                                    <p>Nổi bật giữa sàn nhà màu tối chính là những đồ decor sáng màu và rất hoành tráng.
                                        Cách phối hợp sử dụng tông màu của kiến trúc sư rất thông minh giúp nơi đây toát
                                        lên sự sang trọng cho không gian phòng khách. Sự sắp xếp hợp lý các hạng mục làm
                                        không gian được rộng rãi hơn và cảm giác thanh thản hơn rất nhiều.</p>
                                    <p><img id="84986" class="question123"
                                            style="display: block; margin-left: auto; margin-right: auto;"
                                            title="Chiêm ngưỡng 15 mẫu thiết kế nội thất biệt thự đẹp theo phong cách hiện đại2"
                                            src="https://www.kientruc.com/uploads/article/520x340chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780192.jpeg"
                                            alt="chiem-nguong-15-mau-thiet-ke-noi-that-biet-thu-dep-theo-phong-cach-hien-dai15529780192">
                                    </p>
                                    <p>Những <strong><a title="mẫu nội thất biệt thự đẹp"
                                                        href="https://maunoithat.net/danh-muc/noi-that/biet-thu/">mẫu
                                                thiết kế nội thất biệt thự đẹp</a></strong> này không phải đơn giản,
                                        chúng đòi hỏi sự cầu kỳ, tỉ mỉ và phải có kinh nghiệm thì mới giúp gia chủ tối
                                        ưu được không gian. Nếu như bạn cũng đang có nhu cầu thiết kế nội thất cho biệt
                                        thự đừng quên liên hệ với kientruc.com để được tư vấn và chia sẻ những giải pháp
                                        thiết kế nội thất mới nhất bắt kịp xu thế thời đại.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p></div>

                                <div class="clearfix"></div>
                                <div class="kt-line grey"></div>

                                <div class="footer-top">
                                    <div class="float-left" style="padding-top: 6px;">
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2"></script>
                                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/"
                                             data-layout="button_count" data-action="like" data-size="small"
                                             data-show-faces="true" data-share="false"></div>
                                    </div>
                                    <div class="float-right">
                                        <div class="social">
                                            <a href="" title="">
                                                <button type="button" class="btn sface">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                            </a>
                                            <a href="" title="">
                                                <button type="button" class="btn sgoogle">
                                                    <i class="fab fa-google"></i>
                                                </button>
                                            </a>
                                            <a href="" title="">
                                                <button type="button" class="btn stwitter">
                                                    <i class="fab fa-twitter"></i>
                                                </button>
                                            </a>
                                            <a href="" title="">
                                                <button type="button" class="btn srss">
                                                    <i class="fas fa-rss"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="kt-line grey"></div>

                                <div class="footer-bottom">
                                    <div class="row justify-content-between">
                                        <div class="col-5">
                                            <label for="">Bài trước</label>
                                            <h4>
                                                <a href="" title="">
                                                    Thiết kế nội thất hoàn hảo với phông màu xanh.
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <label for="">Bài sau</label>
                                            <h4>
                                                <a href="" title="">
                                                    Các mẫu thiết kế nội thất văn phòng sáng tạo nhất năm 2018.
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                        <div class="item2">
                            <div class="detail-right transition sticky" style="top: 60px;">
                                <div class="title-lg">
                                    Bài viết cùng chủ đề
                                </div>
                                <div class="kt-line grey"></div>
                                <div style="min-height: 10px"></div>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    ?>
                                    <div class="clearfix"></div>
                                    <div style="min-height: 20px"></div>
                                    <div class="col-two">
                                        <div class="image">
                                            <a href="" title="">
                                                <img src="/images/565x422.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <a href="" title="">
                                            <h3 class="title">Thiết kế nội thất hoàn hảo với phông màu xanh.</h3>
                                        </a>
                                        <ul class="list-unstyled date">
                                            <li>
                                                <i class="kt-icon black size-15x13">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
                                                        <path d="M15.9 5v6c0 .7-.3 1.4-.8 2-.6.5-1.2.7-2 .7H3c-.8 0-1.4-.2-2-.8-.5-.5-.8-1.2-.8-2V3c0-.8.3-1.4.8-2C1.5.4 2.1.1 3 .1h2.7c.7 0 1.4.3 2 .8.3.4.6.9.7 1.4H13c.8 0 1.4.2 2 .8.5.5.8 1.2.8 2zm-2-.7a1 1 0 0 0-.8-.2H7.5a.9.9 0 0 1-1-1V3c0-.3 0-.5-.2-.7a1 1 0 0 0-.7-.3H2.9a1 1 0 0 0-.7.3 1 1 0 0 0-.3.7v8c0 .3 0 .6.3.8.2.2.4.2.7.2H13c.3 0 .5 0 .7-.2.2-.2.3-.5.3-.7V5c0-.2 0-.5-.3-.7z"
                                                              fill-rule="nonzero"/>
                                                    </svg>
                                                </i>
                                                <span>Nội thất</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="clearfix"></div>
                                <div style="min-height: 20px"></div>
                                <a href="" title="">
                                    <img src="/images/360x200.jpg" alt="" class="img-fluid"
                                         style="border-radius: 4px"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div style="min-height: 30px"></div>
        <?= \frontend\widgets\footerWidget::widget() ?>

    </div>

<?php
$this->registerCssFile("@web/css/detail-news.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
