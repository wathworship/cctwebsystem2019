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

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
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
        'brandLabel' => '<img src="image/pet.png" class="img-responsive pull-left" width="40" height="35"/>'.' '.'<div style="margin:15px" class="pull-right">'.Yii::$app->name.'</div>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top meenny',
            //'style' => 'background-color:red'
        ],
    ]);
    $menuItems = [
        ['label' => 'หน้าหลัก', 'url' => ['/site/index']],
        [
            'label' => 'เกี่ยวกับ',
            'items' => [
                 ['label' => 'เกี่ยวกับเรา', 'url' => ['/thistory/about']],
                 ['label' => 'ประวัติความเป็นมา', 'url' => '#'],
                 ['label' => 'โครงสร้างองค์กร', 'url' => '#'],
            ],
        ],
        [
            'label' => 'พันธกิจ', 
            'items' => [
                ['label' => 'พันธกิจ', 'url' => '#'],
                ['label' => 'โครงการ', 'url' => '#'],
            ]
        ],
        ['label' => 'ปฏิทินกิจกรรม', 'url' => ['#']],
        ['label' => 'ข่าวสาร', 'url' => ['#']],
        ['label' => 'วารสาร', 'url' => ['#']],
        ['label' => 'แบบฟอร์ม', 'url' => ['#']],
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
