<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--    --><? //= $form->field($model, 'name_uz')->textInput() ?>
    <?= $form->field($model, 'option_id')->dropDownList($model->getOptionsAll()) ?>

    <?php echo $form->field($model, 'name_en')->widget(CKEditor::className(), [
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
    <?php echo $form->field($model, 'name_ru')->widget(CKEditor::className(), [
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
    <?php echo $form->field($model, 'name_uz')->widget(CKEditor::className(), [
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
    <!--    --><? //= $form->field($model, '')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, '')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
