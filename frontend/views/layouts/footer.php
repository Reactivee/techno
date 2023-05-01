<?php

use common\models\Address;
use common\models\Settings;
use yii\helpers\Html;

$address = Address::find()->one();
$settings = Settings::find()->one();

?>
<footer class="mb-0 pb-0">
    <img class="w-100 footer_back parti" src="/uploads/banners/footer_1.png" alt="">
    <img class="w-100 footer_back parti2" src="/uploads/banners/footer_back.png" alt="">
    <div class="container  footer_content py-0 py-md-5 ">
        <div class="row align-items-center" >
            <div class="col-md-3 color_white">
                <a href="/" class="logo">
                    <img  class="w-100" src="/uploads/logo/footer.svg" alt="asd">
                </a>
                <!--                    <p>Copyright © 2022 Alfa Technologies, Ltd. All Rights Reserved.-->
                <!---->
                <!--                    </p>-->
            </div>
            <div class="col-md-6">
                <ul class="navbar_footer text-uppercase">
                    <li><a class="text-decoration-none  color_white text-uppercase" href="#"><?= Yii::t('main', 'about') ?> </a></li>
                    <li><a class="text-decoration-none  color_white text-uppercase" href="#"><?= Yii::t('main', 'product') ?> </a></li>
                    <li><a class="text-decoration-none  color_white text-uppercase" href="#"><?= Yii::t('main', 'company') ?></a></li>
                    <li><a class="text-decoration-none  color_white text-uppercase" href="#"><?= Yii::t('main', 'news') ?> </a></li>
                    <li><a class="text-decoration-none  color_white text-uppercase" href="#"><?= Yii::t('main', 'clients') ?> </a></li>
                    <li><a class="text-decoration-none  color_white text-uppercase" href="#"><?= Yii::t('main', 'laboratory') ?> </a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="contact_footer text-center">
                    <li><a class="text-decoration-none text-capitalize color_white font-weight-bold" href="#"><?= $address->phone ?> </a></li>
<!--                    <li><a class="text-decoration-none text-capitalize color_white font-weight-bold" href="#">+998(71) 287-42-42 </a></li>-->
                    <li><a class="text-decoration-none text-capitalize color_white mt-4" href="#"><?= $address['address_' . Yii::$app->language] ?></a></li>

                </ul>
            </div>
        </div>
    </div>

</footer>