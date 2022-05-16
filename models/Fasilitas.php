<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fasilitas".
 *
 * @property int $id_fasilitas
 * @property string $nama_fasilitas
 * @property string $createdAt
 * @property string|null $updatedAt
 *
 * @property FasilitasTpa[] $fasilitasTpas
 */
class Fasilitas extends \yii\db\ActiveRecord
{
    public $npsn;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_fasilitas'], 'required'],
            [['createdAt', 'updatedAt', 'npsn'], 'safe'],
            [['nama_fasilitas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fasilitas' => 'Id Fasilitas',
            'nama_fasilitas' => 'Nama Fasilitas',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFasilitasTpas()
    {
        return $this->hasMany(FasilitasTpa::className(), ['id_fasilitas' => 'id_fasilitas']);
    }
}
