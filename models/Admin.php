<?php

namespace app\models;
use yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property string $accesToken
 * @property string $createdAt
 * @property string $updatedAt
 */
class Admin extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'tb_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'office_id', 'password', 'level_id', 'is_active','authkey', 'accesToken', 'createdAt', 'updatedAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['username', 'authkey', 'accesToken'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'office_id' => 'Satker',
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'accesToken' => 'Acces Token',
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
        $user = Admin::findOne($id);

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
      $user = Admin::find()->where(['accessToken' => $token])->one();

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
    public static function findByUsername($username, $office_id)
    {
      // mencari user berdasarkan username dan yang dicari haya 1
        $user = Admin::find()->where(['username' => $username])
            ->andWhere(['level_id' => 2])
            ->andWhere(['office_id' => $office_id])->one();

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
        return $this->id_user;
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
        return Yii::$app->security->validatePassword($password, $this->password);
    }

}
