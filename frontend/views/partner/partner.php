<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = "Partner";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<div class="main-banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>SEO &amp; Digital Marketing Agency</h2>
                                </div>
                                <div class="col-lg-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="about">
    <div class="">

        <div class="container">
            <div class="main_title  my-4">
                <span>Поставщики</span>
            </div>
            <div class="row">
                <? foreach ($suppliers as $item) { ?>
                    <div class="col-md-12">
                        <div class="block_content mb-4">
                            <div class="uni_text">
                                <?= $item->text_ru?>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>


            <div class="row align-items-center ">
                <div class="col-md-3">
                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">
                </div>
                <div class="col-md-3">
                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">
                </div>
                <div class="col-md-3">
                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">
                </div>
                <div class="col-md-3">
                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">
                </div>

            </div>
        </div>
    </div>
</section>


