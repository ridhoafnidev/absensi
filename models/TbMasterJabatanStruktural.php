<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_jabatan_struktural".
 *
 * @property int $id_master_jabatan_struktural
 * @property string $jabatan_struktural
 *
 * @property TbPegawai[] $tbPegawais
 */
class TbMasterJabatanStruktural extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_jabatan_struktural';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jabatan_struktural'], 'required'],
            [['jabatan_struktural'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_jabatan_struktural' => 'Id Master Jabatan Struktural',
            'jabatan_struktural' => 'Jabatan Struktural',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasMany(TbPegawai::className(), ['jabatan_struktural_id' => 'id_master_jabatan_struktural']);
    }
}
