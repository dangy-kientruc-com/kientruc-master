 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/comeback');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/comeback');

                } else {
                    //la desktop
                    echo $this->render('desktop/comeback');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/comeback.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/comeback.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
   

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/comeback.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/desktop/comeback.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


    

}



?>