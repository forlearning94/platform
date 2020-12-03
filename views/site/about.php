<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\User;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="background-color: white;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <p>
        <?= (Yii::$app->user->identity) ? Yii::$app->user->identity->firstname: "Guest"; ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
