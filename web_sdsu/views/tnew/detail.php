<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_sdsu\models\Tnew;
use web_sdsu\models\Uploads;

$this->title = 'ข่าวสารหน่วยงานพัฒนาและบริการสังคม';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnew-news">

    <ul class="breadcrumb" style="background-color:#f6f6f6">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li><a href="index.php?r=tnew/news">ข่าวสาร</a></li>
        <li  class="active"><?php echo $model->newname_th?></li>

    </ul>

    <div id="panel-index-news" class="panel panel-default"> 
        <div id="panel-head-index-news" class="panel-heading">
            <h3 id="panel-title-index-news" class="panel-title">
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b>ข่าวสารหน่วยงานพัฒนาและบริการสังคม</b> </h3>
        </div>

        <div class="panel-body panel-body-index-news"> 
            
          
                <div class="panel panel-default">
                    <div class="panel-body box-news" >
                        <div align="center">
                        
                            <?php 
                                $newref = $model->ref;
                                $pic = Uploads::find()->where(['ref'=> $newref])->orderBy('upload_id ASC')->limit(1)->all();
                                foreach($pic as $picture) {
                                
                            ?>
                            <img src="<?php echo $picture->real_filename?>" class="img-detail img-responsive"/>
                            <?php } ?>
                            <b><p class="h-box-news"><?php echo $model->newname_th?></p></b>
                            <p >วันที่ <?php echo $model->date_add ?></p>
                            <p><?php echo $model->newtype->new_th ?></p>
                        </div>
                        <div class="pad-news in-box-news">
                            
                            
                            <p><?php echo $model->newdetail_th ?><p>
                            </div>
                        
                    </div>
                </div>
                      
            
        </div>       
    </div>


</div>
