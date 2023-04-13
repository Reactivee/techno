<?php

use kartik\editors\Summernote;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Worth $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="worth-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput() ?>

    <?=
    $form->field($model, 'text_uz')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>
    <?=
    $form->field($model, 'text_en')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>
    <?=
    $form->field($model, 'text_ru')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>

    <!--    --><? //= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
