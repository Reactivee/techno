<?php
/** @var yii\web\View $this */
/** @var \common\models\Advantages $advantages */
$this->title = 'Techno';
//\Yii::$app->language = 'ru-RU';

?>
<style>
    .header-area .main-nav .nav li a{
        color: white;
    }
</style>
<div style="background-image: url('<?= $main_banner->img_path ?>')" class=" main-banner wow fadeIn
     position-relative container_fluid" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="line_item line_item_right bg-white d-inline-flex liner_all_product align-items-center">
        <img style="width: 93px; height: 93px;" src="/uploads/icons/Слой_x0020_1.png" alt="asd">
        <h4 class="color_techno text-capitalize pr-5 pl-4"><a class="text-decoration-none stretched-link" href="/about">каталог
                продукции</a></h4>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="banner_text"><?= $main_banner->title_uz ?></h2>
                                    <h4 class="banner_text_sub color_white pt-4 px-0"><?= $main_banner->text_uz ?></h4>
                                </div>
                                <div class="col-lg-12">
                                    <div class="main-green-button mt-5">
                                        <a href="#contact" class="text-capitalize">о компании</a>
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


<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="advan-content">
                    <div class="card purple">
                        <h4 class="text-center mb-3 font-weight-bold">Наши преимущества</h4>
                        <ul class="p-0 m-0 advan-content_items">
                            <? foreach ($advantages as $item) { ?>
                                <li>
                                    <?= $item->title_ru ?>
                                </li>
                            <? } ?>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-9 mb-5">
                <div class="skills-content">
                    <div class="section-heading wow bounceIn animated pl-3" data-wow-duration="1s" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <h2>Мы в цифрах</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                <div class="progress" data-percentage="100">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                                    <div class="progress-value">
                                        <div>
                                            8<br>
                                            <span>Лет опыта работ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="progress" data-percentage="100">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                                    <div class="progress-value">
                                        <div>
                                            200<br>
                                            <span>Работников</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="progress" data-percentage="100">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                                    <div class="progress-value">
                                        <div>
                                            50+<br>
                                            <span>Компаний с нами сотруднияют</span>
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
</div>

<!--products-->
<div id="products" class="our-portfolio section">

    <div class="container-fluid">
        <div class="row">
            <!--            <div class="col-lg-5">-->
            <!--                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">-->
            <!--                 -->
            <!--                    <h2>Продукти</h2>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
    <div class="container wow  fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel products_owl">

                    <? foreach ($element as $item) {
                        echo \frontend\widgets\ElementWidget::widget(['products' => $item])
                        ?>
                    <? } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="formline" class="mb-3">
    <div class="middle_line bg-light py-4 w-100">
        <div class="d-flex middle_line_block justify-content-between">
            <div class="line_item line_item_left bg-white d-flex align-items-center ">
                <h4 class="pl-5 pr-4 color_techno text-capitalize">смотреть все</h4>
                <img class="" style="width: 93px; height: 93px;" src="/uploads/logo/line1.svg" alt="">
            </div>
            <div class="line_item d-flex align-items-center">
                <button class="btn btn-success ibtn_outline_yellow middle_line_button  py-3 px-3 no-border"><h3>оставить
                        заявку</h3></button>
            </div>
            <div class="line_item line_item_right bg-white d-flex align-items-center">
                <img style="width: 93px;
height: 93px;" src="/uploads/logo/line1.svg" alt="">
                <h4 class="color_techno text-capitalize pr-5 pl-4">смотреть все</h4>
            </div>
        </div>
    </div>
</div>

