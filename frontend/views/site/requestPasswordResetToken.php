<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
?>
<div class="site-request-password-reset">

        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form','options' => ['class' => 'sign-box reset-password-box'],]) ?>
                    <header class="sign-title">Reset Token</header>

                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email','class' => 'form-control'])->label(false) ?>
                    </div>

                <div class="form-group">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-rounded', 'name' => 'login-button']) ?>
                </div>
                <p class="sign-note">or <?= Html::a('Sign in', ['site/login']) ?></p>

        <?php ActiveForm::end(); ?>
    
</div>
