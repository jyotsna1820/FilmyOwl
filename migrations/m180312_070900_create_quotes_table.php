<?php

use yii\db\Migration;

/**
 * Handles the creation of table `quotes`.
 */
class m180312_070900_create_quotes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('quotes', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('quotes');
    }
}
