<?php

use yii\db\Migration;

/**
 * Class m230326_190320_vacancy_add
 */
class m230326_190320_vacancy_add extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vacancy_info', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'salary' => $this->string(),
            'experience' => $this->string(),
            'status' => $this->integer(),
            'created_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230326_190320_vacancy_add cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230326_190320_vacancy_add cannot be reverted.\n";

        return false;
    }
    */
}
