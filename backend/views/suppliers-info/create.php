<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SuppliersInfo $model */

$this->title = 'Create Suppliers Info';
$this->params['breadcrumbs'][] = ['label' => 'Suppliers Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliers-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
