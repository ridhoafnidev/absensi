<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_absensi".
 *
 * @property int $id_absensi
 * @property string $date_absensi
 * @property string $time_absensi
 * @property int $status_absensi_id
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $dokumen_pendukung
 * @property string $jenis_cuti
 * @property int $lembur
 * @property string $keterangan
 * @property float $lat
 * @property float $lng
 * @property string $alamat_absensi
 * @property string $created_at
 * @property string $updated_at
 * @property int $user_id
 * @property string $jenis_absensi
 *
 * @property TbMasterStatusAbsensi $statusAbsensi
 * @property TbUser $user
 */
class TbAbsensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_absensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_absensi', 'time_absensi', 'status_absensi_id', 'lat', 'lng', 'alamat_absensi', 'user_id', 'jenis_absensi'], 'required'],
            [['date_absensi', 'time_absensi', 'created_at', 'updated_at'], 'safe'],
            [['status_absensi_id', 'lembur', 'user_id'], 'integer'],
            [['lat', 'lng'], 'number'],
            [['alamat_absensi', 'jenis_absensi'], 'string'],
            [['tanggal_mulai', 'tanggal_selesai'], 'string', 'max' => 10],
            [['dokumen_pendukung'], 'string', 'max' => 50],
            [['jenis_cuti'], 'string', 'max' => 150],
            [['keterangan'], 'string', 'max' => 100],
            [['status_absensi_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterStatusAbsensi::className(), 'targetAttribute' => ['status_absensi_id' => 'id_status_absensi']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbUser::className(), 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_absensi' => 'Id Absensi',
            'date_absensi' => 'Date Absensi',
            'time_absensi' => 'Time Absensi',
            'status_absensi_id' => 'Status Absensi ID',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'dokumen_pendukung' => 'Dokumen Pendukung',
            'jenis_cuti' => 'Jenis Cuti',
            'lembur' => 'Lembur',
            'keterangan' => 'Keterangan',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'alamat_absensi' => 'Alamat Absensi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'jenis_absensi' => 'Jenis Absensi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusAbsensi()
    {
        return $this->hasOne(TbMasterStatusAbsensi::className(), ['id_status_absensi' => 'status_absensi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TbUser::className(), ['id_user' => 'user_id']);
    }
}
