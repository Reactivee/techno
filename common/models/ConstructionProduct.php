<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "construction_product".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property int|null $product_id
 * @property int|null $element_id
 * @property int|null $created_at
 */
class ConstructionProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'construction_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_uz', 'text_ru', 'text_tr'], 'string'],
            [['product_id', 'element_id', 'created_at'], 'integer'],
            [['title_ru', 'title_en', 'title_uz', 'title_tr'], 'string', 'max' => 255],
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
            'product_id' => 'Product ID',
            'element_id' => 'Element ID',
            'created_at' => 'Created At',
        ];
    }

    public function allProduct()
    {
        $product = Element::find()->all();
        return ArrayHelper::map($product, 'id', 'title_ru');
    }

    public function getElement()
    {
        return $this->hasOne(Element::className(), ['id' => 'product_id']);

    }
}
