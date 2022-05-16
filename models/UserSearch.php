<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'kloter', 'priode', 'nomor_hp'], 'integer'],
            [['unique_id', 'username', 'nama_awal', 'nama_akhir', 'email', 'password', 'salt', 'alamat', 'restore_id'], 'safe'],
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
        $query = User::find();

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
            'id_user' => $this->id_user,
            'kloter' => $this->kloter,
            'priode' => $this->priode,
            'nomor_hp' => $this->nomor_hp,
        ]);

        $query->andFilterWhere(['like', 'unique_id', $this->unique_id])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'nama_awal', $this->nama_awal])
            ->andFilterWhere(['like', 'nama_akhir', $this->nama_akhir])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'salt', $this->salt])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'restore_id', $this->restore_id]);

        return $dataProvider;
    }
}
