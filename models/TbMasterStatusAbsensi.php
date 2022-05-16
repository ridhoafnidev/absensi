<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_status_absensi".
 *
 * @property int $id_status_absensi
 * @property string $status_absensi
 *
 * @property TbAbsensi[] $tbAbsensis
 */
class TbMasterStatusAbsensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_status_absensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_absensi'], 'required'],
            [['status_absensi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status_absensi' => 'Id Status Absensi',
            'status_absensi' => 'Status Absensi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbAbsensis()
    {
        return $this->hasMany(TbAbsensi::className(), ['status_absensi_id' => 'id_status_absensi']);
    }
}
