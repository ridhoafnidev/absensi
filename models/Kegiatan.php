<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kegiatan".
 *
 * @property int $id_kegiatan
 * @property string $npsn
 * @property string $tanggal_kegiatan
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property DetailKegiatan[] $detailKegiatans
 * @property Tpa $npsn0
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['npsn', 'tanggal_kegiatan', 'createdAt', 'updatedAt'], 'required'],
            [['tanggal_kegiatan', 'createdAt', 'updatedAt'], 'safe'],
            [['npsn'], 'string', 'max' => 50],
            [['npsn'], 'exist', 'skipOnError' => true, 'targetClass' => Tpa::className(), 'targetAttribute' => ['npsn' => 'npsn']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kegiatan' => 'Id Kegiatan',
            'npsn' => 'Npsn',
            'tanggal_kegiatan' => 'Tanggal Kegiatan',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::className(), ['id_kegiatan' => 'id_kegiatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTpa()
    {
        return $this->hasOne(Tpa::className(), ['npsn' => 'npsn']);
    }
}
