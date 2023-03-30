<?php
/** @var yii\web\View $this */
/** @var \common\models\Process $process */
$this->title = "Галерея";
//$this->params['breadcrumbs'][] = $this->title;

?>

<div class="main-banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-9 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="main_header_text
">ПРОИЗВОДСТВО</h2>
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

<section>
    <div class="container">
        <div class="main_title">
            <span>ПРОИЗВОДСТВО</span>
        </div>

        <div class="tab-content mt-4" id="myTabContent">

            <div class="row">
                <?
                foreach ($process as $item) { ?>
                    <div class="col-md-4 col-6 my-2">
                        <a data-lightbox="example-set"
                           class="demo"
                           href="/frontend/web<?= $item->path ?>">
                            <img class="w-100" src="/frontend/web<?= $item->path ?>" alt="<?= $item->path ?>">
                        </a>
                    </div>
                <? } ?>
            </div>

        </div>

    </div>


</section>