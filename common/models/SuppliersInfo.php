<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suppliers_info".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $img
 * @property string|null $icon
 * @property string|null $key
 */
class SuppliersInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suppliers_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru'], 'string'],
            [['name_uz', 'name_ru', 'name_en', 'title_ru', 'title_en', 'title_uz', 'img', 'icon', 'key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'title_uz' => 'Title Uz',
            'text_en' => 'Text En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'img' => 'Img',
            'icon' => 'Icon',
            'key' => 'Key',
        ];
    }
}
