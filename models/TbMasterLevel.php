<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_master_level".
 *
 * @property int $id_level
 * @property string $level
 * @property int $is_active
 *
 * @property TbUser[] $tbUsers
 */
class TbMasterLevel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_master_level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level'], 'required'],
            [['is_active'], 'integer'],
            [['level'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_level' => 'Id Level',
            'level' => 'Level',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbUsers()
    {
        return $this->hasMany(TbUser::className(), ['level_id' => 'id_level']);
    }
}
