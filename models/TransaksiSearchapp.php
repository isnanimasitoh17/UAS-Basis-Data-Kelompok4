<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Transaksi;

/**
 * TransaksiSearchapp represents the model behind the search form of `app\models\Transaksi`.
 */
class TransaksiSearchapp extends Transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_TRANSAKSI', 'ID_PELANGGAN', 'TGL_TRANSAKSI'], 'safe'],
            [['JUMLAH'], 'integer'],
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
        $query = Transaksi::find();

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
            'TGL_TRANSAKSI' => $this->TGL_TRANSAKSI,
            'JUMLAH' => $this->JUMLAH,
        ]);

        $query->andFilterWhere(['like', 'ID_TRANSAKSI', $this->ID_TRANSAKSI])
            ->andFilterWhere(['like', 'ID_PELANGGAN', $this->ID_PELANGGAN]);

        return $dataProvider;
    }
}
