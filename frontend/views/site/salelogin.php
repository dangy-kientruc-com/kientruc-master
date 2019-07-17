 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/salelogin');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/salelogin');

                } else {
                    //la desktop
                    echo $this->render('desktop/salelogin');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/salelogin.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/salelogin.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/salelogin.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/salelogin.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/salelogin.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


     $this->registerJsFile("@web/js/desktop/salelogin.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>