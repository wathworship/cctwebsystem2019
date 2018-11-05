<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_sdsu\models\Tdocument;

$this->title = 'ดาวน์โหลดเอกสาร';

?>
<div class="tdocument-document">

    <ul class="breadcrumb" style="background-color:#f5f5f5">
        <li><a style="color:#eb6864" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active" style="color:#858585"><?= $this->title ?></li>
    </ul>

  
    <div id="panel-contact" class="panel panel-primary"> 
        <div id="panel-head-contact" class="panel-heading">
            <h3 id="panel-title-contact" class="panel-title">
            <i class="fa fa-envelope" aria-hidden="true"></i> <b><?= Html::encode($this->title) ?></b>  </h3>
        </div>

        <div class="panel-body panel-body-index-form"> 
        <!---------------------------------------------------------------->
            <?php foreach($model as $doc) {?>
            <div class="panel panel-default">
                <div class="panel-body box-form">
                <div>
                        <b><p class="h-box-form"><?php echo $doc->doctype->doc_th ?></p></b>

                        <?php 
                            $tdocument = Tdocument::find()->where('type_id=9')->andWhere(['doc_type'=>$doc->doctype->id])->all();
                            foreach($tdocument as $tdoc){
                        ?>

                        <a target ="_blank" id="form" href="/cctwebsystem2019/document/doc_pmu/form_download/<?php echo $tdoc->doctype->doc_th?>/<?php echo $tdoc->link_doc?>"><i style="color:#999999" class="fa fa-download" aria-hidden="true"></i> <?php echo $tdoc->name_th?></a><br>

                        <?php }?>
                </div>
                </div>
            </div>
            <?php }?>
        <!-------------------------------------------------------------->
        </div>
    </div>
  
    
</div>
