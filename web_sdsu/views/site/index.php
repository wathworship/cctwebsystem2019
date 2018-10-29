
<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapWidgetTrait;
use yii\helpers\Html;
use web_sdsu\models\Uploads;
use web_sdsu\models\Banner;
$this->title = 'หน่วยงานพัฒนาและบริการสังคม'
?>
<div class="site-index">

    <div class="body-content" style="padding-bottom:2.5vw;">
        <div style="padding-bottom:1vw;">
            <marquee behavior="alternate" scrollamount="4" style="font-size:1.2vw">"เราบอกความจริงแก่ท่านทั้งหลายว่า ซึ่งท่านได้กระทำแก่คนใดคนหนึ่งในพวกพี่น้องของเรานี้ ถึงแม้จะต่ำต้อยเพียงไร ก็เหมือนได้กระทำแก่เราด้วย" (มัทธิว 25:40)</marquee>
        </div>
        
  
        <div class="row" align="center">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:2vw;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <?php
                    $newreff = $banner->ref;
                    $count_banner = Uploads::find()->where(['ref'=> $newreff])->count();
                    for($i=0; $i<$count_banner; $i++){
                        
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
                    $test2 = Uploads::find()->where(['ref'=> $newreff])->orderBy('upload_id DESC')->all();
                    foreach($test2 as $test){
                    
                    ?>
                        <div class="item <?php if($j==0){echo "active";} ?>">
                            <img src="/cctwebsystem2019/images/banners/<?php echo $banner->ref?>/<?php echo $test->real_filename?>" alt="a" style="height:35vw; width:100%" class="responsive">
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
        </div>

        <!-- ------------------------------------------------------------------------------------------------ -->    

        <div id="panel-index-news" class="panel panel-default"> 
            <div id="panel-head-index-news" class="panel-heading">
                <h3 id="panel-title-index-news" class="panel-title">
                <i class="fa fa-newspaper" aria-hidden="true"></i> <b>ข่าวสาร</b> </h3>
            </div>

            <div class="panel-body panel-body-index-news"> 

                <div class="row" style="padding-top:0.5vw;">

                    <?php foreach($news as $new) { 
                        $newref = $new->ref;
                    ?>
                        <div class="col-md-3">
                            <div class="thumbnail box-news">
                                <?php 
                                    $pic = Uploads::find()->where(['ref'=> $newref])->orderBy('upload_id ASC')->one();                              
                                ?>
                                <img src="/cctwebsystem2019/images/news/sdsu_new/<?php echo $new->ref?>/<?php echo $pic->real_filename?>" class="img-responsive"/>
                                <div class="in-box-news" style="padding:1vw">
                                <b><p class="h-box-news"><?php echo $new->newname_th?></p></b>
                                <?php
                                    $d = strtotime("$new->date_news");
                                ?>
                                <p>วันที่ <?php echo date("d/m/Y", $d) ?></p>
                                <p><?php echo $new->newtype->new_th ?></p>
                                <a href="index.php?r=tnew/detail&id=<?php echo $new->id ?>" class="button-news btn btn-default btn-sm" role="button"><b>อ่านต่อ</b></a>
                                </div>
                                
                            </div>
                        </div>
                    <?php } ?>
   
                </div> 
                <a href="index.php?r=tnew/news" class="pull-right button-article-pr btn btn-warning btn-sm" role="button">อ่านต่อทั้งหมด</a>   
            </div>       
        </div>

        <!------------------------------------------------------------------------------------------------------>
        <div id="panel-index-article" class="panel panel-default"> 
            <div id="panel-head-index-article" class="panel-heading">
                <h3 id="panel-title-index-article" class="panel-title">
                <i class="fa fa-newspaper" aria-hidden="true"></i> <b>วารสาร</b> </h3>
            </div>

            <div class="panel-body panel-body-index-article"> 
                <div class="row" style="padding-top:0.5vw;">

                    <?php //foreach($article as $ar){ ?>
                    <div class="col-md-3">
                        <div class="thumbnail box-article">
                            <img src="/cctwebsystem2019/images/journals/journal_sdsu/<?php echo $article1->cover?>" class="img-responsive" style="width:250px; height:350px;"/>
                            <div class="in-box-article" style="padding:1vw">
                            <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                            <p align="center"><?php echo $article1->issue?></p>
                            <center><a target ="_blank" style=" text-align: center;" href="/cctwebsystem2019/document/doc_sdsu/journals/<?php echo $article1->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a></center>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail box-article">
                            <img src="/cctwebsystem2019/images/journals/journal_sdsu/<?php echo $article4->cover?>" class="img-responsive" style="width:250px; height:350px;"/>
                            <div class="in-box-article" style="padding:1vw">
                            <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                            <p align="center"><?php echo $article4->issue?></p>
                            <center><a target ="_blank" style=" text-align: center;" href="/cctwebsystem2019/document/doc_sdsu/journals/<?php echo $article4->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a></center>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail box-article">
                            <img src="/cctwebsystem2019/images/journals/journal_sdsu/<?php echo $article2->cover?>" class="img-responsive" style="width:250px; height:350px;"/>
                            <div class="in-box-article" style="padding:1vw">
                            <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                            <p align="center"><?php echo $article2->issue?></p>
                            <center><a target ="_blank" style=" text-align: center;" href="/cctwebsystem2019/document/doc_sdsu/journals/<?php echo $article2->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a></center>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail box-article">
                            <img src="/cctwebsystem2019/images/journals/journal_sdsu/<?php echo $article3->cover?>" class="img-responsive" style="width:250px; height:350px;"/>
                            <div class="in-box-article" style="padding:1vw">
                            <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                            <p align="center"><?php echo $article3->issue?></p>
                            <center><a target ="_blank" style=" text-align: center;" href="/cctwebsystem2019/document/doc_sdsu/journals/<?php echo $article3->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a></center>
                            </div>
                            
                        </div>
                    </div>

                    <?php //} ?>
                    
                </div> 

                <a href="index.php?r=tjournal/article" class="pull-right button-article-pr btn btn-warning btn-sm" role="button">อ่านต่อทั้งหมด</a> 
                
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------------------- -->   
        <div id="panel-index-calendar" class="panel panel-default responsive" style="margin-top:2.5vw;">
            <div id="panel-head-index-calendar" class="panel-heading">
                <h3 id="panel-title-index-calendar" class="panel-title"><b>ปฏิทินกิจกรรม</b> <i class="fas fa-users"></i></h3>
            </div>

            <div id="panel-body-index-calendar" class="panel-body" align="center">
                <div class="row">
                    <div class="col-md-7 responsive">  
                        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23eaeaea&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0;" width="100%" height="350" frameborder="0" scrolling="no"></iframe>
                    </div>
                    
                    <div class="col-md-5 responsive">
                        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23eaeaea&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0;" width="100%" height="350" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------------------- --> 
            
        <div id="panel-contact" class="panel panel-primary"> 
            <div id="panel-head-contact" class="panel-heading">
                <h3 id="panel-title-contact" class="panel-title">
                <i class="fa fa-envelope" aria-hidden="true"></i> <b>ติดต่อเรา</b>  </h3>
            </div>

            <div class="panel-body panel-body-contact"> 
                <div style="margin-left:0.5vw; margin-right:0.5vw;" class="row"> 
                    
                    <div class="col-md-6">
                        
                        <p style="font-size: 1.2vw; padding-top:0px; padding-bottom:0.7vw"><b><?php echo $model->type->type_th?> สภาคริสตจักรในประเทศไทย</b></p>
                        <?php echo $model->contactdetail_th?>
                        
                    </div>

                    <div class="col-md-6">
                        <?php echo $model->map ?>
                    </div>
                    
                </div>
                <br><br>
                <div style="margin-left:0.7vw; margin-right:0.7vw;" class="row">     
                    
                    <div class="col-md-6">
                        <p style="font-size: 1.2vw; padding-top:0px; padding-bottom:0.7vw"><b><?php echo $tei->branch->branch_th?></b></p>
                        <?php echo $tei->contactdetail_th?>
                    </div>
                    

                    <div class="col-md-6">
                        <?php echo $tei->map ?>
                    </div>
                    
                </div>
            </div>
        </div>
   
        <!---------------------------------------------------------------------------------------------------->
       
    </div>

</div>

