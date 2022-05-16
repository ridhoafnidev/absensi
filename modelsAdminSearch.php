<?php

namespace app;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Admin;

/**
 * modelsAdminSearch represents the model behind the search form about `app\models\Admin`.
 */
class modelsAdminSearch extends Admin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_admin'], 'integer'],
            [['username', 'password', 'authkey', 'accesToken', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = Admin::find();

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
            'id_admin' => $this->id_admin,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'authkey', $this->authkey])
            ->andFilterWhere(['like', 'accesToken', $this->accesToken]);

        return $dataProvider;
    }
}
