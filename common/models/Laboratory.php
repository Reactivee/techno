<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "laboratory".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $img
 */
class Laboratory extends \yii\db\ActiveRecord
{
    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laboratory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru'], 'safe'],
            [['uploaded_images', 'deleted_images','title_ru', 'title_en', 'title_uz', 'img'], 'safe']
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
        ];
    }

    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new LaboratoryImages();
                    $pr_iMagEs->img = $file->path;

                    $pr_iMagEs->save();
                }


            }
        }
    }
}
