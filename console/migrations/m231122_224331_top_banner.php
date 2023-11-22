<?php

use yii\db\Migration;

/**
 * Class m231122_224331_top_banner
 */
class m231122_224331_top_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('top_banner', 'text_tr', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231122_224331_top_banner cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231122_224331_top_banner cannot be reverted.\n";

        return false;
    }
    */
}
