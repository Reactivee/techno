<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OurNumbers $model */

$this->title = 'Create Our Numbers';
$this->params['breadcrumbs'][] = ['label' => 'Our Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-numbers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
