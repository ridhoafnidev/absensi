<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_kegiatan".
 *
 * @property int $id_detail_kegiatan
 * @property int $id_kegiatan
 * @property string $nama_kegiatan
 * @property string $keterangan
 * @property string $jam
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Kegiatan $kegiatan
 */
class DetailKegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kegiatan', 'nama_kegiatan', 'keterangan', 'jam'], 'required'],
            [['id_kegiatan'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_kegiatan', 'jam'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 100],
            [['id_kegiatan'], 'exist', 'skipOnError' => true, 'targetClass' => Kegiatan::className(), 'targetAttribute' => ['id_kegiatan' => 'id_kegiatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail_kegiatan' => 'Id Detail Kegiatan',
            'id_kegiatan' => 'Id Kegiatan',
            'nama_kegiatan' => 'Nama Kegiatan',
            'keterangan' => 'Keterangan',
            'jam' => 'Jam',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKegiatan()
    {
        return $this->hasOne(Kegiatan::className(), ['id_kegiatan' => 'id_kegiatan']);
    }
}
