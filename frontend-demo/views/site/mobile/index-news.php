<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/21/2019
 * Time: 1:31 PM
 */

use kv4nt\owlcarousel\OwlCarouselWidget;

?>
<div class="clearfix"></div>
<div style="min-height: 5px"></div>
<div class="index-box-news">
    <div class="grid-container-3 grid-index-03">
        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id-2',
                'class' => 'nonloop-index owl-carousel owl-theme'
            ],
            'pluginOptions' => [
                'autoplay' => false,
                'autoplayTimeout' => 4000,
                'items' => 5,
                'margin' => 0,
                'merge' => true,
                'loop' => true,
                'dots' => false,
                'nav' => false,
            ]
        ]);
        for ($i = 0; $i < 3; $i++) {
            ?>
            <div class="item wow fadeIn">
                <div class="kt-news-item">
                    <div class="item-image">
                        <a href="/site/detail-news" title="">
                            <img src="/images/anh-3-4-2.jpg" alt=""
                                 class="img-fluid">
                        </a>
                    </div>
                    <div class="item-tag">
                        <a href="/site/detail-news" title="">
                            <button type="button" class="btn">
                                <span>Phong thủy</span>
                            </button>
                        </a>
                    </div>
                    <h3>
                        <a href="/site/detail-news" title="">
                            Những ngày tốt nhất nên làm nhà trong năm 2019 sẽ mang về tài lộc cho
                            gia
                            chủ
                        </a>
                    </h3>
                    <div class="item-info">
                        Xem ngày tốt làm nhà là một trong những khâu quan trọng của bất kỳ gia
                        chủ nào trong việc động thổ và xây nhà…
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php
        }
        OwlCarouselWidget::end();
        ?>
    </div>
</div>
<div class="clearfix"></div>
