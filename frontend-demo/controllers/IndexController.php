<?php
namespace frontend\controllers;

use common\models\Article;
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

/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionArticles()
    {
        return $this->render('articles');
    }
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionArticleCategory()
    {
        return $this->render('article-category');
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionArticleDetail()
    {
        $id = Yii::$app->request->get('id');
        $data = Article::find()->asArray()
            //->joinWith('photo')
            //->joinWith('category')
            /*->join('LEFT JOIN', '(
                SELECT
                    comment.id_post,
                    comment.del,
                    Count(comment.id_comment) AS total_comment
                FROM comment
                GROUP BY comment.id_post,comment.del
                HAVING comment.del = 0
            ) as comm', 'comm.id_post = article.id_post')
            ->join('LEFT JOIN', '(
                SELECT
                    liked.id_post,
                    Count(liked.id_liked) AS total_liked
                FROM liked
                GROUP BY liked.id_post
            ) as lik', 'lik.id_post = article.id_post')
            */
            ->where(['article.id_article' => $id,'article.status' => 1])
            ->select([
                'article.*',
                //'comm.total_comment',
                //'lik.total_liked',
            ])
            ->one();
        if($data) {
            switch ($data['template']) {
                case 'hd':
                    return $this->render('article-detail-help', [
                        'data' => $data,
                        'id' => $id
                    ]);
                    break;
                case 'tc':
                    return $this->render('article-detail', [
                        'data' => $data,
                        'id' => $id
                    ]);
                    break;
                case 'cs':
                    return $this->render('article-detail-file', [
                        'data' => $data,
                        'id' => $id
                    ]);
                    break;
            }
        }
        //thong bao không tồn tại trang er=4
        return $this->redirect(['site/error?er=9']);

    }
}
