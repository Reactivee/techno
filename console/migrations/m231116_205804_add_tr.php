<?php

use yii\db\Migration;

/**
 * Class m231116_205804_add_tr
 */
class m231116_205804_add_tr extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('process', 'text_tr', $this->text());
        $this->addColumn('process', 'title_tr', $this->text());
        $this->addColumn('construction_product', 'title_tr', $this->text());
        $this->addColumn('laboratory', 'title_tr', $this->text());
        $this->addColumn('construction_product', 'text_tr', $this->text());
        $this->addColumn('laboratory', 'text_tr', $this->text());
        $this->addColumn('mission', 'text_tr', $this->text());
        $this->addColumn('mission', 'title_tr', $this->text());
        $this->addColumn('mission', 'name_tr', $this->text());
        $this->addColumn('options', 'name_tr', $this->text());
        $this->addColumn('options_to_category', 'name_tr', $this->text());
        $this->addColumn('options_value', 'name_tr', $this->text());

        $this->addColumn('our_numbers', 'title_tr', $this->text());
        $this->addColumn('our_numbers', 'text_tr', $this->text());
        $this->addColumn('posts', 'title_tr', $this->text());
        $this->addColumn('posts', 'text_tr', $this->text());
        $this->addColumn('principe', 'text_tr', $this->text());
        $this->addColumn('principe', 'title_tr', $this->text());
        $this->addColumn('principe', 'name_tr', $this->text());
        $this->addColumn('product', 'title_tr', $this->text());
        $this->addColumn('service', 'title_tr', $this->text());
        $this->addColumn('service', 'text_tr', $this->text());
        $this->addColumn('strategic_target', 'title_tr', $this->text());
        $this->addColumn('strategic_target', 'text_tr', $this->text());
        $this->addColumn('suppliers', 'text_tr', $this->text());
        $this->addColumn('suppliers', 'title_tr', $this->text());
        $this->addColumn('suppliers_info', 'title_tr', $this->text());
        $this->addColumn('suppliers_info', 'name_tr', $this->text());
        $this->addColumn('suppliers_info', 'text_tr', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231116_205804_add_tr cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231116_205804_add_tr cannot be reverted.\n";

        return false;
    }
    */
}
