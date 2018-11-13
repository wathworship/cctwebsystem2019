<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use web_sdsu\assets\AppAsset;
use common\widgets\Alert;
use web_sdsu\models\Tcontact;
use web_sdsu\models\Tnew;

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
        'brandLabel' => '<img src="images/about/women.png" class="img-responsive pull-left" width="40" height="35" />'.' '.'<div style="margin:15px;" class="pull-right">'.Yii::$app->name.'</div>',
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
                 ['label' => 'วิสัยทัศน์ วัตถุประสงค์ เป้าหมาย', 'url' => ['/thistory/tus']],
                 ['label' => ' ข้อพระคัมภีร์ประจำหน่วยงาน', 'url' => ['/thistory/bible']],
                 ['label' => 'ประวัติความเป็นมา', 'url' => ['thistory/history']],
                 ['label' => 'โครงสร้างองค์กร', 'url' => ['thistory/struct']],
            ],
        ],
        [
            'label' => 'สตรีคริสเตียนสภาฯ',
            'items' => [
                 ['label' => 'ประวัติสตรีคริสเตียนสภาฯ', 'url' => ['/thistory/about2']],
                 ['label' => 'วิสัยทัศน์ วัตถุประสงค์ เป้าหมาย', 'url' => ['/thistory/tus2']],
                 ['label' => 'โครงสร้างการบริหารงานสตรีคริสเตียนสภาฯ', 'url' => ['/thistory/struct2']],
                 ['label' => 'พันธกิจของสตรีคริสเตียนสภาฯ', 'url' => ['thistory/pan2']],
            ],
        ],
        [
            'label' => 'พันธกิจ', 
            'items' => [
                ['label' => 'พันธกิจและยุทธศาสตร์', 'url' => ['thistory/pan']],
				['label' => 'การประสานงานระหว่างหน่วยงาน', 'url' => ['thistory/yut']],
                ['label' => 'แผนงานตอบสนองนโยบายสภาคริสตจักร', 'url' => ['thistory/plan']],
                ['label' => 'โครงการ', 'url' => ['tproject/project']],
				['label' => 'ตัวชี้วัด', 'url' => ['thistory/wat']],
                ['label' => 'ปฏิทินกิจกรรม', 'url' => ['/site/calendar']],
            ]
        ],
        ['label' => 'ข่าวสาร', 'url' => ['tnew/news']],
        [
            'label' => 'วารสาร', 
            'items' => [
                ['label' => 'วารสาร', 'url' => ['tjournal/article']],
                ['label' => 'บทความ', 'url' => ['tjournal/article2']],
                
           ],
        ],
        ['label' => 'ดาวน์โหลด', 'url' => ['/tdocument/document']],
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
		<p class="pull-left">&copy; สภาคริสตจักรในประเทศไทย. สงวนลิขสิทธิ์.</p>

        <p class="pull-right">ออกแบบโดย: ฝ่ายสารสนเทศ สภาคริสตจักรในประเทศไทย</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
