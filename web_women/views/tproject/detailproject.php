<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_women\models\Tproject;

$this->title = 'โครงการ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-yut">

    <div style="padding-bottom:1vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw">"เราบอกความจริงแก่ท่านทั้งหลายว่า ซึ่งท่านได้กระทำแก่คนใดคนหนึ่งในพวกพี่น้องของเรานี้ ถึงแม้จะต่ำต้อยเพียงไร ก็เหมือนได้กระทำแก่เราด้วย" (มัทธิว 25:40)</marquee>
    </div>

    <ul class="breadcrumb">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

    
                
    <div class="row">
        <div class="col-md-12">

            <div id="project" class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <?php $year = date("Y"); ?>

                <b><p class="h-box-about" > <?php echo $model->projectname_th ?></p></b>
                <iframe name="project" class="responsive" width="100%" height="1150px" src="/cctwebsystem2019/doc_sdsu/document/projects/<?php echo $model->docs?>" frameborder="0"></iframe>
                
                <!--<a target ="_blank" href="/cctwebsystem2019/document/projects/<?php //echo $pro->docs?>"> <?php //echo $pro->projectname_th?> <i class="fa fa-download" aria-hidden="true"></i></a><br>-->
                
                

                </div>
                
            </div>

        </div>

        <!--<div class="col-md-3">
        <?//= $this->render('form_pan', [
                //'model' => $model,
        //]) ?>
        </div>-->

    </div>
 

</div>

