<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProcessImages $model */

$this->title = 'Create Process Images';
$this->params['breadcrumbs'][] = ['label' => 'Process Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="process-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
