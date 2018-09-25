
<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapWidgetTrait;
use yii\helpers\Html;
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

       
    </div>

</div>

