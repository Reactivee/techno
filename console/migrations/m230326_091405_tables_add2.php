<?php

use yii\db\Migration;

/**
 * Class m230326_091405_tables_add2
 */
class m230326_091405_tables_add2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('worth_sub', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
        ]);
        $this->createTable('principe', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
        ]);
        $this->createTable('mission', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('target', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('strategic_target', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('advantages_factory', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('suppliers', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->text(),
            'title_en' => $this->text(),
            'title_uz' => $this->text(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('suppliers_info', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('clients', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
            'key' => $this->string(),
        ]);
        $this->createTable('suppliers_img', [
            'id' => $this->primaryKey(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
        ]);
//        $this->createTable('clients_img', [
//            'id' => $this->primaryKey(),
//            'text_en' => $this->text(),
//            'text_uz' => $this->text(),
//            'text_ru' => $this->text(),
//            'img' => $this->string(),
//            'icon' => $this->string(),
//        ]);
        $this->createTable('info_img', [
            'id' => $this->primaryKey(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'icon' => $this->string(),
        ]);
//        $this->createTable('clients', [
//            'id' => $this->primaryKey(),
//            'title_ru' => $this->string(),
//            'title_en' => $this->string(),
//            'title_uz' => $this->string(),
//            'text_en' => $this->text(),
//            'text_uz' => $this->text(),
//            'text_ru' => $this->text(),
//            'img' => $this->string(),
//            'phone' => $this->string(),
//            'email' => $this->string(),
//            'map' => $this->text(),
//        ]);
        $this->createTable('departments', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'img' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'social' => $this->string(),
        ]);
        $this->createTable('vacancy', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'created_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230326_091405_tables_add2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230326_091405_tables_add2 cannot be reverted.\n";

        return false;
    }
    */
}
