<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pegawai".
 *
 * @property int $id_pegawai
 * @property int $user_id
 * @property string $nik
 * @property string $nip
 * @property string $nama_lengkap
 * @property string $foto
 * @property string $email
 * @property string $no_hp
 * @property int $pns_nonpns_id
 * @property int $jenis_tenaga_id
 * @property int $unit_kerja_id
 * @property int $jabatan_struktural_id
 * @property int $jabatan_fungsional_id
 * @property int $pangkat_golongan_id
 * @property int $is_active
 *
 * @property TbMasterJabatanFungsional $jabatanFungsional
 * @property TbMasterJabatanStruktural $jabatanStruktural
 * @property TbMasterJenisTenaga $jenisTenaga
 * @property TbMasterPangkatGolongan $pangkatGolongan
 * @property TbMasterPnsNonpns $pnsNonpns
 * @property TbMasterUnitKerja $unitKerja
 * @property TbUser $user
 */
class TbPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'nik', 'nip', 'nama_lengkap', 'foto', 'email', 'no_hp', 'pns_nonpns_id', 'jenis_tenaga_id', 'unit_kerja_id', 'jabatan_struktural_id', 'jabatan_fungsional_id', 'pangkat_golongan_id'], 'required'],
            [['user_id', 'pns_nonpns_id', 'jenis_tenaga_id', 'unit_kerja_id', 'jabatan_struktural_id', 'jabatan_fungsional_id', 'pangkat_golongan_id', 'is_active'], 'integer'],
            [['nik'], 'string', 'max' => 18],
            [['nip'], 'string', 'max' => 20],
            [['nama_lengkap', 'foto', 'email'], 'string', 'max' => 50],
            [['no_hp'], 'string', 'max' => 16],
            [['jabatan_fungsional_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterJabatanFungsional::className(), 'targetAttribute' => ['jabatan_fungsional_id' => 'id_jabatan_fungsional']],
            [['jabatan_struktural_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterJabatanStruktural::className(), 'targetAttribute' => ['jabatan_struktural_id' => 'id_master_jabatan_struktural']],
            [['jenis_tenaga_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterJenisTenaga::className(), 'targetAttribute' => ['jenis_tenaga_id' => 'id_master_jenis_tenaga']],
            [['pangkat_golongan_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterPangkatGolongan::className(), 'targetAttribute' => ['pangkat_golongan_id' => 'id_pangkat_golongan']],
            [['pns_nonpns_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterPnsNonpns::className(), 'targetAttribute' => ['pns_nonpns_id' => 'id_master_pns_nonpns']],
            [['unit_kerja_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMasterUnitKerja::className(), 'targetAttribute' => ['unit_kerja_id' => 'id_master_unit_kerja']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbUser::className(), 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'user_id' => 'User ID',
            'nik' => 'Nik',
            'nip' => 'Nip',
            'nama_lengkap' => 'Nama Lengkap',
            'foto' => 'Foto',
            'email' => 'Email',
            'no_hp' => 'No Hp',
            'pns_nonpns_id' => 'Pns Nonpns ID',
            'jenis_tenaga_id' => 'Jenis Tenaga ID',
            'unit_kerja_id' => 'Unit Kerja ID',
            'jabatan_struktural_id' => 'Jabatan Struktural ID',
            'jabatan_fungsional_id' => 'Jabatan Fungsional ID',
            'pangkat_golongan_id' => 'Pangkat Golongan ID',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatanFungsional()
    {
        return $this->hasOne(TbMasterJabatanFungsional::className(), ['id_jabatan_fungsional' => 'jabatan_fungsional_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatanStruktural()
    {
        return $this->hasOne(TbMasterJabatanStruktural::className(), ['id_master_jabatan_struktural' => 'jabatan_struktural_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisTenaga()
    {
        return $this->hasOne(TbMasterJenisTenaga::className(), ['id_master_jenis_tenaga' => 'jenis_tenaga_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPangkatGolongan()
    {
        return $this->hasOne(TbMasterPangkatGolongan::className(), ['id_pangkat_golongan' => 'pangkat_golongan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPnsNonpns()
    {
        return $this->hasOne(TbMasterPnsNonpns::className(), ['id_master_pns_nonpns' => 'pns_nonpns_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitKerja()
    {
        return $this->hasOne(TbMasterUnitKerja::className(), ['id_master_unit_kerja' => 'unit_kerja_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TbUser::className(), ['id_user' => 'user_id']);
    }
}
