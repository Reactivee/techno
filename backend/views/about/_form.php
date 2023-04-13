<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
$initialPreview = [];

?>

<div class="about-form">
    <?php $this->registerJs(
        "  var uploadedImages = {},  deletedFiles = [],
                    uploaded = document.getElementById('uploaded_images') 
                     deleted = document.getElementById('deleted_images')
                    "
    ) ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

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
    <!--    --><? //=
    //    $form->field($model, 'text_uz')->widget(Summernote::class, [
    //        'useKrajeePresets' => true,
    //        // other widget settings
    //    ]);
    //    ?><!--,-->
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
    <!--    --><? //= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget(FileInput::classname(), [
        'model' => $model,
        'attribute' => 'img',
        'options' => ['accept' => 'image/*',],
        'name' => 'img',
        'pluginOptions' => [
            'initialPreview' => ['' . $model->img],
            'initialPreviewAsData' => true,
            'deleteUrl' => Url::to(['delete-image', 'id' => $model->id]),
            'maxFileSize' => 4800

        ],
        'pluginEvents' => [
            'fileuploaded' => new JsExpression('function(event, data, previewId) {
                            uploadedImages[previewId] = data.response;
                            uploaded.value = JSON.stringify(uploadedImages);
                            console.log(uploadedImages)
                        }'),
            'filedeleted' => new JsExpression('function(event, key) {
             console.log(events)
                            deletedImages.push(key);
                            deleted.value = JSON.stringify(deletedImages);
                        }'),
        ]

    ]);
    ?>

    <!--    --><? //= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
