 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/create-account');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/create-account');

                } else {
                    //la desktop
                    echo $this->render('desktop/create-account');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/create-account.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/create-account.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
   

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/create-account.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


    

}



?>