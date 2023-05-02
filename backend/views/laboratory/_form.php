<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Laboratory $model */
/** @var yii\widgets\ActiveForm $form */

$initialPreviewConfig = [];
$initialPreview = [];
$prod_img = \common\models\LaboratoryImages::find()
    ->asArray()
    ->all();
foreach ($prod_img as $image) {
    array_push($initialPreview, '/frontend/web' . $image['img']);
    array_push($initialPreviewConfig, ['key' => $image['img']]);

}
?>

<div class="laboratory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>


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
    <?php echo $form->field($model, 'uploaded_images')->hiddenInput(['id' => 'uploaded_images'])->label(false) ?>
    <?php $this->registerJs(
        "  var uploadedImages = {},  deletedFiles = [],
                    uploaded = document.getElementById('uploaded_images') 
                     deleted = document.getElementById('deleted_images')
                    "
    ) ?>
    <?=


    FileInput::widget([
        'name' => 'img',
        'options' => [
            'accept' => 'image/*',
            'multiple' => true
        ],
        'pluginOptions' => [
            'previewFileType' => 'any',
            'uploadUrl' => Url::to(['image-upload']),
            'deleteUrl' => Url::to(['image-delete']),
            'showPreview' => true,
            'showCaption' => true,
            'showRemove' => true,
            'showUpload' => true,
            'overwriteInitial' => true,
            'maxFileSize' => 5000,
            'initialPreviewAsData' => true,
            'initialPreview' => $initialPreview,
            'initialPreviewConfig' => $initialPreviewConfig,

        ],
        'pluginEvents' => [
            'fileuploaded' => new JsExpression('function(event, data, previewId) {
                            uploadedImages[previewId] = data.response;
                            uploaded.value = JSON.stringify(uploadedImages);
                            console.log(uploadedImages)
                        }'),
            'filedeleted' => new JsExpression('function(event, key) {
                            deletedImages.push(key);
                            deleted.value = JSON.stringify(deletedImages);
                        }'),
        ]

    ]);

    ?>

<!--    --><?//= $form->field($model, 'img')->widget(FileInput::classname(), [
//        'options' => ['accept' => 'image/*'],
//    ]);

//    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
