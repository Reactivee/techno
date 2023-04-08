<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "Галерея";
//$this->params['breadcrumbs'][] = Yii::t('main', 'gallery');
?>

<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/media.png" alt="">
    <div class="content_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-9 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="main_header_text color_techno text-uppercase">медиа галерея</h2>
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
    <div class="ribbon_main">
        <img src="/uploads/banners/ribbon.png" alt="">
    </div>
</div>
<section>

    <div class="container pb-5">
        <div class="main_title  my-4">
            <span>медиа галерея</span>
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
                        <? foreach ($dataProviderVideos->models as $item) { ?>
                            <div class="col-md-4">
                                <iframe width="100%" height="315" src="<?= $item->path ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                <!--                                <img class="w-100" src="" alt="">-->
                            </div>
                        <? } ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>