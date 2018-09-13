
<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapWidgetTrait;
use yii\helpers\Html;
use web_sdsu\models\Uploads;
$this->title = 'หน่วยงานพัฒนาและบริการสังคม'
?>
<div class="site-index">

    <div class="body-content" style="padding-bottom:2.5vw;">
        <div style="padding-bottom:1vw;">
            <marquee behavior="alternate" scrollamount="4" style="font-size:1.3vw">"เราบอกความจริงแก่ท่านทั้งหลายว่า ซึ่งท่านได้กระทำแก่คนใดคนหนึ่งในพวกพี่น้องของเรานี้ ถึงแม้จะต่ำต้อยเพียงไร ก็เหมือนได้กระทำแก่เราด้วย" (มัทธิว 25:40)</marquee>
        </div>
        
        <div class="pull-right">
            <img src="image/k11.png" class="img-responsive" style="width:14vw; height:14vw;padding:0.5vw;"/>
            
            <div class"pull-right" style="padding:2vw;">
            <a href="http://www.cct.or.th">
            <img src="image/cct.gif" class="img-responsive" style="width:10vw; height:10vw"/>
            </a>
            <img src="image/Capture.jpg" class"img=responsive" style="width:11.3vw; height:1.8vw">
            
            </div>
            
        </div>
        <div style="margin-bottom:30.5vw">
        <div class="pull-left">
            <?= Carousel::widget([
                    'items' => [
                        // the item contains only the image
                        '<img src="image/b1.jpg" style="width:68vw; height:28vw"/>',
                        // equivalent to the above
                        ['content' => '<img src="image/k8p17.jpg" style="width:68vw; height:28vw"/>'],
                     
                        // the item contains both the image and the caption
                        [
                            'content' => '<img src="image/ban2.jpg" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/job.jpg" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/banner3.jpg" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/ban1.png" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/banner4.png" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/banner2.jpg" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/banner8.png" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                        [
                            'content' => '<img src="image/bannner10.png" style="width:68vw; height:28vw"/>',
                            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                            //'options' => ['class' => 'img-index'],
                        ],
                    ]
                ]);
            ?>
        </div>
        
        </div>

<!-- ------------------------------------------------------------------------------------------------ -->    

    <div id="panel-index-news" class="panel panel-default"> 
        <div id="panel-head-index-news" class="panel-heading">
            <h3 id="panel-title-index-news" class="panel-title">
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b>ข่าวสารหน่วยงานพัฒนาและบริการสังคม</b> </h3>
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
                        <img src="<?php echo $pic->real_filename?>" class="img-responsive"/>
                        <div class="in-box-news" style="padding:1vw">
                        <b><p class="h-box-news"><?php echo $new->newname_th?></p></b>
                        <p>วันที่ <?php echo $new->date_add ?></p>
                        <p><?php echo $new->newtype->new_th ?></p>
                        <a href="#" class="button-news btn btn-default btn-sm" role="button"><b>อ่านต่อ</b></a>
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
            <i class="fa fa-newspaper" aria-hidden="true"></i> <b>วารสารสภาคริสตจักร</b> </h3>
        </div>

        <div class="panel-body panel-body-index-article"> 
            <div class="row" style="padding-top:0.5vw;">

                <?php foreach($article as $ar){ ?>
                <div class="col-md-3">
                    <div class="thumbnail box-article">
                        <img src="<?php echo $ar->cover?>" class="img-responsive" style="width:160px; height:200px"/>
                        <div class="in-box-article" style="padding:1vw">
                        <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                        <p align="center"><?php echo $ar->issue?></p>
                        <a style=" text-align: center;" href="<?php echo $ar->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
                
            </div> 
                
        </div>
        </div>
<!-- ---------------------------------------------------------------------------------------------- -->   
        <div id="panel-index-calendar" class="panel panel-default" style="margin-top:2.5vw;">
        <div id="panel-head-index-calendar" class="panel-heading">
            <h3 id="panel-title-index-calendar" class="panel-title"><b>ปฏิทินกิจกรรม</b> <i class="fas fa-users"></i></h3>
        </div>
        <div id="panel-body-index-calendar" class="panel-body" align="center">
        <div class="row">
        <div class="col-md-7">  
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23ccffff&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="col-md-5">
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ccffff&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0" width="420" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
        </div>
        </div>
        </div>
<!-- ---------------------------------------------------------------------------------------------- --> 
        
        <div class="row">
        
            <div class="col-md-5">
                <div id="panel-contact" class="panel panel-primary"> 
                    <div id="panel-head-contact" class="panel-heading">
                        <h3 id="panel-title-contact" class="panel-title">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <b>ติดต่อเรา</b>  </h3>
                    </div>

                    <div class="panel-body panel-body-contact"> 
                        
                    
                        <p style="font-size: 1.2vw; padding-top:0px; padding-bottom:0.7vw"><b><?php echo $map->type->type_th?> สภาคริสตจักรในประเทศไทย</b></p>
                        <?php echo $map->contactdetail_th?>
                    <br>
                    <br>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div id="panel-contact" class="panel panel-primary"> 
                    <div id="panel-head-contact" class="panel-heading">
                        <h3 id="panel-title-contact" class="panel-title">
                        <span class="glyphicon glyphicon-map-marker"></span> <b>แผนที่</b>  </h3>
                    </div>
                    <div class="panel-body panel-body-contact2"> 
                        <?php echo $map->map ?>
                    </div>
                </div>
            </div>
        </div>
<!---------------------------------------------------------------------------------------------------->
       
    </div>

</div>

