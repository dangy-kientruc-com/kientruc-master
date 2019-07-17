 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                     if (Yii::$app->user->isGuest) {
                    echo $this->render('mobile/index',['home'=>$home]);
                    }
                    else
                    {
                        echo   $this->render('mobile/index-login',['home'=>$home]);
                    }


                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/index',['home'=>$home]);

                } else {
                    //la desktop
                    if (Yii::$app->user->isGuest) {
                    echo $this->render('desktop/index',['home'=>$home]);
                    }
                    else
                    {
                        echo $this->render('desktop/index-login',['home'=>$home]);
                    }
                }
                ?>


 <?php 
if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
   $this->registerCssFile("@web/css/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerCssFile("@web/css/mobile/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

     $this->registerJsFile("@web/js/mobile/index.js", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);
      $this->registerJsFile("@web/js/index.js", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    // $this->registerJsFile("@web/js/mobile/index.js", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
    // ]);

} else {
    //la desktop
   
     $this->registerCssFile("@web/css/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
      $this->registerCssFile("@web/css/desktop/index.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/desktop/index.js", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);
     $this->registerJsFile("@web/js/index.js", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);
}



?>