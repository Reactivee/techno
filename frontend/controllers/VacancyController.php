<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\VacancyInfo;
use yii\web\Controller;


/**
 * Site controller
 */
class VacancyController extends Controller
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
        $vacancy = VacancyInfo::find()->where(['status' => 1])->all();

        return $this->render('index', [
            'vacancy' => $vacancy
        ]);

    }


}
