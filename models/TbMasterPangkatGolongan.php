<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_pangkat_golongan".
 *
 * @property int $id_pangkat_golongan
 * @property string $pangkat_golongan
 *
 * @property TbPegawai[] $tbPegawais
 */
class TbMasterPangkatGolongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_pangkat_golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pangkat_golongan'], 'required'],
            [['pangkat_golongan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pangkat_golongan' => 'Id Pangkat Golongan',
            'pangkat_golongan' => 'Pangkat Golongan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasMany(TbPegawai::className(), ['pangkat_golongan_id' => 'id_pangkat_golongan']);
    }
}
