<?php

namespace common\models\tables;

use common\models\Photographer;
use common\models\ProjectCalendar;
use common\models\ProjectFeedback;
use common\models\tables\Photo;
use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $name
 * @property string $theme
 * @property string $short_info
 * @property string $location
 * @property string $how_to_get
 * @property string $date_start
 * @property string $date_end
 * @property string $time_start
 * @property string $time_end
 * @property int $duration
 * @property int $qty_photos
 * @property string $path_images
 * @property int $makeup
 * @property int $hairstyle
 * @property int $costume
 * @property int $accessories
 * @property int $studio
 * @property int $prepayment
 * @property int $price
 * @property string $payment_method
 * @property string $info
 * @property int $photographer_id
 * @property int $views
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $user_id
 *
 * @property photo[] $photos
 * @property Photographer $photographer
 * @property User $user
 * @property ProjectCalendar[] $projectCalendars
 * @property ProjectFeedback[] $projectFeedbacks
 * @property Photo $Photo
 */
class Project extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
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
           // [['name', 'theme', 'location', 'date_start', 'date_end', 'time_start', 'time_end', 'duration', 'qty_photos', 'price'], 'required'],
            [['date_start', 'date_end', 'time_start', 'time_end'], 'safe'],
            [['duration', 'qty_photos', 'makeup', 'hairstyle', 'costume', 'accessories', 'studio', 'prepayment', 'price'], 'integer'],
            [['info', 'status'], 'string'],
            [['name', 'theme', 'short_info', 'location', 'how_to_get', 'path_images', 'payment_method'], 'string', 'max' => 255],
            [['photographer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photographer::className(), 'targetAttribute' => ['photographer_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'theme' => 'Theme',
            'short_info' => 'Short Info',
            'location' => 'Location',
            'how_to_get' => 'How To Get',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'duration' => 'Duration',
            'qty_photos' => 'Qty Photos',
            'path_images' => 'Path Images',
            'makeup' => 'Makeup',
            'hairstyle' => 'Hairstyle',
            'costume' => 'Costume',
            'prepayment' => 'Prepayment',
            'price' => 'Price',
            'payment_method' => 'Payment Method',
            'info' => 'Info',
            'photographer_id' => 'Photographer ID',
            'views' => 'Views',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoto()
    {
        return $this->hasMany(UploadPhoto::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotographer()
    {
        return $this->hasOne(Photographer::className(), ['id' => 'photographer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectCalendars()
    {
        return $this->hasMany(ProjectCalendar::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectFeedbacks()
    {
        return $this->hasMany(ProjectFeedback::className(), ['project_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ProjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProjectQuery(get_called_class());
    }
}
