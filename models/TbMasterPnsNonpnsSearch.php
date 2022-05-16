<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterPnsNonpns;

/**
 * TbMasterPnsNonpnsSearch represents the model behind the search form about `app\models\TbMasterPnsNonpns`.
 */
class TbMasterPnsNonpnsSearch extends TbMasterPnsNonpns
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_master_pns_nonpns', 'pns_nonpns'], 'integer'],
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
        $query = TbMasterPnsNonpns::find();

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
            'id_master_pns_nonpns' => $this->id_master_pns_nonpns,
            'pns_nonpns' => $this->pns_nonpns,
        ]);

        return $dataProvider;
    }
}
