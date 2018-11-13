<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use web_women\models\Thistory;
use web_women\models\Tperson;


$this->title = 'โครงสร้างองค์กร';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-struct">

    <div style="padding-bottom:0.5vw;">
        <marquee behavior="alternate" scrollamount="4" style="font-size:1.08vw"></marquee>
    </div>

    <ul class="breadcrumb">
        <li><a style="color:#375a7f" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าหลัก</a></li>
        <li class="active"><?= $this->title ?></li>
    </ul>

               
    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail box-about">
                
                <div align="center" class="in-box-about" style="padding:1.5vw">
                <b><p class="h-box-about" ><?php echo $model->dhistory->d_history_th ?></p></b>
                <img   src="/cctwebsystem2019/images/struct/struct_sdsu/<?php echo $model->ref?>" style="width:50vw; height:30vw;">
                <!--<p><?php echo $model->history_th?></p>-->
                </div>
                
            </div>

            <div class="thumbnail box-about">
                
                <div class="in-box-about" style="padding:1.5vw">
                    <center><b><p class="h-box-about" ><?php echo $manager1->department->department_th ?></p></b></center>
                    <center>
                        <div class="table-responsive" style="padding-top:1.5vw;">          
                            <table border="0" >
                                <tbody>
                                    <?php 
                                    $i=1;
                                    foreach($manager as $m) {?>
                                    <tr border="0">
                                        <td><p><?php echo $i?>.&nbsp;</p></td>
                                        <td><p><?php echo $m->prefix->prefix_th?><?php echo $m->firstname_th?> <?php echo $m->lastname_th?></p></td>                                   
                                        <td><p style="margin-left:3vw;"><?php echo $m->position->position_th?></p></td>
                                    </tr>
                                    <?php 
                                    $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
                
            </div>
        </div>

        <!--<div class="col-md-3">

            <?//= $this->render('form', [
                    //'model' => $model,
            //]) ?>
        
        </div>-->

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail box-about">
                <div align="center" class="in-box-about" style="padding:1.5vw">
                        <b><p class="h-box-about" ><?php echo $director->department->department_th?></p></b>
                        <br>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/cctwebsystem2019/images/organisation/organisation_sdsu/t1.JPG" style="width:20vw;">
                            <p style="margin-top:1.5vw;"><b><?php echo $director->prefix->prefix_th?><?php echo $director->firstname_th?> <?php echo $director->lastname_th?></b></p>
                            <p><?php echo $director->position->position_th?></p>
                        </div>

                        
                        <div class="col-md-8">
                            <div class="row">
                                
                                <?php foreach($deputy_director as $deputy){ ?>
                                <div class="col-md-4">
                                    <img src="/cctwebsystem2019/images/organisation/organisation_sdsu/<?php echo $deputy->img?>" class="img-circle" style="width:13vw;">
                                    <p style="margin-top:1.5vw;"><b><?php echo $deputy->prefix->prefix_th?><?php echo $deputy->firstname_th?> <?php echo $deputy->lastname_th?></b></p>
                                    <p><?php echo $deputy->position->position_th?></p>
                                </div>
                                <?php } ?>
                                

                            </div>

                            <!-- ------------ฝ่ายพัฒนาคริสตจักรและชุมชนเชียงใหม่--------------------- -->
                            <div class="row">
                                <div style="margin-top:3vw;margin-bottom:1vw; font-size:1.4vw;" class="col-md-12">
                                <center><b><u><p><?php echo $community1->department->department_th?></p></u></b></center>
                                </div>

                                <!--<div class="col-md-1"></div>-->

                                <?php foreach($community as $commu){ ?>
                                <div class="col-md-6">
                                    <img src="/cctwebsystem2019/images/organisation/organisation_sdsu/<?php echo $commu->img?>" class="img-circle" style="width:13vw;">
                                    <p style="margin-top:1.5vw;"><b><?php echo $commu->prefix->prefix_th?><?php echo $commu->firstname_th?> <?php echo $commu->lastname_th?></b></p>
                                    <p><?php echo $commu->position->position_th?></p>
                                </div>
                                <?php } ?>
                                <!--<div class="col-md-1"></div>-->
                            </div>

                            <!-- ---------โครงการศูนย์พัฒนาและบริการคลองเตย--------------------- -->                            
                                
                            <div style="margin-top:4vw;margin-bottom:1vw; font-size:1.4vw;" class="col-md-12">
                                <center><b><u><p><?php echo $tei1->department->department_th?></p></u></b></center>
                            </div>

                            <div class="row">  
                             
                                <?php foreach($tei as $t){ ?>
                                    <div class="col-md-4">
                                        <div style="height:22vw;">
                                            <img src="/cctwebsystem2019/images/organisation/organisation_sdsu/<?php echo $t->img ?>" class="img-circle" style="width:13vw; margin-bottom:1vw;">
                                            <p><b><?php echo $t->prefix->prefix_th?><?php echo $t->firstname_th?> <?php echo $t->lastname_th?></b></p>
                                            <p><?php echo $t->position->position_th?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            
                            </div> 

                            <!-- -------------องค์กรเพื่อนบ้านชุมชนแห่งความหวังออสเตรเลีย----------------------- -->
                            <div style="margin-top:1vw;margin-bottom:1vw; font-size:1.4vw;" class="col-md-12">
                                <center><b><u><p><?php echo $commu_aus1->department->department_th?></p></u></b></center>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>                           
                                
                                <?php foreach($commu_aus as $aus){ ?>
                                <div class="col-md-4">
                                    <img src="/cctwebsystem2019/images/organisation/organisation_sdsu/<?php echo $aus->img?>" class="img-circle" style="width:13vw;">
                                    <p style="margin-top:1.5vw;"><b><?php echo $aus->prefix->prefix_th?><?php echo $aus->firstname_th?> <?php echo $aus->lastname_th?></b></p>
                                    
                                </div>
                                <?php } ?>
                                
                                <div class="col-md-2"></div>
                            </div>
                            <!-- -------------------------------------------------------------------------- -->
                            </div> 

                            

                   

                    </div>
                </div>

            </div>
        </div>


    </div>
 

</div>

