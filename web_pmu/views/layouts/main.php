<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use web_pmu\assets\AppAsset;
use common\widgets\Alert;
use web_pmu\models\Tcontact;
use web_pmu\models\Tnew;

//raoul2000\bootswatch\BootswatchAsset::$theme = 'cosmo';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/cctwebsystem2019/images/about/about_sdsu/k11.png" class="img-responsive pull-left" width="40" height="35" />'.' '.'<div style="margin:15px;" class="pull-right">'.Yii::$app->name.'</div>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top meenny',
            //'style' => 'background-color:red'
        ],
    ]);
    $menuItems = [
        ['label' => 'หน้าหลัก', 'url' => ['/site/index']],
        [
            'label' => 'เกี่ยวกับเรา',
            'items' => [
                 ['label' => 'เกี่ยวกับเรา', 'url' => ['/thistory/about']],
                 ['label' => 'ประวัติความเป็นมา', 'url' => ['thistory/history']],
                 ['label' => 'โครงสร้างองค์กร', 'url' => ['thistory/struct']],
            ],
        ],
        [
            'label' => 'พันธกิจ', 
            'items' => [
                ['label' => 'พันธกิจ', 'url' => ['thistory/pan']],
                ['label' => 'แผนงานหลัก', 'url' => ['thistory/plan']],
                ['label' => 'โครงการ', 'url' => ['tproject/project']],
                ['label' => 'ปฏิทินกิจกรรม', 'url' => ['/site/calendar']],
            ]
        ],
        ['label' => 'ร่วมสนับสนุน', 'url' => ['/site/donate']],
        ['label' => 'ข่าวสาร', 'url' => ['tnew/news']],
        [
            'label' => 'วารสาร', 
            'items' => [
                ['label' => 'วารสาร', 'url' => ['tjournal/article']],
                ['label' => 'บทความ', 'url' => ['tjournal/article2']],
                
           ],
        ],
        ['label' => 'แบบฟอร์ม', 'url' => ['/tdocument/document']],
        ['label' => 'ติดต่อเรา', 'url' => ['/tcontact/contact']],
        
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => [ 
                'label' => 'หน้าหลัก',
                'url' => Yii::$app->homeUrl,
                'style' => 'color:#375a7f'
           ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?>   สภาคริสตจักรในประเทศไทย </p>

        <p class="pull-right"> <i class="fa fa-phone-square" aria-hidden="true"></i>  โทรศัพท์ 053-244381 ต่อ 304 </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
