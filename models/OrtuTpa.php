<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ortu_tpa".
 *
 * @property int $id_ortu_tpa
 * @property int $id_ortu
 * @property string $npsn
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Ortu $ortu
 * @property Tpa $npsn0
 */
class OrtuTpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ortu_tpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ortu', 'npsn'], 'required'],
            [['id_ortu'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['npsn'], 'string', 'max' => 50],
            [['id_ortu'], 'exist', 'skipOnError' => true, 'targetClass' => Ortu::className(), 'targetAttribute' => ['id_ortu' => 'id_ortu']],
            [['npsn'], 'exist', 'skipOnError' => true, 'targetClass' => Tpa::className(), 'targetAttribute' => ['npsn' => 'npsn']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ortu_tpa' => 'Id Ortu Tpa',
            'id_ortu' => 'Id Ortu',
            'npsn' => 'Npsn',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpsn0()
    {
        return $this->hasOne(Tpa::className(), ['npsn' => 'npsn']);
    }
}
