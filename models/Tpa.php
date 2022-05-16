<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tpa".
 *
 * @property int $id_tpa
 * @property string $npsn
 * @property string $nama_lokasi
 * @property string $alamat
 * @property string $foto_1
 * @property string $foto_2
 * @property string $foto_3
 * @property float $latitude
 * @property float $longitude
 * @property string $status
 * @property int $id_pengelola
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Biaya[] $biayas
 * @property FasilitasTpa[] $fasilitasTpas
 * @property Kegiatan[] $kegiatans
 * @property OrtuTpa[] $ortuTpas
 * @property Pengelola $pengelola
 */
class Tpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['npsn', 'nama_lokasi', 'alamat', 'foto_1', 'latitude', 'longitude', 'status'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['status'], 'string'],
            [['id_pengelola'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['npsn', 'nama_lokasi', 'foto_1', 'foto_2', 'foto_3'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['npsn'], 'unique'],
            [['id_pengelola'], 'exist', 'skipOnError' => true, 'targetClass' => Pengelola::className(), 'targetAttribute' => ['id_pengelola' => 'id_pengelola']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tpa' => 'Id Tpa',
            'npsn' => 'Npsn',
            'nama_lokasi' => 'Nama Lokasi',
            'alamat' => 'Alamat',
            'foto_1' => 'Foto 1',
            'foto_2' => 'Foto 2',
            'foto_3' => 'Foto 3',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'status' => 'Status',
            'id_pengelola' => 'Id Pengelola',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBiayas()
    {
        return $this->hasMany(Biaya::className(), ['npsn' => 'npsn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFasilitasTpas()
    {
        return $this->hasMany(FasilitasTpa::className(), ['npsn' => 'npsn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKegiatans()
    {
        return $this->hasMany(Kegiatan::className(), ['npsn' => 'npsn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrtuTpas()
    {
        return $this->hasMany(OrtuTpa::className(), ['npsn' => 'npsn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengelola()
    {
        return $this->hasOne(Pengelola::className(), ['id_pengelola' => 'id_pengelola']);
    }
}
