<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_pns_nonpns".
 *
 * @property int $id_master_pns_nonpns
 * @property int $pns_nonpns
 *
 * @property TbPegawai[] $tbPegawais
 */
class TbMasterPnsNonpns extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_pns_nonpns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pns_nonpns'], 'required'],
            [['pns_nonpns'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_pns_nonpns' => 'Id Master Pns Nonpns',
            'pns_nonpns' => 'Pns Nonpns',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPegawais()
    {
        return $this->hasMany(TbPegawai::className(), ['pns_nonpns_id' => 'id_master_pns_nonpns']);
    }
}
