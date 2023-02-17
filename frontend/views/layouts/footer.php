<?php

use common\models\Address;
use common\models\Settings;
use yii\helpers\Html;

$address = Address::find()->one();
$settings = Settings::find()->one();

?>
<footer class="py-3 ">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2021 SEO Dream Co., Ltd. All Rights Reserved.

                        <br>Web Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</footer>