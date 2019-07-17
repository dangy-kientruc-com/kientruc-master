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

        <div class="detail-bg-head">
            <div class="float-left">
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

        <div class="container-center">
            <?= $this->render('render/detail-project'); ?>
        </div>
        <div style="min-height: 30px"></div>
        <?= \frontend\widgets\footerWidget::widget() ?>
    </div>
<?php
$this->registerCssFile("@web/css/detail-project.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/detail-project.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/detail-project.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/detail-project.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
}