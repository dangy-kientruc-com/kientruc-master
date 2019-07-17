 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/profileviewer');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/profileviewer');

                } else {
                    //la desktop
                    echo $this->render('desktop/profileviewer');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/profileviewer.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/profileviewer.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/profileviewer.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/profileviewer.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/profileviewer.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


     $this->registerJsFile("@web/js/desktop/profileviewer.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>