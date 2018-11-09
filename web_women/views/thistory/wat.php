<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_women\models\Thistory;

$this->title = 'ตัวชี้วัด';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-wat">

    <div style="padding-bottom:0.5vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw"><?= $bible->history_th?></marquee>
    </div>

    <ul class="breadcrumb">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

    
                
    <div class="row">
        <div class="col-md-9">

            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <b><p class="h-box-about" ><?php echo $model->dhistory->d_history_th ?></p></b>
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

