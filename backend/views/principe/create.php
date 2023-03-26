<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Principe $model */

$this->title = 'Create Principe';
$this->params['breadcrumbs'][] = ['label' => 'Principes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="principe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
