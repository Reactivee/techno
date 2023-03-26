<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WorthSub $model */

$this->title = 'Create Worth Sub';
$this->params['breadcrumbs'][] = ['label' => 'Worth Subs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worth-sub-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
