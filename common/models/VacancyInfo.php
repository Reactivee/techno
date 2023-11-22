<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vacancy_info".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $salary
 * @property string|null $experience
 * @property int|null $status
 * @property int|null $created_at
 */
class VacancyInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru', 'text_tr'], 'string'],
            [['status', 'created_at'], 'integer'],
            [['title_ru', 'title_en', 'title_uz', 'title_tr', 'salary', 'experience'], 'string', 'max' => 255],
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
            'salary' => 'Salary',
            'experience' => 'Experience',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
