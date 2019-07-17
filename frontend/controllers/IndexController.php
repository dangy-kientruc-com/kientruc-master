<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use linslin\yii2\curl;
class IndexController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex()
    {

        $curl = new curl\Curl();
        if (Yii::$app->user->isGuest) {
            if(isset($_GET['tag']))
            {
                $tag=$_GET['tag'];
            }
            else
            {
                $tag=0;
            }
            $home = $curl->get('http://ktdemov1.kientruc.com/api/v1/pages/home?tag='.$tag);
            $home = json_decode($home,JSON_UNESCAPED_UNICODE);
        }else
        {
            $a=Yii::$app->user->identity;
            $home = $curl->get('http://ktdemov1.kientruc.com/api/v1/pages/customer-login/'.$a['id'].'');
            $home = json_decode($home,JSON_UNESCAPED_UNICODE);
        }
        return $this->render('index',['home'=>$home['data']]);
        
    }
    public function actionLoaduser()
    {
        return $this->render('indexloaduser');
    }
    public function actionLoadproject()
    {
        return $this->renderAjax('indexloadproject');
    }
    public function actionLoadtag()
    {
        return $this->renderAjax('loadtag');
    }
    public function actionComeback()
    {
        return $this->render('comeback');

    }
    public function actionComebackmam()
    {
      $curl = new curl\Curl();
      $a=Yii::$app->user->identity;
      $response = $curl->setPostParams(['post' =>$_POST, 'id_customer' =>$a['id'] ])
     ->setHeaders([
        'Authorization' => 'Bearer '.$a['token_api'],
     ])
     ->post('http://ktdemov1.kientruc.com/api/v1/pages/step-finish');
     $response =json_decode($response,JSON_UNESCAPED_UNICODE);
     if($response['success'] ==1 )
        return $this->goBack();
    }
    public function actionLoadcomeback()
    {
        return $this->renderAjax('loadstep3');
    }
    public function actionHomeCategory(){
        if(isset($_GET['lct']))
        {
            $lct=$_GET['lct'];
        }
        else
        {
            $lct=0;
        }
        if(isset($_GET['tt']))
        {
            $tt=$_GET['tt'];
        }
        else
        {
            $tt=0;
        }
        if(isset($_GET['pc']))
        {
            $pc=$_GET['pc'];
        }
        else 
        {
            $pc=0;
        }
        if(isset($_GET['hm']))
        {
            $hm=$_GET['hm'];
        }
        else
        {
            $hm=0;
        }
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
        }
        else
        {
            $page=1;
        }
        $curl = new curl\Curl();
        $home = $curl->get('http://ktdemov1.kientruc.com/api/v1/pages/tag-project?lct='.$lct.'&hm='.$hm.'&pc='.$pc.'&tt='.$tt.'&page='.$page.'');
        $home = json_decode($home,JSON_UNESCAPED_UNICODE);
        return $this->render('home-category',['home'=>$home]);
    }
    public function actionLoadhomecategory()
    {
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
        }
        else
        {
            $page=0;
        }
        if(isset($_GET['lct']))
        {
            $lct=$_GET['lct'];
        }
        else
        {
            $lct=0;
        }
        if(isset($_GET['tt']))
        {
            $tt=$_GET['tt'];
        }
        else
        {
            $tt=0;
        }
        if(isset($_GET['pc']))
        {
            $pc=$_GET['pc'];
        }
        else 
        {
            $pc=0;
        }
        if(isset($_GET['hm']))
        {
            $hm=$_GET['hm'];
        }
        else
        {
            $hm=0;
        }
        $curl = new curl\Curl();
        $home = $curl->get('http://ktdemov1.kientruc.com/api/v1/pages/tag-project?lct='.$lct.'&hm='.$hm.'&pc='.$pc.'&tt='.$tt.'&page='.$page.'');
        $home = json_decode($home,JSON_UNESCAPED_UNICODE);
        return $this->renderAjax('loadhomecategory',['home'=>$home]);
        
    }

}
