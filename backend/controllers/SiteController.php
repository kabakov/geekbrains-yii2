<?php
namespace backend\controllers;

use common\models\Tweets;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

    public $layout = 'blog-main.php';

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
                    [
                        'actions' => ['add-tweet'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['add-tweet-time'],
                        'allow' => true,
                        'roles' => ['?'],
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
     * @inheritdoc
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

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
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

    /**
     * @return Action
     */
    public function actionAddTweet()
    {
        $tweet = new Tweets();

        $post = Yii::$app->request->post("Tweets");
        if(count($post))
        {
            $tweet->text = $post['text'];
            $tweet->image = $post['image'];

            if($tweet->save()) {
                $tweet = new Tweets();
            }
        }

        return $this->render('add-tweet', [
            'tweet' => $tweet
        ]);

    }

    public function actionAddTweetTime()
    {
        $tweet = new Tweets();

        $tweet->text = (string)time();
        $tweet->image = '';

        if($tweet->save()) {
            return $this->render('add-tweet-time', [
                'tweet' => $tweet,
                'msg' => 'Сообщение успешно добавлено'
            ]);
        }


    }
}
