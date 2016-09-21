<?php
namespace frontend\controllers;

use common\models\Tweets;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Blog controller
 */
class BlogController extends Controller
{
    /**
     * @inheritdoc
     */

    public $layout = 'blog.php';

    public function behaviors()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $title = 'Кабаков Илья';
        return $this->render('index', [
            'caption' => $title
        ]);
    }

    public function actionHello()
    {
        $tweets = Tweets::find()->all();
        //$tweets = Yii::$app->db->createCommand('SELECT * FROM tweets')->queryAll();

        return $this->render('tweets', [
            'tweets' => $tweets
        ]);
    }

    public function actionOne()
    {
        $tweet = Tweets::find()->where(['id'=>$_GET['id']])->one();

        return $this->render('one-tweet', [
            'tweet' => $tweet
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
}
