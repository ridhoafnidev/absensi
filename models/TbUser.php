<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property int $level_id
 * @property int $is_active
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TbAbsensi[] $tbAbsensis
 * @property TbPegawai[] $tbPegawais
 * @property TbMasterLevel $level
 */
class TbUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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
            [['username', 'password', 'level_id'], 'required'],
            [['level_id', 'is_active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
            [['level_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterLevel::className(), 'targetAttribute' => ['level_id' => 'id_level']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'level_id' => 'Level ID',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbAbsensis()
    {
        return $this->hasMany(TbAbsensi::className(), ['user_id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasOne(TbPegawai::className(), ['user_id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevel()
    {
        return $this->hasOne(TbMasterLevel::className(), ['id_level' => 'level_id']);
    }
}
