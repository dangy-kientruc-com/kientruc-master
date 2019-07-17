 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/userlogin');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/userlogin');

                } else {
                    //la desktop
                    echo $this->render('desktop/userlogin');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/userlogin.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/userlogin.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/userlogin.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/userlogin.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/userlogin.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


     $this->registerJsFile("@web/js/desktop/userlogin.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>