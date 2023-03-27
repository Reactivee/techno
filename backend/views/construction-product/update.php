<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ConstructionProduct $model */

$this->title = 'Update Construction Product: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Construction Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="construction-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
