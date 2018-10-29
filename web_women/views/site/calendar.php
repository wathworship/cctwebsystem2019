<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ปฏิทินกิจกรรม';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-calendar">
<ul class="breadcrumb">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
</ul>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div id="panel-index-calendar" class="panel panel-default">
        <div id="panel-head-index-calendar" class="panel-heading">
            <h3 id="panel-title-index-calendar" class="panel-title"><b><?= Html::encode($this->title) ?></b> <i class="fas fa-users"></i></h3>
        </div>
        <div id="panel-body-index-calendar" class="panel-body" align="center">
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23eaeaea&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0" width="900" height="500" frameborder="0" scrolling="no"></iframe>
        </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

<div align="center" style="padding-top:1.2vw">  
<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=500&amp;wkst=1&amp;bgcolor=%23eaeaea&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0" width="900" height="500" frameborder="0" scrolling="no"></iframe>

</div>

  
</div>
