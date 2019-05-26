<?php

use yii\db\Migration;

/**
 * Class m190526_095923_create_add_to_tbl_user_column_created_at_updated_at_email_confirm_token
 */
class m190526_095923_create_add_to_tbl_user_column_created_at_updated_at_email_confirm_token extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            'user',
            'created_at',
            $this->Integer()->notNull()
        );

        $this->addColumn(
            'user',
            'updated_at',
            $this->Integer()->notNull()
        );

        $this->addColumn(
            'user',
            'email_confirm_token',
            $this->string()
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'created_at');
        $this->dropColumn('user', 'updated_at');
        $this->dropColumn('user', 'email_confirm_token');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190526_095923_create_add_to_tbl_user_column_created_at_updated_at_email_confirm_token cannot be reverted.\n";

        return false;
    }
    */
}
