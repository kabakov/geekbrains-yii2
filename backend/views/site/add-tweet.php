<?php
/**
 * Created by PhpStorm.
 * User: rukolla
 * Date: 20.09.16
 * Time: 16:33
 */
/* @var $tweet \common\models\Tweets */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php
$form = ActiveForm::begin([
    'id' => 'tweet-form',
    'options' => ['class' => 'form-horizontal'],
]);
?>
<?= $form->field($tweet, 'text')->textInput() ?>
<?= $form->field($tweet, 'image')->textInput() ?>

<?=Html::submitButton('Login',['class'=> 'btn btn-primary']) ?>

<?php
ActiveForm::end();
?>
