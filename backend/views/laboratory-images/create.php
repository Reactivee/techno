<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\LaboratoryImages $model */

$this->title = 'Create Laboratory Images';
$this->params['breadcrumbs'][] = ['label' => 'Laboratory Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laboratory-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
