<?php

use yii\db\Migration;

/**
 * Class m190608_201746_create_add_to_table_photo_updated_at_column
 */
class m190608_201746_create_add_to_table_photo_updated_at_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            'photo',
            'updated_at',
            $this->date()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('photo', 'updated_at');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190608_201746_create_add_to_table_photo_updated_at_column cannot be reverted.\n";

        return false;
    }
    */
}
