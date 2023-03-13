<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "Галерея";
//$this->params['breadcrumbs'][] = Yii::t('main', 'gallery');
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
<section>

    <div class="container pb-5">
        <div class="main_title  my-4">
            <span>Информация для партнеров</span>
        </div>

        <div class="media_tab_wrapper">
            <ul class="nav d-flex  text-center align-items-center" id="myTab" role="tablist">
                <li class="nav-media  py-2" role="presentation">
                    <a class="active text-decoration-none w-100 " id="home-tab" data-toggle="tab"
                       href="#home" role="tab"
                       aria-controls="home" aria-selected="true">
                        Photo
                    </a>
                </li>
                <span class="vertical_line"></span>
                <li class="nav-media  py-2" role="presentation">
                    <a class="w-100 text-decoration-none w-100 media_link color_black" id="profile-tab"
                       data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Video</a>
                </li>
            </ul>

            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <? foreach ($dataProvider->models as $item) { ?>
                            <div class="col-md-3 mb-4">
                                <img class="w-100" src="<?= $item->img ?>" alt="">
                            </div>
                        <? } ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <? foreach ($dataProvider->models as $item) { ?>
                            <div class="col-md-3">
                                <img class="w-100" src="<?= $item->img ?>" alt="">
                            </div>
                        <? } ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>