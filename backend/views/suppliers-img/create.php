<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SuppliersImg $model */

$this->title = 'Create Suppliers Img';
$this->params['breadcrumbs'][] = ['label' => 'Suppliers Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliers-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
