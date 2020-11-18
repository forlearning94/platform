<?php

namespace app\models;
use yii\web\IdentityInterface;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $email
 * @property string|null $password
 * @property int|null $isAdmin
 * @property int|null $role
 * @property string|null $photo
 * @property string|null $authKey
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isAdmin', 'role'], 'integer'],
            [['login', 'firstname', 'lastname', 'email', 'password', 'photo', 'authKey'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
            'role' => 'Role',
            'photo' => 'Photo',
            'authKey' => 'Auth Key',
        ];
    }

    public static function findByUsername($name)
    {
        return User::find()->where(['login' => $name])->one();
    }

    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;
    }

    public function create()
    {
        return $this->save(false);
    }

    public function getImage()
    {
        return $this->photo;
    }

    //////////////////////////////////////////////////////////////
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
 
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
 
    public function getId()
    {
        return $this->id;
    }
 
    public function getAuthKey()
    {
        return $this->authKey;
    }
 
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
