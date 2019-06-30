<?php

use yii\db\Migration;

/**
 * Class m190629_134159_change_column_for_table_photo
 */
class m190629_134159_change_column_for_table_photo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('photo', 'active_photo');
        $this->dropColumn('photo', 'main_photo');

        $this->addColumn('photo', 'active_photo', $this->boolean());
        $this->addColumn('photo', 'main_photo', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('photo', 'active_photo', $this->integer(11));
        $this->addColumn('photo', 'main_photo', $this->integer(11));

        $this->dropColumn('photo', 'active_photo');
        $this->dropColumn('photo', 'main_photo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }
    public function down()
    {
        echo "m190629_134159_change_column_for_table_photo cannot be reverted.\n";

        return false;
    }
    */
}
