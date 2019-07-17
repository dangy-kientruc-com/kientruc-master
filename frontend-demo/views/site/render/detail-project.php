<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/16/2019
 * Time: 11:18 AM
 */
?>
    <div class="grid-sort">
        <div class="grid-sort-a">
            <div class="kt-detail-left">

                <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('../mobile/detail-project-head');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('../mobile/detail-project-head');

                } else {
                    //la desktop
                    echo $this->render('../desktop/detail-project-head');

                }
                ?>

                <div style="min-height: 12px"></div>
                <div class="box-image">
                    <?php
                    for ($i = 1; $i < 10; $i++) {
                        ?>
                        <div class="item<?= $i ?>" data-fancy-item="<?= $i ?>">
                            <div class="item-image"
                                 style="background-image: url(https://www.kientruc.com/uploads/images/-3168/images/thiet-ke-noi-that-khach-san-tai-da-nang-01555241812.jpeg)">
                                <div class="kt-flex-container kt-absolute hover kt-transition">
                                    <a href="https://source.unsplash.com/LuK-MuZ-yf0/1500x1000"
                                       data-fancybox="images" data-item-id="<?= $i ?>">
                                        <img src="https://source.unsplash.com/uPc2yuiu8cY/240x160" alt=""
                                             class="d-none">
                                        <button type="button" class="btn" data-toggle="tooltip" title=""
                                                data-original-title="Lưu lại" aria-describedby="tooltip550535">
                                            <i class="kt-icon white size-15x12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16">
                                                    <path d="M15.682.005c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-1.013a.38.38 0 0 1-.38-.38v-.96l-2.892 2.892a.379.379 0 0 1-.537 0l-.716-.716a.38.38 0 0 1 0-.537l2.892-2.892h-.96a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606zM3.025 1.778L5.918 4.67a.38.38 0 0 1 0 .537l-.716.716a.379.379 0 0 1-.537 0L1.772 3.031v.96c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606c.21 0 .38.17.38.38v1.013c0 .21-.17.38-.38.38h-.96zm2.177 8.26l.716.715a.38.38 0 0 1 0 .537l-2.893 2.893h.961c.21 0 .38.17.38.38v1.012c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38v-3.606c0-.21.17-.38.38-.38h1.012c.21 0 .38.17.38.38v.96l2.893-2.892a.38.38 0 0 1 .537 0zm10.48 1.551c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-3.606a.38.38 0 0 1-.38-.38v-1.013c0-.21.17-.38.38-.38h.96l-2.892-2.892a.38.38 0 0 1 0-.537l.716-.716a.38.38 0 0 1 .537 0l2.892 2.893v-.961c0-.21.17-.38.38-.38h1.013z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn" data-toggle="tooltip" title=""
                                            data-original-title="Yêu thích" onclick="javascript:modalAddAlbum()">
                                        <i class="kt-icon white size-14x12">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                                      fill-rule="nonzero"></path>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <img src="https://www.kientruc.com/uploads/images/-3168/images/thiet-ke-noi-that-khach-san-tai-da-nang-01555241812.jpeg"
                                     alt="" class="img-fluid">
                            </div>
                            <div class="text">
                                <figcaption><?= $i ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed
                                    tellus id orci lacinia convallis. Pellentesque habitant morbi tristique senectus et
                                    netus et malesuada fames netus tristique senectus.
                                </figcaption>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="text-right mobile-d-none">
                    <div class="share">
                        <a href="" title="">
                            <button type="button" class="btn">
                                <i class="kt-icon size-15x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
                                        <path d="M0 9.4V2.9A3 3 0 0 1 2.9 0H13A3 3 0 0 1 16 2.9v6.5a3 3 0 0 1-2.9 2.9H7.8l-4 2.2a1 1 0 0 1-1.5-.9v-1.4A3 3 0 0 1 0 9.4zm7 1l.5-.1h5.6c.4 0 .9-.5.9-.9V2.9c0-.4-.5-.9-.9-.9H3c-.4 0-.9.5-.9.9v6.5c0 .4.5.9.9.9h.4c.6 0 1 .4 1 1v.6L7 10.4z"
                                              fill="#474747" fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <span>Bình luận</span>
                            </button>
                        </a>
                        <a href="" title="">
                            <button type="button" class="btn">
                                <i class="kt-icon size-17x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                        <path d="M12.2 0C14.8 0 17 2 17 4.6c0 .6-.1 1.2-.3 1.7-1 3.1-6 7.5-8.1 7.7h-.2c-2.2-.2-7-4.6-8-7.6C0 5.8 0 5.2 0 4.6 0 2.1 2.2 0 4.8 0c1.4 0 2.8.6 3.7 1.7.9-1 2.3-1.7 3.7-1.7zm2.6 5.6l.2-1C15 3.2 13.8 2 12.2 2c-1 0-1.8.4-2.3 1.1a1.8 1.8 0 0 1-1.4.8c-.4 0-.8-.1-1-.4L7 3.2A2.8 2.8 0 0 0 4.8 2 2.7 2.7 0 0 0 2 4.6c0 .4 0 .7.2 1A14 14 0 0 0 8.5 12a14 14 0 0 0 6.3-6.4z"
                                              fill="#474747" fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <span>Thích</span>
                            </button>
                        </a>
                        <a href="" title="">
                            <button type="button" class="btn" onclick="javascript:modalAddAlbum()">
                                <i class="kt-icon size-14x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                        <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                              fill="#474747" fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <span>Lưu vào Album</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <div class="grid-sort-b">
            <div class="kt-detail-right">
                <div class="kt-transition">
                    <div class="kt-user-info">
                        <div class="avatar">
                            <a href="" title="">
                                <img src="/images/avatar.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="fullname">
                            <span>Kiến trúc sư</span>
                            <b>Phạm ngọc dũng</b>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>
                                <i class="fas fa-map-marker-alt"></i> Thanh xuân, Hà nội
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div style="min-height: 20px"></div>
                    <div class="kt-user-follow">
                        <div class="row justify-content-between">
                            <div class="col-4 left">
                                <a href="" title="">
                                    <button type="button" class="btn">
                                        <i class="kt-icon white size-14x14">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                                <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z"
                                                      fill-rule="nonzero"></path>
                                            </svg>
                                        </i>
                                        <span>Quan tâm</span>
                                    </button>
                                </a>
                            </div>
                            <div class="col-6 right">
                                <button type="button" class="btn">
                                    <i class="kt-icon black size-15x14">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                            <path d="M14.552 11.067l-2.163-2.163c-.43-.43-1.144-.416-1.59.03L9.71 10.023l-.215-.12c-.688-.38-1.63-.903-2.62-1.895-.994-.994-1.517-1.937-1.9-2.625-.04-.073-.079-.144-.117-.21l.731-.73.36-.36c.446-.447.458-1.16.029-1.59L3.815.33c-.43-.43-1.143-.417-1.59.03l-.61.613.018.016c-.205.26-.376.562-.503.886-.117.309-.19.603-.223.898-.286 2.368.796 4.531 3.732 7.467 4.058 4.058 7.328 3.752 7.47 3.737.307-.037.601-.11.9-.227.322-.125.623-.296.883-.5l.014.012.617-.605c.446-.446.458-1.16.029-1.59z"
                                                  fill-rule="evenodd"></path>
                                        </svg>
                                    </i>
                                </button>
                                <button type="button" class="btn">
                                    <i class="kt-icon black size-15x12">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 12">
                                            <g fill-rule="evenodd">
                                                <path d="M2 3.4A361.4 361.4 0 0 0 7.8 7h.4l.5-.3A8.2 8.2 0 0 0 9.7 6a6904 6904 0 0 1 4.6-3.4c.3-.4.4-.8.4-1.2 0-.4-.1-.7-.4-1-.2-.2-.5-.3-.8-.3H2c-.4 0-.7.2-1 .4-.2.3-.3.6-.3 1s.2.7.4 1.1l1 1z"/>
                                                <path d="M14 4.2a162.2 162.2 0 0 0-5.4 3.6c-.3.2-.6.2-.9.2-.3 0-.5 0-.9-.2l-.7-.3-.7-.6A156.3 156.3 0 0 0 .7 3.6v6.2c0 .3.1.6.4.8.2.3.5.4.9.4h11.5c.3 0 .6-.1.8-.4.3-.2.4-.5.4-.8V3.6l-.8.6z"/>
                                            </g>
                                        </svg>
                                    </i>
                                </button>
                                <button type="button" class="btn">
                                    <i class="kt-icon black size-15x13">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 13">
                                            <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                                                  fill-rule="evenodd"></path>
                                        </svg>
                                    </i>
                                    <b class="fas fa-circle"></b>
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div style="min-height: 10px;"></div>

                <h2 class="name-box">
                    <b>Nhóm thiết kế</b>
                    <button type="button" class="btn float-right" onclick="javascript:toggleDesign(this)">Mở rộng
                    </button>
                </h2>
                <div class="group-design" style="display: none">
                    <ul class="list-unstyled">
                        <li>
                            <div class="box-row-customer first">
                                <img src="/images/avatar.png" alt="" class="img-fluid avatar">
                                <div class="name">
                                    <b>Phạm Ngọc Dũng</b>
                                    <span>Chủ trì thiết kế</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="box-row-customer">
                                        <img src="/images/avatar.png" alt="" class="img-fluid avatar">
                                        <div class="name">
                                            <b>Phạm Ngọc Dũng</b>
                                            <span>Chủ trì thiết kế</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box-row-customer">
                                        <img src="/images/avatar.png" alt="" class="img-fluid avatar">
                                        <div class="name">
                                            <b>Phạm Ngọc Dũng</b>
                                            <span>Chủ trì thiết kế</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box-row-customer">
                                        <img src="/images/avatar.png" alt="" class="img-fluid avatar">
                                        <div class="name">
                                            <b>Phạm Ngọc Dũng</b>
                                            <span>Chủ trì thiết kế</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
                <div class="kt-line kt-grey"></div>
                <div style="min-height:5px"></div>
                <h2 class="name-box">
                    <b>Thông tin dự án</b>
                </h2>

                <div class="detail">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tellus id orci lacinia convallis.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames netus tristique senectus.
                </div>

                <div class="extend">
                    <ul class="list-unstyled">
                        <li class="row no-gutters">
                            <div class="col-6"><i class="kt-icon black size-15x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                        <g fill-rule="evenodd">
                                            <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                        </g>
                                    </svg>
                                </i> <span>Thể loại</span></div>
                            <div class="col-6"><b>Nhà chung cư</b></div>
                        </li>
                        <li class="row no-gutters">
                            <div class="col-6"><i class="kt-icon black size-14x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                        <path d="M11.2 5.5l-1-1 1.1-1H3.5v7.8l1-1 1 .9L2.8 14 0 11.2l1-1L2 11.3V2.1h9.2l-1-1.1.9-1L14 2.8l-2.8 2.7zm1.4 7.1v-1.4H14V14h-2.8v-1.4h1.4zm-4.2 0h1.4V14H8.4v-1.4zm-2.8 0H7V14H5.6v-1.4zm7-7H14V7h-1.4V5.6zm0 2.8H14v1.4h-1.4V8.4z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i> <span>Diện tích</span></div>
                            <div class="col-6"><b>120m2</b></div>
                        </li>
                        <li class="row no-gutters">
                            <div class="col-6"><i class="kt-icon black size-11x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                        <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i> <span>Khu vực</span></div>
                            <div class="col-6"><b>Tp.Hồ Chí Minh</b></div>
                        </li>
                        <li class="row no-gutters">
                            <div class="col-6"><i class="kt-icon black size-8x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                        <path d="M5.6 6.3l-1.7-.7c-.4-.2-.7-.3-1-.6-.5-.4-.4-1.1.2-1.4l.6-.1c.8 0 1.5 0 2.2.4.3.2.4.1.5-.2l.4-1.2c0-.2 0-.4-.3-.5l-1.3-.4c-.7-.1-.7-.1-.7-.7 0-.9 0-.9-.8-.9h-.4c-.4 0-.5 0-.5.5v.6c0 .5 0 .5-.6.7C1 2.2.2 3 .2 4.5c-.2 1.2.5 2 1.5 2.7l2 .8.7.5c.6.5.5 1.4-.3 1.7-.4.2-.8.2-1.2.1-.7 0-1.3-.2-2-.5-.3-.2-.4-.2-.5.2L0 11c-.1.5-.1.6.3.8.6.3 1.2.4 1.8.5.4 0 .4 0 .5.6v.6c0 .3 0 .5.4.5h1c.2 0 .4-.2.4-.4v-1c0-.3 0-.4.4-.5.6-.2 1.2-.5 1.7-1a3 3 0 0 0-1-4.8z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </i> <span>Chi phí</span></div>
                            <div class="col-6"><b>650.000.000 vnd</b></div>
                        </li>
                        <li class="row no-gutters">
                            <div class="col-6"><i class="kt-icon black size-17x14">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 16">
                                        <g fill-rule="evenodd">
                                            <path d="M17.7 3.2c-.5-.5-1-.7-1.7-.7h-2.2l-.5-1.3c0-.3-.3-.6-.6-.8-.4-.3-.7-.4-1-.4h-5c-.3 0-.6.1-1 .4-.3.2-.5.5-.6.8l-.5 1.3H2.5c-.7 0-1.3.2-1.8.7-.5.5-.7 1-.7 1.7v8.6c0 .7.2 1.3.7 1.8.5.4 1 .7 1.8.7H16c.6 0 1.2-.3 1.7-.7.5-.5.7-1 .7-1.8V5c0-.6-.2-1.2-.7-1.7zm-5.4 9c-.9 1-1.9 1.3-3 1.3-1.3 0-2.3-.4-3.1-1.2a4.1 4.1 0 0 1-1.3-3C5 8 5.3 7 6.2 6.1c.8-.8 1.8-1.3 3-1.3s2.2.5 3 1.3c.9.8 1.3 1.8 1.3 3s-.4 2.2-1.2 3z"
                                                  fill-rule="nonzero"/>
                                            <path d="M9.2 6.5c-.7 0-1.4.2-2 .8-.5.5-.8 1.2-.8 2 0 .7.3 1.3.9 1.9.5.5 1.2.8 2 .8.7 0 1.3-.3 1.9-.8.5-.6.8-1.2.8-2 0-.7-.3-1.4-.8-2-.6-.5-1.2-.7-2-.7z"/>
                                        </g>
                                    </svg>
                                </i> <span>Trạng thái</span></div>
                            <div class="col-6"><b>Ảnh chụp thực tế</b></div>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
                <div class="kt-line kt-grey"></div>
                <div style="min-height: 5px"></div>
                <h2 class="name-box">
                    <b>Đánh giá</b>
                </h2>

                <div class="review">
                    <ul class="list-unstyled">
                        <li>
                            <div class="percent">
                                <div class="progress-pie-chart size-42" data-percent="4.3">
                                    <div class="ppc-progress">
                                        <div class="ppc-progress-fill"></div>
                                    </div>
                                    <div class="ppc-percents">
                                        <div class="pcc-percents-wrapper">
                                            <span>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <b class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </b>
                                <span>15 đánh giá từ chủ nhà</span>
                            </div>
                        </li>
                        <li>
                            <div class="percent">
                                <div class="progress-pie-chart size-42" data-percent="3.5">
                                    <div class="ppc-progress">
                                        <div class="ppc-progress-fill"></div>
                                    </div>
                                    <div class="ppc-percents">
                                        <div class="pcc-percents-wrapper">
                                            <span>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <b class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </b>
                                <span>24 đánh giá từ chuyên gia</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
                <div class="kt-line kt-grey"></div>
                <div style="min-height: 5px"></div>
                <h2 class="name-box">
                    <b>Từ khóa</b>
                </h2>

                <div class="keywords">
                    <a href="" title="">
                        <button type="button" class="btn">
                            <i class="kt-icon black size-10x10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M13.6 7.4L7 .8 6.1.2l-1-.2H1C1 0 .7.1.5.4c-.3.2-.4.5-.4.8V5c0 .3 0 .7.2 1.1l.6 1 6.6 6.5c.3.3.5.4.9.4.3 0 .6-.1.8-.4l4.5-4.5c.3-.2.4-.5.4-.8 0-.3-.1-.6-.4-.9zM3.8 3.8c-.2.2-.5.3-.8.3-.4 0-.7 0-.9-.3-.2-.2-.3-.5-.3-.8 0-.4 0-.7.3-.9.2-.2.5-.3.9-.3.3 0 .6 0 .8.3.2.2.3.5.3.9 0 .3 0 .6-.3.8z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Diễn họa 3D</span>
                        </button>
                    </a>
                    <a href="" title="">
                        <button type="button" class="btn">
                            <i class="kt-icon black size-10x10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M13.6 7.4L7 .8 6.1.2l-1-.2H1C1 0 .7.1.5.4c-.3.2-.4.5-.4.8V5c0 .3 0 .7.2 1.1l.6 1 6.6 6.5c.3.3.5.4.9.4.3 0 .6-.1.8-.4l4.5-4.5c.3-.2.4-.5.4-.8 0-.3-.1-.6-.4-.9zM3.8 3.8c-.2.2-.5.3-.8.3-.4 0-.7 0-.9-.3-.2-.2-.3-.5-.3-.8 0-.4 0-.7.3-.9.2-.2.5-.3.9-.3.3 0 .6 0 .8.3.2.2.3.5.3.9 0 .3 0 .6-.3.8z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Tk Điện nước</span>
                        </button>
                    </a>
                    <a href="" title="">
                        <button type="button" class="btn">
                            <i class="kt-icon black size-10x10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M13.6 7.4L7 .8 6.1.2l-1-.2H1C1 0 .7.1.5.4c-.3.2-.4.5-.4.8V5c0 .3 0 .7.2 1.1l.6 1 6.6 6.5c.3.3.5.4.9.4.3 0 .6-.1.8-.4l4.5-4.5c.3-.2.4-.5.4-.8 0-.3-.1-.6-.4-.9zM3.8 3.8c-.2.2-.5.3-.8.3-.4 0-.7 0-.9-.3-.2-.2-.3-.5-.3-.8 0-.4 0-.7.3-.9.2-.2.5-.3.9-.3.3 0 .6 0 .8.3.2.2.3.5.3.9 0 .3 0 .6-.3.8z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Triển khai kết cấu</span>
                        </button>
                    </a>
                    <a href="" title="">
                        <button type="button" class="btn">
                            <i class="kt-icon black size-10x10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M13.6 7.4L7 .8 6.1.2l-1-.2H1C1 0 .7.1.5.4c-.3.2-.4.5-.4.8V5c0 .3 0 .7.2 1.1l.6 1 6.6 6.5c.3.3.5.4.9.4.3 0 .6-.1.8-.4l4.5-4.5c.3-.2.4-.5.4-.8 0-.3-.1-.6-.4-.9zM3.8 3.8c-.2.2-.5.3-.8.3-.4 0-.7 0-.9-.3-.2-.2-.3-.5-.3-.8 0-.4 0-.7.3-.9.2-.2.5-.3.9-.3.3 0 .6 0 .8.3.2.2.3.5.3.9 0 .3 0 .6-.3.8z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Làm phim</span>
                        </button>
                    </a>
                </div>

                <div class="clearfix"></div>
                <div class="kt-line kt-grey"></div>
                <div style="min-height: 5px"></div>
                <h2 class="name-box">
                    <b>Chia sẻ</b>
                </h2>

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

                <div class="clearfix"></div>
                <div style="min-height: 30px"></div>

                <button type="button" class="btn btn-link px-0 py-0 but-report">
                    <i class="kt-icon black size-10x10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
                            <path d="M11.93 1.76a.433.433 0 0 0-.315-.133c-.06 0-.188.05-.382.148-.194.098-.4.207-.617.33a4.47 4.47 0 0 1-.772.329 2.641 2.641 0 0 1-.824.148 1.36 1.36 0 0 1-.617-.134 12.535 12.535 0 0 0-1.536-.617 4.69 4.69 0 0 0-1.403-.204c-.864 0-1.848.281-2.952.842a7.17 7.17 0 0 0-.497.266l-.104-.769c.236-.205.39-.505.39-.844a1.122 1.122 0 1 0-2.246 0c0 .405.216.756.537.954l1.516 11.118a.66.66 0 0 0 1.309-.178l-.61-4.468c1.106-.549 2.063-.826 2.867-.826.342 0 .675.05 1 .154.325.104.595.215.81.336.214.122.468.235.76.337.293.103.582.155.867.155.72 0 1.582-.272 2.587-.814.127-.066.219-.13.277-.193.06-.063.088-.153.088-.27v-5.35a.433.433 0 0 0-.132-.316z"
                                  fill-rule="evenodd"></path>
                        </svg>
                    </i>
                    <span>Báo cáo vi phạm bản quyền</span>
                </button>


            </div>
        </div>
        <div class="grid-sort-c">
            <div style="min-height: 30px"></div>
            <?php
            if (\Yii::$app->mobileDetect->isMobile()) {
                //la mobile
                echo $this->render('../mobile/detail-project-slide');

            } else if (\Yii::$app->mobileDetect->isTablet()) {
                //la istable
                echo $this->render('../mobile/detail-project-slide');

            } else {
                //la desktop
                echo $this->render('../desktop/detail-project-slide');

            }
            ?>
        </div>
        <div class="grid-sort-d">
            <div style="min-height: 30px"></div>
            <div class="kt-detail-bottom-left">
                <?= \frontend\widgets\commentWidget::widget() ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function toggleDesign(el) {
            if ($(el).hasClass('open')) {
                $(el).html('Mở rộng');
                $(el).removeClass('open');
            } else {
                $(el).html('Thu gọn');
                $(el).addClass('open');
            }
            $('body').find('.group-design').slideToggle();
        }

        function viewPhoto(id) {
            if (id === 1) {
                $('body').find('.box-image').addClass('break');
            } else {
                $('body').find('.box-image').removeClass('break');
            }
        }
    </script>

    <style type="text/css">
        .fancybox-thumbs-x .fancybox-thumbs__list {
            margin: 0 auto;
        }

        .fancybox-is-open .fancybox-stage {
            top: 70px;
            bottom: 20px;
        }

        .fancybox-is-open .fancybox-head {
            color: white;
            left: 40px;
            top: 25px;
            position: absolute;
        }

        .fancybox-is-open .fancybox-head h2 {
            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
        }

        .fancybox-is-open .fancybox-head p {
            font-size: 12px;
            line-height: 14px;
            margin-bottom: 0;
        }

        .fancybox-show-toolbar .fancybox-toolbar {
            right: 40px;
            top: 25px;
        }

        button[data-fancybox-zoom],
        button[data-fancybox-bookmark],
        button[data-fancybox-close] {
            height: 42px;
            width: 42px;
            border-radius: 30px;
            background-color: #FFFFFF;
            display: inline-flex;
            margin-left: 10px;
        }

        .fancybox-button,
        .fancybox-button:link,
        .fancybox-button:visited {
            color: #505050;
        }

        .fancybox-button svg path {
            fill: initial;
        }

        div.iframe-album {
            width: 620px;
        }

        @media all and (min-width: 768px) {
            .fancybox-thumbs {
                top: auto;
                width: auto;
                bottom: 0;
                left: 0;
                right: 0;
                height: 95px;
                padding: 10px 10px 5px 10px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.3);
            }

            .fancybox-show-thumbs .fancybox-inner {
                right: 0;
                bottom: 95px;
            }
        }
    </style>

