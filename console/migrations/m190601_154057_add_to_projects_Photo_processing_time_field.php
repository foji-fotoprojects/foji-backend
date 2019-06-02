<?php

use yii\db\Migration;

/**
 * Class m190601_154057_add_to_projects_Photo_processing_time_field
 */
class m190601_154057_add_to_projects_Photo_processing_time_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            'project',
            'processing_time',
            $this->smallInteger()->after('duration')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('project','processing_time');

        return true;
    }
}
