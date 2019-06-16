<?php


namespace common\models;


use common\models\tables\Project;
use yii\data\ActiveDataProvider;
use yii\validators\Validator;

class ProjectFilter extends Project
{
    const LIMIT_PROJECTS = 500;

    public $minDate;
    public $maxDate;
    public $oneDate;
    public $minPrice;
    public $maxPrice;
    public $showFinished;

    public function rules()
    {
        return [
            [['makeup', 'hairstyle', 'costume', 'accessories', 'studio', 'duration', 'minPrice', 'maxPrice', 'showFinished'], 'integer'],
            [['maxDate', 'minDate', 'oneDate'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }

    /**
     * @param array $params
     * @return array
     */
    public function filter($params)
    {
        $query = Project::find()->limit(self::LIMIT_PROJECTS);;

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                 'pageSize' => 8,
              ],
              'sort' => [
                  'defaultOrder' => [
                      'id' => SORT_ASC,
                  ]
              ],
        ]);

        if ($this->load($params) && $this->validate()) {

            $query->andFilterWhere([
                'makeup' => $this->makeup,
                'hairstyle' => $this->hairstyle,
                'costume' => $this->costume,
                'accessories' => $this->accessories,
                'studio' => $this->studio,
                'duration' => $this->duration,
            ]);

            if ($this->oneDate) {
                $query->andWhere("STR_TO_DATE('$this->oneDate', '%Y-%m-%d') BETWEEN date_start AND date_end");

            } elseif ($this->minDate && $this->maxDate) {
                $query->andWhere(['>=', 'date_end', $this->minDate])
                    ->andWhere(['<=', 'date_start', $this->maxDate]);
            }

            if ($this->maxPrice && !$this->minPrice) {
                $query->andWhere(['<=', 'price', $this->maxPrice]);

            } elseif (!$this->maxPrice && $this->minPrice) {
                $query->andWhere(['>=', 'price', $this->minPrice]);

            } elseif ($this->maxPrice && $this->minPrice) {
                $query->andWhere(['BETWEEN', 'price', $this->minPrice, $this->maxPrice]);
            }
        }

        $this->showFinished
            ? $query->andWhere(['OR', 'status', "'published'", "'finished'"])
            : $query->andWhere(['status' => 'published',]);


        return $dataProvider->getModels();
    }

    public function formName()
    {
        return '';
    }
}