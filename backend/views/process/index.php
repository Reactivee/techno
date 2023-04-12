<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProcessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Processes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="process-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Process', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => ActionColumn::className(),

            ],

            'title_uz',
            'title_ru',
            'title_en',
            [
                'attribute' =>   'text_en',
                'format' => "html",
                'value' => function ($model) {
                    return $model->text_en;
                }
            ],
//            [
//                'attribute' => 'img',
//                'format' => "raw",
//                'value' => function ($model) {
//                    return Html::img($model->img, ['width' => '100px']);
//                }
//            ],

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
