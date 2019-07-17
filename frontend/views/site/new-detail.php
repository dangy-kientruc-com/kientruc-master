 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/new-detail');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/new-detail');

                } else {
                    //la desktop
                    echo $this->render('desktop/new-detail');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/new-detail.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/new-detail.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/new-detail.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/new-detail.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/new-detail.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


     $this->registerJsFile("@web/js/desktop/new-detail.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>