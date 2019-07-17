<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/26/2019
 * Time: 5:00 PM
 */

use yii\bootstrap4\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\slider\Slider;
use yii\bootstrap4\Modal;

?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>
        <div class="kt-main">

            <div class="box-940">
                <div class="item-left">
                    <div style="min-height: 30px"></div>
                    <div class="avatar">
                        <img src="/images/avatar.png" alt="" class="img-fluid">
                    </div>
                    <div style="min-height: 30px"></div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button type="button" class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            Thông tin tài khoản
                        </button>
                        <button type="button" class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">
                            Thông tin cá nhân
                        </button>
                        <button type="button" class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">
                            Kỹ năng chuyên môn
                        </button>
                        <button type="button" class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                href="#v-pills-skill" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                            Học vấn & Kinh nghiệm
                        </button>
                        <button type="button" class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                href="#v-pills-gif" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                            Giải thưởng cá nhân
                        </button>
                        <button type="button" class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                href="#v-pills-price" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                            Báo giá
                        </button>
                        <button type="button" class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                href="#v-pills-pass" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                            Đổi mật khẩu
                        </button>
                    </div>
                </div>
                <div class="item-right">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">

                            <h2 class="category-part">Thông tin tài khoản</h2>
                            <p><b>Kientruc.com</b> cam kết đảm bảo an toàn tuyệt đối cho các thông tin cá nhân của bạn
                            </p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Họ tên hiển thị</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect disabled" id="hovaten">
                                        <input id="i-txt1" type="text" class="form-control"
                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#hovaten');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#hovaten');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Email</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect disabled" id="email">
                                        <input id="i-txt1" type="text" class="form-control"
                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#email');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#email');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Đường link</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect disabled" id="link">
                                        <input id="i-txt1" type="text" class="form-control"
                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#link');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#link');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Ngày sinh</b>
                                </div>
                                <div class="td">
                                    <div class="height-50px disabled" id="ngaysinh">
                                        <?php
                                        // Change orientation of datepicker as well as markup type
                                        echo DatePicker::widget([
                                            'name' => 'date_12',
                                            'value' => '08 / 10 / 2004',
                                            'removeButton' => false,
                                            'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                            'pluginOptions' => [
                                                'calendarWeeks' => true,
                                                'orientation' => 'top right',
                                                'format' => 'dd / mm / yyyy',
                                                'autoclose' => true,
                                                'todayHighlight' => true
                                            ]
                                        ]);
                                        ?>
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#ngaysinh');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#ngaysinh');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">

                            <h2 class="category-part">Thông tin cá nhân</h2>
                            <p>Cung cấp thông tin cá nhân giúp khách hàng dễ dàng liên lạc với bạn trên hệ thống của <b>Kientruc.com</b>
                            </p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>
                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Số điện thoại</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect disabled" id="sodienthoai">
                                        <input id="i-txt1" type="text" class="form-control"
                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#sodienthoai');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#sodienthoai');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Email liên lạc</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect disabled" id="emaillienhe">
                                        <input id="i-txt1" type="text" class="form-control"
                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#emaillienhe');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#emaillienhe');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Website</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect disabled" id="website">
                                        <input id="i-txt1" type="text" class="form-control"
                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form color-green"
                                            onclick="javascript:changeEdit(this,'#website');">
                                        <i class="kt-icon green size-14x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <button type="button" class="btn btn-form" style="display: none"
                                            onclick="javascript:changeEdit(this,'#website');">
                                        <i class="kt-icon white size-15x11">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 11">
                                                <path d="M7 10.1c-.7.7-1.7.7-2.3 0L1 6.6a1.6 1.6 0 1 1 2.3-2.3l2.1 2.1c.2.2.5.2.6 0L11.8.7A1.6 1.6 0 0 1 14.1 3L7 10.1z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Cập nhật</span>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto">
                                <div class="td">
                                    <b>Mạng xã hội</b>
                                </div>
                                <div class="td">
                                    <div class="grid-auto-130">
                                        <div class="ttd">
                                            <div class="row">
                                                <div class="col-4 pr-1">
                                                    <div class="height-50px">
                                                        <?= Select2::widget([
                                                            'bsVersion' => '4.x',
                                                            'hideSearch' => true,
                                                            'name' => 'select1',
                                                            'data' => [2 => "Điện nước", 3 => "Cảnh quan", 4 => "Kỹ sư dự toán"],
                                                            'theme' => Select2::THEME_BOOTSTRAP, // this is the default if theme is not set
                                                            'options' => [
                                                                'placeholder' => 'Mạng xã hội',
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
                                                <div class="col-8">
                                                    <div class="form-group no-effect" id="mangxahoi">
                                                        <input id="i-txt1" type="text" class="form-control"
                                                               value="Sunshine in the rain - The Sun Avenue Quận 4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ttd text-center">
                                            <button type="button" class="btn btn-form color-green"
                                                    onclick="javascript:changeEdit(this,'#website');">
                                                <i class="kt-icon green size-14x11">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                        <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                              fill-rule="evenodd"/>
                                                    </svg>
                                                </i>
                                                <span>Xóa</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-150-auto">
                                <div class="td">
                                    <b>Địa chỉ</b>
                                </div>
                                <div class="td">
                                    <div style="min-height: 300px;width: 100%;border-radius: 4px;background-color: #ccc;"></div>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">
                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>
                            <h2 class="category-part">Kỹ năng chuyên môn</h2>
                            <p>Lựa chọn tối đa 5 từ khóa phù hợp với kỹ năng chuyên môn của bạn</p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <div class="tags-button">
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    ?>
                                    <button type="button" class="btn"
                                            onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                        <span>Triển khai kết cấu</span>
                                    </button>
                                    <button type="button" class="btn"
                                            onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                        <span>Làm phim</span>
                                    </button>
                                    <button type="button" class="btn"
                                            onclick="javascript:choise3El({json : {el:this,min:3,max:false}})">
                                        <span>Diễn họa 3D</span>
                                    </button>
                                    <?php
                                }
                                ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-skill" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            <h2 class="category-part">Học vấn & kinh nghiệm</h2>
                            <p>Cung cấp thông tin học vấn và kinh nghiệm cá nhân của bạn giúp khách hàng tin tưởng hơn
                                khi liên hệ</p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>

                            <div class="grid-60-auto-130">
                                <div class="td-01">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-24x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14">
                                                <path d="M12 9.4l7.2-2.2v3.6c0 1.8-3.2 3.2-7.1 3.2-4 0-7.2-1.4-7.2-3.1V7.2L12 9.4zM0 4.6L12 0l12.1 4.6-4.9 1.8L12 8.6 5 6.4l-.6-.2 1.2-.4.2-.3-1.7.4v.4l-.3 5c-1.2.8-2.3 0-2.3 0C1 9.6 2.9 5.8 2.9 5.8l.2-.3.8-.2-.2-.2-1 .1-.1.5-2.6-1z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <div class="td-02">
                                    <span>2017 - 2019</span>
                                    <b>Công ty trách nhiệm hữu hạn Circle Studio</b>
                                    <p>Trưởng phòng</p>
                                </div>
                                <div class="td-03">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <b data-toggle="tooltip" data-original-title="Chờ xác nhận">
                                        <i class="kt-icon green size-16x16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </b>
                                </div>
                            </div>
                            <div class="kt-line grey"></div>

                            <div style="min-height: 20px"></div>
                            <div class="grid-60-auto-130">
                                <div class="td-01">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-24x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14">
                                                <path d="M12 9.4l7.2-2.2v3.6c0 1.8-3.2 3.2-7.1 3.2-4 0-7.2-1.4-7.2-3.1V7.2L12 9.4zM0 4.6L12 0l12.1 4.6-4.9 1.8L12 8.6 5 6.4l-.6-.2 1.2-.4.2-.3-1.7.4v.4l-.3 5c-1.2.8-2.3 0-2.3 0C1 9.6 2.9 5.8 2.9 5.8l.2-.3.8-.2-.2-.2-1 .1-.1.5-2.6-1z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <div class="td-02">
                                    <span>2017 - 2019</span>
                                    <b>Công ty trách nhiệm hữu hạn Circle Studio</b>
                                    <p>Trưởng phòng</p>
                                </div>
                                <div class="td-03">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <b data-toggle="tooltip" data-original-title="Chờ xác nhận">
                                        <i class="kt-icon green size-16x16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </b>
                                </div>
                            </div>
                            <div class="kt-line grey"></div>

                            <div style="min-height: 20px"></div>
                            <div class="grid-60-auto-130">
                                <div class="td-01">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-24x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14">
                                                <path d="M12 9.4l7.2-2.2v3.6c0 1.8-3.2 3.2-7.1 3.2-4 0-7.2-1.4-7.2-3.1V7.2L12 9.4zM0 4.6L12 0l12.1 4.6-4.9 1.8L12 8.6 5 6.4l-.6-.2 1.2-.4.2-.3-1.7.4v.4l-.3 5c-1.2.8-2.3 0-2.3 0C1 9.6 2.9 5.8 2.9 5.8l.2-.3.8-.2-.2-.2-1 .1-.1.5-2.6-1z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <div class="td-02">
                                    <span>2017 - 2019</span>
                                    <b>Công ty trách nhiệm hữu hạn Circle Studio</b>
                                    <p>Trưởng phòng</p>
                                </div>
                                <div class="td-03">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <b data-toggle="tooltip" data-original-title="Chờ xác nhận">
                                        <i class="kt-icon green size-16x16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </b>
                                </div>
                            </div>
                            <div class="kt-line grey"></div>

                            <button type="button" style="padding-top: 20px;" class="btn btn-link pl-0" onclick="javascript:openAddGif();">
                                <i class="kt-icon green size-13x12">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 12">
                                        <path d="M6 5.1V1a.9.9 0 0 1 1.7 0V5H12A.9.9 0 0 1 12 7H7.7V11a.9.9 0 1 1-1.7 0V7H1.7a.9.9 0 0 1 0-1.8H6z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i>
                                <span style="font-weight: 400;">Thêm thông tin</span>
                            </button>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-gif" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">

                            <h2 class="category-part">Giải thưởng cá nhân</h2>
                            <p>Cung cấp thông tin học vấn và kinh nghiệm cá nhân của bạn giúp khách hàng tin tưởng hơn
                                khi liên hệ</p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>

                            <div class="grid-60-auto-130">
                                <div class="td-01">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-21x17">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 17">
                                                <path d="M16.5 1V0H4.1v1H0v.7C0 2 0 5.5 2.3 7.5a5 5 0 0 0 3.4 1.2h.7A6 6 0 0 0 9 10.9v3H6v1.8h-1v1h10.4v-1h-1V14h-3v-3a6 6 0 0 0 2.7-2.2h.7a5 5 0 0 0 3.5-1.2c2.2-2 2.2-5.6 2.2-5.8V1h-4zM3.2 6.5c-1.3-1.2-1.7-3-1.8-4.1h2.8a13.5 13.5 0 0 0 1.4 5c-1 0-1.8-.4-2.4-1zm14.3 0c-.7.5-1.5.8-2.4.9 0-.3.2-.5.3-.8.7-1.4 1-3 1-4.2h2.8c0 1-.5 3-1.7 4z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <div class="td-02">
                                    <span>2017 - 2019</span>
                                    <b>Công ty trách nhiệm hữu hạn Circle Studio</b>
                                    <p>Trưởng phòng</p>
                                </div>
                                <div class="td-03">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <b data-toggle="tooltip" data-original-title="Chờ xác nhận">
                                        <i class="kt-icon green size-16x16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </b>
                                </div>
                            </div>
                            <div class="kt-line grey"></div>

                            <div style="min-height: 20px"></div>
                            <div class="grid-60-auto-130">
                                <div class="td-01">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-21x17">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 17">
                                                <path d="M16.5 1V0H4.1v1H0v.7C0 2 0 5.5 2.3 7.5a5 5 0 0 0 3.4 1.2h.7A6 6 0 0 0 9 10.9v3H6v1.8h-1v1h10.4v-1h-1V14h-3v-3a6 6 0 0 0 2.7-2.2h.7a5 5 0 0 0 3.5-1.2c2.2-2 2.2-5.6 2.2-5.8V1h-4zM3.2 6.5c-1.3-1.2-1.7-3-1.8-4.1h2.8a13.5 13.5 0 0 0 1.4 5c-1 0-1.8-.4-2.4-1zm14.3 0c-.7.5-1.5.8-2.4.9 0-.3.2-.5.3-.8.7-1.4 1-3 1-4.2h2.8c0 1-.5 3-1.7 4z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <div class="td-02">
                                    <span>2017 - 2019</span>
                                    <b>Công ty trách nhiệm hữu hạn Circle Studio</b>
                                    <p>Trưởng phòng</p>
                                </div>
                                <div class="td-03">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <b data-toggle="tooltip" data-original-title="Chờ xác nhận">
                                        <i class="kt-icon green size-16x16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </b>
                                </div>
                            </div>
                            <div class="kt-line grey"></div>

                            <div style="min-height: 20px"></div>
                            <div class="grid-60-auto-130">
                                <div class="td-01">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-21x17">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 17">
                                                <path d="M16.5 1V0H4.1v1H0v.7C0 2 0 5.5 2.3 7.5a5 5 0 0 0 3.4 1.2h.7A6 6 0 0 0 9 10.9v3H6v1.8h-1v1h10.4v-1h-1V14h-3v-3a6 6 0 0 0 2.7-2.2h.7a5 5 0 0 0 3.5-1.2c2.2-2 2.2-5.6 2.2-5.8V1h-4zM3.2 6.5c-1.3-1.2-1.7-3-1.8-4.1h2.8a13.5 13.5 0 0 0 1.4 5c-1 0-1.8-.4-2.4-1zm14.3 0c-.7.5-1.5.8-2.4.9 0-.3.2-.5.3-.8.7-1.4 1-3 1-4.2h2.8c0 1-.5 3-1.7 4z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <div class="td-02">
                                    <span>2017 - 2019</span>
                                    <b>Công ty trách nhiệm hữu hạn Circle Studio</b>
                                    <p>Trưởng phòng</p>
                                </div>
                                <div class="td-03">
                                    <button type="button" class="btn">
                                        <i class="kt-icon green size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z"
                                                      fill-rule="evenodd"/>
                                            </svg>
                                        </i>
                                        <span>Sửa</span>
                                    </button>
                                    <b data-toggle="tooltip" data-original-title="Chờ xác nhận">
                                        <i class="kt-icon green size-16x16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                                      fill-rule="nonzero"/>
                                            </svg>
                                        </i>
                                    </b>
                                </div>
                            </div>
                            <div class="kt-line grey"></div>

                            <button type="button" style="padding-top: 20px;" class="btn btn-link pl-0" onclick="javascript:openAddGif();">
                                <i class="kt-icon green size-13x12">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 12">
                                        <path d="M6 5.1V1a.9.9 0 0 1 1.7 0V5H12A.9.9 0 0 1 12 7H7.7V11a.9.9 0 1 1-1.7 0V7H1.7a.9.9 0 0 1 0-1.8H6z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i>
                                <span style="font-weight: 400;">Thêm thông tin</span>
                            </button>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-price" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>
                            <h2 class="category-part">Báo giá</h2>
                            <p>Kientruc.com cam kết đảm bảo an toàn tuyệt đối cho các thông tin cá nhân của bạn</p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 15px"></div>

                            <nav class="bao-gia">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                       href="#noithat" role="tab" aria-controls="nav-home"
                                       aria-selected="true">Báo giá thiết kế nội thất</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                       href="#ngoaithat" role="tab" aria-controls="nav-profile" aria-selected="false">
                                        Báo giá thiết kế ngoại thất
                                    </a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="noithat" role="tabpanel"
                                     aria-labelledby="nav-home-tab">

                                    <div style="min-height: 15px"></div>

                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Trị giá công trình</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <?= Slider::widget([
                                                'name' => 'rating_2',
                                                'value' => '250,650',
                                                'sliderColor' => Slider::TYPE_GREY,
                                                'pluginOptions' => [
                                                    'min' => 10,
                                                    'max' => 1000,
                                                    'step' => 5,
                                                    'range' => true,
                                                    'tooltip' => 'always',
                                                    'formatter' => new yii\web\JsExpression("function(val) { 
                                                        return val;
                                                    }")
                                                ],
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Giá thiết kế tối thiểu</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <?= Slider::widget([
                                                'name'=>'rating_5',
                                                'value'=>3,
                                                'pluginOptions'=>[
                                                    'min'=>0,
                                                    'max'=>20,
                                                    'step'=>1,
                                                    'tooltip'=>'always',
                                                    'formatter'=>new yii\web\JsExpression("function(val) { 
                                                        if (val < 5) {
                                                            return 'Poor';
                                                        }
                                                        if (val < 10) {
                                                            return 'Fair';
                                                        }
                                                        if (val < 15) {
                                                            return 'Good';
                                                        }
                                                        if (val <= 20) {
                                                            return 'Excellent';
                                                        }
                                                    }")
                                                ]
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Giá thiết kế (m2)</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <?= Slider::widget([
                                                'name' => 'rating_4',
                                                'value' => '250,650',
                                                'sliderColor' => Slider::TYPE_GREY,
                                                'pluginOptions' => [
                                                    'min' => 10,
                                                    'max' => 1000,
                                                    'step' => 5,
                                                    'range' => true,
                                                    'tooltip' => 'always',
                                                    'formatter' => new yii\web\JsExpression("function(val) { 
                                                        return val;
                                                    }")
                                                ],
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Công khai thông tin</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="ngoaithat" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div style="min-height: 15px"></div>

                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Trị giá công trình</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <?= Slider::widget([
                                                'name' => 'rating_21',
                                                'value' => '250,650',
                                                'sliderColor' => Slider::TYPE_GREY,
                                                'pluginOptions' => [
                                                    'min' => 10,
                                                    'max' => 1000,
                                                    'step' => 5,
                                                    'range' => true,
                                                    'tooltip' => 'always',
                                                    'formatter' => new yii\web\JsExpression("function(val) { 
                                                        return val;
                                                    }")
                                                ],
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Giá thiết kế tối thiểu</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <?= Slider::widget([
                                                'name'=>'rating_22',
                                                'value'=>3,
                                                'pluginOptions'=>[
                                                    'min'=>0,
                                                    'max'=>20,
                                                    'step'=>1,
                                                    'tooltip'=>'always',
                                                    'formatter'=>new yii\web\JsExpression("function(val) { 
                                                        if (val < 5) {
                                                            return 'Poor';
                                                        }
                                                        if (val < 10) {
                                                            return 'Fair';
                                                        }
                                                        if (val < 15) {
                                                            return 'Good';
                                                        }
                                                        if (val <= 20) {
                                                            return 'Excellent';
                                                        }
                                                    }")
                                                ]
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Giá thiết kế (m2)</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <?= Slider::widget([
                                                'name' => 'rating_23',
                                                'value' => '250,650',
                                                'sliderColor' => Slider::TYPE_GREY,
                                                'pluginOptions' => [
                                                    'min' => 10,
                                                    'max' => 1000,
                                                    'step' => 5,
                                                    'range' => true,
                                                    'tooltip' => 'always',
                                                    'formatter' => new yii\web\JsExpression("function(val) { 
                                                        return val;
                                                    }")
                                                ],
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="grid-150-auto">
                                        <div class="td">
                                            <b>Công khai thông tin</b>
                                        </div>
                                        <div class="td">
                                            <div style="min-height: 13px"></div>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch24">
                                                <label class="custom-control-label" for="customSwitch24"></label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pass" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => ['controller/action'],
                            ]);
                            ?>
                            <h2 class="category-part">Thay đổi mật khẩu</h2>
                            <p>Mauris sit amet sem at tellus iaculis tempor. Phasellus condimentum.</p>
                            <div class="clearfix"></div>
                            <div class="kt-line grey"></div>
                            <div style="min-height: 30px"></div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Mật khẩu hiện tại</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect">
                                        <input id="i-txt1" type="password" class="form-control"
                                               value="">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form no-border">
                                        <i class="kt-icon size-20x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                      fill-rule="nonzero" fill="#474747"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Mật khẩu mới</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect">
                                        <input id="i-txt1" type="password" class="form-control"
                                               value="">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form no-border">
                                        <i class="kt-icon size-20x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                      fill-rule="nonzero" fill="#474747"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                            </div>

                            <div class="grid-150-auto-130">
                                <div class="td">
                                    <b>Nhập lại mật khẩu</b>
                                </div>
                                <div class="td">
                                    <div class="form-group no-effect">
                                        <input id="i-txt1" type="password" class="form-control"
                                               value="">
                                    </div>
                                </div>
                                <div class="td text-center">
                                    <button type="button" class="btn btn-form no-border">
                                        <i class="kt-icon size-20x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                                      fill-rule="nonzero" fill="#474747"/>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>

        </div>
    </div>

    <?php
    Modal::begin([
        'headerOptions' => false,
        'closeButton' => false,
        'id' => 'myModal-add-skill',
        'size' => 'modal-cus-650',
        //'tabIndex' => false,
        'clientOptions' => [
            'backdrop' => 'static',
            'keyboard' => false,
            'focus' => false,
        ],
    ]);
    ?>
        <div class="content-cus"></div>
    <?php
    Modal::end();
    ?>

    <script type="text/javascript">
        function changeEdit(el, id) {
            $(id).toggleClass('disabled', '');
            $(el).css({display: 'none'}).siblings('button').css({display: 'inline-block'});
        }

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

        async function openAddGif() {
            var $modal = $('#myModal-add-skill');
            await $.ajax({
                url: "/site/add-skill",
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
$this->registerCssFile("@web/css/setting.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJs("
    $('body').on('click','input.scale',function(){
        var par = $(this).parent();
        par.children('label').css({'top':'4px','font-size':'10px'});
        $(this).css({'padding':'18px 15px 6px 15px'});
    });
    $('body').on('blur','input.scale',function(){
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
