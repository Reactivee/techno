<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\Catalog;
use common\models\Certificate;
use common\models\Clients;
use common\models\Suppliers;
use common\models\SuppliersImg;
use common\models\SuppliersInfo;
use yii\web\Controller;


/**
 * Site controller
 */
class PartnerController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * About page.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $sup = Suppliers::find()->all();
        $images = SuppliersImg::find()->all();
        return $this->render('partner', [
            'suppliers' => $sup,
            'images' => $images
        ]);
    }

    public function actionClient()
    {
        $clients = Clients::find()->all();
        $catalog = Catalog::find()->orderBy(['id' => SORT_DESC])->limit(20)->all();

        return $this->render('client', [
            'clients' => $clients,
            'catalog' => $catalog
        ]);
    }

    public function actionInfo()
    {

        $info = SuppliersInfo::find()->all();
        $catalog = Catalog::find()->orderBy(['id' => SORT_DESC])->limit(20)->all();
        $certificate = Certificate::find()->all();
//        dd($certificate);
        return $this->render('index', [
            'catalog' => $catalog,
            'certificate' => $certificate,
            'info' => $info
        ]);
    }

}
