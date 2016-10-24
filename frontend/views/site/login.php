<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    
            <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'sign-box'],]) ?>
                    <div class="sign-avatar">
                        <?php echo Html::img('@web/img/avatar-sign.png') ?>
                    </div>
                    <header class="sign-title">Sign In</header>

                    <div class="form-group">
                        <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username','class' => 'form-control'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        
                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password','class' => 'form-control'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-1\">{input} {label}</div>",
        ]); ?>
                        </div>
                        <div class="float-right reset">
                            <?= Html::a('Reset Password', ['site/request-password-reset']) ?>
                        </div>
                    </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-rounded', 'name' => 'login-button']) ?>
                </div>
                <p class="sign-note">New to our website? <?= Html::a('Sign up', ['site/signup']) ?></p>

            <?php ActiveForm::end(); ?>
        
</div>


