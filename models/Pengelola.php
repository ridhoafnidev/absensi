<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengelola".
 *
 * @property int $id_pengelola
 * @property string $nama_lengkap
 * @property string $email
 * @property string $password
 * @property string $alamat
 * @property string $nomor_handphone
 * @property string $pekerjaan
 * @property string $usia
 * @property string $agama
 * @property string $foto
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Tpa[] $tpas
 */
class Pengelola extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengelola';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'email', 'password', 'alamat', 'nomor_handphone', 'pekerjaan', 'usia', 'agama', 'foto'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_lengkap', 'email', 'nomor_handphone', 'pekerjaan', 'usia', 'agama', 'foto'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengelola' => 'Id Pengelola',
            'nama_lengkap' => 'Nama Lengkap',
            'email' => 'Email',
            'password' => 'Password',
            'alamat' => 'Alamat',
            'nomor_handphone' => 'Nomor Handphone',
            'pekerjaan' => 'Pekerjaan',
            'usia' => 'Usia',
            'agama' => 'Agama',
            'foto' => 'Foto',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTpas()
    {
        return $this->hasMany(Tpa::className(), ['id_pengelola' => 'id_pengelola']);
    }
}