<?php
$this->registerCssFile("@web/library/fancybox-master/dist/jquery.fancybox.min.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

$this->registerJsFile("@web/library/fancybox-master/dist/jquery.fancybox.min.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

$this->registerCssFile("@web/css/detail-project-modal.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/detail-project-modal.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/detail-project-modal.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/detail-project-modal.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
}

$this->registerJs("
percentJs({txt:'',best:5});
// Create template for the button
$.fancybox.defaults.btnTpl.bookmark = '<button data-fancybox-bookmark class=\"fancybox-button fancybox-button--bookmark\" title=\"Facebook\">' +
    '<i class=\"kt-icon white\">'+
    '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 14 14\" style=\"width: 16px;height: 26px;\">'+
    '<path d=\"M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z\" fill=\"#505050\" fill-rule=\"nonzero\"></path>'+
    '</svg>' +
    '</i>'+
'</button>';
// Make button clickable using event delegation
$('body').on('click', '[data-fancybox-bookmark]', async function() {
    if($('#fancybox-container-44').length === 0){
        modalAddAlbum();
    }
});
$('[data-fancybox=\"images\"]').fancybox({
    infobar: false,
    slideShow  : true,
	fullScreen : true,
	thumbs     : true,
	closeBtn   : true,
    hash: false,
    buttons: [
        'zoom',
        'bookmark',
        'close'
      ],
    btnTpl: {
        zoom:
          '<button data-fancybox-zoom class=\"fancybox-button fancybox-button--zoom\" title=\"{{ZOOM}}\">' +
          '<i class=\"kt-icon\" style=\"height: 24px;\">'+
          '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 16\" style=\"height: 14px;\">'+
          '<path d=\"M15.682.005c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-1.013a.38.38 0 0 1-.38-.38v-.96l-2.892 2.892a.379.379 0 0 1-.537 0l-.716-.716a.38.38 0 0 1 0-.537l2.892-2.892h-.96a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606zM3.025 1.778L5.918 4.67a.38.38 0 0 1 0 .537l-.716.716a.379.379 0 0 1-.537 0L1.772 3.031v.96c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606c.21 0 .38.17.38.38v1.013c0 .21-.17.38-.38.38h-.96zm2.177 8.26l.716.715a.38.38 0 0 1 0 .537l-2.893 2.893h.961c.21 0 .38.17.38.38v1.012c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38v-3.606c0-.21.17-.38.38-.38h1.012c.21 0 .38.17.38.38v.96l2.893-2.892a.38.38 0 0 1 .537 0zm10.48 1.551c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-3.606a.38.38 0 0 1-.38-.38v-1.013c0-.21.17-.38.38-.38h.96l-2.892-2.892a.38.38 0 0 1 0-.537l.716-.716a.38.38 0 0 1 .537 0l2.892 2.893v-.961c0-.21.17-.38.38-.38h1.013z\" fill=\"#505050\" fill-rule=\"nonzero\"/>'+
          '</svg>' +
          '</i>'+
          '</button>',
    
        arrowLeft:
          '<button data-fancybox-prev class=\"fancybox-button fancybox-button--arrow_left\" title=\"{{PREV}}\" style=\"background-color: transparent;\">' +
            '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 8 14\" style=\"height: 32px;\">' +
            '<path d=\"M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z\" style=\"fill: white\" fill-rule=\"evenodd\"/>' +
            '</svg>' +
          '</button>',
    
        arrowRight:
          '<button data-fancybox-next class=\"fancybox-button fancybox-button--arrow_right\" title=\"{{NEXT}}\" style=\"background-color: transparent;\">' +
            '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 6 10\" style=\"height: 32px;\">' +
            '<path d=\"M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z\" style=\"fill: white\" fill-rule=\"evenodd\"/>' +
            '</svg>' +
          '</button>',
    
    },
    thumbs : {
        autoStart   : true,                  // Display thumbnails on opening
        //hideOnClose : true,                   // Hide thumbnail grid when closing animation starts
        //parentEl    : '.fancybox-container',  // Container is injected into this element
        axis        : 'x'                     // Vertical (y) or horizontal (x) scrolling
    },
    caption: function( instance, item ) {
        const ite = $('body').find('[data-fancy-item='+$(this).attr('data-item-id')+']');
		return ite.find('figcaption').html();
	},
	afterShow: function(instance, item) {
	    if($('.fancybox-head').length === 0){
	        $('.fancybox-caption').after('<div class=\"fancybox-head\"><h2>Phòng ngủ phong cách cổ điển</h2><p>Album được tạo bởi <b>Phạm Ngọc Dũng</b> ngày 12/2/2019</p></div>');
	    }
    }
});
");

