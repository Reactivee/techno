<?php

use yii\db\Migration;

/**
 * Class m230413_103843_add_worth
 */
class m230413_103843_add_worth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('worth', 'title_uz', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230413_103843_add_worth cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230413_103843_add_worth cannot be reverted.\n";

        return false;
    }
    */
}
