<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_unit_kerja".
 *
 * @property int $id_master_unit_kerja
 * @property string $unit_kerja
 *
 * @property TbPegawai[] $tbPegawais
 */
class TbMasterUnitKerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_unit_kerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_kerja'], 'required'],
            [['unit_kerja'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_unit_kerja' => 'Id Master Unit Kerja',
            'unit_kerja' => 'Unit Kerja',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasMany(TbPegawai::className(), ['unit_kerja_id' => 'id_master_unit_kerja']);
    }
}
