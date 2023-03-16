<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "certificate".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $img
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Certificate extends \yii\db\ActiveRecord
{
    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['uploaded_images', 'deleted_images',], 'safe'],
            [['title_ru', 'title_uz', 'title_en', 'img'], 'string', 'max' => 255],
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
            'title_uz' => 'Title Uz',
            'title_en' => 'Title En',
            'text_en' => 'Text En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'img' => 'Img',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new Certificate();
                    $pr_iMagEs->img = $file->path;

                    $pr_iMagEs->save();
                }


            }
        }
    }
}
