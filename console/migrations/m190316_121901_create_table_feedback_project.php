<?php

use yii\db\Migration;

/**
 * Class m190316_121901_create_table_feedback_project
 */
class m190316_121901_create_table_feedback_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('project_feedback', [
            'id' => $this->primaryKey(),
            'rate' => $this->smallInteger()->notNull(),
            'comment' => $this->text(),
            'created_at' => $this->timestamp(),
            'project_id' => $this->integer()->notNull(),
            'user_id' => $this->integer(),
        ], $tableOptions);

        $this->createIndex(
            'idx-project-id__project_feedback-project_id',
            'project_feedback',
            'project_id'
        );

        $this->addForeignKey(
            'fk-project-id__project_feedback-project_id',
            'project_feedback',
            'project_id',
            'project',
            'id',
            'CASCADE',
            'RESTRICT'
        );

        $this->createIndex(
            'idx-user-id__project_feedback-user_id',
            'project_feedback',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user-id__project_feedback-user_id',
            'project_feedback',
            'user_id',
            'user',
            'id',
            'SET NULL',
            'RESTRICT'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-project-id__project_feedback-project_id', 'project_feedback');
        $this->dropIndex('idx-project-id__project_feedback-project_id', 'project_feedback');
        $this->dropForeignKey('fk-user-id__project_feedback-user_id', 'project_feedback');
        $this->dropIndex('idx-user-id__project_feedback-user_id', 'project_feedback');
        $this->dropTable('project_feedback');

        return true;
    }

}
