<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\Clients;
use common\models\Suppliers;
use common\models\SuppliersImg;
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
        return $this->render('client', [
            'clients' => $clients
        ]);
    }

    public function actionInfo()
    {
        return $this->render('index', [

        ]);
    }

}
