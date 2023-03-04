<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $facebook
 * @property string|null $tg
 * @property string|null $instagram
 * @property string|null $empty
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru'], 'string'],
            [['name', 'facebook', 'tg', 'instagram', 'empty'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text_en' => 'Text En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'facebook' => 'Facebook',
            'tg' => 'Tg',
            'instagram' => 'Instagram',
            'empty' => 'Empty',
        ];
    }
}
