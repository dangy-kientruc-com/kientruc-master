<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/27/2019
 * Time: 4:47 PM
 */

echo $this->render('render/modal');
if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    echo $this->render('mobile/index-modal');

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    echo $this->render('mobile/index-modal');

} else {
    //la desktop
    echo $this->render('desktop/index-modal');
}
?>

<div class="kt-wrap">
    <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

    <div class="menu-step">
        <div class="item1 kt-transition">
            <div class="title-bell">
                <i class="kt-icon grey size-18x20"
                   style="margin-right: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                        <g fill-rule="evenodd">
                            <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                            <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                        </g>
                    </svg>
                </i>
                <span>Thông báo</span>
            </div>
            <div class="clearfix"></div>
            <nav class="notify-menu">
                <ul class="list-unstyled">
                    <li data-choise="chat">
                        <a href="javascript:;" title="">
                            <button type="button" class="btn" onclick="javascript:showItem2({choi:'chat',item:2})">
                                <i class="kt-icon white size-15x13">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i>
                                <span>Chat trực tuyến</span>
                                <b data-number="12">12</b>
                            </button>
                        </a>
                    </li>
                    <li data-choise="chieckhau">
                        <a href="javascript:;" title="">
                            <button type="button" class="btn" onclick="javascript:showItem2({choi:'chieckhau',item:3})">
                                <i class="kt-icon white size-15x14">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <span>Thông tin chiết khấu</span>
                                <b data-number="3">3</b>
                            </button>
                        </a>
                    </li>
                    <li data-choise="group">
                        <a href="javascript:;" title="">
                            <button type="button" class="btn" onclick="javascript:showItem2({choi:'group',item:4})">
                                <i class="kt-icon white size-16x13">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6c1.4 0 2.5-1.4 2.5-3v-.4C10.5 1.1 9.4 0 8 0S5.5 1.1 5.5 2.6v.5c0 1.5 1 3 2.5 3zm-5 .5c.4 0 1.5-.5 1.5-1.6v-.8c0-1-.8-1.6-1.5-1.6s-1.5.6-1.5 1.6V5C1.5 6 2.6 6.5 3 6.5zm9 2l-.1-.3c0-.2-.1-.4-.3-.5l-1-1-.6-.2c-.3 0-.5.2-1 .6l-.3.4S8.3 8 8 8c-.3 0-.7-.5-.7-.5L6.9 7c-.4-.4-.6-.6-1-.6l-.5.3c-.5.3-.8.6-1 .9a1.7 1.7 0 0 0-.4.8V11c0 .7.3 1 1 1h6c.7 0 1-.3 1-1V8.8v-.3zm1-2c.4 0 1.5-.5 1.5-1.6v-.8c0-1-.8-1.6-1.5-1.6s-1.5.6-1.5 1.6V5c0 1.1 1.1 1.6 1.5 1.6zM1 7.6C.2 8.1 0 9 0 9.6v1c0 .6.2 1 1 1h2v-3L2.5 8c-.5-.4-1-.6-1.4-.4zm2 1s0-.3 0 0zm12.9 1c0-.6-.2-1.5-1.2-2-.4-.2-.8 0-1.3.4l-.5.5v3h2c.7 0 1-.3 1-1v-1zm-3-1c0-.3 0 0 0 0z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i>
                                <span>Mục cộng đồng</span>
                            </button>
                        </a>
                    </li>
                    <li data-choise="ask">
                        <a href="javascript:;" title="">
                            <button type="button" class="btn" onclick="javascript:showItem2({choi:'ask',item:5})">
                                <i class="fas fa-question"></i>
                                <span>Hỏi chuyên gia</span>
                                <b data-number="2">2</b>
                            </button>
                        </a>
                    </li>
                    <li data-choise="project">
                        <a href="javascript:;" title="">
                            <button type="button" class="btn" onclick="javascript:showItem2({choi:'project',item:6})">
                                <i class="kt-icon white size-15x14">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <g fill-rule="evenodd">
                                            <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                        </g>
                                    </svg>
                                </i>
                                <span>Dự án của bạn</span>
                                <b data-number="10">10</b>
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="item2 kt-transition">
            <div data-item="2" class="template-chat d-none">
                <div class="title-bell">
                    <i class="kt-icon grey size-18x20"
                       style="margin-right: 4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <span onclick="javascript:prevNote()">Thông báo</span>
                    <i class="kt-icon next-icon grey size-6x10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"/>
                        </svg>
                    </i>
                    <span class="next-txt">Chat trực tuyến</span>
                </div>
                <div class="clearfix"></div>
                <div class="notify-container">
                    <div class="item-box" onclick="javascript:showItem3()">
                        <div class="avatar">
                            <img src="/images/avatar.png" alt="" class="img-fluid">
                        </div>
                        <div class="info">
                            <div class="one">
                                <b class="float-left">
                                    Nguyễn Huy Hoàng
                                </b>
                                <b class="float-right time">
                                    00:12
                                </b>
                                <div class="clearfix"></div>
                            </div>
                            <div class="five">
                                Hoàng: ^^ mình muốn xin tư vấn thiết kế căn hộ Vista Verde vào..
                            </div>
                            <div class="three">
                                <i class="kt-icon green size-12x8">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
                                        <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2z"
                                              fill-rule="nonzero" opacity=".9"/>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        ?>
                        <div class="item-box" onclick="javascript:showItem3()">
                            <div class="avatar">
                                <img src="/images/avatar.png" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <div class="one">
                                    <b class="float-left" style="opacity: 0.5">
                                        Nguyễn Huy Hoàng
                                    </b>
                                    <b class="float-right time">
                                        00:12
                                    </b>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="five" style="opacity: 0.5">
                                    Hoàng: ^^ mình muốn xin tư vấn thiết kế căn hộ Vista Verde vào..
                                </div>
                                <div class="three">
                                    <i class="kt-icon green size-17x8">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 8">
                                            <path d="M.2 3.4a.5.5 0 0 1-.2-.3c0-.1 0-.3.2-.4L.9 2c.2-.2.5-.2.7 0l2.8 3c.1.1.3.1.4 0L9.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2l-4-4.2v-.2zM8 7L14.4.2c.3-.3.6-.3.8 0l.7.7c.2.2.2.5 0 .7l-6 6.2-.3.2c-.2 0-.3 0-.4-.2C8.3 7.4 8 7.1 8 7z"
                                                  fill-rule="nonzero" opacity=".9"/>
                                        </svg>
                                    </i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div data-item="3" class="template-chietkhau d-none">
                <div class="title-bell">
                    <i class="kt-icon grey size-18x20"
                       style="margin-right: 4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <span onclick="javascript:prevNote()">Thông báo</span>
                    <i class="kt-icon next-icon grey size-6x10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"/>
                        </svg>
                    </i>
                    <span class="next-txt">Chiết khấu</span>
                </div>
                <div class="clearfix"></div>
                <div class="notify-container">
                    <div class="not-database">
                        <i class="kt-icon size-64x64">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M63.3 59.7L4.3.7A2.5 2.5 0 1 0 .7 4.3l12.7 12.6c-.5 1.7-.8 3.4-.8 5.2v28H9.4a2.5 2.5 0 1 0 0 5h16.1a6.9 6.9 0 0 0 6.6 8.9 6.9 6.9 0 0 0 6.6-8.9h12.9l8.1 8.2a2.5 2.5 0 0 0 3.6 0c1-1 1-2.6 0-3.6zM32 59a1.9 1.9 0 1 1 0-3.8 1.9 1.9 0 0 1 0 3.8zm4.7-18.6H17.6V22v-1l19.2 19.3zM17.6 50v-4.7h24.2l4.8 4.7h-29zm3.7-39.7c-.5-1.3 0-2.8 1.3-3.3 2.2-1 4.5-1.5 7-1.7V2.5a2.5 2.5 0 1 1 5 0v2.9c10.3 1 17 7.4 17 16.7V36a2.5 2.5 0 1 1-5 0V22c0-8.6-7.4-11.8-14.3-11.8H32c-2.7 0-5.2.5-7.3 1.4-1.3.5-2.7 0-3.3-1.3z"
                                      fill="#9B9B9B" fill-rule="nonzero"/>
                            </svg>
                        </i>
                        <b>Không có thông báo mới</b>
                    </div>
                </div>
            </div>
            <div data-item="4" class="template-group d-none">
                <div class="title-bell">
                    <i class="kt-icon grey size-18x20"
                       style="margin-right: 4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <span onclick="javascript:prevNote()">Thông báo</span>
                    <i class="kt-icon next-icon grey size-6x10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"/>
                        </svg>
                    </i>
                    <span class="next-txt">Cộng đồng</span>
                </div>
                <div class="clearfix"></div>
                <div class="notify-container">
                    <div class="not-database">
                        <i class="kt-icon size-64x64">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M63.3 59.7L4.3.7A2.5 2.5 0 1 0 .7 4.3l12.7 12.6c-.5 1.7-.8 3.4-.8 5.2v28H9.4a2.5 2.5 0 1 0 0 5h16.1a6.9 6.9 0 0 0 6.6 8.9 6.9 6.9 0 0 0 6.6-8.9h12.9l8.1 8.2a2.5 2.5 0 0 0 3.6 0c1-1 1-2.6 0-3.6zM32 59a1.9 1.9 0 1 1 0-3.8 1.9 1.9 0 0 1 0 3.8zm4.7-18.6H17.6V22v-1l19.2 19.3zM17.6 50v-4.7h24.2l4.8 4.7h-29zm3.7-39.7c-.5-1.3 0-2.8 1.3-3.3 2.2-1 4.5-1.5 7-1.7V2.5a2.5 2.5 0 1 1 5 0v2.9c10.3 1 17 7.4 17 16.7V36a2.5 2.5 0 1 1-5 0V22c0-8.6-7.4-11.8-14.3-11.8H32c-2.7 0-5.2.5-7.3 1.4-1.3.5-2.7 0-3.3-1.3z"
                                      fill="#9B9B9B" fill-rule="nonzero"/>
                            </svg>
                        </i>
                        <b>Không có thông báo mới</b>
                    </div>
                </div>
            </div>
            <div data-item="5" class="template-ask d-none">
                <div class="title-bell">
                    <i class="kt-icon grey size-18x20"
                       style="margin-right: 4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <span onclick="javascript:prevNote()">Thông báo</span>
                    <i class="kt-icon next-icon grey size-6x10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"/>
                        </svg>
                    </i>
                    <span class="next-txt">Hỏi chuyên gia</span>
                </div>
                <div class="clearfix"></div>
                <div class="title">
                    <i class="kt-icon grey size-13x14">
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <b>Thông báo mới</b>
                    <span data-number="2">2</span>
                </div>
                <div class="notify-container">
                    <?php
                    for ($i = 0; $i < 2; $i++) {
                        ?>
                        <div class="item-box" onclick="javascript:showItem3()">
                            <div class="avatar">
                                <img src="/images/avatar.png" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <div class="two">
                                    <b>Đào Hồng Lê</b> đã thích câu trả lời của bạn trong topic: <b>Tự thiết kế phòng
                                        thay đồ..</b>
                                </div>
                                <div class="four">
                                    <i class="kt-icon text-top red size-13x13">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                            <path d="M12.3.3c-1.4 0-2.7.7-3.4 1.8 0 0-.3.4-.7.4-.4 0-.6-.4-.6-.4A4.1 4.1 0 0 0 .3 6c1.2 3.6 6.3 7.8 8 8 1.5-.2 6.7-4.4 7.8-8A4.1 4.1 0 0 0 12.3.3z"
                                                  fill-rule="evenodd" opacity=".4"/>
                                        </svg>
                                    </i> 10 phút trước
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="title">
                    <i class="kt-icon grey size-13x14">
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <b>Thông báo cũ hơn</b>
                </div>
                <div class="notify-container">
                    <?php
                    for ($i = 0; $i < 2; $i++) {
                        ?>
                        <div class="item-box" onclick="javascript:showItem3()" style="opacity: 0.5;">
                            <div class="avatar">
                                <img src="/images/avatar.png" alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <div class="two">
                                    <b>Vương Anh</b> đã thích câu trả lời của bạn trong topic: <b>Tự thiết kế phòng thay
                                        đồ..</b>
                                </div>
                                <div class="four">
                                    <i class="kt-icon text-top red size-13x13">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                            <path d="M12.3.3c-1.4 0-2.7.7-3.4 1.8 0 0-.3.4-.7.4-.4 0-.6-.4-.6-.4A4.1 4.1 0 0 0 .3 6c1.2 3.6 6.3 7.8 8 8 1.5-.2 6.7-4.4 7.8-8A4.1 4.1 0 0 0 12.3.3z"
                                                  fill-rule="evenodd" opacity=".4"/>
                                        </svg>
                                    </i> 2 ngày trước
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div data-item="6" class="template-project d-none">
                <div class="title-bell">
                    <i class="kt-icon grey size-18x20"
                       style="margin-right: 4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                            <g fill-rule="evenodd">
                                <path d="M4.6 12.2c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8H4.6z"/>
                                <path d="M12.1 11l-1.6-2.3v-3c0-2-1.4-3.6-3.3-4V.8c0-.4-.4-.8-.8-.8-.5 0-.9.4-.9.8v1c-1.9.3-3.3 2-3.3 4v2.9L.6 11c-.2.3-.2.6 0 .9 0 .2.4.4.7.4h10.2c.3 0 .5-.2.7-.4V11z"/>
                            </g>
                        </svg>
                    </i>
                    <span onclick="javascript:prevNote()">Thông báo</span>
                    <i class="kt-icon next-icon grey size-6x10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                            <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                  fill-rule="evenodd"/>
                        </svg>
                    </i>
                    <span class="next-txt">Dự án của bạn</span>
                </div>
                <div class="clearfix"></div>

                <div class="box-scroll-notification">
                    <div class="children part-01">
                        <div class="title">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="evenodd">
                                        <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                    </g>
                                </svg>
                            </i>
                            <b>Căn hộ Vinhome Central Park</b>
                            <span data-number="4">4</span>
                        </div>
                        <div class="notify-container">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                ?>
                                <div class="item-box" onclick="javascript:showItem3()">
                                    <div class="avatar">
                                        <img src="/images/avatar.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <div class="one">
                                            <b class="float-left">
                                                Đào Hồng Lê
                                            </b>
                                            <b class="float-right time">
                                                00:12
                                            </b>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="five">
                                            Mình muốn xin tư vấn thiết kế căn hộ Vista Verde vào..
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                        <div style="min-height: 20px"></div>
                    </div>
                    <div class="children part-02">
                        <div class="title">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="evenodd">
                                        <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                    </g>
                                </svg>
                            </i>
                            <b>Văn phòng cty TNHH Trung Nguyên</b>
                            <span data-number="3">3</span>
                        </div>
                        <div class="notify-container">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                ?>
                                <div class="item-box" onclick="javascript:showItem3()">
                                    <div class="avatar">
                                        <img src="/images/avatar.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <div class="one">
                                            <b class="float-left">
                                                Đào Hồng Lê
                                            </b>
                                            <b class="float-right time">
                                                00:12
                                            </b>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="five" style="opacity: 0.5;font-weight: 400;">
                                            Mình muốn xin tư vấn thiết kế căn hộ Vista Verde vào..
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                        <div style="min-height: 20px"></div>
                    </div>
                    <div class="children part-03">
                        <div class="title">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="evenodd">
                                        <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                    </g>
                                </svg>
                            </i>
                            <b>Văn phòng cty TNHH Trung Nguyên</b>
                        </div>
                        <div class="notify-container">
                            <div class="not-database">
                                <i class="kt-icon size-64x64">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M63.3 59.7L4.3.7A2.5 2.5 0 1 0 .7 4.3l12.7 12.6c-.5 1.7-.8 3.4-.8 5.2v28H9.4a2.5 2.5 0 1 0 0 5h16.1a6.9 6.9 0 0 0 6.6 8.9 6.9 6.9 0 0 0 6.6-8.9h12.9l8.1 8.2a2.5 2.5 0 0 0 3.6 0c1-1 1-2.6 0-3.6zM32 59a1.9 1.9 0 1 1 0-3.8 1.9 1.9 0 0 1 0 3.8zm4.7-18.6H17.6V22v-1l19.2 19.3zM17.6 50v-4.7h24.2l4.8 4.7h-29zm3.7-39.7c-.5-1.3 0-2.8 1.3-3.3 2.2-1 4.5-1.5 7-1.7V2.5a2.5 2.5 0 1 1 5 0v2.9c10.3 1 17 7.4 17 16.7V36a2.5 2.5 0 1 1-5 0V22c0-8.6-7.4-11.8-14.3-11.8H32c-2.7 0-5.2.5-7.3 1.4-1.3.5-2.7 0-3.3-1.3z"
                                              fill="#9B9B9B" fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <b>Không có thông báo mới</b>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="min-height: 20px"></div>
                    </div>
                    <div class="children part-04">
                        <div class="title">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="evenodd">
                                        <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                    </g>
                                </svg>
                            </i>
                            <b>Văn phòng cty TNHH Trung Nguyên</b>
                            <span data-number="3">3</span>
                        </div>
                        <div class="notify-container">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                ?>
                                <div class="item-box" onclick="javascript:showItem3()">
                                    <div class="avatar">
                                        <img src="/images/avatar.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <div class="one">
                                            <b class="float-left">
                                                Đào Hồng Lê
                                            </b>
                                            <b class="float-right time">
                                                00:12
                                            </b>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="five" style="opacity: 0.5;font-weight: 400;">
                                            Mình muốn xin tư vấn thiết kế căn hộ Vista Verde vào..
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                        <div style="min-height: 20px"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
$this->registerCssFile("@web/css/mobile/note.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
?>
