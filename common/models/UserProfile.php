<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $city
 * @property string $phone
 * @property int $phone_status
 * @property string $birthday
 * @property string $info
 * @property int $sex
 * @property string $avatar_url
 * @property int $created_at
 * @property int $updated_at
 * @property int $user_id
 *
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_profile';
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
            [['phone_status', 'sex'], 'integer'],
            [['birthday'], 'safe'],
            [['info'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['firstName', 'lastName', 'city'], 'string', 'max' => 20],
            ['phone', 'match', 'pattern' => '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/', 'message' => 'Введите телефон в правильном формате'],
            [['avatar_url'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'extensions' => 'png, jpg, jpeg'],
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
            'firstName' => 'firstName',
            'lastName' => 'lastName',
            'city' => 'City',
            'phone' => 'Phone',
            'phone_status' => 'Phone Status',
            'birthday' => 'Birthday',
            'info' => 'Info',
            'sex' => 'Sex',
            'avatar_url' => 'Avatar Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\UserProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UserProfileQuery(get_called_class());
    }
}
