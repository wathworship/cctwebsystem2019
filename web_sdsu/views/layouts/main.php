<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use web_sdsu\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'หน่วยงานพัฒนาและบริการสังคม',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            //'style' => 'background-color:red'
        ],
    ]);
    $menuItems = [
        ['label' => 'หน้าแรก', 'url' => ['/site/index']],
        [
            'label' => 'เกี่ยวกับ',
            'items' => [
                 ['label' => 'เกี่ยวกับ', 'url' => ['/site/about']],
                 ['label' => 'ประวัติความเป็นมา', 'url' => '/dev-social/frontend/web/index.php?r=site%2Fhistory'],
                 ['label' => 'โครงสร้างองค์กร', 'url' => '/site/construct'],
                 ['label' => 'คำขวัญ', 'url' => '/site/poem'],
                 ['label' => 'วิสัยทัศน์', 'url' => 'index.php?r=thistory/tus'],
                 ['label' => 'ข้อพระคัมภีร์ประจำหน่วยงาน', 'url' => 'index.php?r=thistory/bible'],
                 ['label' => 'ความหมายตราสัญลักษณ์', 'url' => 'index.php?r=thistory/sign'],
            ],
        ],
        ['label' => 'พันธกิจ', 'url' => ['/site/pan']],
        ['label' => 'ปฏิทินกิจกรรม', 'url' => ['/site/calendar']],
        ['label' => 'ข่าวสาร', 'url' => ['/site/news']],
        ['label' => 'วารสาร', 'url' => ['/site/article']],
        ['label' => 'แบบฟอร์ม', 'url' => ['/document/download']],
        ['label' => 'ติดต่อเรา', 'url' => ['/tcontact/vcontact']],
        
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
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
