<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comprobante}}`.
 */
class m260305_204451_create_comprobante_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comprobante}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comprobante}}');
    }
}
