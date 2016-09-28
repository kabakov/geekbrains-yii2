<?php
/**
 * Created by PhpStorm.
 * User: rukolla
 * Date: 20.09.16
 * Time: 16:33
 */
/* @var $message */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="row">
 <div class="col-lg-12">
  <div class="main-box clearfix">
   <header class="main-box-header clearfix">
    <h2 class="pull-left">Пользователи</h2>

<!--    <div class="filter-block pull-right">-->
<!--     <div class="form-group pull-left">-->
<!--      <input type="text" class="form-control" placeholder="Search...">-->
<!--      <i class="fa fa-search search-icon"></i>-->
<!--     </div>-->
<!---->
<!--     <a href="#" class="btn btn-primary pull-right">-->
<!--      <i class="fa fa-plus-circle fa-lg"></i> Add product-->
<!--     </a>-->
<!--    </div>-->
   </header>

   <div class="main-box-body clearfix">
    <div class="table-responsive">
     <table class="table">
      <thead>
      <tr>
       <th><span>UserNmame</span></th>
       <th class="text-right"><a href="#" class="asc"><span>id</span></a></th>
       <th class="text-center"><span>Status</span></th>
       <th class="text-center"><a href="#" class="desc"><span>Date updated</span></a></th>
       <th>&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      <?php
      foreach ($users as $key=>$user)
      {
       ?>
       <tr>
        <td>
         <?=$user->username;?>
        </td>
       <td class="text-right">
        &dollar; 625.50
      </td>
       <td class="text-center">
        <span class="label label-warning">Inactive</span>
       </td>
       <td class="text-center">
      2013/08/08 12:08
      </td>
       <td style="width: 15%;">
        <a href="#" class="table-link">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
																	</span>
        </a>
        <a href="#" class="table-link">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
																	</span>
        </a>
        <a href="#" class="table-link danger">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
																	</span>
        </a>
       </td>
      </tr>
      <?php
      }
       ?>
      </tbody>
     </table>
    </div>
    <ul class="pagination pull-right">
     <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
     <li><a href="#">1</a></li>
     <li><a href="#">2</a></li>
     <li><a href="#">3</a></li>
     <li><a href="#">4</a></li>
     <li><a href="#">5</a></li>
     <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
    </ul>
   </div>
  </div>
 </div>
</div>