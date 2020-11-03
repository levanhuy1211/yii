<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Posts;

/**
 * PostsSearch represents the model behind the search form of `backend\models\Posts`.
 */
class PostsSearch extends Posts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'status'], 'integer'],
            [['post_name', 'post_slug', 'post_content', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description', 'created_at', 'updated_at'], 'safe'],
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
        $query = Posts::find();

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
            'post_id' => $this->post_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'post_name', $this->post_name])
            ->andFilterWhere(['like', 'post_slug', $this->post_slug])
            ->andFilterWhere(['like', 'post_content', $this->post_content])
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
