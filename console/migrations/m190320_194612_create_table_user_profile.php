<?php

use yii\db\Migration;

/**
 * Class m190320_194612_create_table_user_profile
 */
class m190320_194612_create_table_user_profile extends Migration
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

        $this->createTable('user_profile', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(20),
            'lastName' => $this->string(20),
            'city' => $this->string(20),
            'phone' => $this->string(20),
            'phone_status' => $this->tinyInteger()->defaultValue(0),
            'birthday' => $this->date(),
            'info' => $this->text(),
            'sex' => $this->tinyInteger(),
            'avatar_url' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex(
            'idx-user_profile-user_id-user-id',
            'user_profile',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user_profile-user_id-user-id',
            'user_profile',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-user_profile-user_id-user-id', 'user_profile');
        $this->dropIndex('idx-user_profile-user_id-user-id', 'user_profile');
        $this->dropTable('user_profile');

        return false;
    }

}
