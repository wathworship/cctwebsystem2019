<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Html;
use web_pmu\models\Tnew;
use web_pmu\models\Uploads;


$this->title = 'ข่าวสารหน่วยงานศิษยาภิบาล';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnew-news">

    <ul class="breadcrumb" >
        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li  class="active">ข่าวสาร</li>
    </ul>

    <div id="panel-index-news" class="panel panel-default"> 
        <div id="panel-head-index-news" class="panel-heading">
            <h3 id="panel-title-index-news" class="panel-title">
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b><?= $this->title ?></b> </h3>
        </div>

        <div class="panel-body panel-body-index-news"> 
            
            <?php foreach($models as $news) {
                $newref = $news->ref;
            ?>
                <div class="panel panel-default">
                    <div class="panel-body box-news">
                        <div>
                            <?php 
                                $pic = Uploads::find()->where(['ref'=> $newref])->orderBy('upload_id ASC')->limit(1)->all();
                                foreach($pic as $picture) {
                                
                            ?>
                            <img src="images/news/<?php echo $news->ref?>/<?php echo $picture->real_filename?>" class="img-news img-responsive pull-left"/>
                            <?php } ?>
                        </div>
                        <div class="pad-news in-box-news" style="margin-left:20vw;">
                            <b><p class="h-box-news"><?php echo $news->newname_th?></p></b>
                            <?php
                            $d = strtotime("$news->date_news");
                            ?>                       
                            <p>วันที่ <?php echo date("d/m/Y", $d) ?></p>
                            <p><?php echo $news->newtype->new_th ?></p>
                            <?php 
                            $detail1 = mb_substr($news->newdetail_th, 0, 200,"UTF-8");
                            ?>
                            <p><?php echo $detail1.'...'?><p>
                            <a href="index.php?r=tnew/detail&id=<?php echo $news->id ?>" class="button-news btn btn-default btn-sm" role="button"><b>อ่านต่อ</b></a>
                        </div>
                        
                    </div>
                </div>
            <?php } ?>               
            
        </div>  
           
    </div>

      <center>
      <?php 
          
          echo LinkPager::widget([
                'pagination' => $pagination,

         ]);  
      ?>
      </center>

</div>
