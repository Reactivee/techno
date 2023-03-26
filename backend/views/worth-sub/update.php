<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WorthSub $model */

$this->title = 'Update Worth Sub: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Worth Subs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worth-sub-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
