<?php

namespace common\models\tables;

use Yii;
use common\models\tables\Project;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;


/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $project_id
 * @property string $image
 * @property int $active_photo
 * @property int $main_photo
 * @property string $created_at
 * @property string $updated_at
 *

 */
class Photo extends ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'project_id'], 'required'],
            [['project_id'], 'integer'],
            [['active_photo', 'main_photo'], 'boolean'],
            [['created_at', 'updated_at'], 'safe'],
            [['imageFile'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['image'], 'string'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'image' => 'Image',
            'active_photo' => 'Active Photo',
            'main_photo' => 'Main Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
     * {@inheritdoc}
     * @return \common\models\query\PhotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PhotoQuery(get_called_class());
    }

}
