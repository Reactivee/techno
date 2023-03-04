<?php

namespace frontend\controllers;

use common\models\About;
use common\models\AboutIn;
use common\models\AboutSet;
use common\models\Address;
use common\models\Advantages;
use common\models\AdvantagesIcons;
use common\models\Process;
use common\models\ProcessImages;
use common\models\Team;
use common\models\Worth;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class AboutController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
        $about = About::find()->limit(10)->all();
        $address = Address::find()->one();
        $advantages = Advantages::find()->all();
        $about_in = AboutIn::find()->all();
        $about_in_set = AboutSet::find()->one();
        return $this->render('index', [
            'about' => $about,
            'address' => $address,
            'advantages' => $advantages,
            'about_in' => $about_in,
            'about_in_set' => $about_in_set,
        ]);
    }

    /**
     * About page.
     *
     * @return mixed
     */
    public function actionStory()
    {
        $process = Process::find()->all();
//        dd($process);
        $ad_icons = AdvantagesIcons::find()->all();
        return $this->render('story', [
            'process' => $process,
            'ad_icons' => $ad_icons
        ]);
    }

    /**
     * About page.
     *
     * @return mixed
     */
    public function actionFactory()
    {

        $gallery = ProcessImages::find()->all();
//        $factory = Process::findOne($id);
        return $this->render('gallery', [
            'process' => $gallery,
//            'factory' => $factory
        ]);
    }

    public function actionWorth()
    {

        $team = Team::find()->all();
        $worth = Worth::find()->all();

        return $this->render('worth', [
            'team' => $team,
            'worth' => $worth
        ]);
    }

    public function actionMission()
    {
        return $this->render('mission');
    }

}
