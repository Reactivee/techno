<?php

use common\models\Address;
use common\models\Settings;
use yii\helpers\Html;

$address = Address::find()->one();
$settings = Settings::find()->one();

?>
<footer class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 color_white">
                    <p>Copyright © 2022 Alfa Technologies, Ltd. All Rights Reserved.

<!--                        <br>Web Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a>-->
                    </p>
                </div>
            </div>
        </div>

</footer>