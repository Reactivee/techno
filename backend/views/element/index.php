<?php

use common\models\Element;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ElementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Elements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="element-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create element', ['create'], ['class' => 'btn btn-success']) ?>
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
                    return $model->product->title_en;
                }

            ],

            'title_ru',
            'title_uz',
            'title_tr',
            'desc_en:ntext',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                    $url = Html::img($model->image->path,['style'=>'width:100px']);
                    return $url;
                }
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Element $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
