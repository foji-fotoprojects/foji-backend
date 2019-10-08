<?php

use yii\db\Migration;

/**
 * Class m190316_121834_create_table_project
 */
class m190316_121834_create_table_project extends Migration
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

        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'theme' => $this->string()->notNull(),
            'short_info' => $this->string(),
            'location' => $this->string()->notNull(),
            'how_to_get' => $this->string(),
            'date_start' => $this->date()->notNull(),
            'date_end' => $this->date()->notNull(),
            'time_start' => $this->time()->notNull(),
            'time_end' => $this->time()->notNull(),
            'duration' => $this->smallInteger()->notNull(),
            'qty_photos' => $this->smallInteger()->notNull(),
            'path_images' => $this->string(),
            'makeup' => $this->tinyInteger(),
            'hairstyle' => $this->tinyInteger(),
            'costume' => $this->tinyInteger(),
            'prepayment' => $this->smallInteger(),
            'price' => $this->smallInteger()->notNull(),
            'payment_method' => $this->string(),
            'info' => $this->text(),
            'photographer_id' => $this->integer(),
            'views' => $this->integer(),
            'status' => 'ENUM("moderation", "correction", "published", "finished")NOT NULL DEFAULT "moderation"',
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'user_id' => $this->integer()->notNull()
        ], $tableOptions);

        $this->createIndex(
            'idx-user-id__project-usr_id',
            'project',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user-id__project-usr_id',
            'project',
            'user_id',
            'user',
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
        $this->dropForeignKey('fk-user-id__project-usr_id', 'project');
        $this->dropIndex('idx-user-id__project-usr_id', 'project');
        $this->dropTable('project');

        return true;
    }
}
