<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbPegawai;

/**
 * TbPegawaiSearch represents the model behind the search form of `app\models\TbPegawai`.
 */
class TbPegawaiSearch extends TbPegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'user_id', 'office_id', 'pns_nonpns_id', 'jenis_tenaga_id', 'unit_kerja_id', 'jabatan_struktural_id', 'jabatan_fungsional_id', 'pangkat_golongan_id', 'is_active'], 'integer'],
            [['nik', 'nip', 'nama_lengkap', 'foto', 'email', 'no_hp', 'grade', 'tunjangan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pegawai' => $this->id_pegawai,
            'user_id' => $this->user_id,
            'office_id' => $this->office_id,
            'pns_nonpns_id' => $this->pns_nonpns_id,
            'jenis_tenaga_id' => $this->jenis_tenaga_id,
            'unit_kerja_id' => $this->unit_kerja_id,
            'jabatan_struktural_id' => $this->jabatan_struktural_id,
            'jabatan_fungsional_id' => $this->jabatan_fungsional_id,
            'pangkat_golongan_id' => $this->pangkat_golongan_id,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'tunjangan', $this->tunjangan]);

        return $dataProvider;
    }
}
