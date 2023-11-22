<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "laboratory_images".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $img
 */
class LaboratoryImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laboratory_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_en', 'title_uz', 'title_tr', 'img'], 'string', 'max' => 255],
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
            'img' => 'Img',
        ];
    }
}
