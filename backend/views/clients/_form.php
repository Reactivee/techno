<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Clients $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clients-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_tr')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'text_ru')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions(
            ['elfinder', 'path' => '/'],
            [
                'allowedContent' => true,
                'height' => 400,
                'toolbarGroups' => [
                    'mode', 'undo', 'selection',
                    ['name' => 'clipboard', 'groups' => ['clipboard', 'doctools', 'cleanup']],
                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors']],
                    ['name' => 'paragraph', 'groups' => ['align', 'templates', 'list', 'indent']],
                    'styles', 'insert', 'blocks', 'links', 'find', 'tools', 'about',
                ]
            ]
        ),
    ]) ?>
    <?php echo $form->field($model, 'text_uz')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions(
            ['elfinder', 'path' => '/'],
            [
                'allowedContent' => true,
                'height' => 400,
                'toolbarGroups' => [
                    'mode', 'undo', 'selection',
                    ['name' => 'clipboard', 'groups' => ['clipboard', 'doctools', 'cleanup']],
                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors']],
                    ['name' => 'paragraph', 'groups' => ['align', 'templates', 'list', 'indent']],
                    'styles', 'insert', 'blocks', 'links', 'find', 'tools', 'about',
                ]
            ]
        ),
    ]) ?>
    <?php echo $form->field($model, 'text_en')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions(
            ['elfinder', 'path' => '/'],
            [
                'allowedContent' => true,
                'height' => 400,
                'toolbarGroups' => [
                    'mode', 'undo', 'selection',
                    ['name' => 'clipboard', 'groups' => ['clipboard', 'doctools', 'cleanup']],
                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors']],
                    ['name' => 'paragraph', 'groups' => ['align', 'templates', 'list', 'indent']],
                    'styles', 'insert', 'blocks', 'links', 'find', 'tools', 'about',
                ]
            ]
        ),
    ]) ?>
    <?php echo $form->field($model, 'text_tr')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions(
            ['elfinder', 'path' => '/'],
            [
                'allowedContent' => true,
                'height' => 400,
                'toolbarGroups' => [
                    'mode', 'undo', 'selection',
                    ['name' => 'clipboard', 'groups' => ['clipboard', 'doctools', 'cleanup']],
                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors']],
                    ['name' => 'paragraph', 'groups' => ['align', 'templates', 'list', 'indent']],
                    'styles', 'insert', 'blocks', 'links', 'find', 'tools', 'about',
                ]
            ]
        ),
    ]) ?>
<!--    --><?//= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
