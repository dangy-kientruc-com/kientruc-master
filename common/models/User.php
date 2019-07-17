<?php
namespace common\models;
use linslin\yii2\curl\Curl;
use Yii;
use yii\base\Model;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
class User extends Model implements IdentityInterface
{
    public $id;
    public $username;
    public $password_hash;
    public $password_reset_token;
    public $verification_token;
    public $token;
    public $token_api;
    public $auth_key;
    public $full_name;
    public $link_view;
    public $email;
    public $phone;
    public $avatar_link;
    public $folder_upload;
    public $where_from;
    public $status;
    public $created_at;
    public $updated_at;
    //public $password write-only password
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'id', 'username', 'password_hash', 'password_reset_token', 'verification_token', 'token',
                'token_api','auth_key', 'full_name', 'link_view', 'email', 'phone', 'avatar_link',
                'folder_upload', 'where_from', 'status', 'created_at', 'updated_at',
            ], 'safe'],
            ['status', 'default', 'value' => 0]
        ];
    }
    /**
     * @param int|string $id
     * @return User|null|IdentityInterface
     * @throws \Exception
     */
    public static function findIdentity($id)
    {
        //$session = Yii::$app->session;
        //$cus = $session->get('id_customer');
        //return 'dklsah ldjsa';
        $curl = new Curl();
        $home = $curl->get('http://ktdemov1.kientruc.com/api/v1/sites/auth-login/' . $id);
        $home = json_decode($home, JSON_UNESCAPED_UNICODE);
        $home = $home['data'];
        if ($home) {
            $u = new User();
            $u->id = $home['id_customer'];
            $u->username = $home['username'];
            $u->password_hash = $home['password_hash'];
            $u->password_reset_token = $home['password_reset_token'];
            $u->verification_token = $home['verification_token'];
            $u->token = $home['token'];
            $u->token_api = $home['token_api'];
            $u->auth_key = $home['auth_key'];
            $u->full_name = $home['full_name'];
            $u->link_view = $home['link_view'];
            $u->email = $home['email'];
            $u->phone = $home['phone'];
            $u->avatar_link = $home['avatar_link'];
            $u->folder_upload = $home['folder_upload'];
            $u->where_from = $home['where_from'];
            $u->status = $home['status'];
            $u->created_at = $home['created_at'];
            $u->updated_at = $home['updated_at'];
            return $u;
        }
        return null;
    }
    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int)substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     * @throws \yii\base\Exception
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    /**
     * Generates "remember me" authentication key
     * @throws \yii\base\Exception
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    /**
     * Generates new password reset token
     * @throws \yii\base\Exception
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    /**
     * @throws \yii\base\Exception
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}