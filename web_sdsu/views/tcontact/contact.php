<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ติดต่อเรา';

?>
<div class="tcontact-contact">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw">"เราบอกความจริงแก่ท่านทั้งหลายว่า ซึ่งท่านได้กระทำแก่คนใดคนหนึ่งในพวกพี่น้องของเรานี้ ถึงแม้จะต่ำต้อยเพียงไร ก็เหมือนได้กระทำแก่เราด้วย" (มัทธิว 25:40)</marquee>
    </div>

    <ul class="breadcrumb" style="background-color:#f6f6f6">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active">ติดต่อเรา</li>
    </ul>

    
    <div id="panel-contact" class="panel panel-primary"> 
        <div id="panel-head-contact" class="panel-heading">
            <h3 id="panel-title-contact" class="panel-title">
            <i class="fa fa-envelope" aria-hidden="true"></i> <b><?= Html::encode($this->title) ?></b>  </h3>
        </div>

        <div class="panel-body panel-body-contact"> 
            <div style="margin-left:0.5vw; margin-right:0.5vw;" class="row"> 
                 
                <div class="col-md-6">
                    
                    <p style="font-size: 1.2vw; padding-top:0px; padding-bottom:0.7vw"><b><?php echo $model->type->type_th?> สภาคริสตจักรในประเทศไทย</b></p>
                    <?php echo $model->contactdetail_th?>
                    
                </div>

                <div class="col-md-6">
                    <?php echo $model->map ?>
                </div>
                
            </div>
            <br><br>
            <div style="margin-left:0.7vw; margin-right:0.7vw;" class="row">     
                
                <div class="col-md-6">
                    <p style="font-size: 1.2vw; padding-top:0px; padding-bottom:0.7vw"><b><?php echo $tei->branch->branch_th?></b></p>
                    <?php echo $tei->contactdetail_th?>
                </div>
                

                <div class="col-md-6">
                    <?php echo $tei->map ?>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
