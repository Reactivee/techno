<?php

use common\models\ConstructionProduct;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\ConstructionProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Construction Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="construction-product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Construction Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
//        dd();
                    return $model->element->product->title_ru;
                }
            ],
            [
                'attribute' => 'element_id',
                'value' => function ($model) {
                    return $model->element->title_ru;
                }
            ],

            'title_ru',
            'title_en',
            'title_uz',
            'text_en:ntext',
            'text_tr:ntext',
            //'text_uz:ntext',
            //'text_ru:ntext',
//            'product_id',

//            'element_id',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ConstructionProduct $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
