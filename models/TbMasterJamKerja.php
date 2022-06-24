<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_jam_kerja".
 *
 * @property int $id_jam_kerja
 * @property string $hari
 * @property string $jam
 */
class TbMasterJamKerja extends \yii\db\ActiveRecord
{

    public $jam_awal;
    public $jam_akhir;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_jam_kerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hari', 'jam'], 'required'],
            [['hari'], 'string'],
            [['jam'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jam_kerja' => 'Id Jam Kerja',
            'hari' => 'Hari',
            'jam' => 'Jam',
        ];
    }
}
