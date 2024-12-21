<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pelanggan;

/**
 * PelangganSearchapp represents the model behind the search form of `app\models\Pelanggan`.
 */
class PelangganSearchapp extends Pelanggan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PELANGGAN', 'KONTAK', 'NAMA_PRODUK'], 'safe'],
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
        $query = Pelanggan::find();

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
        $query->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN])
            ->andFilterWhere(['like', 'KONTAK', $this->KONTAK])
            ->andFilterWhere(['like', 'NAMA_PRODUK', $this->NAMA_PRODUK]);

        return $dataProvider;
    }
}
