<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $nama_pegawai
 * @property string $password
 * @property int $level_id
 * @property int $is_active
 * @property int $office_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TbAbsensi[] $tbAbsensis
 * @property TbPegawai[] $tbPegawais
 * @property TbMasterLevel $level
 */
class TbUser extends \yii\db\ActiveRecord
{

    public $nama_lengkap;

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
            [['level_id', 'is_active', 'office_id'], 'integer'],
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
            'id_user' => 'Id',
            'username' => 'Username',
            'password' => 'Password',
            'level_id' => 'Level',
            'is_active' => 'Status Akun',
            'office_id' => 'Satker',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    //region satker

    public function getSatker() {
        return $this->hasOne(TbMasterOffice::className(), ['id_master_office' => 'office_id']);
    }

    //endregion

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
