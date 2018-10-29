<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'วารสาร';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-article">

    <ul class="breadcrumb" style="background-color:#f6f6f6">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active">วารสาร</li>
    </ul>


    <div id="panel-index-article" class="panel panel-default"> 
        <div id="panel-head-index-article" class="panel-heading">
            <h3 id="panel-title-index-article" class="panel-title">
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b>วารสารสภาคริสตจักร</b> </h3>
        </div>

        <div class="panel-body panel-body-index-article"> 
            <div class="row" style="padding-top:0.5vw;">

                <?php foreach($models as $ar){ ?>
                <div class="col-md-4">
                    <div class="thumbnail box-article" style="height:440px">
                        <img src="/cctwebsystem2019/images/journals/<?php echo $ar->cover?>" class="img-responsive" style="width:250px; height:300px; margin-top:1.1vw;"/>
                        <div class="in-box-article" style="padding:1vw">
                        <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                        <p align="center" class="h-box-article"><b><?php echo $ar->name_th?></b></p>
                        <center><a target ="_blank" href="/cctwebsystem2019/document/doc_sdsu/journals/<?php echo $ar->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a></center>           
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
                
            </div> 
                
        </div>
    </div>

    <div class="col-md-12 text-center">
     <?php 
          echo LinkPager::widget([
                'pagination' => $pagination,
            ]);  
     ?> 
     </div>  


</div>
