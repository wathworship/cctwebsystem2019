
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_pmu\models\Thistory;

$this->title = 'เกี่ยวกับเรา';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-about">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:16px">ข้อพระคัมภีร์ประจำหน่วยงาน... <?php echo $bible->history_th ?></marquee>
    </div>

    <ul class="breadcrumb" style="color:#f5f5f5">
        <li><a href="index.php" style="color:#eb6864"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active" style="color:#858585"><?= $this->title ?></li>
    </ul>

    
                
    <div class="row">
        <div class="col-md-9">
            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:23px">
                <b><p class="h-box-about"><?php echo $model->dhistory->d_history_th ?></p></b>
                <img src="images/about/<?php echo $model->ref?>" class="img-responsive pull-right" style="margin-left:10px; width:180px; height:180px;"/>
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

