<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StrategicTarget $model */

$this->title = 'Create Strategic Target';
$this->params['breadcrumbs'][] = ['label' => 'Strategic Targets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strategic-target-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
