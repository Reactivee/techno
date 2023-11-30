<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use backend\widgets\AlertGrowl;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$bundle = yiister\gentelella\assets\Asset::register($this);
\Yii::$app->language = 'ru-RU';
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?= Html::csrfMetaTags() ?>
    <title>TCG</title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .process-index {
        overflow: scroll;
    }
</style>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>">
<?php $this->beginBody(); ?>
<div class="container body">

    <div class="main_container">
        <?php echo AlertGrowl::widget() ?>
        <!--        --><?php //echo Breadcrumbs::widget([
        //            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        //        ]) ?>
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>TCG</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <!--                        <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">-->
                    </div>

                </div>
                <!-- /menu prile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "О нас", "url" => '#', "icon" => "key",
                                        "items" => [
                                            ["label" => "О компании", "url" => ["/about"]],
                                            ["label" => "История и планы развития", "url" => ["/process"]],
                                            ["label" => "Ценности ", "url" => ["/worth"]],
                                            ["label" => " Предприятия ", "url" => ["/worth-sub/index"]],
                                            ["label" => "принципы ", "url" => ["/principe"]],
                                            ["label" => "Миссия", "url" => ["/mission"]],
                                            ["label" => "Наши цели", "url" => ["/target"]],
//                                            ["label" => "Strategic ", "url" => ["/strategic-target"]],
                                            ["label" => "Для Достижения ", "url" => ["/tasks"]],
                                            ["label" => "Преимущевта ", "url" => ["/advantages-factory"]],
                                            ["label" => "Производство", "url" => ["/process-images/index"]],
                                            ["label" => "Цифри ", "url" => ["/our-numbers"]],
                                        ],

                                    ],
                                    ["label" => "Products", "url" => '#', "icon" => "shopping-cart",
                                        "items" => [
                                            ["label" => "Продукт", "url" => ["/product"]],
                                            ["label" => "Элементи", "url" => ["/element"]],
                                            ["label" => "Характеристика", "url" => ["/options"]],
                                            ["label" => "Характеристика знач", "url" => ["/options-value"]],
                                            ["label" => "Характеристика знач прод", "url" => ["/options-product"]],
                                            ["label" => "Конст продукт", "url" => ["/construction-product"]],
                                            ["label" => "Категория", "url" => ["/category"], "icon" => "folder"],
                                            ["label" => "Наши услуги", "url" => ["/service"], "icon" => "folder"],
                                        ],
                                    ],
                                    ["label" => "Партнеры", "url" => '#', "icon" => "user",
                                        "items" => [
                                            ["label" => "Поставшик", "url" => ["/suppliers"]],
                                            ["label" => "Клиенты", "url" => ["/clients"]],
                                            ["label" => "Инфо", "url" => ["/suppliers-info"]],
                                            ["label" => "Фото", "url" => ["/suppliers-img/update?id=6"]],
                                            ["label" => "Каталог", "url" => ["/catalog"]],
                                        ],

                                    ],
                                    ["label" => "Laboratory", "url" => ["/laboratory"], "icon" => "key"],
                                    ["label" => "Media", "url" => '#', "icon" => "film",
                                        "items" => [
                                            ["label" => "Gallery", "url" => ["/gallery"], "icon" => "film"],
                                            ["label" => "Videos", "url" => ["/videos"], "icon" => "youtube-play"],
                                        ],
                                    ],

                                    ["label" => "Top Banner", "url" => ["/top-banner"], "icon" => "file-image-o"],
                                    ["label" => "Преимущевта", "url" => ["/advantages"], "icon" => "th-large"],
                                    ["label" => "Преимущевта Иконс", "url" => ["/advantages-icons"], "icon" => "th"],
                                    ["label" => "Новости", "url" => ["/posts"], "icon" => "comment-o"],

                                    ["label" => "Contacts", "url" => '#', "icon" => "film",
                                        "items" => [
                                            ["label" => "Address", "url" => ["/address"], "icon" => "building"],
                                            ["label" => "Отдел", "url" => ["/departments"], "icon" => "youtube-play"],
                                        ],
                                    ],

                                    ["label" => "Вакансии", "url" => ["/vacancy-info/"], "icon" => "building"],
                                    ["label" => "Certificate", "url" => ["/certificate"], "icon" => "film"],
                                    ["label" => "Настройка", "url" => ["/settings"], "icon" => "gavel"],
                                    ["label" => "Язык", "url" => ["/site/language"], "icon" => "gavel"],
                                    ["label" => "Заявка", "url" => ["/application"], "icon" => "th-large"],
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>

                    <?php echo Html::a('  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>',
                        ['/site/logout'], ['data-method' => 'POST']) ?>


                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a>
                                </li>


                                <li>
                                    <?php echo Html::a('<i class="fa fa-sign-out"></i>' . 'Sign out',
                                        ['/site/logout'], ['data-method' => 'POST']) ?>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>
            <?php echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
            <?= $content ?>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-left">
                Elegant Technologies <a href="#" rel="nofollow" target="_blank"></a><br/>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
