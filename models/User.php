<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "tb_admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $nama_lengkap
 * @property string $password
 * @property string $authkey
 * @property string $accesToken
 * @property string $email
 * @property string $foto
 * @property string $createdAt
 * @property string $updatedAt
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
            [['username', 'nama_lengkap', 'password', 'authkey', 'accesToken', 'email', 'foto', 'createdAt', 'updatedAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['username', 'nama_lengkap', 'authkey', 'accesToken', 'email', 'foto'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'nama_lengkap' => 'Nama Lengkap',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'accesToken' => 'Acces Token',
            'email' => 'Email',
            'foto' => 'Foto',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        // mencari user berdasarkan ID dan yg dicari hanya 1
        $user = User::findOne($id);

        if ($user != null) {
            return $user;
        }else{
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      // mencari user berdasarkan accesToken dan yang dicari hanya 1
      $user = User::find()->where(['accessToken' => $token])->one();

      if ($user != null) {
            return $user;
        }else{
            return null;
        }
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
      // mencari user berdasarkan username dan yang dicari haya 1
        $user = User::find()->where(['username' => $username])->one();

        if ($user != null) {
            return $user;
        }else{
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id_admin;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
