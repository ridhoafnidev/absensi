<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property int $id_ortu
 * @property string $nominal
 * @property string $bukti_pembayaran
 * @property string $keterangan
 * @property string $status
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Ortu $ortu
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ortu', 'nominal', 'bukti_pembayaran', 'keterangan', 'status'], 'required'],
            [['id_ortu'], 'integer'],
            [['status'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nominal', 'bukti_pembayaran'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 100],
            [['id_ortu'], 'exist', 'skipOnError' => true, 'targetClass' => Ortu::className(), 'targetAttribute' => ['id_ortu' => 'id_ortu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_ortu' => 'Id Ortu',
            'nominal' => 'Nominal',
            'bukti_pembayaran' => 'Bukti Pembayaran',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
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
