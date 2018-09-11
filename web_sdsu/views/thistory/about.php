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
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

    
                
    <div class="row">
        <div class="col-md-9">
            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <b><p class="h-box-about" ><?php echo $model->dhistory->d_history_th ?></p></b>
                <img src="<?php echo $model->ref?>" class="img-responsive pull-right" style="width:14vw; height:14vw;"/>
                <p><?php echo $model->history_th?></p>
                </div>
                
            </div>
        </div>

        <div class="col-md-3">

            <?= $this->render('form', [
                //'model' => $model,
            ]) ?>

        
        </div>

    </div>
               
               
                
            
   
               
    

  


</div>
