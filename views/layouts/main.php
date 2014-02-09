<?php
use yii\helpers\Html;

/**
* @var \yii\web\View $this
* @var string $content
*/
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
<meta charset="<?php echo Yii::$app->charset ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo Html::encode($this->title) ?></title>
<?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div>
<?php echo $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>