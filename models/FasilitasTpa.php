<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fasilitas_tpa".
 *
 * @property int $id_fasilitas_tpa
 * @property string $npsn
 * @property int $id_fasilitas
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Tpa $npsn0
 * @property Fasilitas $fasilitas
 */
class FasilitasTpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas_tpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['npsn', 'id_fasilitas'], 'required'],
            [['id_fasilitas'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['npsn'], 'string', 'max' => 50],
            [['npsn'], 'exist', 'skipOnError' => true, 'targetClass' => Tpa::className(), 'targetAttribute' => ['npsn' => 'npsn']],
            [['id_fasilitas'], 'exist', 'skipOnError' => true, 'targetClass' => Fasilitas::className(), 'targetAttribute' => ['id_fasilitas' => 'id_fasilitas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fasilitas_tpa' => 'Id Fasilitas Tpa',
            'npsn' => 'Npsn',
            'id_fasilitas' => 'Id Fasilitas',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFasilitas()
    {
        return $this->hasOne(Fasilitas::className(), ['id_fasilitas' => 'id_fasilitas']);
    }
}
