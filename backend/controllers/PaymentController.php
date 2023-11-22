<?php

namespace backend\controllers;

use GuzzleHttp\Client;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\Response;

/**
 * Site controller
 */
class PaymentController extends Controller
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
                        'actions' => ['logout', 'index'],
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

    public function actionBalance()
    {


    }

    public function sendRequest($params = [], $resp = [])
    {
        $transaction = Yii::$app->db->beginTransaction(); // Begin the transaction

        $baseUrl = $this->config['baseUrl'];
        $merchant_id = $this->config['mchId'];
        $back_url = 'https://domain/thank-you';
        $transAmount = $params['total'] ?: 0;
        $session = Yii::$app->session;
        $post = Yii::$app->request->post();

        $result = $baseUrl . base64_encode
            ('m=' . $merchant_id . ';ac.order_id=' . $params['order_id'] . ';a=' . $transAmount * 100 . ';c=' . $back_url);

        $privateKey = 'your_private_key';
        $res = [

            "mchId" => 1,
            "currency" => "USD", //$post
            'out_trade_no' => uniqid(),
            'pay_type' => 'string', //$post
            'money' => 100.1, //$post
            'attach' => 'string', //$post
            'notify_url' => 'order-view?mchId', //$post
            'returnUrl' => $result, //$post
            'reserve1' => 'foo', //$post
            'reserve2' => 'foo', //$post
            'reserve3' => 'foo', //$post
            'userIp' => '10.10.9', //$post
            'realname' => 'string', //$post
            'phone' => 'string', //$post
            'email' => 'string', //$post

        ];
        $key = $this->generateSignature($res, $privateKey);

        $newData = [...$res, 'sign' => $key];
        $baseUrl = 'base_url';

        $client = new Client([
            'verify' => false
        ]);

        $content = $res;

        try {

            $request = $client->post($baseUrl, [
                'headers' => [
                    'Content-Type' => 'application/json;charset=utf-8',
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer token',
                ],
                'json' => $newData,
                'curl' => [
                    CURLOPT_SSL_VERIFYPEER => true,
                ]
            ]);


            $response = (array)json_decode($request->getBody()->getContents());

            if (!empty($response['code'])) {
                $session->set('service_transaction_id', $response['msg']);
                return $this->redirect(["thank-you", $response['data']]);

            } elseif (!empty($response['msg'])) {
                $session->set('error', $response['msg']);
                return $this->redirect(["thank-you", $response['data']]);

            }
            // If everything is successful, commit the transaction
            $transaction->commit();

        } catch (\Exception $e) {
            $transaction->rollBack();
            return $e;

        }

    }

    public function actionOrderView($mchId)
    {
        $transaction = Yii::$app->db->beginTransaction(); // Begin the transaction

        Yii::$app->response->format = Response::FORMAT_JSON;
//        $request = file_get_contents('php://input');
        $session = Yii::$app->session;

        $post = Yii::$app->request->post();
        if ($post) {
            $history = set_history($post, 'payme_merchant_callback');

            $collection = [
                'mchId' => 'mchId',
                'out_trade_no' => $post['out_trade_no'],
                'currency' => $post['currency'],
                'money' => $post['money'],
                'attach' => 'attach',
                'pay_money' => $post['pay_money'],
                'transaction_Id' => $post['transaction_Id'],
                'merchant_ratio' => $post['merchant_ratio'],
                'real_money' => $post['real_money'],
                'status' => $history,
            ];
            $privateKey = 'your_private_key';

            $content = $collection;
            $key = $this->generateSignature($collection, $privateKey);

            $newData = [...$collection, 'sign' => $key];

            $client = new Client([
                'verify' => false
            ]);
            try {
                $request = $client->post('baseUrl', [
                    'headers' => [
                        'Content-Type' => 'application/json;charset=utf-8',
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer token',
                    ],
                    'json' => $content,
                    'curl' => [
                        CURLOPT_SSL_VERIFYPEER => true,
                    ]
                ]);

                $response = (array)json_decode($request->getBody()->getContents());

                if (!empty($response['code'])) {

                    $transaction->commit();
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                return $e;
            }
        }


    }

    /**
     * @param $request
     * @param $response
     */
    public function setHistory($request, $method)
    {
        try {
            $user = Yii::$app->user->identity;
            $model = new RequestHistory();
            $model->method = $method;
            $model->user_id = $user['id'] ?: null;
            $model->request = json_encode($request);

            return $model->save();
        } catch (\Exception $e) {
            return $e;

        }
    }

    public function actionThankYou($request)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $request = Yii::$app->request->get();
        if ($request) {

            $url = $request['url'];
            $payUpi = $request['payUpi'];
            $transaction_Id = $request['transaction_Id'];

            return $this->redirect([$url, $payUpi, $transaction_Id]);
        }

    }

    function generateSignature($data, $privateKey)
    {
        ksort($data);
        $stringA = '';
        foreach ($data as $key => $value) {
            if ($value !== null && $value !== '') {
                $stringA .= $key . '=' . $value . '&';
            }
        }
        $stringA = rtrim($stringA, '&');

        $stringSignTemp = $stringA . '&key=' . $privateKey;

        $signValue = strtolower(md5($stringSignTemp));

        return $signValue;
    }


}
