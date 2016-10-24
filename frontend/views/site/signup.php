<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
?>
<div class="site-signup">


            <?php $form = ActiveForm::begin(['id' => 'form-signup','options' => ['class' => 'sign-box'],]) ?>
                    <div class="sign-avatar no-photo">&plus;</div>
                    <header class="sign-title">Sign Up</header>

                    <div class="form-group">
                        <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username','class' => 'form-control'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email','class' => 'form-control'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        
                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password','class' => 'form-control'])->label(false) ?>
                    </div>
                    

                <div class="form-group">
                    <?= Html::submitButton('Sign up', ['class' => 'btn btn-rounded', 'name' => 'signup-button']) ?>
                </div>
                <p class="sign-note">Already have an account? <?= Html::a('Sign in', ['site/login']) ?></p>

            <?php ActiveForm::end(); ?>
       
    


</div>


