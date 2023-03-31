<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Laboratory $model */

$this->title = 'Update Laboratory: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Laboratories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laboratory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
