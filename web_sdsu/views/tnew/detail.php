<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapWidgetTrait;
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

    <div id="panel-index-news" class="panel panel-default" > 
        <div id="panel-head-index-news" class="panel-heading">
            <h3 id="panel-title-index-news" class="panel-title">
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b><?php echo $model->newname_th?></b> </h3>
        </div>

        <div class="panel-body panel-body-index-news"> 
            
          
                <div class="panel panel-default">
                    <div class="panel-body box-news" >

                        <div style="margin:1vw;">
                          
                            <div align="center" class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;  margin-bottom:2vw;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                <?php
                                $newreff = $model->ref;
                                $picc = Uploads::find()->where(['ref'=> $newreff])->count();
                                for($i=0; $i<$picc; $i++){
                                    
                                ?>
                            
                                    <li data-target="#myCarousel" data-slide-to="<?php echo $i?>" class="<?php if($i==0){echo "active";} ?>"></li>
                                <?php 
                                }
                                ?>   
                                </ol>

                                <!-- Wrapper for slides -->
                                
                                <div class="carousel-inner">
                                <?php
                                $j=0;
                                //$newreff = $model->ref;
                                $test2 = Uploads::find()->where(['ref'=> $newreff])->all();
                                foreach($test2 as $test){
                                
                                ?>
                                    <div class="item <?php if($j==0){echo "active";} ?>">
                                        <img src="/cctwebsystem2019/images/news/<?php echo $model->ref?>/<?php echo $test->real_filename?>" alt="a" style="width:100%" class="responsive" >
                                    </div>
                                <?php 
                                $j++;
                                } 
                              
                                
                                ?>
                             
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                            </div>
                            <div class="col-md-2"></div>
                            </div>

                            <div >
                            <div class="detail-header" align="center">
                                
                                <b><p class="h-box-details"><?php echo $model->newname_th?></p></b>
                                <?php
                                $d = strtotime("$model->date_news");
                                ?>                       
                                <p id="date-details">วันที่ <?php echo date("d/m/Y", $d) ?></p>
                                <p id="date-details"><?php echo $model->newtype->new_th ?></p>
                            </div>
                            <div class="pad-news in-box-details">
                        
                                    <p><?php echo $model->newdetail_th ?><p>
                                </div>
                            </div>


                        </div>

                      
                        
                    </div>
                </div>                      
            
        </div>       
    </div>


</div>
