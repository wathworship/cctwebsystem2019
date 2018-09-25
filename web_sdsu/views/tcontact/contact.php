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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15108.067309081991!2d99.00763479681827!3d18.797403418584086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3aa9931fbb6b%3A0x8db60bc51bbe866f!2z4Lih4Li54Lil4LiZ4Li04LiY4Li04LmB4Lir4LmI4LiH4Liq4Lig4Liy4LiE4Lij4Li04Liq4LiV4LiI4Lix4LiB4Lij4LmD4LiZ4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4Lii!5e0!3m2!1sth!2sth!4v1536226258732" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>  
                </div>
            </div>
        </div>
    </div>
</div>
