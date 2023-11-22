<?php

use yii\db\Migration;

/**
 * Class m231120_163852_wor_tr
 */
class m231120_163852_wor_tr extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('worth_sub', 'text_tr', $this->text());
        $this->addColumn('target', 'text_tr', $this->text());
        $this->addColumn('target', 'title_tr', $this->text());
        $this->addColumn('tasks', 'title_tr', $this->string());
        $this->addColumn('tasks', 'text_tr', $this->text());
        $this->addColumn('top_banner', 'title_tr', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231120_163852_wor_tr cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231120_163852_wor_tr cannot be reverted.\n";

        return false;
    }
    */
}
