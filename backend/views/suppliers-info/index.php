<?php

use common\models\SuppliersInfo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\SuppliersInfoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Suppliers Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliers-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Suppliers Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_tr',
            'name_ru',
            'name_en',
            'title_ru',
            //'title_en',
            //'title_uz',
            //'text_en:ntext',
            //'text_uz:ntext',
            //'text_ru:ntext',
            //'img',
            //'icon',
            //'key',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuppliersInfo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
