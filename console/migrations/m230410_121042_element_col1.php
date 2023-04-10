<?php

use yii\db\Migration;

/**
 * Class m230410_121042_element_col1
 */
class m230410_121042_element_col1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('element', 'short_title_uz', $this->text());
        $this->addColumn('element', 'short_title_ru', $this->text());
        $this->addColumn('element', 'short_title_en', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230410_121042_element_col1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_121042_element_col1 cannot be reverted.\n";

        return false;
    }
    */
}
