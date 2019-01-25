<?php

use yii\db\Migration;

/**
 * Class m190125_130704_buttons_table
 */
class m190125_130704_buttons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('button', [
            'id' => Schema::TYPE_PK,
            'type' => Schema::TYPE_INTEGER,
            'value' => Schema::TYPE_TEXT . ' NOT NULL',
            'secretValue' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('button');
        return false;
    }

}
