<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anak;

/**
 * AnakSearch represents the model behind the search form about `app\models\Anak`.
 */
class AnakSearch extends Anak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_anak', 'id_ortu'], 'integer'],
            [['nama_lengkap', 'ttl', 'jenis_kelamin', 'no_akta_kelahiran', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = Anak::find();

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
            'id_anak' => $this->id_anak,
            'id_ortu' => $this->id_ortu,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'ttl', $this->ttl])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'no_akta_kelahiran', $this->no_akta_kelahiran]);

        return $dataProvider;
    }
}
