<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Peticion de reinicio de contraseña';
?>
<div class="site-request-password-reset">

        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form','options' => ['class' => 'sign-box reset-password-box'],]) ?>
                    <header class="sign-title">Clave de Reinicio</header>

                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email'),'class' => 'form-control'])->label(false) ?>
                    </div>

                <div class="form-group">
                    <center><?= Html::submitButton('Enviar', ['class' => 'btn btn-rounded', 'name' => 'login-button']) ?></center>
                </div>
                <p class="sign-note">o <?= Html::a('Inicio de sesión', ['site/login']) ?></p>

        <?php ActiveForm::end(); ?>
    
</div>
