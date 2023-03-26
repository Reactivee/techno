<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StrategicTarget $model */

$this->title = 'Update Strategic Target: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Strategic Targets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="strategic-target-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
