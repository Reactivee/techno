<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Process */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="process-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_tr')->textInput(['maxlength' => true]) ?>

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
    <?=
    $form->field($model, 'text_uz')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>
    <?=
    $form->field($model, 'text_tr')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>


<!--    --><?//= $form->field($model, 'img')->widget(FileInput::classname(), [
//        'model' => $model,
//        'attribute' => 'img',
//        'options' => ['accept' => 'image/*',],
//        'name' => 'img',
//        'pluginOptions' => [
//            'initialPreview' => ['http://zelal.loc/' . $model->img],
//            'initialPreviewAsData' => true,
//            'deleteUrl' => Url::to(['delete-image']),
//            'maxFileSize' => 4800,
//        ]
//    ]);
//    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
