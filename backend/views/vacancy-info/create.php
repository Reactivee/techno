<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\VacancyInfo $model */

$this->title = 'Create Vacancy Info';
$this->params['breadcrumbs'][] = ['label' => 'Vacancy Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
