<?php
namespace frontend\controllers;

use frontend\models\Login;
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
    public function actionHomeLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post())) {

            $curl = new curl\Curl();
            $home = $curl->setPostParams(['username' => $model->username, 'password' => $model->password, 'rememberMe' =>1])
                ->post('http://ktdemov1.kientruc.com/api/v1/sites/login');
            $home = json_decode($home, JSON_UNESCAPED_UNICODE);
            $home = $home['data'];

            if($home){

                $abc['id_customer'] = $home['id_customer'];
                $abc['username'] = $home['username'];
                $abc['auth_key'] = $home['auth_key'];
                $abc['password_hash'] = $home['password_hash'];
                $abc['password_reset_token'] = $home['password_reset_token'];
                $abc['status'] = $home['status'];
                $abc['created_at'] = $home['created_at'];
                $abc['updated_at'] = $home['updated_at'];
                $model->arrLogin = $abc;

                if ($model->login()) {

                    $session = Yii::$app->session;
                    $session->set('id_customer', $home['id_customer']);

                    return $this->goBack();
                }
            }
      
            
        }

        $model->password = '';
        return $this->render('homelogin', [
                'model' => $model,

        ]);
    }



    public function actionIndex()
    {

        //test login
        echo "<pre>";
        var_dump(!Yii::$app->user->isGuest);
        print_r(Yii::$app->user->identity);
        echo "</pre>";
        
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

        $post = Yii::$app->request->post();
        $model = new LoginForm();

//cach klhac
        $model->username = $_POST['tendangnhap'];
        $model->username = $post['tendangnhap'];

        if ($model->load($post)) {


            //$model->getError();// khi != rong =>loi

            $curl = new curl\Curl();
            $home = $curl->setPostParams(['username' => $model->username, 'password' => $model->password, 'rememberMe' => $model->rememberMe])
                ->post('http://ktdemov1.kientruc.com/api/v1/sites/login');
            $home = json_decode($home, JSON_UNESCAPED_UNICODE);
            $home = $home['data'];

            $abc['id_customer'] = $home['id_customer'];
            $abc['username'] = $home['username'];
            $abc['auth_key'] = $home['auth_key'];
            $abc['password_hash'] = $home['password_hash'];
            $abc['password_reset_token'] = $home['password_reset_token'];
            $abc['status'] = $home['status'];
            $abc['created_at'] = $home['created_at'];
            $abc['updated_at'] = $home['updated_at'];
            $model->arrLogin = $abc;

            if ($model->login()) {
                $session = Yii::$app->session;
                $session->set('id_customer', $home['id_customer']);
                return $this->goBack();
            }
        } else {
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }

    }

    public function actionDetailProject()
    {
        return $this->render('detail-project');
    }
    //search
    public function actionSearch(){
        return $this->render('search');
    }
    public function actionNew()
    {
        return $this->render('new');
    }
    public function actionNewcategory()
    {
        return $this->render('newcategory');
    }
    public function actionNewdetail()
    {
        return $this->render('new-detail');
    }
    public function actionProfileviewer()
    {
        return $this->render('profileviewer');
    }
    public function actionProfilevieweralbum()
    {
        return $this->render('profilevieweralbum');
    }
    public function actionProfileviewerchart()
    {
        return $this->render('profileviewerchart');
    }
    public function actionSalelogin()
    {
        return $this->render('salelogin');
    }
    public function actionSalethongke()
    {
        return $this->render('salethongke');
    }
    public function actionUserlogin()
    {
        return $this->render('userlogin');
    }
    public function actionYtuongtapchi()
    {
        return $this->render('ytuongtapchi');
    }
    public function actionCreateaccount()
    {
        return $this->render("create-account");
    }
    public function actionRegister()
    {
        return $this->render("register");
    }
    public function actionComeback()
    {
        return $this->render("comeback");
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
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
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

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
