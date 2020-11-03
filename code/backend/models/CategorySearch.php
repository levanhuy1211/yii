<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Category;

/**
 * CategorySearch represents the model behind the search form of `backend\models\Category`.
 */
class CategorySearch extends Category
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'par_id', 'status'], 'integer'],
            [['cat_name', 'cat_slug', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description', 'created_at', 'updated_at'], 'safe'],
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
        $query = Category::find();

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
            'cat_id' => $this->cat_id,
            'par_id' => $this->par_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'cat_name', $this->cat_name])
            ->andFilterWhere(['like', 'cat_slug', $this->cat_slug])
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
