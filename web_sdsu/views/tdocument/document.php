<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ดาวน์โหลดแบบฟอร์ม';

?>
<div class="tdocument-document">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw">"เราบอกความจริงแก่ท่านทั้งหลายว่า ซึ่งท่านได้กระทำแก่คนใดคนหนึ่งในพวกพี่น้องของเรานี้ ถึงแม้จะต่ำต้อยเพียงไร ก็เหมือนได้กระทำแก่เราด้วย" (มัทธิว 25:40)</marquee>
    </div>

    <ul class="breadcrumb" style="background-color:#f6f6f6">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active">แบบฟอร์ม</li>
    </ul>

  
    <div id="panel-contact" class="panel panel-primary"> 
        <div id="panel-head-contact" class="panel-heading">
            <h3 id="panel-title-contact" class="panel-title">
            <i class="fa fa-envelope" aria-hidden="true"></i> <b><?= Html::encode($this->title) ?></b>  </h3>
        </div>

        <div class="panel-body panel-body-contact"> 
            <!-------------------------------------------------------------->
            <div class="panel panel-default">
                <div class="panel-body box-form">
                <div class="in-box-article">
                        <?php foreach($model as $doc){ ?>
                        <!--<b><p class="h-box-article">แบบฟอร์มเสียภาษีเงินได้มูลนิธิหรือสมาคม (ภ.ง.ด. 55) ประจำปี</p></b>-->
                        <a id="form" href="#"><i class="fa fa-download" aria-hidden="true"></i> <?php echo $doc->name_th?></a><br>
                        
                        <?php }?>
                </div>
                </div>
            </div>

            <!--<div class="panel panel-default">
                <div class="panel-body box-form">
                <div class="in-box-article">
                        <b><p class="h-box-article">แบบฟอร์มการจัดทำงบประมาณ</p></b>
                        <a id="form" href="#"><i class="fa fa-download" aria-hidden="true"></i> แบบฟอร์มงบประมาณหน่วยงานโดยตรง</a><br>
                        <a id="form" href="#"><i class="fa fa-download" aria-hidden="true"></i> แบบฟอร์มงบประมาณหน่วยงานที่มีรายได้</a><br>
                        <a id="form" href="#"><i class="fa fa-download" aria-hidden="true"></i> แบบฟอร์มงบประมาณโรงพยาบาล</a><br>
                        <a id="form" href="#"><i class="fa fa-download" aria-hidden="true"></i> แบบฟอร์มงบประมาณโรงเรียน</a><br>
                        <a id="form" href="#"><i class="fa fa-download" aria-hidden="true"></i> แบบฟอร์มงบประมาณคริสตจักร</a><br>
                </div>
                </div>
            </div>-->
        <!-------------------------------------------------------------->
        </div>
    </div>
  
    
</div>
