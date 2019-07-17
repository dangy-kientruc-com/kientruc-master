 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/home-category',['home'=>$home]);

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/home-category',['home'=>$home]);

                } else {
                    //la desktop
                    echo $this->render('desktop/home-category',['home'=>$home]);
                }
                ?>


 <?php 
if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
   // $this->registerCssFile("@web/css/index.css", [
   //      'depends' => [\frontend\assets\AppAsset::className()],
   //  ]);
    $this->registerCssFile("@web/css/mobile/home-category.css", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);
      $this->registerJsFile("@web/js/mobile/home-category.js", [
          'depends' => [\frontend\assets\AppAsset::className()],
      ]);
   //    $this->registerJsFile("@web/js/index.js", [
   //       'depends' => [\frontend\assets\AppAsset::className()],
   //   ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
     $this->registerCssFile("@web/css/mobile/home-category.css", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);
      $this->registerJsFile("@web/js/mobile/home-category.js", [
          'depends' => [\frontend\assets\AppAsset::className()],
      ]);

} else {
    //la desktop
   
    //  $this->registerCssFile("@web/css/index.css", [
    //     'depends' => [\frontend\assets\AppAsset::className()],
     //]);
       $this->registerCssFile("@web/css/desktop/home-category.css", [
         'depends' => [\frontend\assets\AppAsset::className()],
     ]);
      $this->registerJsFile("@web/js/desktop/home-category.js", [
          'depends' => [\frontend\assets\AppAsset::className()],
      ]);
    //  $this->registerJsFile("@web/js/index.js", [
    //      'depends' => [\frontend\assets\AppAsset::className()],
    //  ]);
}



?>