<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
/** @var \common\models\Process $process */
$this->title = "О Фабрике";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
$this->title = "О Нас";
//$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

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
                                    <h2 class="main_header_text">МИССИЯ</h2>
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
    <div class="ribbon_main">
        <img src="/uploads/banners/ribbon.png" alt="">
    </div>
</div>
<section class="about">
    <div class="mission mt-5 py-5">
        <div class="main_title text-center my-4">
            <span>Миссия СП ООО "Techno Cable Group</span>
        </div>
        <div class="container">
            <div class="mission_block text-center">
                <? foreach ($mission as $item) { ?>
                    <div class="mission_block_item mb-3">
                        <div class="mission_block_title font-weight-bold text-uppercase color_techno mb-3">
                            <?= $item->icon ?>
                            <span><?= $item->title_ru ?></span>
                        </div>
                        <div class="mission_block_text">
                            <span><?= $item->text_ru ?></span>
                        </div>
                    </div>
                <? } ?>

            </div>
        </div>
    </div>
</section>

<div class="target">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="main_title text-center my-4">
                    <span><?= $target->title_ru ?></span>
                </div>
                <div class="target_text">
                <span>
                   <?= $target->text_ru ?>
                </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main_title text-center my-4">
                    <span><?= $st->title_ru ?></span>
                </div>
                <div class="target_text">
                    <span><?= $st->text_ru ?></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main_title text-center my-4">
                    <span><?= $tasks[0]->title_ru ?></span>
                </div>
            </div>
            <? foreach ($tasks as $task) { ?>
                <div class="col-md-6">
                    <span><?= $task->text_ru ?></span>
                </div>
            <? } ?>

        </div>
    </div>
</div>


<div class="advantages">
    <div class="container pb-5">

        <div class="main_title text-center my-4">
            <span><?=$advantages[0]->title_ru?></span>
        </div>
        <? foreach ($advantages as $item) { ?>
            <div class="advantages_text">
                <?= $item->text_ru ?>
            </div>
        <? } ?>


    </div>


</div>


