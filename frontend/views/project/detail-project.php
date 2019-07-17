 <?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('desktop/detail-project',['project'=>$detail]);

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('desktop/detail-project',['project'=>$detail]);

                } else {
                    //la desktop
                    echo $this->render('desktop/detail-project',['project'=>$detail]);
                }
                ?>


 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/detail-project-modal.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerCssFile("@web/css/desktop/detail-project.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/desktop/detail-project.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);


} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/detail-project-modal.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerCssFile("@web/css/desktop/detail-project.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/desktop/detail-project.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/detail-project-modal.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerCssFile("@web/css/desktop/detail-project.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/desktop/detail-project.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

}



?>