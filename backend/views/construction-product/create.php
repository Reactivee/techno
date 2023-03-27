<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ConstructionProduct $model */

$this->title = 'Create Construction Product';
$this->params['breadcrumbs'][] = ['label' => 'Construction Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="construction-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
