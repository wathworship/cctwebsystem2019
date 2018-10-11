<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ร่วมสนับสนุนพันธกิจ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-donate">
  
<ul class="breadcrumb" style="background-color:#f6f6f6">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active"><?php echo $this->title; ?></li>
</ul>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div id="panel-index-article" class="panel panel-default">
        <div id="panel-head-contact" class="panel-heading">
            <h2 id="donate-title" align="center" class="panel-title"><b><?= Html::encode($this->title) ?></b> </h2>
        </div>
        <div id="panel-body-index-calendar" class="panel-body" align="center">
        <br>
            <p id="donate-h"><b>ท่านสามารถร่วมถวายเพื่อสนับสนุนพันธกิจของหน่วยงานพัฒนาและบริการสังคม</b></p>
            <br>
            <p id="donate-b">โดยโอนเงินถวายผ่าน <b>หมายเลขบัญชีของ มูลนิธิแห่งสภาคริสตจักรในประเทศไทย</b></p>
            <img id="donate-img" src="image/ktb.png" style="width:20vw; height:5vw;"/>
            
            <br>
            <p id="donate-name">ชื่อบัญชี  <b>มูลนิธิแห่งสภาคริสตจักรในประเทศไทย</b></p>
            <br>
            <p id="donate-num"><b>เลขที่บัญชี 691-0-12674-2</b></p>
            <br>
            <p id="donate-l">ธนาคารกรุงไทย  สาขาห้างสรรพสินค้าเซ็นทรัลเวิลด์</p>
            <br>
            <p id="donate-final"><b>เมื่อท่านร่วมถวายเพื่อสนับสนุนพันธกิจแล้ว โปรดแจ้งทางหน่วยงานทราบ</b> <a style=color:#ff7373;><b>โดยส่งหลักฐานการโอนมาที่<br>
            Email : saophilokee@gmail.com หรือ Fax : 053-244381 ต่อ 304 หรือแจ้งผ่านทางหมายเลขโทรศัพท์ 082-1945697</a></b></p>
            <br>
            <p id="donate-thanks"><b><l>ทางหน่วยงานขอขอบคุณมา ณ โอกาสนี้ ขอพระเจ้าทรงสถิตอยู่กับท่าน</l></b></p>
        </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>



  
</div>
