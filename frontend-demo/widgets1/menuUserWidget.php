<?php
/**
 * Created by PhpStorm.
 * User: KIENTRUC.com
 * Date: 1/4/2017
 * Time: 8:49 AM
 */

namespace frontend\widgets;

use yii\base\Widget;


class menuUserWidget extends Widget
{

    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        return $this->render('menuUserWidget');
    }
}