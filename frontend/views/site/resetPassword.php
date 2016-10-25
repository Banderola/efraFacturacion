<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reiniciar Contraseña';
?>
<div class="site-reset-password">


        <?php $form = ActiveForm::begin(['id' => 'reset-password-form','options' => ['class' => 'sign-box reset-password-box'],]) ?>
                    <header class="sign-title">Reset Password</header>

                    <div class="form-group">
                        <?= $form->field($model, 'password')->textInput(['placeholder' => 'Password','class' => 'form-control'])->label(false) ?>
                    </div>

                <div class="form-group">
                    <?= Html::submitButton('Reset', ['class' => 'btn btn-rounded', 'name' => 'login-button']) ?>
                </div>
                <p class="sign-note">o <?= Html::a('Inicio de sesión', ['site/login']) ?></p>

        <?php ActiveForm::end(); ?>

</div>




