<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SuppliersInfo $model */

$this->title = 'Update Suppliers Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suppliers-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
