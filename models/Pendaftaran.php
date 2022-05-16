<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property int $id
 * @property int $tpa_id
 * @property string $nama_tpa
 * @property string $alamat
 * @property int $ortu_id
 * @property string $nama_ortu
 * @property int $usia_ortu
 * @property string $pekerjaan_ortu
 * @property string $alamat_ortu
 * @property int $nama_anak
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $nomor_akta
 * @property string $jenis_kelamin
 * @property string $alasan_masuk_tpa
 * @property string $tanggal_pendaftaran
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tpa_id', 'nama_tpa', 'ortu_id', 'nama_ortu', 'usia_ortu', 'pekerjaan_ortu', 'alamat_ortu', 'nama_anak', 'tempat_lahir', 'tgl_lahir', 'nomor_akta', 'jenis_kelamin', 'alasan_masuk_tpa'], 'required'],
            [['tpa_id', 'ortu_id', 'usia_ortu', 'nama_anak'], 'integer'],
            [['alamat', 'tgl_lahir', 'tanggal_pendaftaran'], 'safe'],
            [['alasan_masuk_tpa'], 'string'],
            [['nama_tpa', 'nama_ortu', 'pekerjaan_ortu', 'alamat_ortu', 'tempat_lahir', 'nomor_akta'], 'string', 'max' => 100],
            [['jenis_kelamin'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tpa_id' => 'Tpa ID',
            'nama_tpa' => 'Nama Tpa',
            'alamat' => 'Alamat',
            'ortu_id' => 'Ortu ID',
            'nama_ortu' => 'Nama Ortu',
            'usia_ortu' => 'Usia Ortu',
            'pekerjaan_ortu' => 'Pekerjaan Ortu',
            'alamat_ortu' => 'Alamat Ortu',
            'nama_anak' => 'Nama Anak',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'nomor_akta' => 'Nomor Akta',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alasan_masuk_tpa' => 'Alasan Masuk Tpa',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
        ];
    }
}
