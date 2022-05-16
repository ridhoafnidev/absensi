<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterJabatanFungsional;

/**
 * TbMasterJabatanFungsionalSearch represents the model behind the search form about `app\models\TbMasterJabatanFungsional`.
 */
class TbMasterJabatanFungsionalSearch extends TbMasterJabatanFungsional
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jabatan_fungsional'], 'integer'],
            [['jabatan_fungsional'], 'safe'],
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
        $query = TbMasterJabatanFungsional::find();

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
            'id_jabatan_fungsional' => $this->id_jabatan_fungsional,
        ]);

        $query->andFilterWhere(['like', 'jabatan_fungsional', $this->jabatan_fungsional]);

        return $dataProvider;
    }
}
