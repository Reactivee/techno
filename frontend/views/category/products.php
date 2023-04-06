<?php /** @var \yii\debug\models\timeline\DataProvider $products */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<section id="products" class="category_product ">
    <div class="main-banner  main_product_banner  wow fadeIn position-relative" id="top" data-wow-duration="1s"
         data-wow-delay="0.5s">

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
                                                <h3>оставить
                                                    заявку</h3></button>
                                        </div>
                                        <div class="line_item  bg-white d-inline-flex align-items-center">
                                            <a href="#"><h4 class="color_techno text-capitalize pl-3 pr-3">смотреть
                                                    все</h4></a>
                                            <img style="width: 53px; height: 53px;" src="/uploads/logo/line1.svg"
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
        <div class="ribbon_main">
            <img src="/uploads/banners/ribbon.png" alt="">
        </div>
    </div>

    <section class="">
        <? $products = $products->models ?>
        <div class="container pb-5 ">
            <div class="main_title  my-4">
                <span>наша продукция</span>
            </div>
            <div class="row">
                <!--                <div class="col-md-4">-->
                <!---->
                <!--                    --><?php //echo Html::beginForm(Url::to(['product', 'slug' => $queryParams['slug']]), 'get', ['data-pjax' => true, 'id' => 'filter-form']) ?>
                <!---->
                <!--                    <div class="filter_block  p-4 position-relative">-->
                <!--                        <h4 class="font-weight-bold">Филтирь</h4>-->
                <!--                        <div class="checkbox_block mt-4">-->
                <!--                            <ul>-->
                <!--                                --><? // foreach ($category as $item) { ?>
                <!--                                    <li class="mb-2 product_category_list">-->
                <!--                                        <a href="/category/filter/--><? //= $item->slug ?><!--">-->
                <? //= $item->name_ru ?><!--</a>-->
                <!--                                    </li>-->
                <!---->
                <!--                                --><? // } ?>
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    --><?php //echo Html::endForm() ?>
                <!---->
                <!--                </div>-->

                <div class="row">
                    <? foreach ($products as $item) { ?>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div class="product_card">
                                <div class="product_card_top d-flex justify-content-between align-items-center overflow-hidden">
                                    <div class="product_title">
                                        <h4 class="font-weight-bold">
                                            <a class="title_product_filter"
                                               href="/category/view?slug= <?= $item->slug ?>"> <?= $item['title_' . Yii::$app->language] ?> </a>
                                        </h4>
                                    </div>
                                    <div class="product_img">
                                        <img class="w-100" src="<?= $item->image ?>" alt="">
                                    </div>
                                </div>
                                <div class="product_card_bottom py-4">
                                    <ul>
                                        <? foreach ($item->element as $element) { ?>
                                            <li><a class="btn_link_hover"
                                                   href="/category/view?slug=<?= $item->slug ?> "><?= $element['title_'. Yii::$app->language] ?></a>
                                            </li>
                                        <? } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>

        </div>

    </section>
</section>