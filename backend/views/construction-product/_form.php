<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ConstructionProduct $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="construction-product-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'product_id')->dropDownList($model->allProduct()) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
<!---->
    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
<!---->
    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>
<!---->
    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>


    <!--    --><? //= $form->field($model, 'element_id')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
