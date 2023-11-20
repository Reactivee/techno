<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Mission $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'text_tr')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
