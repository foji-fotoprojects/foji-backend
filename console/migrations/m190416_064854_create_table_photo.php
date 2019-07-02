<?php

use yii\db\Migration;

/**
 * Class m190416_064854_create_table_photo
 */
class m190416_064854_create_table_photo extends Migration
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

        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'image' => $this->string()->notNull(),
            'active_photo' => $this->integer(),
            'main_photo' => $this->integer(),
            'created_at' => $this->date(),

        ], $tableOptions);

        $this->addForeignKey(
            'fk-photo_project_id',
            'photo',
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

        $this->dropTable('photo');
        $this->dropForeignKey('fk-photo_project_id', 'photo');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190416_064854_create_table_photo cannot be reverted.\n";

        return false;
    }
    */
}
