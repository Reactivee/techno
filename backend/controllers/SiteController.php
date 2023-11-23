<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'language'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionLanguage()
    {
        // Read language arrays from /messages
        $current1 = include Yii::getAlias('@frontend') . '/messages/uz/main.php';
        $current2 = include Yii::getAlias('@frontend') . '/messages/ru/main.php';
        $current3 = include Yii::getAlias('@frontend') . '/messages/en/main.php';
        $current4 = include Yii::getAlias('@frontend') . '/messages/tr/main.php';
        $source = include Yii::getAlias('@frontend') . '/messages/sr/main.php';

        // sort arrays by key value
        /*ksort($current1);
        ksort($current2);
        ksort($current3);
        ksort($current4);
        ksort($source);*/

        if (Yii::$app->request->post()) {

            $data1 = Yii::$app->request->post()['uz'];
            $data2 = Yii::$app->request->post()['ru'];
            $data3 = Yii::$app->request->post()['en'];
            $data4 = Yii::$app->request->post()['tr'];
//            $dif = [];
//            foreach ($source as $_key => $item) {
//                $check_dif = array_key_exists($_key, $data1);
//                if (!$check_dif) {
//                    $dif[] = $_key;
//                }
//            }
//            d($dif);
//            dd('asd');
//             Combining array values with source language values

            $data1 = array_combine($source, $data1);

            $data2 = array_combine($source, $data2);
            $data3 = array_combine($source, $data3);
            $data4 = array_combine($source, $data4);
//        dd($data1);
            // Initial part of yii.php files
            $text1 = $text2 = $text3 = $text4 = "<?php" . " return [ \n";

            // Appending array keys and values to text
            foreach ($data1 as $x => $x_value) {
                $text1 .= "    \"" . $x . "\" => \"" . $x_value . "\", \n";
            }

            foreach ($data2 as $x => $x_value2) {
                $text2 .= "    \"" . $x . "\" => \"" . $x_value2 . "\", \n";
            }
            foreach ($data3 as $x => $x_value3) {
                $text3 .= "    \"" . $x . "\" => \"" . $x_value3 . "\", \n";
            }
            foreach ($data4 as $x => $x_value4) {
                $text4 .= "    \"" . $x . "\" => \"" . $x_value4 . "\", \n";
            }

            // Writing complete array consisted text to php files
            file_put_contents(Yii::getAlias('@frontend') . "/messages/uz/main.php", $text1 . " ];");
            file_put_contents(Yii::getAlias('@frontend') . "/messages/ru/main.php", $text2 . " ];");
            file_put_contents(Yii::getAlias('@frontend') . "/messages/en/main.php", $text3 . " ];");
            file_put_contents(Yii::getAlias('@frontend') . "/messages/tr/main.php", $text4 . " ];");

            return $this->render('language', [
                'current1' => $data1,
                'current2' => $data2,
                'current3' => $data3,
                'current4' => $data4,
            ]);
        }

        return $this->render('language', [
            'current1' => $current1,
            'current2' => $current2,
            'current3' => $current3,
            'current4' => $current4,
        ]);
    }


}
