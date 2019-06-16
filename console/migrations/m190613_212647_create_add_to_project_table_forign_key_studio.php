<?php

use yii\db\Migration;

/**
 * Class m190613_212647_create_add_to_project_table_forign_key_studio
 */
class m190613_212647_create_add_to_project_table_forign_key_studio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-project_studio_id',
            'project',
            'studio',
            'studio',
            'name',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-project_studio_id', 'project');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190613_212647_create_add_to_project_table_forign_key_studio cannot be reverted.\n";

        return false;
    }
    */
}