<!--<div class="container">-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-6">-->
<!--            <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">-->
<!--                <img src="/frontend/web/uploads/images/about-left-image.png" alt="">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">-->
<!--            <div class="section-heading">-->
<!---->
<!--                <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-sm-4">-->
<!--                    <div class="about-item">-->
<!--                        <h4>750+</h4>-->
<!--                        <h6>projects finished</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-4">-->
<!--                    <div class="about-item">-->
<!--                        <h4>340+</h4>-->
<!--                        <h6>happy clients</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-4">-->
<!--                    <div class="about-item">-->
<!--                        <h4>128+</h4>-->
<!--                        <h6>awards</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <p><a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">SEO Dream</a> is-->
<!--                free digital marketing CSS template provided by TemplateMo website. You are allowed to use this-->
<!--                template for your business websites. Please DO NOT redistribute this template ZIP file on any Free-->
<!--                CSS collection websites. You may contact us for more information. Thank you.</p>-->
<!--            <div class="main-green-button"><a href="#">Discover company</a></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--Как Мы работаем-->
<div id="services" class="our-services section position-relative">
    <div class="bg_serives_item">
        <img src="/uploads/banners/cable2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>Как Мы работаем</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <? foreach ($ad_icons as $key => $advantage) { ?>
                <div class="col-lg-3">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s"
                         data-wow-delay="<?= $key / 10 ?>s">
                        <div class="row align-content-center">
                            <div class="col-12 text-center">
                                <div class="icon mb-4">
                                    <span><?= $key + 1 ?></span>
                                    <!--                                    <img src="-->
                                    <? //= $advantage->img ?><!--" alt="">-->
                                </div>
                                <div class="right-content">
                                    <h4><?= $advantage->title_ru ?> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>
    </div>
</div>

<!--Partnyor-->
<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>Projects</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">

                    <? foreach ($catalog as $item) { ?>
                        <div class="item">
                            <div class="portfolio-item align-items-center">
                                <div class="thumb align-items-center">
                                    <img class="w-100" src=<?= $item->path ?>>
                                </div>
                            </div>
                        </div>
                    <? } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!--news -->
<div id="features" class="features section bg-light py-5 position-relative">
    <div class="bg_element">
        <img src="/uploads/banners/cable1.png" alt="asd">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-heading wow bounceIn animated" data-wow-duration="1s" data-wow-delay="0.2s"
                     style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                    <!--                    <h2>Discover What We Do &amp; <span>Offer</span> To Our <em>Clients</em></h2>-->
                    <h2>Новости</h2>
                </div>
                <div class="features-content">

                    <div class="row">
                        <? foreach ($gallery as $key => $item) { ?>
                            <div class="col-lg-3">
                                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="<?= $key / 10 ?>s">
                                    <div class="first-number number">
                                        <h6><?= $key + 1 ?></h6>
                                    </div>
                                    <img src=<?= $item->img ?>>
                                    <!--                                    <div class="icon "></div>-->
                                    <h4 class="section_text"><?= $item->title_ru ?></h4>
                                    <div class="line-dec"></div>
                                    <p class="section_text"><?= $item->title_ru ?></p>
                                </div>
                            </div>
                        <? } ?>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--<div id="contact" class="contact-us section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">-->
<!--                <form id="contact" action="" method="post">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6 offset-lg-3">-->
<!--                            <div class="section-heading">-->
<!--                                <h6>Contact Us</h6>-->
<!--                                <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-12   ">-->
<!--                            <div class="row">-->
<!--                                <div class="col-lg-6">-->
<!--                                    <fieldset>-->
<!--                                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on"-->
<!--                                               required>-->
<!--                                    </fieldset>-->
<!--                                </div>-->
<!--                                <div class="col-lg-6">-->
<!--                                    <fieldset>-->
<!--                                        <input type="surname" name="surname" id="surname" placeholder="Surname"-->
<!--                                               autocomplete="on" required>-->
<!--                                    </fieldset>-->
<!--                                </div>-->
<!--                                <div class="col-lg-6">-->
<!--                                    <fieldset>-->
<!--                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"-->
<!--                                               placeholder="Your Email" required="">-->
<!--                                    </fieldset>-->
<!--                                </div>-->
<!--                                <div class="col-lg-6">-->
<!--                                    <fieldset>-->
<!--                                        <input type="subject" name="subject" id="subject" placeholder="Subject"-->
<!--                                               autocomplete="on">-->
<!--                                    </fieldset>-->
<!--                                </div>-->
<!--                                <div class="col-lg-12">-->
<!--                                    <fieldset>-->
<!--                                        <textarea name="message" type="text" class="form-control" id="message"-->
<!--                                                  placeholder="Message" required=""></textarea>-->
<!--                                    </fieldset>-->
<!--                                </div>-->
<!--                                <div class="col-lg-12">-->
<!--                                    <fieldset>-->
<!--                                        <button type="submit" id="form-submit" class="main-button ">Send Message Now-->
<!--                                        </button>-->
<!--                                    </fieldset>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                 -->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
