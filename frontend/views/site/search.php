<?php
                if (\Yii::$app->mobileDetect->isMobile()) {
                    //la mobile
                    echo $this->render('mobile/search');

                } else if (\Yii::$app->mobileDetect->isTablet()) {
                    //la istable
                    echo $this->render('mobile/search');

                } else {
                    //la desktop
                    echo $this->render('desktop/search');
                }
                ?>
 <?php 

if (\Yii::$app->mobileDetect->isMobile()) {
    //la mobile
    $this->registerCssFile("@web/css/mobile/searchdesignlist.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/searchdesignlist.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/price_range_script.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else if (\Yii::$app->mobileDetect->isTablet()) {
    //la istable
    $this->registerCssFile("@web/css/mobile/searchdesignlist.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("@web/js/mobile/searchdesignlist.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

} else {
    //la desktop
    $this->registerCssFile("@web/css/desktop/searchdesignlist.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);

    $this->registerJsFile("@web/js/price_range_script.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
     $this->registerJsFile("@web/js/desktop/searchdesignlist.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
    $this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js", [
        'depends' => [\frontend\assets\AppAsset::className()],
    ]);
}

?>