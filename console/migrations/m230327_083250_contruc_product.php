<?php

use yii\db\Migration;

/**
 * Class m230327_083250_contruc_product
 */
class m230327_083250_contruc_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('construction_product', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'product_id' => $this->integer(),
            'element_id' => $this->integer(),
            'created_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230327_083250_contruc_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_083250_contruc_product cannot be reverted.\n";

        return false;
    }
    */
}
