<?php

namespace common\models;

use yii;
use common\models\query\PhotoQuery;
use yii\web\UploadedFile;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $project_id
 * @property string $photo
 * @property int $active_photo
 * @property int $main_photo
 * @property string $created_at
 *
 * @property Project $project
 *
 */
class UploadPhoto extends ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{photo}}';
    }

    public function rules()
    {
        return [
            //[['project_id', 'photo'], 'required'],
            [['project_id', 'active_photo', 'main_photo'], 'integer'],
            [['created_at'], 'safe'],
            [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, jpeg, gif, png', 'maxFiles' => 5],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['task_id' => 'id']],

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
            'photo' => 'Photo',
            'active_photo' => 'Active Photo',
            'main_photo' => 'Main Photo',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    public function upload()
    {
        if ($this->validate()) {

            foreach ($this->image as $item) {

                $baseName = $this->image->getBaseName() . "." . $this->image->getExtension();

                $fileName = '@imgPath' . $baseName;

                $item->saveAs(Yii::getAlias($fileName));

                //$this->image->saveAs(Yii::getAlias('@imgPath') . $this->image->photo . '.' . $this->image->extension);
            }
            return true;
        } else {
            return false;
        }
    }

    /*public static function find()
    {
        return new PhotoQuery(get_called_class());
    }
    public function fields()
    {
        return ['id'];
    }*/
}