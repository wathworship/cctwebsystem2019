<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_pmu\models\Thistory;

$this->title = 'พันธกิจ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-pan">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:16px">ข้อพระคัมภีร์ประจำหน่วยงาน... <?php echo $bible->history_th ?></marquee>
    </div>

    <ul class="breadcrumb">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

    
                
    <div class="row">
        <div class="col-md-9">
            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding-top:1.5vw; padding-bottom:1.5vw; padding-left:1vw; padding-right:1vw;font-size:16.61px">
                <b><p class="h-box-about" style="padding-left:1vw;"><?php echo $model->dhistory->d_history_th ?></p></b>
                <p><?php echo $model->history_th?></p>
                </div>
                
            </div>

        </div>

        <div class="col-md-3">
            <?= $this->render('form_pan', [
                    //'model' => $model,
            ]) ?>
        </div>
    </div>
 

</div>

