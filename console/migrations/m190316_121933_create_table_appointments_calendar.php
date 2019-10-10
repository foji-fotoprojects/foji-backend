<?php

use yii\db\Migration;

/**
 * Class m190316_121933_create_table_appointments_calendar
 */
class m190316_121933_create_table_appointments_calendar extends Migration
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

        $this->createTable('project_calendar', [
            'id' => $this->primaryKey(),
            'date_time' => $this->dateTime(),
            'model_id' => $this->integer()->notNull(), // id записавшегося клиента
            'model_comment' => $this->string(),
            'organizer_comment' => $this->string(),
            'status' => 'ENUM("new", "accepted", "rejected") NOT NULL DEFAULT "new"',
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'project_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex(
            'idx-user-id__project_calendar-model_id',
            'project_calendar',
            'project_id'
        );

        $this->addForeignKey(
            'fk-user-id__project_calendar-model_id',
            'project_calendar',
            'model_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->createIndex(
            'idx-project-id__project_calendar-project_id',
            'project_calendar',
            'project_id'
        );

        $this->addForeignKey(
            'fk-project-id__project_calendar-project_id',
            'project_calendar',
            'project_id',
            'project',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-user-id__project_calendar-model_id', 'project_calendar');
        $this->dropIndex('idx-user-id__project_calendar-model_id', 'project_calendar');
        $this->dropForeignKey('fk-project-id__project_calendar-project_id', 'project_calendar');
        $this->dropIndex('idx-project-id__project_calendar-project_id', 'project_calendar');
        $this->dropTable('project_calendar');

        return true;
    }
}
