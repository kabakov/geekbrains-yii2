<?php
/**
 * Created by PhpStorm.
 * User: rukolla
 * Date: 20.09.16
 * Time: 15:40
 */

/* @var $this \yii\web\View */
/* @var $tweets \common\models\Tweets[] */
use yii\helpers\Url;

$this->title = "Tweechanckiy";

?>
<div class="row">

    <div class="col-sm-8 blog-main">

        <div class="row">
            <div class="col-sm-6">

                <?php
                foreach ($tweets as $key=>$tweet)
                {
                    if ($key % 2 == 0) {
                    ?>
                    <section class="blog-post">
                        <div class="panel panel-default">
                            <img src="img/technology/unsplash-2.jpg" class="img-responsive"/>
                            <div class="panel-body">
                                <div class="blog-post-meta">
                                    <span class="label label-light label-primary">News</span>
                                    <p class="blog-post-date pull-right">February 16, 2016</p>
                                </div>
                                <div class="blog-post-content">
                                    <a href="post-image.html">
                                        <h2 class="blog-post-title">Like a little drop of ink</h2>
                                    </a>
                                    <p><?= $tweet->text; ?></p>
                                    <a class="btn btn-info" href="<?=Url::toRoute(['blog/one', 'id'=> "$tweet->id"]);?>">Read more</a>
                                    <a class="blog-post-share pull-right" href="#">
                                        <i class="material-icons">&#xE80D;</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section><!-- /.blog-post -->
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-sm-6">

                <?php
                foreach ($tweets as $key=>$tweet)
                {
                    if ($key % 2 == 1) {
                        ?>
                        <section class="blog-post">
                            <div class="panel panel-default">
                                <img src="img/technology/unsplash-2.jpg" class="img-responsive"/>
                                <div class="panel-body">
                                    <div class="blog-post-meta">
                                        <span class="label label-light label-primary">News</span>
                                        <p class="blog-post-date pull-right">February 16, 2016</p>
                                    </div>
                                    <div class="blog-post-content">
                                        <a href="post-image.html">
                                            <h2 class="blog-post-title">Like a little drop of ink</h2>
                                        </a>
                                        <p><?= $tweet->text; ?></p>
                                        <a class="btn btn-info" href="<?=Url::toRoute(['blog/one', 'id'=> "$tweet->id"]);?>">Read more</a>
                                        <a class="blog-post-share pull-right" href="#">
                                            <i class="material-icons">&#xE80D;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section><!-- /.blog-post -->
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <nav>
            <ul class="pager">
                <li><a class="withripple" href="#">Previous</a></li>
                <li><a class="withripple" href="#">Next</a></li>
            </ul>
        </nav>

    </div><!-- /.blog-main -->
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

        <div class="sidebar-module">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div><!-- /.sidebar-module -->

        <div class="sidebar-module">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>About</h4>
                    <p>Donec ut libero sed arcu vehicula ultricies a non tortor. <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</em> Aenean ut gravida lorem.</p>
                </div>
            </div>
        </div><!-- /.sidebar-module -->

    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

