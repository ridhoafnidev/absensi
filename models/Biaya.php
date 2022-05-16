<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biaya".
 *
 * @property int $id_biaya
 * @property string $npsn
 * @property string $jenis_biaya
 * @property string $jenis_penitipan
 * @property string $rentang_umur
 * @property string $total_biaya
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Tpa $npsn0
 */
class Biaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['npsn', 'jenis_biaya', 'jenis_penitipan', 'rentang_umur', 'total_biaya'], 'required'],
            [['jenis_biaya', 'jenis_penitipan'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['npsn', 'rentang_umur', 'total_biaya'], 'string', 'max' => 50],
            [['npsn'], 'exist', 'skipOnError' => true, 'targetClass' => Tpa::className(), 'targetAttribute' => ['npsn' => 'npsn']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_biaya' => 'Id Biaya',
            'npsn' => 'Npsn',
            'jenis_biaya' => 'Jenis Biaya',
            'jenis_penitipan' => 'Jenis Penitipan',
            'rentang_umur' => 'Rentang Umur',
            'total_biaya' => 'Total Biaya',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpsn0()
    {
        return $this->hasOne(Tpa::className(), ['npsn' => 'npsn']);
    }
}
