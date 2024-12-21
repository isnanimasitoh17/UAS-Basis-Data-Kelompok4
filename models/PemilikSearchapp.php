<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemilik;

/**
 * PemilikSearchapp represents the model behind the search form of `app\models\Pemilik`.
 */
class PemilikSearchapp extends Pemilik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PEMILIK', 'NAMA', 'Produk_ID_PRODUK', 'Pelanggan_ID_PELANGGAN'], 'safe'],
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
        $query = Pemilik::find();

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
        $query->andFilterWhere(['like', 'ID_PEMILIK', $this->ID_PEMILIK])
            ->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'Produk_ID_PRODUK', $this->Produk_ID_PRODUK])
            ->andFilterWhere(['like', 'Pelanggan_ID_PELANGGAN', $this->Pelanggan_ID_PELANGGAN]);

        return $dataProvider;
    }
}
