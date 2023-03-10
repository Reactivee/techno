<?php

namespace frontend\controllers;

use common\models\Address;
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

        return $this->render('partner', [

        ]);
    }

    public function actionClient()
    {
        return $this->render('client', [

        ]);
    }
    public function actionInfo()
    {
        return $this->render('index', [

        ]);
    }

}
