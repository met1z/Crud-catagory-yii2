<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" style="font-size: 16px;" class="h-100">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="u-body u-xl-mode" data-lang="ru">
<?php $this->beginBody() ?>
<?= app\components\NavbarWidget::widget()?>
<?=$content ?>
<?= app\components\FooterWidget::widget()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>