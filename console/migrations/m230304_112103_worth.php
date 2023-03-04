<?php

use yii\db\Migration;

/**
 * Class m230304_112103_worth
 */
class m230304_112103_worth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('worth', [
            'id' => $this->primaryKey(),
//            'name' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
//            'facebook' => $this->string(),
//            'tg' => $this->string(),
//            'instagram' => $this->string(),
            'img' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230304_112103_worth cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230304_112103_worth cannot be reverted.\n";

        return false;
    }
    */
}
