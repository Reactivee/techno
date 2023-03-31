<?php

use common\models\Address;
use common\models\Settings;
use yii\helpers\Html;

$address = Address::find()->one();
$settings = Settings::find()->one();

?>
<footer class="">
    <div class="container py-0 py-md-5 ">
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
                <ul class="navbar_footer">
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">ГЛАВНАЯ </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">ПРОДУКЦИЯ </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">О КОМПАНИИ </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">новости </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">портфолио </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">лаборатория </a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="contact_footer text-center">
                    <li><a class="text-decoration-none text-capitalize color_white font-weight-bold" href="#">+998(71) 209-80-00 </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white font-weight-bold" href="#">+998(71) 287-42-42 </a></li>
                    <li><a class="text-decoration-none text-capitalize color_white" href="#">Ташкентская обл.,
                            Зангиатинский район, Катартал кфи </a></li>

                </ul>
            </div>
        </div>
    </div>

</footer>