<?php

use yii\db\Migration;

/**
 * Class m230304_111533_team
 */
class m230304_111533_team extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
//            'title_ru' => $this->string(),
//            'title_en' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'facebook' => $this->string(),
//            'img' => $this->string(),
            'tg' => $this->string(),
            'instagram' => $this->string(),
            'empty' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230304_111533_team cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230304_111533_team cannot be reverted.\n";

        return false;
    }
    */
}
