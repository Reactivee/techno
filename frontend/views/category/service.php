<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

/** @var \common\models\Process $process */
$this->title = "О Фабрике";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<?php
/** @var yii\web\View $this */
$this->title = Yii::t('main', 'service');
//$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

?>
<div class=" wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/main_banner.png" alt="">
    <div class="content_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="main_header_text"><?= Yii::t('main', 'service') ?></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ribbon_main">
        <img src="/uploads/banners/ribbon.png" alt="">
    </div>
</div>


<section class="about">
    <div class=" mb-5 pb-5">
        <div class="main_title text-center my-4">
            <span><?= Yii::t('main', 'service') ?></span>
        </div>
        <div class="container">
            <div class="mission_block text-center">
                <?= $service['text_' . Yii::$app->language] ?>
            </div>
        </div>
    </div>
</section>



