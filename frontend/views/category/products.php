<?php /** @var \yii\debug\models\timeline\DataProvider $products */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<section id="products" class="category_product ">
    <div class="wow fadeIn position-relative" id="top" data-wow-duration="1s"
         data-wow-delay="0.5s">
        <img class="w-100 top_banner" src="/uploads/banners/50.png" alt="">
        <div class="content_top_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                     data-wow-delay="1s">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!--                                        <h2>SEO &amp; Digital Marketing Agency</h2>-->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="line_item d-flex align-items-center">
                                                <button class="btn btn-success ibtn_outline_yellow middle_line_button  py-3 px-3 no-border">
                                                    <h3><?= Yii::t('main', 'application') ?></h3></button>
                                            </div>
                                            <div class="line_item  bg-white d-inline-flex align-items-center">
                                                <a href="/frontend/web/catalog.pdf"><h4
                                                            class="color_techno text-capitalize pl-3 pr-3"><?= Yii::t('main', 'catalog') ?></h4>
                                                </a>
                                                <img class="logo_down" src="/uploads/logo/line1.svg"
                                                     alt="">
                                            </div>
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

    <section class="">
        <? $products = $products->models ?>
        <div class="container pb-5 ">
            <div class="main_title  my-4">
                <span><?= Yii::t('main', 'our_product') ?></span>
            </div>
            <div class="row">

                <? foreach ($products as $item) {

                    if ($item->element) { ?>
                        <div class="col-md-4 mt-4 mt-md-4 p-0 p-md-3">
                            <div class="product_card">

                                <div class="product_card_top d-flex justify-content-between align-items-end overflow-hidden">
                                    <div class="product_title mb-3 col-md-8">
                                        <h4 class="font-weight-bold">
                                            <a class="title_product_filter"
                                               href="/category/view?slug=<?= $item->element[0]->slug ?>"> <?= $item['title_' . Yii::$app->language] ?> </a>
                                        </h4>
                                    </div>
                                    <div class="product_img col-md-4">
                                        <img class="w-100" src="<?= $item->image ?>" alt="">
                                    </div>
                                </div>

                                <div class="product_card_bottom py-4">

                                    <div class="row">
                                        <? foreach ($item->element as $element) { ?>
                                            <div class="col-md-6">
                                                <a class="btn_link_hover"
                                                   href="/category/view?slug=<?= $element->slug ?> ">
                                                    <?= $element['short_title_' . Yii::$app->language] ?>
                                                </a>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? }
                }
                ?>

            </div>

        </div>

    </section>
</section>