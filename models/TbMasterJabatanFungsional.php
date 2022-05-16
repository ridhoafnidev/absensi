<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_jabatan_fungsional".
 *
 * @property int $id_jabatan_fungsional
 * @property string $jabatan_fungsional
 *
 * @property TbPegawai[] $tbPegawais
 */
class TbMasterJabatanFungsional extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_jabatan_fungsional';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jabatan_fungsional'], 'required'],
            [['jabatan_fungsional'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jabatan_fungsional' => 'Id Jabatan Fungsional',
            'jabatan_fungsional' => 'Jabatan Fungsional',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasMany(TbPegawai::className(), ['jabatan_fungsional_id' => 'id_jabatan_fungsional']);
    }
}
