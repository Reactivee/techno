<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Worth $model */

$this->title = 'Update Worth: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Worths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worth-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
