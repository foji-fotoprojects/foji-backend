<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProjectSearch represents the model behind the search form of `common\models\tables\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'duration', 'qty_photos', 'makeup', 'hairstyle', 'costume', 'accessories', 'studio', 'prepayment', 'price', 'photographer_id', 'views', 'created_at', 'updated_at', 'user_id'], 'integer'],
            [['name', 'theme', 'short_info', 'location', 'how_to_get', 'date_start', 'date_end', 'time_start', 'time_end', 'path_images', 'payment_method', 'info', 'status'], 'safe'],
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
        $query = Project::find();

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
            'id' => $this->id,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'duration' => $this->duration,
            'qty_photos' => $this->qty_photos,
            'makeup' => $this->makeup,
            'hairstyle' => $this->hairstyle,
            'costume' => $this->costume,
            'accessories' => $this->accessories,
            'studio' => $this->studio,
            'prepayment' => $this->prepayment,
            'price' => $this->price,
            'photographer_id' => $this->photographer_id,
            'views' => $this->views,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'theme', $this->theme])
            ->andFilterWhere(['like', 'short_info', $this->short_info])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'how_to_get', $this->how_to_get])
            ->andFilterWhere(['like', 'path_images', $this->path_images])
            ->andFilterWhere(['like', 'payment_method', $this->payment_method])
            ->andFilterWhere(['like', 'info', $this->info])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
