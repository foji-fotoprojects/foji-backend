<?php

namespace common\models;


use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "project_calendar".
 *
 * @property int $id
 * @property string $date_time
 * @property int $model_id
 * @property string $model_comment
 * @property string $organizer_comment
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $project_id
 *
 * @property Project $project
 * @property User $model
 */
class ProjectCalendar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_calendar';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_time'], 'safe'],
            [['model_id', 'project_id'], 'required'],
            [['model_id', 'created_at', 'updated_at', 'project_id'], 'integer'],
            [['status'], 'string'],
            [['model_comment', 'organizer_comment'], 'string', 'max' => 255],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['model_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['model_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_time' => 'Date Time',
            'model_id' => 'Model ID',
            'model_comment' => 'Model Comment',
            'organizer_comment' => 'Organizer Comment',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(User::className(), ['id' => 'model_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ProjectCalendarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProjectCalendarQuery(get_called_class());
    }
}
