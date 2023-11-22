<?php

use yii\db\Migration;

/**
 * Class m231122_231035_asd
 */
class m231122_231035_asd extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('top_banner', 'title_tr', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231122_231035_asd cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231122_231035_asd cannot be reverted.\n";

        return false;
    }
    */
}
