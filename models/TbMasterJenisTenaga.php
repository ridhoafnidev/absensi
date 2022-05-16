<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_jenis_tenaga".
 *
 * @property int $id_master_jenis_tenaga
 * @property string $jenis_tenaga
 *
 * @property TbPegawai[] $tbPegawais
 */
class TbMasterJenisTenaga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_jenis_tenaga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_tenaga'], 'required'],
            [['jenis_tenaga'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_jenis_tenaga' => 'Id Master Jenis Tenaga',
            'jenis_tenaga' => 'Jenis Tenaga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasMany(TbPegawai::className(), ['jenis_tenaga_id' => 'id_master_jenis_tenaga']);
    }
}
