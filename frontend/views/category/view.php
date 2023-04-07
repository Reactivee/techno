<?php
/** @var \common\models\Product $similar_product */

/** @var \common\models\Element $element */

use yii\widgets\Pjax;

//$images = $element->images;
$slug = trim(Yii::$app->request->queryParams['slug']);
?>
    <div class="main-banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-9 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="main_header_text text-uppercase"> <?= $element->product->category['name_' . Yii::$app->language] ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php Pjax::begin(['id' => 'countries']) ?>
    <div class="view_wrapper pb-5">
        <div class="container">

            <div class="view_block">
                <div class="main_title mb-5">
                    <span>   <?= $element->product->category['name_' . Yii::$app->language] ?></span>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="product_card">
                            <div class="product_card_top mb-3 d-flex justify-content-start ">

                                <div class="product_img_view">
                                    <img class="w-100" src="<?= $element->image->path ?>" alt="">
                                </div>
                            </div>
                            <div class="product_card_bottom">
                                <ul>
                                    <? foreach ($element->product->element as $item) { ?>
                                        <li><a href="?slug=<?= $item->slug ?>"
                                               class="<?= $item->slug == $slug ? 'color_techno' : 'no' ?>"> <?= $item['title_' . Yii::$app->language] ?></a>
                                        </li>
                                    <? } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-8 pl-5">
                        <div class="product_title">
                            <div class="main_title  my-4">
                                <span>   <?= $element->product['title_' . Yii::$app->language] ?></span>
                            </div>
                        </div>
                          <div class="element_title">
                              <span class=""><?= $element['title_' . Yii::$app->language] ?></span>
                          </div>
                        <div class="row element_options_list">
                            <?
                            foreach ($element->option as $option) { ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="font-weight-bold text-center option_name"><?= $option->options['name_' . Yii::$app->language] ?></h4>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="option_value"><?= $option->value['name_' . Yii::$app->language] ?></p>
                                    </div>
                                </div>
                            <? } ?>

                        </div>

                    </div>


                </div>
                <? if ($element['desc_' . Yii::$app->language]) { ?>
                    <div class="element_desc  ">
                        <h4 class="title_desc mt-5 mb-3 font-weight-bold text-center color_white">Указания по
                            эксплуатации</h4>
                        <div class="content_desc color_white ">
                            <?= $element['desc_' . Yii::$app->language] ?>
                        </div>
                    </div>
                <? } ?>
                <? if ($cont) { ?>

                    <div class="construction mt-4">
                        <div class="const_main_title text-center mb-4">
                            <h4 class="color_white font-weight-bold ">
                                Конструкция</h4>
                        </div>
                        <div class="row ">
                            <? foreach ($cont as $item) { ?>
                                <div class="col-md-2 mb-4">
                                    <div class="construction_items h-100 card text-center p-2">
                                        <div class="const_title">
                                            <h5 class="font-weight-bold ">     <?= $item['title_' . Yii::$app->language] ?></h5>
                                        </div>
                                        <div class="const_content mt-2">
                                            <?= $item['text_' . Yii::$app->language] ?>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>

                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
<?php Pjax::end() ?>
<? // echo \frontend\widgets\RequestWidget::widget([
//    'address' => $address
//]); ?>