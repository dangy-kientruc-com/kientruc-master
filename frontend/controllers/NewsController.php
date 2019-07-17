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

class NewsController extends Controller
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
    public function actionArticle()
    {
        $curl = new curl\Curl();
        $newcategory = $curl->get('http://ktdemov1.kientruc.com/api/v1/typecategories/5/categories');
        $newcategory = json_decode($newcategory,JSON_UNESCAPED_UNICODE);
        $newsgoc = $curl->get('http://ktdemov1.kientruc.com/api/v1/categories/44');
        $newsgoc=json_decode($newsgoc,JSON_UNESCAPED_UNICODE);
        $news=$curl->get('http://ktdemov1.kientruc.com/api/v1/pages/article');
        $news=json_decode($news,JSON_UNESCAPED_UNICODE);
        return $this->render('news',['items'=>$newcategory,'newsgoc'=>$newsgoc,'news'=>$news]);
    }
    public function actionArticleDetail()
    {
        $id=$_GET['id'];
         $curl = new curl\Curl();

         $detail=$curl->get('http://ktdemov1.kientruc.com/api/v1/pages/article-detail/'.$id.'');
         $detail=json_decode($detail,JSON_UNESCAPED_UNICODE);
        return $this->render('news-detail',['detail'=>$detail]);
    }
    public function actionArticleCategory()
    {
        $id=$_GET['category'];
        $curl = new curl\Curl();
        $newcategory = $curl->get('http://ktdemov1.kientruc.com/api/v1/pages/article-category/'.$id.'?page=1');
        $newcategory = json_decode($newcategory,JSON_UNESCAPED_UNICODE);
       
        return $this->render('news-category',['newcategory'=>$newcategory]);
    }
    public function actionLoadnews()
    {
       if(isset($_GET['id']))
       {
            $id  =$_GET['id'];
       }
       else
       {
            $id=0;
       }
       if(isset($_GET['page']))
       {
            $page =$_GET['page'];
       }
       else
       {
            $pgae=0;    
       }
        $curl = new curl\Curl();
        $load=$curl->get('http://ktdemov1.kientruc.com/api/v1/pages/article-category/'.$id.'?page='.$page.'');
        $load=json_decode($load,JSON_UNESCAPED_UNICODE);
        return $this->render('loadnews',['load'=>$load]);
    }
}
