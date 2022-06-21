<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tunjangan".
 *
 * @property int $id
 * @property string $grade
 * @property string $nominal_tunjangan
 */
class TbTunjangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tunjangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grade', 'nominal_tunjangan'], 'required'],
            [['grade'], 'string', 'max' => 10],
            [['nominal_tunjangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grade' => 'Grade',
            'nominal_tunjangan' => 'Nominal Tunjangan',
        ];
    }
}
