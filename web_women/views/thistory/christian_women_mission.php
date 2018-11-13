<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_women\models\Thistory;

$this->title = 'ประวัติสตรีคริสเตียนสภาคริสตจักรในประเทศไทย';

?>
<div class="thistory-mission">

    <div style="padding-bottom:0.5vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw"><?= $bible->history_th?></marquee>
    </div>

    <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

    <div class="row">
        <div class="col-md-9">
            <div class="thumbnail box-about">              
                <div class="in-box-about" style="padding:1.5vw">
                        <center><b><p class="h-box-about" style="padding-bottom:1vw;"><?php echo $model->dhistory->d_history_th ?></p></b></center>
                        <center><iframe name="project" class="responsive" style="width:60vw; height:86vw;" src="document/plans/<?php echo $model->docs?>" frameborder="0"></iframe></center>
                </div>            
            </div>
        </div>

        <div class="col-md-3">
            <?= $this->render('form_christian_women', [
                    //'model' => $model,
            ]) ?>
        </div>

    </div>
 

</div>

