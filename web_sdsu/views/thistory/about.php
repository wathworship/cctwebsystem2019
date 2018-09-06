<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_sdsu\models\Thistory;

$this->title = 'เกี่ยวกับเรา';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-about">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw">"เราบอกความจริงแก่ท่านทั้งหลายว่า ซึ่งท่านได้กระทำแก่คนใดคนหนึ่งในพวกพี่น้องของเรานี้ ถึงแม้จะต่ำต้อยเพียงไร ก็เหมือนได้กระทำแก่เราด้วย" (มัทธิว 25:40)</marquee>
    </div>

    <ul class="breadcrumb">
        <li><a style="color:#2780e3" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li style="color:#999999" class="active"><?= $this->title ?></li>
    </ul>

  
    <div id="panel-index-calendar" class="panel panel-success"> 
        <div id="panel-head-index-calendar" class="panel-heading">
            <h3 id="panel-title-index-calendar" class="panel-title panel-title-about">
                <b><?= Html::encode($this->title) ?></b> <i class="fas fa-users"></i></h3>
        </div>

        <div id="panel-body-index-calendar" class="panel-body panel-body-about"> 
            <div style="padding-right:1.8vw; ">
                <img src="image/p.jpg" class="about-img img-thumbnail img-responsive pull-left" />
            </div>
        
            <p class="normaltext">
            <?php 
                echo $model->history_th;
            ?>
            </p>
        </div>
    </div>


    <div id="panel-index-calendar" class="panel panel-success"> 
        <div id="panel-head-index-calendar" class="panel-heading">
            <h3 id="panel-title-index-calendar" class="panel-title panel-title-about">
                <b><?php echo $objective->dhistory->d_history_th ?></b> <i class="fas fa-users"></i></h3>
        </div>

        <div id="panel-body-index-calendar" class="panel-body panel-body-about"> 
        
            <p class="normaltext">
           <?php 
                echo $objective->history_th;
           ?>
            </p>
        </div>
    </div>

</div>
