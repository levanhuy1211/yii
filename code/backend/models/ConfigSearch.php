<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Config;

/**
 * ConfigSearch represents the model behind the search form of `backend\models\Config`.
 */
class ConfigSearch extends Config
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cf_id', 'status'], 'integer'],
            [['cf_site', 'cf_phone', 'cf_email', 'cf_address', 'cf_logo1', 'cf_logo2', 'cf_logo3', 'cf_about', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description', 'created_at', 'updated_at'], 'safe'],
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
        $query = Config::find();

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
            'cf_id' => $this->cf_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'cf_site', $this->cf_site])
            ->andFilterWhere(['like', 'cf_phone', $this->cf_phone])
            ->andFilterWhere(['like', 'cf_email', $this->cf_email])
            ->andFilterWhere(['like', 'cf_address', $this->cf_address])
            ->andFilterWhere(['like', 'cf_logo1', $this->cf_logo1])
            ->andFilterWhere(['like', 'cf_logo2', $this->cf_logo2])
            ->andFilterWhere(['like', 'cf_logo3', $this->cf_logo3])
            ->andFilterWhere(['like', 'cf_about', $this->cf_about])
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
