<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbPegawai;

/**
 * TbPegawaiSearch represents the model behind the search form about `app\models\TbPegawai`.
 */
class TbPegawaiSearch extends TbPegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'user_id', 'pns_nonpns_id', 'jenis_tenaga_id', 'unit_kerja_id', 'jabatan_struktural_id', 'jabatan_fungsional_id', 'pangkat_golongan_id'], 'integer'],
            [['nik', 'nip', 'nama_lengkap', 'foto', 'email', 'no_hp', 'is_active'], 'safe'],
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
        $query = TbPegawai::find();

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
            'id_pegawai' => $this->id_pegawai,
            'user_id' => $this->user_id,
            'pns_nonpns_id' => $this->pns_nonpns_id,
            'jenis_tenaga_id' => $this->jenis_tenaga_id,
            'unit_kerja_id' => $this->unit_kerja_id,
            'jabatan_struktural_id' => $this->jabatan_struktural_id,
            'jabatan_fungsional_id' => $this->jabatan_fungsional_id,
            'pangkat_golongan_id' => $this->pangkat_golongan_id,
        ]);

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'is_active', $this->is_active]);

        return $dataProvider;
    }
}
