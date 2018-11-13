
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_women\models\Tproject;
use web_women\models\Thistory;

$this->title = 'แผนงานหลัก';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-plan">

    <div style="padding-bottom:0.5vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw"><?= $bible->history_th?></marquee>
    </div>

    <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

    
                
    <div class="row">
        <div class="col-md-12">

            <div id="project" class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <?php $year = date("Y"); ?>

                <center><b><p class="h-box-about" >แผนงานตอบสนองนโยบายสภาคริสตจักร</p></b></center>
                <center><iframe name="project" class="responsive" style="width:80vw; height:60vw;" src="document/plans/<?php echo $model->docs?>" frameborder="0"></iframe></center>

                </div>
                
            </div>

        </div>



    </div>
 

</div>


