
<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapWidgetTrait;
use yii\helpers\Html;
use web_pmu\models\Uploads;
use web_pmu\models\Banner;
use web_pmu\models\Tjournal;
$this->title = 'หน่วยงานศิษยาภิบาล';
?>

<div class="site-index">

    <div class="body-content" style="padding-bottom:2.5vw;">
        <div style="padding-bottom:1vw;">
            <marquee behavior="alternate" scrollamount="4" style="font-size:1.26vw">ข้อพระคัมภีร์ประจำหน่วยงาน... <?php echo $bible->history_th ?></marquee>
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
                        $test2 = Uploads::find()->where(['ref'=> $newreff])->orderBy('upload_id ASC')->all();
                        foreach($test2 as $test){
                        
                        ?>
                            <div class="item <?php if($j==0){echo "active";} ?>">
                                <a target ="_blank" href="document/banners/<?= $test->link?>"><img src="images/banners/<?= $test->ref?>/<?= $test->real_filename?>" alt="a" style="height:375px; " class="responsive"></a>
                                <!--<div class="carousel-caption">  
                                </div>-->
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
                            <img src="images/news/<?php echo $new->ref?>/<?php echo $pic->real_filename?>" class="img-responsive"/>
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

                    <?php foreach($article as $ar){ ?>
                    <div class="col-md-3">
                        <div class="thumbnail box-article">
                            <img src="images/journals/<?php echo $ar->cover?>" class="img-responsive" style="height:250px;"/>
                            <div class="in-box-article" style="padding:1vw">
                            <!--<b><p class="h-box-article" align="center"><?php //echo $ar->name_th ?></p></b>-->
                            <p align="center"><?php echo $ar->issue?></p>
                            <center><a target ="_blank" style=" text-align: center;" href="document/journals/<?php echo $ar->journal_file ?>" class="button-article btn btn-default btn-sm" role="button"><i class="fa fa-download" aria-hidden="true"></i> <b>ดาวน์โหลด</b></a></center>
                            </div>
                            
                        </div>
                    </div>

                    <?php } ?>
                    
                </div> 
                    
            </div>
        </div>
      <!-- ---------------------------------------------------------------------------------------------- -->   
        <!--<div id="panel-index-calendar" class="panel panel-default responsive" style="margin-top:2.5vw;">
        <div id="panel-head-index-calendar" class="panel-heading">
            <h3 id="panel-title-index-calendar" class="panel-title"><b>ปฏิทินกิจกรรม</b> <i class="fas fa-users"></i></h3>
        </div>
        <div id="panel-body-index-calendar" class="panel-body" align="center">
        <div class="row">
        <div class="col-md-7 responsive">  
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23eaeaea&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="col-md-5 responsive">
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23eaeaea&amp;src=webmaster%40cct.or.th&amp;color=%2380d1ef&amp;ctz=Asia%2FBangkok" style="border-width:0" width="420" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
        </div>
        </div>
        </div>-->
       <!-- ---------------------------------------------------------------------------------------------- --> 
        <div class="row">
            
            <div class="col-md-5">
                <div id="panel-contact" class="panel panel-primary"> 
                    <div id="panel-head-contact" class="panel-heading">
                        <h3 id="panel-title-contact" class="panel-title">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <b>ติดต่อเรา</b>  </h3>
                    </div>

                    <div class="panel-body panel-body-contact"> 
                        
                    
                        <p style="padding-top:0px; padding-bottom:19.5px"><b><?php echo $map->type->type_th?> สภาคริสตจักรในประเทศไทย</b></p>
                        <?php echo $map->contactdetail_th?>
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
<!--div class="bts-popup" role="alert">
    <div class="bts-popup-container">
    <img src="http://krochetkids.wpengine.netdna-cdn.com/wp-content/themes/kki-base/campaigns/bts/images/getYourStuffTogether.png" alt="" width="80%" />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim officiis, dignissimos voluptates atque dolorem? Ipsam reiciendis, nemo sed harum quis nobis culpa amet aperiam nisi, iusto, aliquam aspernatur, suscipit expedita.</p>
                <div class="bts-popup-button">
            <a href="#0">Enter</a>
        </div>
        <a href="#0" class="bts-popup-close img-replace">Close</a>
    </div>
</div>-->
<!-- ---------------------------------------------------------------------------------------------------- -->
<!--<style>
    .img-replace {
    /* replace text with an image */
    display: inline-block;
    overflow: hidden;
    text-indent: 100%; 
    color: transparent;
    white-space: nowrap;
    }
    .bts-popup {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
    -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
    transition: opacity 0.3s 0s, visibility 0s 0.3s;
    }
    .bts-popup.is-visible {
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
    -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
    transition: opacity 0.3s 0s, visibility 0s 0s;
    }

    .bts-popup-container {
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: 4em auto;
    background: #a0cff1;
    border-radius: none; 
    text-align: center;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
    -webkit-transform: translateY(-40px);
    -moz-transform: translateY(-40px);
    -ms-transform: translateY(-40px);
    -o-transform: translateY(-40px);
    transform: translateY(-40px);
    /* Force Hardware Acceleration in WebKit */
    -webkit-backface-visibility: hidden;
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    }
    .bts-popup-container img {
    padding: 20px 0 0 0;
    }
    .bts-popup-container p {
        color: white;
    padding: 10px 40px;
    }
    .bts-popup-container .bts-popup-button {
    padding: 5px 25px;
    border: 2px solid white;
        display: inline-block;
    margin-bottom: 10px;
    }

    .bts-popup-container a {
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    }






    .bts-popup-container .bts-popup-close {
    position: absolute;
    top: 8px;
    right: 8px;
    width: 30px;
    height: 30px;
    }
    .bts-popup-container .bts-popup-close::before, .bts-popup-container .bts-popup-close::after {
    content: '';
    position: absolute;
    top: 12px;
    width: 16px;
    height: 3px;
    background-color: white;
    }
    .bts-popup-container .bts-popup-close::before {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    left: 8px;
    }
    .bts-popup-container .bts-popup-close::after {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    right: 6px;
    top: 13px;
    }
    .is-visible .bts-popup-container {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    }
    @media only screen and (min-width: 1170px) {
    .bts-popup-container {
        margin: 8em auto;
    }
    }
</style>

<script>
jQuery(document).ready(function($){
  
  window.onload = function (){
    $(".bts-popup").delay(1000).addClass('is-visible');
	}
  
	//open popup
	$('.bts-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.bts-popup').addClass('is-visible');
	});
	
	//close popup
	$('.bts-popup').on('click', function(event){
		if( $(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.bts-popup').removeClass('is-visible');
	    }
    });
});
</script>-->