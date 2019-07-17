 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/ytuongtapchi');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/ytuongtapchi');

                } else {
                    //la desktop
                    echo $this->render('desktop/ytuongtapchi');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/ytuongtapchi.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/ytuongtapchi.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/ytuongtapchi.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/ytuongtapchi.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/ytuongtapchi.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


     $this->registerJsFile("@web/js/desktop/ytuongtapchi.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>