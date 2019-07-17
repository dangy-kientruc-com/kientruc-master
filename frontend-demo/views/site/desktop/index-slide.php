<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/20/2019
 * Time: 2:18 PM
 */
use kv4nt\owlcarousel\OwlCarouselWidget;
?>
<div class="index-right-scroll">
    <div class="scroll-box">
        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id',
                'class' => 'nonloop-index owl-carousel owl-theme'
            ],
            'pluginOptions' => [
                'autoplay' => false,
                'autoplayTimeout' => 4000,
                'items' => 10,
                'margin' => 0,
                'merge' => true,
                'loop' => true,
                'dots' => false,
                'nav' => false,
            ]
        ]);
        for ($i = 0; $i < 10; $i++) {
            ?>
            <div class="item-kts wow fadeIn">
                <a href="/site/personal" title="">
                    <div class="avatar js-viewUser" data-item="0">
                        <div class="bg">
                            <img src="/images/avatar.png" alt=""
                                 class="img-fluid">
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="fullname">
                        <b>Vũ Phú Hùng</b>
                        <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                      fill-rule="nonzero" fill="#474747"/>
                            </svg>
                        </i>
                        <span> Hà Nội</span>
                    </div>
                </a>
            </div>
            <div class="item-kts wow fadeIn">
                <a href="/site/personal" title="">
                    <div class="avatar js-viewUser" data-item="0">
                        <div class="bg">
                            <img src="/images/avatar.png" alt=""
                                 class="img-fluid">
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="fullname">
                        <b>Phạm Ngọc Dũng</b>
                        <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                      fill-rule="nonzero" fill="#474747"/>
                            </svg>
                        </i>
                        <span> Hà Nội</span>
                    </div>
                </a>
            </div>
            <div class="item-kts wow fadeIn">
                <a href="/site/personal" title="">
                    <div class="avatar js-viewUser" data-item="0">
                        <div class="bg">
                            <img src="/images/avatar.png" alt=""
                                 class="img-fluid">
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="fullname">
                        <b>Lương Gia Việt</b>
                        <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                      fill-rule="nonzero" fill="#474747"/>
                            </svg>
                        </i>
                        <span> Hà Nội</span>
                    </div>
                </a>
            </div>
            <div class="item-kts wow fadeIn">
                <a href="/site/personal" title="">
                    <div class="avatar js-viewUser" data-item="0">
                        <div class="bg">
                            <img src="/images/avatar.png" alt=""
                                 class="img-fluid">
                        </div>
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="fullname">
                        <b>Nguyen Duy Khánh</b>
                        <i class="kt-icon black size-10x10" style="opacity: 0.8;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z"
                                      fill-rule="nonzero" fill="#474747"/>
                            </svg>
                        </i>
                        <span> Hà Nội</span>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
        <?php
        OwlCarouselWidget::end();
        ?>
    </div>
</div>
