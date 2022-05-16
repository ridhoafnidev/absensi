<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterLevel;

/**
 * TbMasterLevelSearch represents the model behind the search form about `app\models\TbMasterLevel`.
 */
class TbMasterLevelSearch extends TbMasterLevel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_level'], 'integer'],
            [['level', 'is_active'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TbMasterLevel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_level' => $this->id_level,
        ]);

        $query->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'is_active', $this->is_active]);

        return $dataProvider;
    }
}
