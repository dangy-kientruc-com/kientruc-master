<?php
/**
 * Created by PhpStorm.
 * User: KIENTRUC.com
 * Date: 1/4/2017
 * Time: 8:49 AM
 */

namespace frontend\widgets;


use yii\base\Widget;

class footerWidget extends Widget
{
    
    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        if(\Yii::$app->mobileDetect->isMobile()){
            //la mobile
            return $this->render('mobile/footerWidget');

        }else if(\Yii::$app->mobileDetect->isTablet()){
            //la istable
            return $this->render('mobile/footerWidget');

        }else{
            //la desktop
            return $this->render('desktop/footerWidget');
        }
    }
}