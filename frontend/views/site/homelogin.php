 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/homelogin');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/homelogin');

                } else {
                    //la desktop
                    echo $this->render('desktop/homelogin');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    // $this->registerCssFile("@web/css/mobile/new.css", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
    // ]);

    // $this->registerJsFile("@web/js/mobile/new.js", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
    // ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    // $this->registerCssFile("@web/css/mobile/new.css", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
    // ]);
    // $this->registerJsFile("@web/js/mobile/new.js", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
    // ]);

} else {
    //la desktop
     $this->registerCssFile("@web/css/desktop/homelogin.css", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);


    //  $this->registerJsFile("@web/js/desktop/new.js", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
    // ]);

}



?>