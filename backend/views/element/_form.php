<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Element */
/* @var $form yii\widgets\ActiveForm */

$initialPreviewConfig = [];
$initialPreview = [];
$prod_img = \common\models\ElementImages::find()
    ->select(['path', 'name'])
    ->where(['element_id' => $model->id])
    ->asArray()
    ->all();
foreach ($prod_img as $image) {
    array_push($initialPreview, '/frontend/web' . $image['path']);
    array_push($initialPreviewConfig, ['key' => $image['name']]);

}
$elements = \common\models\Element::findOne(['fat_element_id' => $model->id]);

?>

<div class="element-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->dropDownList($model->getProducts())->label('Product Name') ?>

    <!--        --><? //= $form->field($model, 'fat_element_id')->dropDownList($model->getElements(), ['prompt' => 'Select Element'])->label('Element Name (NOT MUST IF THIS FATHER)') ?>

    <!--    --><? // } ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_tr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_title_ru')->textInput(['maxlength' => true])->label('Кароткое имя ru') ?>

    <?= $form->field($model, 'short_title_uz')->textInput(['maxlength' => true])->label('Кароткое имя uz') ?>

    <?= $form->field($model, 'short_title_en')->textInput(['maxlength' => true])->label('Кароткое имя en') ?>
    <?= $form->field($model, 'short_title_tr')->textInput(['maxlength' => true])->label('Кароткое имя en') ?>

    <?=
    $form->field($model, 'desc_en')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>
    <?=
    $form->field($model, 'desc_ru')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>
    <?=
    $form->field($model, 'desc_tr')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>

    <!--    --><?php //echo $form->field($model, 'desc_uz')->widget(CKEditor::className(), [
    //        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions(
    //            ['elfinder', 'path' => '/'],
    //            [
    //                'allowedContent' => true,
    //                'height' => 400,
    //                'toolbarGroups' => [
    //                    'mode', 'undo', 'selection',
    //                    ['name' => 'clipboard', 'groups' => ['clipboard', 'doctools', 'cleanup']],
    //                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors']],
    //                    ['name' => 'paragraph', 'groups' => ['align', 'templates', 'list', 'indent']],
    //                    'styles', 'insert', 'blocks', 'links', 'find', 'tools', 'about',
    //                ]
    //            ]
    //        ),
    //    ]) ?>

    <?php echo $form->field($model, 'uploaded_images')->hiddenInput(['id' => 'uploaded_images'])->label(false) ?>
    <?php $this->registerJs(
        "  var uploadedImages = {},  deletedFiles = [],
                    uploaded = document.getElementById('uploaded_images') 
                     deleted = document.getElementById('deleted_images')
                    "
    ) ?>
    <?=


    FileInput::widget([
        'name' => 'image',
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

    <!--    --><? //= $form->field($model, 'slug')->textInput(['maxlength' => true, 'disabled' => 'disabled']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
