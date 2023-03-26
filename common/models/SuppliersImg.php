<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suppliers_img".
 *
 * @property int $id
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $img
 * @property string|null $icon
 */
class SuppliersImg extends \yii\db\ActiveRecord
{

    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suppliers_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru'], 'string'],
            [['img', 'icon'], 'string', 'max' => 255],
            [['uploaded_images', 'deleted_images',], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_en' => 'Text En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'img' => 'Img',
            'icon' => 'Icon',
        ];
    }
    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new Gallery();
                    $pr_iMagEs->img = $file->path;

                    $pr_iMagEs->save();
                }


            }
        }
    }
}
