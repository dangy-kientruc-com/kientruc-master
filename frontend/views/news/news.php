 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/news',['news'=>$news]);

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/news',['news'=>$news]);

                } else {
                    //la desktop
                    echo $this->render('desktop/news',['items'=>$items,'newsgoc'=>$newsgoc,'news'=>$news]);
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/new.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/new.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/new.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/new.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/new.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


    $this->registerJsFile("@web/js/jquery.easing.min.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/jquery.easy-ticker.min.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/desktop/new.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>