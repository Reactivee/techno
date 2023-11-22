<?php

use yii\db\Migration;

/**
 * Class m231122_145035_add_top
 */
class m231122_145035_add_top extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->addColumn('top_banner', 'title_tr', $this->text());
//        $this->addColumn('worth_sub', 'text_tr', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231122_145035_add_top cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231122_145035_add_top cannot be reverted.\n";

        return false;
    }
    */
}
