<body style="background-color:#e4e6f7">
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_sdsu\models\Tproject;

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
        <div class="col-md-9">

            <div id="project" class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                <?php $year = date("Y"); ?>

                <b><p class="h-box-about" >โครงการของหน่วยงานพัฒนาและบริการสังคม ประจำปี <?php echo $year; ?></p></b>
                <?php foreach($model as $pro) { ?>
                
                <a target ="_blank" href="/cctwebsystem2019/document/doc_sdsu/projects/<?php echo $pro->docs?>"> <i style="color:#999999" class="fa fa-download" aria-hidden="true"></i> <?php echo $pro->projectname_th?> </a><br>
                <!--<a target ="_blank" href="index.php?r=tproject/detailproject&id=<?php //echo $pro->id?>"> <?php //echo $pro->projectname_th?> <i class="fa fa-download" aria-hidden="true"></i></a><br>-->
                <?php } ?>

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
</body>

