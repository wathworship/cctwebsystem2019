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
        <li  class="active">ข่าวสาร</li>
    </ul>

    <div id="panel-index-news" class="panel panel-default"> 
        <div id="panel-head-index-news" class="panel-heading">
            <h3 id="panel-title-index-news" class="panel-title">
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b>ข่าวสารหน่วยงานพัฒนาและบริการสังคม</b> </h3>
        </div>

        <div class="panel-body panel-body-index-news"> 
            
            <?php foreach($model as $news) {
                $newref = $news->ref;
            ?>
                <div class="panel panel-default">
                    <div class="panel-body box-news">
                        <div>
                            <?php 
                                $pic = Uploads::find()->where(['ref'=> $newref])->orderBy('upload_id ASC')->limit(1)->all();
                                foreach($pic as $picture) {
                                
                            ?>
                            <img src="<?php echo $picture->real_filename?>" class="img-news img-responsive pull-left"/>
                            <?php } ?>
                        </div>
                        <div class="pad-news in-box-news" style="margin-left:20vw;">
                            <b><p class="h-box-news"><?php echo $news->newname_th?></p></b>
                            <p>วันที่ <?php echo $news->date_add ?></p>
                            <p><?php echo $news->newtype->new_th ?></p>
                            <!--<p><?php echo $news->newdetail_th ?><p>-->
                            <a href="index.php?r=tnew/detail&id=<?php echo $news->id ?>" class="button-news btn btn-default btn-sm" role="button"><b>อ่านต่อ</b></a>
                        </div>
                        
                    </div>
                </div>
            <?php } ?>               
            
        </div>       
    </div>


</div>
