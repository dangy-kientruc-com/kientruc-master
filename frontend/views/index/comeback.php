 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {

                    echo   $this->render('mobile/comeback');
                } 
                else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                     echo   $this->render('mobile/comeback');

                } 
                else {
                    
                        echo $this->render('desktop/comeback');
                    
                }
                ?>


 <?php 
if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile


} else if (\Yii::$app->mobileDetect->isTablet()) {
    

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