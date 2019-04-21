<?php
/**
 * Created by IntelliJ IDEA.
 * User: Администратор
 * Date: 17.04.2019
 * Time: 11:53
 */

namespace common\models\query;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[\common\models\Photo]].
 *
 * @see \common\models\Photo
 */

class PhotoQuery extends ActiveQuery
{
    public function immediate()
    {
        return $this->select([
            'id',
            'project_id',
            'photo',
            'active_photo',
            'main_photo',
            'created_at',
        ])
            ->where('created_at >= now()')
            ->orderBy('created_at')
            ->all();
    }

    public function photo($db = null)
    {
        return parent::all($db);
    }
    /**
     * {@inheritdoc}
     * @return \common\models\Photo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }
    /**
     * {@inheritdoc}
     * @return \common\models\Photo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

}