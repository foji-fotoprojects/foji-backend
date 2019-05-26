<?php

use yii\db\Migration;

/**
 * Class m190521_075029_update_tbl_user_column_status
 */
class m190521_075029_update_tbl_user_column_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->alterColumn('user', 'status', $this->tinyInteger()->defaultValue(0)->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->alterColumn('user', 'status', $this->tinyInteger());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190521_075029_update_tbl_user_column_status cannot be reverted.\n";

        return false;
    }
    */
}
