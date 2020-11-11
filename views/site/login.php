<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Tizimga kirish</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Xush kelibiz!</p>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form'
    ]); ?>
        
        <?php
        $fieldOptions1 = [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
        ]; ?>

        <?= $form->field($model, 'username', $fieldOptions1)->textInput(['autofocus' => true, 'placeholder' => 'Login'])->label(false); ?>
      
        <?php
        $fieldOptions2 = [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
        ]; ?>
        <?= $form->field($model, 'password', $fieldOptions2)->passwordInput(['placeholder' => 'Parol'])->label(false); ?>

      
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?= Html::submitButton('<i class="fa fa-sign-in"></i> Kirish', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
        </div>
        <!-- /.col -->
      </div>
    

    <?php ActiveForm::end(); ?>

    <a href="#">do something</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->