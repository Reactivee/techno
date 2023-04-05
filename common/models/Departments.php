<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $img
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $social
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru'], 'string'],
            [['title_ru', 'title_en', 'title_uz', 'img', 'phone', 'email', 'social'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'title_uz' => 'Title Uz',
            'text_en' => 'Text En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'img' => 'Img',
            'phone' => 'Phone',
            'email' => 'Email',
            'social' => 'Social',
        ];
    }
}
