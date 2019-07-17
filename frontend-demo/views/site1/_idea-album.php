<?php

use kv4nt\owlcarousel\OwlCarouselWidget;

/**
 * css description:
 * Page user: prefix kt-user-???
 * Noprefix -user- is use public website
 */
?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget() ?>

        <div class="kt-main">

            <div style="min-height: 70px"></div>

            <div class="kt-user-main grid-container-2-user">

                <?= \frontend\widgets\leftWidget::widget() ?>

                <div class="kt-user-right">

                    <?= \frontend\widgets\menuUserWidget::widget() ?>
                    <div class="clearfix"></div>
                    <div style="min-height: 30px"></div>

                    <ol class="list-unstyled kt-link-back">
                        <li><a href="/shop-noi-that-C2.html" title="SHOP NỘI THẤT">Album</a>
                            <i class="kt-icon grey size-6x10">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                        </li>
                        <li><a href="/shop-noi-that/thiet-bi-bep-an-C433.html" title="Thiết Bị Bếp &amp; Ăn">Hình
                                ảnh</a></li>
                    </ol>

                    <h1>Phòng ngủ phong cách cổ điển</h1>
                    <div class="kt-user-date">Album được tạo bởi <b>Phạm Ngọc Dũng</b> ngày 12/2/2019</div>
                    <div class="kt-user-box-share">
                        <div class="share">
                            <a href="" title="">
                                <button type="button" class="btn"><i class="fas fa-eye"></i> Đang theo dõi</button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn"><i class="far fa-clone"></i> Coppy</button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn"><i class="fas fa-share-alt"></i> Chia sẽ</button>
                            </a>
                        </div>
                    </div>

                    <div style="min-height: 40px"></div>

                    <div class="kt-row">
                        <div class="grid-container-4">
                            <div class="item item1">
                                <div class="image-item">
                                    <a href="" title="">
                                        <img src="/images/vuong.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="kt-flex-container kt-user-pt-share">
                                        <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Phóng to">
                                            <i class="kt-icon white size-17x16">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.682.005c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-1.013a.38.38 0 0 1-.38-.38v-.96l-2.892 2.892a.379.379 0 0 1-.537 0l-.716-.716a.38.38 0 0 1 0-.537l2.892-2.892h-.96a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606zM3.025 1.778L5.918 4.67a.38.38 0 0 1 0 .537l-.716.716a.379.379 0 0 1-.537 0L1.772 3.031v.96c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606c.21 0 .38.17.38.38v1.013c0 .21-.17.38-.38.38h-.96zm2.177 8.26l.716.715a.38.38 0 0 1 0 .537l-2.893 2.893h.961c.21 0 .38.17.38.38v1.012c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38v-3.606c0-.21.17-.38.38-.38h1.012c.21 0 .38.17.38.38v.96l2.893-2.892a.38.38 0 0 1 .537 0zm10.48 1.551c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-3.606a.38.38 0 0 1-.38-.38v-1.013c0-.21.17-.38.38-.38h.96l-2.892-2.892a.38.38 0 0 1 0-.537l.716-.716a.38.38 0 0 1 .537 0l2.892 2.893v-.961c0-.21.17-.38.38-.38h1.013z"
                                                          fill-rule="nonzero"/>
                                                </svg>
                                            </i>
                                        </button>
                                        <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                            <i class="far fa-bookmark"></i>
                                        </button>
                                        <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Chia sẻ">
                                            <i class="fas fa-share-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            for ($i=0;$i<10;$i++){
                                ?>
                                <div class="item">
                                    <div class="image-item">
                                        <a href="" title="">
                                            <img src="/images/vuong.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="kt-flex-container kt-user-pt-share">
                                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Phóng to">
                                                <i class="kt-icon white size-17x16">
                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.682.005c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-1.013a.38.38 0 0 1-.38-.38v-.96l-2.892 2.892a.379.379 0 0 1-.537 0l-.716-.716a.38.38 0 0 1 0-.537l2.892-2.892h-.96a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606zM3.025 1.778L5.918 4.67a.38.38 0 0 1 0 .537l-.716.716a.379.379 0 0 1-.537 0L1.772 3.031v.96c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606c.21 0 .38.17.38.38v1.013c0 .21-.17.38-.38.38h-.96zm2.177 8.26l.716.715a.38.38 0 0 1 0 .537l-2.893 2.893h.961c.21 0 .38.17.38.38v1.012c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38v-3.606c0-.21.17-.38.38-.38h1.012c.21 0 .38.17.38.38v.96l2.893-2.892a.38.38 0 0 1 .537 0zm10.48 1.551c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-3.606a.38.38 0 0 1-.38-.38v-1.013c0-.21.17-.38.38-.38h.96l-2.892-2.892a.38.38 0 0 1 0-.537l.716-.716a.38.38 0 0 1 .537 0l2.892 2.893v-.961c0-.21.17-.38.38-.38h1.013z"
                                                              fill-rule="nonzero"/>
                                                    </svg>
                                                </i>
                                            </button>
                                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại">
                                                <i class="far fa-bookmark"></i>
                                            </button>
                                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Chia sẻ">
                                                <i class="fas fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>

            </div>

            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>
        </div>
    </div>
<?php

$this->registerCssFile("@web/css/user.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
