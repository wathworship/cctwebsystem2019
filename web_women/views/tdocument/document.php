<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_women\models\Tdocument;

$this->title = 'ดาวน์โหลดเอกสาร';

?>
<div class="tdocument-document">

    <ul class="breadcrumb" style="background-color:#f6f6f6">
        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active">ดาวน์โหลดเอกสาร</li>
    </ul>

  
    <div id="panel-contact" class="panel panel-primary"> 
        <div id="panel-head-contact" class="panel-heading">
            <h3 id="panel-title-contact" class="panel-title">
            <i class="fa fa-envelope" aria-hidden="true"></i> <b><?= Html::encode($this->title) ?></b>  </h3>
        </div>

        <div class="panel-body panel-body-index-form"> 
        <!---------------------------------------------------------------->
           
            <div class="panel panel-default">
                <div class="panel-body box-form">
                <div>
                        

                        <?php 
                            
                            foreach($model as $tdoc){
                        ?>

                        <a target ="_blank" id="form" href="document/form_download/<?php echo $tdoc->link_doc?>"><i style="color:#999999" class="fa fa-download" aria-hidden="true"></i> <?php echo $tdoc->name_th?></a><br>

                        <?php }?>
                </div>
                </div>
            </div>
           
        <!-------------------------------------------------------------->
        </div>
    </div>
  
    
</div>
