<?php

use common\models\Worth;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\WorthSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Worths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worth-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Worth', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ru',
            'title_en',
            'text_en:ntext',
            'text_uz:ntext',
            //'text_ru:ntext',
            //'img',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Worth $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
