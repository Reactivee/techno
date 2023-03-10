<?php /** @var \yii\debug\models\timeline\DataProvider $products */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<section id="products" class="category_product">
    <div class="main-banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>SEO &amp; Digital Marketing Agency</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="line_item d-flex align-items-center">
                                            <button class="btn btn-success ibtn_outline_yellow middle_line_button  py-3 px-3 no-border">
                                                <h3>оставить
                                                    заявку</h3></button>
                                        </div>
                                        <div class="line_item  bg-white d-inline-flex align-items-center">
                                            <h4 class="color_techno text-capitalize pl-3 pr-3">смотреть все</h4>
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
    </div>

    <? $products = $products->models ?>
    <div class="container mb-5">
        <div class="main_title  my-4">
            <span>наша продукция</span>
        </div>
        <div class="row">
            <div class="col-md-4">

                <?php echo Html::beginForm(Url::to(['product', 'slug' => $queryParams['slug']]), 'get', ['data-pjax' => true, 'id' => 'filter-form']) ?>

                <div class="filter_block bg_color_yel p-4 position-relative">
                    <h4 class="font-weight-bold">Филтирь</h4>
                    <div class="checkbox_block mt-4">
                        <ul>
                            <? foreach ($category as $item) {?>
                                <li><a href="/category/filter/<?= $item->slug ?>"><?= $item->name_ru ?></a></li>

                            <? } ?>
                        </ul>
                    </div>
                </div>
                <?php echo Html::endForm() ?>

            </div>
            <div class="col-md-8">
                <div class="row">
                    <? foreach ($products as $item) { ?>
                        <div class="col-md-4">
                            <div class="product_card">
                                <div class="product_card_top d-flex justify-content-between align-items-center">
                                    <div class="product_title">
                                        <h4 class="font-weight-bold">
                                            <a href="view?slug= <?= $item->slug ?>"> <?= $item->title_ru ?> </a>
                                        </h4>
                                    </div>
                                    <div class="product_img">
                                        <img class="w-100" src="<?= $item->image ?>" alt="">
                                    </div>
                                </div>
                                <div class="product_card_bottom">
                                    <ul>
                                        <? foreach ($item->element as $element) { ?>
                                            <li><a href="<?= $element->slug ?> "></a> <?= $element->title_ru ?></li>

                                        <? } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>

        </div>
    </div>

</section>