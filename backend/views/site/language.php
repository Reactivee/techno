<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Sayt lug`ati:"
?>
<?php ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-9">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3"></li>
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-two-home-tab1" data-toggle="pill" href="#uzbek"
                           role="tab" aria-controls="uzbek" aria-selected="true">O'zbekcha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-two-profile-tab2" data-toggle="pill" href="#rus" role="tab"
                           aria-controls="rus" aria-selected="false">Русский</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-two-profile-tab3" data-toggle="pill" href="#eng" role="tab"
                           aria-controls="eng" aria-selected="false">Eng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-two-profile-tab4" data-toggle="pill" href="#turk" role="tab"
                           aria-controls="turk" aria-selected="false">Turk</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div style=" overflow-y: scroll; max-height: 500px;  overflow-x: hidden;" class="tab-content" id="uzbek">
                    <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel"
                         aria-labelledby="custom-tabs-two-home-tab">
                        <?php foreach ($current1 as $x => $x_value) { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="uz[<?= $x ?>]" rows="2"
                                              style="margin-bottom: 10px"><?= $x_value ?></textarea>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="rus">
                        <?php foreach ($current2 as $x => $x_value) { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="ru[<?= $x ?>]" rows="2"
                                              style="margin-bottom: 10px"><?= $x_value ?></textarea>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="eng">
                        <?php foreach ($current2 as $x => $x_value) { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="ru[<?= $x ?>]" rows="2"
                                              style="margin-bottom: 10px"><?= $x_value ?></textarea>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="turk">
                        <?php foreach ($current2 as $x => $x_value) { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="ru[<?= $x ?>]" rows="2"
                                              style="margin-bottom: 10px"><?= $x_value ?></textarea>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <?= Html::submitButton('<div class="fa fa-save"></div> Saqlash', ['class' => 'btn btn-success', 'style' => 'width:100%; height:50px; font-size:24px']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>





