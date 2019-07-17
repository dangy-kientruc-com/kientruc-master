 <?php
   if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
        echo $this->render('mobile/newcategory');

    }
    else if (\Yii::$app->mobileDetect->isTablet()) 
    {   //la istable
        echo $this->render('mobile/newcategory');
    }
    else
    {                //la desktop
        echo $this->render('desktop/newcategory');
    }
 ?>
<?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/newcategory.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/mobile/newcategory.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/newcategory.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/newcategory.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/newcategory.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


     $this->registerJsFile("@web/js/desktop/newcategory.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>