<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_office".
 *
 * @property int $id_master_office
 * @property string $office_name
 * @property string $office_address
 * @property float $lat
 * @property float $lng
 * @property string $created_at
 * @property string $updated_at
 */
class TbMasterOffice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_office';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['office_name', 'office_address', 'lat', 'lng'], 'required'],
            [['lat', 'lng'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['office_name', 'office_address'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_office' => 'Id Master Office',
            'office_name' => 'Office Name',
            'office_address' => 'Office Address',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
