<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Worth $model */

$this->title = 'Create Worth';
$this->params['breadcrumbs'][] = ['label' => 'Worths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worth-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
