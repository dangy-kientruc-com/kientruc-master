<?php
namespace frontend\controllers;

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
class SiteController extends Controller
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
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionIdeaAlbum()
    {
        return $this->render('idea-album');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPersonal()
    {
        return $this->render('personal');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionIdeaProject()
    {
        return $this->render('idea-project');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionCategory()
    {
        return $this->render('category');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAlbum()
    {
        return $this->render('album');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionProject()
    {
        return $this->render('project');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionDetailProject()
    {
        return $this->render('detail-project');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionDetailProjectModal()
    {
        return $this->renderAjax('render/detail-project');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAjaxAddAlbum()
    {
        return $this->renderAjax('ajax/ajax-add-album');
    }


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAjax()
    {
        return $this->renderAjax('ajax/view-customer');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAjaxMore()
    {
        return $this->renderAjax('ajax-more');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAddSkill()
    {
        return $this->renderAjax('add-skill');
    }


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionEditProject()
    {
        return $this->render('edit-project');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionNote()
    {
        return $this->render('note');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionSetting()
    {
        return $this->render('setting');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionFindKts()
    {
        return $this->render('find-kts');
    }


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionLove()
    {
        return $this->render('love');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionFollow()
    {
        return $this->render('follow');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionTuVan()
    {
        return $this->render('tu-van');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionDetailTuVan()
    {
        return $this->render('detail-tu-van');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionFirst()
    {
        return $this->render('first');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionTwo()
    {
        return $this->render('two');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionThree()
    {
        return $this->render('three');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionNews()
    {
        return $this->render('news');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionCategoryNews()
    {
        return $this->render('category-news');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionDetailNews()
    {
        return $this->render('detail-news');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionUpgrade()
    {
        return $this->render('upgrade');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAddProject()
    {
        return $this->renderAjax('add-project');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionComment()
    {
        return $this->renderAjax('comment');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
