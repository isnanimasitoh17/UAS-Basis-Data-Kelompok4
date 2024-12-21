<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produk;

/**
 * ProdukSearchapp represents the model behind the search form of `app\models\Produk`.
 */
class ProdukSearchapp extends Produk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PRODUK', 'NAMA_PRODUK', 'Transaksi_ID_TRANSAKSI'], 'safe'],
            [['STOK'], 'integer'],
            [['HARGA'], 'number'],
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
        $query = Produk::find();

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
            'STOK' => $this->STOK,
            'HARGA' => $this->HARGA,
        ]);

        $query->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK])
            ->andFilterWhere(['like', 'NAMA_PRODUK', $this->NAMA_PRODUK])
            ->andFilterWhere(['like', 'Transaksi_ID_TRANSAKSI', $this->Transaksi_ID_TRANSAKSI]);

        return $dataProvider;
    }
}
