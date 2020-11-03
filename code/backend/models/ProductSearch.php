<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form of `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_id', 'cat_id', 'type_id', 'pro_price', 'pro_old_price', 'pro_total', 'pro_location', 'status'], 'integer'],
            [['pro_name', 'pro_slug', 'pro_image1', 'pro_image2', 'pro_image3', 'pro_image4', 'pro_content', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description', 'created_at', 'updated_at'], 'safe'],
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
        $query = Product::find();

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
            'pro_id' => $this->pro_id,
            'cat_id' => $this->cat_id,
            'type_id' => $this->type_id,
            'pro_price' => $this->pro_price,
            'pro_old_price' => $this->pro_old_price,
            'pro_total' => $this->pro_total,
            'pro_location'=> $this->pro_location,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'pro_name', $this->pro_name])
            ->andFilterWhere(['like', 'pro_slug', $this->pro_slug])
            ->andFilterWhere(['like', 'pro_image1', $this->pro_image1])
            ->andFilterWhere(['like', 'pro_image2', $this->pro_image2])
            ->andFilterWhere(['like', 'pro_image3', $this->pro_image3])
            ->andFilterWhere(['like', 'pro_image4', $this->pro_image4])
            ->andFilterWhere(['like', 'pro_content', $this->pro_content])
            ->andFilterWhere(['like', 'link_face', $this->link_face])
            ->andFilterWhere(['like', 'link_shopee', $this->link_shopee])
            ->andFilterWhere(['like', 'link_larada', $this->link_larada])
            ->andFilterWhere(['like', 'link_tiki', $this->link_tiki])
            ->andFilterWhere(['like', 'link_youtube', $this->link_youtube])
            ->andFilterWhere(['like', 'link_zalo', $this->link_zalo])
            ->andFilterWhere(['like', 'SEO_title', $this->SEO_title])
            ->andFilterWhere(['like', 'SEO_description', $this->SEO_description]);

        return $dataProvider;
    }
}
