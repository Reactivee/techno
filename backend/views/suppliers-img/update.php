<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SuppliersImg $model */

$this->title = 'Update Suppliers Img: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suppliers-img-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
