<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Restok;

/**
 * RestokSearchapp represents the model behind the search form of `app\models\Restok`.
 */
class RestokSearchapp extends Restok
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_RESTOK', 'ID_PRODUK', 'TGL_RESTOK'], 'safe'],
            [['JML_RESTOK'], 'integer'],
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
        $query = Restok::find();

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
            'TGL_RESTOK' => $this->TGL_RESTOK,
            'JML_RESTOK' => $this->JML_RESTOK,
        ]);

        $query->andFilterWhere(['like', 'ID_RESTOK', $this->ID_RESTOK])
            ->andFilterWhere(['like', 'ID_PRODUK', $this->ID_PRODUK]);

        return $dataProvider;
    }
}
