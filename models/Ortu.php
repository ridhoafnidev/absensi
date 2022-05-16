<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ortu".
 *
 * @property int $id_ortu
 * @property string $nama_lengkap
 * @property string $email
 * @property string $password
 * @property string $alamat
 * @property string $nomor_handphone
 * @property string $pekerjaan
 * @property string $usia
 * @property string $agama
 * @property string $foto
 * @property string|null $token
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Anak[] $anaks
 * @property OrtuTpa[] $ortuTpas
 * @property Pembayaran[] $pembayarans
 */
class Ortu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ortu';
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
            [['password', 'token'], 'string', 'max' => 255],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ortu' => 'Id Ortu',
            'nama_lengkap' => 'Nama Lengkap',
            'email' => 'Email',
            'password' => 'Password',
            'alamat' => 'Alamat',
            'nomor_handphone' => 'Nomor Handphone',
            'pekerjaan' => 'Pekerjaan',
            'usia' => 'Usia',
            'agama' => 'Agama',
            'foto' => 'Foto',
            'token' => 'Token',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnaks()
    {
        return $this->hasMany(Anak::className(), ['id_ortu' => 'id_ortu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrtuTpas()
    {
        return $this->hasMany(OrtuTpa::className(), ['id_ortu' => 'id_ortu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::className(), ['id_ortu' => 'id_ortu']);
    }
}
