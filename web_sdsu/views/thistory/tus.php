<body style="background-color:#e4e6f7">
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_sdsu\models\Thistory;

$this->title = 'วิสัยทัศน์ วัตถุประสงค์ เป้าหมาย';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-tus">

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
                <p><?php echo $model->history_th?></p>
                </div>
                
            </div>

            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <b><p class="h-box-about" ><?php echo $objective->dhistory->d_history_th ?></p></b>
                <p><?php echo $objective->history_th?></p>
                </div>
                
            </div>

            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <b><p class="h-box-about" ><?php echo $goal->dhistory->d_history_th ?></p></b>
                <p><?php echo $goal->history_th?></p>
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
</body>

