<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Principe $model */

$this->title = 'Update Principe: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Principes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="principe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
