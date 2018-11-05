<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ติดต่อเรา';

?>
<div class="tcontact-contact">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.21vw"><?php echo $bible->history_th ?></marquee>
    </div>

    <ul class="breadcrumb" style="background-color:#f5f5f5">
        <li><a style="color:#eb6864" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active" style="color:#858585"><?= $this->title ?></li>
    </ul>

    <div class="row">
        
        <div class="col-md-5">
            <div id="panel-contact" class="panel panel-primary"> 
                <div id="panel-head-contact" class="panel-heading">
                    <h3 id="panel-title-contact" class="panel-title">
                    <i class="fa fa-envelope" aria-hidden="true"></i> <b><?= Html::encode($this->title) ?></b>  </h3>
                </div>

                <div class="panel-body panel-body-contact"> 
                    
                
                    <p style="font-size: 1.2vw; padding-top:0px; padding-bottom:0.7vw"><b><?php echo $model->type->type_th?> สภาคริสตจักรในประเทศไทย</b></p>
                    <?php echo $model->contactdetail_th?>
                   <br>
                   <br>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div id="panel-contact" class="panel panel-primary"> 
                <div id="panel-head-contact" class="panel-heading">
                    <h3 id="panel-title-contact" class="panel-title">
                    <span class="glyphicon glyphicon-map-marker"></span> <b>แผนที่</b>  </h3>
                </div>
                <div class="panel-body panel-body-contact2"> 
                    <?php echo $model->map ?>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
