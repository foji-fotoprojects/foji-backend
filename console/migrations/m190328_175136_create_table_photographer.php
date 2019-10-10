<?php

use yii\db\Migration;

/**
 * Class m190328_175136_create_table_photographer
 */
class m190328_175136_create_table_photographer extends Migration
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

        $this->createTable('photographer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'info' => $this->text(),
        ], $tableOptions);

        $this->createIndex(
            'idx-photographer-id__project-photographer_id',
            'project',
            'photographer_id'
        );

        $this->addForeignKey(
            'fk-photographer-id__project-photographer_id',
            'project',
            'photographer_id',
            'photographer',
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
        $this->dropForeignKey('fk-photographer-id__project-photographer_id', 'project');
        $this->dropIndex('idx-photographer-id__project-photographer_id', 'project');
        $this->dropTable('photographer');
    }
}
