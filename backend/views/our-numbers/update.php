<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OurNumbers $model */

$this->title = 'Update Our Numbers: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Our Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="our-numbers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
