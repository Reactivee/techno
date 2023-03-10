<?php
/** @var \common\models\Product $similar_product */

/** @var \common\models\Element $element */

use yii\widgets\Pjax;

//$images = $element->images;

?>
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
    <div class="view_wrapper pb-5">
        <div class="container">
            <!--        <div class="category__banner_breadcrumb d-flex color_gray pt-5">-->
            <!--            <a class="text-decoration-none color_black mr-2" href="/">Главная /</a>-->
            <!--            <a class="text-decoration-none color_black mx-2" href="/category/all-category">Каталог /</a>-->
            <!--            <span class="color_black">-->
            <? //= $element['title_' . Yii::$app->language] ?><!--</span>-->
            <!---->
            <!--        </div>-->
            <div class="view_block my-4">

                <div class="row">
                    <div class="col-md-4">
                        <div class="product_card">
                            <div class="product_card_top d-flex justify-content-start ">

                                <div class="product_img_view">
                                    <img class="w-100" src="<?= $element->image ?>" alt="">
                                </div>
                            </div>
                            <div class="product_card_bottom">
                                <ul>
                                    <? foreach ($element->element as $item) { ?>
                                        <!--                                    <a href=""></a>-->
                                        <li><a href="<?= $item->slug ?> "> <?= $item->title_ru ?></a></li>

                                    <? } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 pl-5">
                        <div class="product_title">
                            <div class="main_title  my-4">
                                <span><?= $element->title_ru ?></span>
                            </div>
                        </div>

                        <div class="row element_options_list">
                            <div class="col-md-3">
                                <h4 class="font-weight-bold text-center">Область применения</h4>
                            </div>
                            <div class="col-md-8">
                                <p>Для передачи и распределения электрической энергии в станционарных установках на
                                    номинальное переменное напряжение 0,66; 1 и 3 kV</p>
                            </div>
                            <div class="col-md-3">
                                <h4 class="font-weight-bold text-center">Область применения</h4>
                            </div>
                            <div class="col-md-8">
                                <p>Для передачи и распределения электрической энергии в станционарных установках на
                                    номинальное переменное напряжение 0,66; 1 и 3 kV</p>
                            </div>

                        </div>

                    </div>
                    <div class="element_desc ">
                        <h4 class="title_desc mt-5 mb-3 font-weight-bold text-center color_white" >Указания по эксплуатации</h4>
                        <div class="content_desc color_white ">Кабели предназначены для эксплуатации в электрических сетях
                            переменного
                            напряжения с заземленной или изолированной нейтралью, в которых продолжительность работы в
                            режиме однофазного короткого замыкания на землю не превышает 8 ч, а общая продолжительность
                            работы в режиме однофазного короткого замыкания на землю не превышает 125 ч за год.
                            Максимальное
                            напряжение сети, при котором допускается эксплуатация кабелей Um, равно 1,2U.
                            Кабели могут быть использованы для эксплуатации в электрических сетях постоянного
                            напряжения, не
                            превышающего 2,4 U0.
                            Кабели предназначены для эксплуатации при температуре окружающей среды от минус 50 °С до
                            плюс 50

                        </div>
                    </div>
                    <div class="construction mt-4">
                        <div class="const_main_title text-center "><h4 class="color_white font-weight-bold ">Конструкция</h4></div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="construction_items card text-center p-2">
                                    <div class="const_title">
                                        <h5 class="font-weight-bold ">Токопроводяща жила</h5>
                                    </div>
                                    <div class="const_content mt-2">
                                        Медная или алюминиевая, однопроволочная (ок) или многопроволочная (круглая "мк",
                                        секторная "мс"). 1-го или 2-го класса гибкости по ГОСТ 22483. Номинальное
                                        сечение
                                        основных жил от 1,5 до 400 mm2.
                                        Число жил от 1 до 5.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<? // echo \frontend\widgets\RequestWidget::widget([
//    'address' => $address
//]); ?>