<?php
/**
 * Created by PhpStorm.
 * User: rukolla
 * Date: 20.09.16
 * Time: 15:40
 */

/* @var $this \yii\web\View */
/* @var $tweet \common\models\Tweets[] */

$this->title = "Tweechanckiy";

?>
<div class="row">

    <div class="col-sm-8 blog-main">

        <section class="blog-post">
            <div class="panel panel-default">
                <img src="img/technology/unsplash-2.jpg" class="img-responsive" />
                <div class="panel-body">
                    <div class="blog-post-meta">
                        <span class="label label-light label-warning">Apps</span>
                        <p class="blog-post-date pull-right">January 24, 2016</p>
                    </div>
                    <div class="blog-post-content">
                        <h2 class="blog-post-title">I glide and swan</h2>

                        <p><?=$tweet->text?></p>
                        <div class="row">
                            <div class="col-md-4">
                                <ul>
                                    <li>Donec quam felis</li>
                                    <li>Consectetuer adipiscing</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>Donec quam felis</li>
                                    <li>Consectetuer adipiscing</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>Donec quam felis</li>
                                    <li>Consectetuer adipiscing</li>
                                </ul>
                            </div>
                        </div>

                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. <strong>Etiam rhoncus</strong>. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante <a href="#">tincidunt tempus</a>.</p>

                    </div>
                </div>
            </div>
        </section><!-- /.blog-post -->

        <section class="blog-comments">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="blog-post-title">Comments</h2>
                    <div id="disqus_thread"></div>
                    </div>
            </div>
        </section>

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

        <div class="sidebar-module">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Categories</h4>
                    <ol class="categories list-unstyled">
                        <li>
                            <a class="label label-light label-primary" href="filter-category.html">News</a>
                            <span class="label label-light label-default pull-right">8</span>
                        </li>
                        <li>
                            <a class="label label-light label-warning" href="filter-category.html">Apps</a>
                            <span class="label label-light label-default pull-right">5</span>
                        </li>
                        <li>
                            <a class="label label-light label-info" href="filter-category.html">Branding</a>
                            <span class="label label-light label-default pull-right">9</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.sidebar-module -->

        <div class="sidebar-module">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="filter-date.html">February 2016</a></li>
                        <li><a href="filter-date.html">January 2016</a></li>
                        <li><a href="filter-date.html">December 2015</a></li>
                        <li><a href="filter-date.html">November 2015</a></li>
                        <li><a href="filter-date.html">October 2015</a></li>
                        <li><a href="filter-date.html">September 2015</a></li>
                        <li><a href="filter-date.html">August 2015</a></li>
                        <li><a href="filter-date.html">July 2015</a></li>
                        <li><a href="filter-date.html">June 2015</a></li>
                        <li><a href="filter-date.html">May 2015</a></li>
                        <li><a href="filter-date.html">April 2015</a></li>
                        <li><a href="filter-date.html">March 2015</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.sidebar-module -->

        <div class="sidebar-module">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Newsletter</h4>
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control input-sm">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">E-mail</label>
                        <input type="text" id="email" class="form-control input-sm">
                    </div>
                    <a href="#" class="btn btn-default btn-raised btn-sm btn-block">Subscribe</a>
                </div>
            </div>
        </div><!-- /.sidebar-module -->

        <div class="sidebar-module">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Google+</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.sidebar-module -->

    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

