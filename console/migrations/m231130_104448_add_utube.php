<?php

use yii\db\Migration;

/**
 * Class m231130_104448_add_utube
 */
class m231130_104448_add_utube extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('settings', 'utube', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231130_104448_add_utube cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231130_104448_add_utube cannot be reverted.\n";

        return false;
    }
    */
}
