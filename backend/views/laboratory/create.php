<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Laboratory $model */

$this->title = 'Create Laboratory';
$this->params['breadcrumbs'][] = ['label' => 'Laboratories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laboratory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
