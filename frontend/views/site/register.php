 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/register');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/register');

                } else {
                    //la desktop
                    echo $this->render('desktop/register');
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/register.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/register.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
   

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/register.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


    

}



?>