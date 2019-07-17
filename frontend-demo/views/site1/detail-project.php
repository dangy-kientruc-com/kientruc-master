<?php
/**
 * css description:
 * Page user: prefix kt-user-???
 * Noprefix -user- is use public website
 */
?>
    <div class="kt-wrap">
        <?= \frontend\widgets\headerWidget::widget(['id' => 2]) ?>

        <div class="kt-detail-bg-head">
            <div class="text-left">
                <a href="" title="">
                    <button type="button" class="btn">
                        <i class="kt-icon green size-8x14">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                                <path d="M2.4 7l5.3-5.2c.4-.4.4-1 0-1.5a1 1 0 0 0-1.4 0l-6 6A1 1 0 0 0 0 7c0 .3.1.6.3.8l6 5.9c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L2.4 7z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i> <span>Quay lại trang trước</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="kt-main">
            <div class="kt-detail-project">
                <?=$this->render('detail-project-modal')?>
            </div>
            <div class="clearfix"></div>
            <div style="min-height: 100px"></div>
            <div class="clearfix"></div>
            <?= \frontend\widgets\footerWidget::widget() ?>
        </div>
    </div>
<?=$this->render('modal-add-album')?>
<?php
$this->registerCssFile("@web/css/detail-project.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

