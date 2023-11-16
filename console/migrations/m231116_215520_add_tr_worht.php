<?php

use yii\db\Migration;

/**
 * Class m231116_215520_add_tr_worht
 */
class m231116_215520_add_tr_worht extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('worth', 'title_tr', $this->text());
        $this->addColumn('worth', 'text_tr', $this->text());
        $this->addColumn('worth_sub', 'name_tr', $this->text());
        $this->addColumn('worth_sub', 'title_tr', $this->text());
        $this->addColumn('vacancy', 'title_tr', $this->text());
        $this->addColumn('vacancy', 'text_tr', $this->text());
        $this->addColumn('vacancy_info', 'text_tr', $this->text());
        $this->addColumn('vacancy_info', 'title_tr', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231116_215520_add_tr_worht cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231116_215520_add_tr_worht cannot be reverted.\n";

        return false;
    }
    */
}
