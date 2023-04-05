<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProcessImages $model */

$this->title = 'Update Process Images: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Process Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="process-images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
