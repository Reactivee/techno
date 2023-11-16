<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = Yii::t('main', 'contact');
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <img class="top_banner w-100" src="/uploads/banners/contacts.png" alt="">
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
                                        <h2 class="main_header_text text-uppercase"><?= Yii::t('main', 'contact') ?></h2>
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

<section class="about">
    <div class="">

        <div class="container">
            <div class="main_title mx-0 my-4">
                <span><?= Yii::t('main', 'company') ?></span>
            </div>
            <div class="row block_vacancy flex-column py-4">
                <div class="address_text">
                    <span class="address_title color_techno font-weight-bold"><?= Yii::t('main', 'address') ?>:</span>
                    <span class="address_content font-weight-bold"><?= $address['address_' . Yii::$app->language] ?></span>
                </div>
                <div class="address_text mt-4">
                    <span class="address_phone color_techno font-weight-bold"><?= Yii::t('main', 'phone') ?> :</span>
                    <span class="address_phone_text font-weight-bold"><?= $address->phone ?></span>
                </div>
                <div class="address_text mt-2 mb-2">
                    <span class="address_phone color_techno font-weight-bold">E-mail:</span>
                    <span class="address_phone_text font-weight-bold"><?= $address->email ?></span>
                </div>
                <div class="map">
                    <iframe style="width: 100%; height: 400px"
                            src="https://maps.google.com/maps?t=m&output=embed&iwloc=near&z=12&q=Techno+Cabel+Group@41.26652482973896,69.13118162610023"
                            frameborder="0"></iframe>
                </div>
                <div class="main_title  my-4">
                    <span><?= Yii::t('main', 'partly') ?>  </span>
                </div>
                <? foreach ($departs as $depart) { ?>
                    <div class="address_text mt-1">
                        <span class="address_phone color_techno font-weight-bold"> <?= $depart['title_' . Yii::$app->language] ?>:</span>
                        <span class="address_phone"><?= Yii::t('main', 'phone') ?></span>
                        <span class="address_phone_text font-weight-bold"><?= $depart['phone'] ?></span>
                        <span class="address_phone ">E-mail</span>
                        <span class="address_phone_text font-weight-bold"><?= $depart['email'] ?></span>
                    </div>
                <? } ?>

            </div>
        </div>
    </div>
</section>


