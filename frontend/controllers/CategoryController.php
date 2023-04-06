<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\Catalog;
use common\models\Category;
use common\models\ConstructionProduct;
use common\models\Element;
use common\models\ElementImages;
use common\models\Materials;
use common\models\Options;
use common\models\OptionsProduct;
use common\models\OptionsToCategory;
use common\models\Product;
use common\models\Service;
use common\models\Sorts;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * Site controller
 */
class CategoryController extends Controller
{
//    /**
//     * {@inheritdoc}
//     */
//    public function behaviors()
//    {
//        //        return [
//        //            'access' => [
//        //                'class' => AccessControl::className(),
//        //                'only' => ['logout', 'signup'],
//        //                'rules' => [
//        //                    [
//        //                        'actions' => ['signup'],
//        //                        'allow' => true,
//        //                        'roles' => ['?'],
//        //                    ],
//        //                    [
//        //                        'actions' => ['logout'],
//        //                        'allow' => true,
//        //                        'roles' => ['@'],
//        //                    ],
//        //                ],
//        //            ],
//        //            'verbs' => [
//        //                'class' => VerbFilter::className(),
//        //                'actions' => [
//        //                    'logout' => ['post'],
//        //                ],
//        //            ],
//        //        ];
//    }

//    /**
//     * {@inheritdoc}
//     */
//    public function actions()
//    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//        ];
//    }

    /**
     * Displays category about.
     *
     * @return mixed
     */
    public function actionIndex($limit = null)
    {

        $limit = $limit ? $limit : 9;
        $catalog = Catalog::find()->limit($limit)->all();
        $category = Category::find()->where(['type' => 'duz'])->one();

        return $this->render('index', [
            'catalog' => $catalog,
            'category' => $category,
            'limit' => $limit
        ]);
    }


    /**
     * Displays all category .
     *
     * @return mixed
     */
    public function actionAllCategory()
    {
        $products = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $products,
        ]);
        $category = Category::find()->all();

        $dataProvider->pagination->pageSize = 20;

        return $this->render('products', [
            'products' => $dataProvider,
            'category' => $category
        ]);
    }

    /**
     * Displays all category .
     *
     * @return mixed
     */
    public function actionAllCategorySearch()
    {
        $products = Product::find();
        $sorts = Sorts::find()->where(['status' => 1])->all();

        $dataProvider = new ActiveDataProvider([
            'query' => $products,
        ]);

        return $this->render('products_filter', [
            'products' => $dataProvider,
            'sorts' => $sorts
        ]);
    }


    public function actionProduct()
    {
        $cats = Category::findOne(['slug' => $slug]);
        $sorts = Sorts::find()->where(['status' => 1])->all();
        if (!$cats) return false;
        $queryParams = Yii::$app->request->queryParams;
        $products = Product::find()->where(['category_id' => $cats->id]);

        if ($queryParams['sorts']) {
            $products = Product::find()->where(['category_id' => $cats->id])->andWhere(['type' => $queryParams['sorts']]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $products,
        ]);

        $post = \Yii::$app->request->post();

        $dataProvider->pagination->pageSize = 20;
        return $this->render('products_filter', [
            'category' => $cats,
            'products' => $dataProvider,
            'sorts' => $sorts
        ]);
    }

    public function actionView($slug)
    {

        $element = Element::find()
            ->where(['slug' => trim($slug)])
            ->one();
        if (!$element)
            throw new NotFoundHttpException();

        $cont = ConstructionProduct::find()->where(['product_id' => $element->id])->all();
        $category = Category::find()->all();
        $item_images = [];


        return $this->render('view', [
//            'item_images' => $item_images,
            'element' => $element,
            'category' => $category,
            'cont' => $cont
//            'similar_product' => $similar_element,
//            'address' => $address,


        ]);
    }

    public function actionFilter($slug)
    {


        $cats = Category::findOne(['slug' => $slug]);

        $product = Product::find()->where(['category_id' => $cats->id]);
        $allCat = Category::find()->all();

        $dataProvider = new ActiveDataProvider([
            'query' => $product,
        ]);

        $dataProvider->pagination->pageSize = 20;
        return $this->render('products', [
            'category' => $allCat,
            'products' => $dataProvider,
        ]);


    }

    public function actionService()
    {
        $service = Service::find()->one();
        return $this->render('service', [
            'service' => $service,
        ]);
    }


}
