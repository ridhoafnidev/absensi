<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anak".
 *
 * @property int $id_anak
 * @property string $nama_lengkap
 * @property string $ttl
 * @property string $jenis_kelamin
 * @property string $no_akta_kelahiran
 * @property int $id_ortu
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Ortu $ortu
 */

class Anak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $tmp_lahir;
    public $tgl_lahir;

    public static function tableName()
    {
        return 'anak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'ttl', 'jenis_kelamin', 'no_akta_kelahiran', 'id_ortu'], 'required'],
            [['jenis_kelamin'], 'string'],
            [['id_ortu'], 'integer'],
            [['createdAt', 'updatedAt', 'tgl_lahir'], 'safe'],
            [['nama_lengkap', 'ttl', 'tmp_lahir'], 'string', 'max' => 50],
            [['no_akta_kelahiran'], 'string', 'max' => 100],
            [['id_ortu'], 'exist', 'skipOnError' => true, 'targetClass' => Ortu::className(), 'targetAttribute' => ['id_ortu' => 'id_ortu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anak' => 'Id Anak',
            'nama_lengkap' => 'Nama Lengkap',
            'ttl' => 'Ttl',
            'jenis_kelamin' => 'Jenis Kelamin',
            'no_akta_kelahiran' => 'No Akta Kelahiran',
            'id_ortu' => 'Id Ortu',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrtu()
    {
        return $this->hasOne(Ortu::className(), ['id_ortu' => 'id_ortu']);
    }
}
