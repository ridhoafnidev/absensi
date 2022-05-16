<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterStatusAbsensi;

/**
 * TbMasterStatusAbsensiSearch represents the model behind the search form about `app\models\TbMasterStatusAbsensi`.
 */
class TbMasterStatusAbsensiSearch extends TbMasterStatusAbsensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_status_absensi'], 'integer'],
            [['status_absensi'], 'safe'],
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
        $query = TbMasterStatusAbsensi::find();

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
            'id_status_absensi' => $this->id_status_absensi,
        ]);

        $query->andFilterWhere(['like', 'status_absensi', $this->status_absensi]);

        return $dataProvider;
    }
}
