<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media}}`.
 */
class m200314_105215_create_media_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%media}}', [
            'id' => $this->primaryKey(),
            'filename' => $this->text(),
            'filepath' => $this->text(),
            'uesr_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%media}}');
    }
}
