<?php
namespace frontend\controllers;

use common\models\Tweets;
use Yii;
use yii\data\Pagination;
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
        $query = Tweets::find();

        $pagination = new Pagination([
           'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        $tweets = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('tweets', [
            'tweets' => $tweets,
            'pagination'=>$pagination,
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
