<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "process_images".
 *
 * @property int $id
 * @property int|null $process_id
 * @property string|null $path
 */
class ProcessImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'process_images';
    }

    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['process_id'], 'integer'],
            [['path'], 'string', 'max' => 255],
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
            'process_id' => 'Process ID',
            'path' => 'Path',
        ];
    }

    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new ProcessImages();
                    $pr_iMagEs->path = $file->path;

                    $pr_iMagEs->save();
                }


            }
        }
    }
}

