<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AdvantagesFactory $model */

$this->title = 'Create Advantages Factory';
$this->params['breadcrumbs'][] = ['label' => 'Advantages Factories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advantages-factory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
