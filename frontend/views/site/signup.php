<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Crear cuenta';
?>
<div class="site-signup">


            <?php $form = ActiveForm::begin(['id' => 'form-signup','options' => ['class' => 'sign-box'],]) ?>
                    <div class="sign-avatar no-photo">&plus;</div>
                    <header class="sign-title">Crear Cuenta</header>

                    <div class="form-group">
                        <?= $form->field($model, 'username')->textInput(['placeholder' => $model->getAttributeLabel('username'),'class' => 'form-control'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        
                        <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email'),'class' => 'form-control'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        
                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password'),'class' => 'form-control'])->label(false) ?>
                    </div>
                    

                <div class="form-group">
                    <?= Html::submitButton('Crear Cuenta', ['class' => 'btn btn-rounded', 'name' => 'signup-button']) ?>
                </div>
                <p class="sign-note">¿Ya tienes una cuenta? <?= Html::a('Inicio de sesión', ['site/login']) ?></p>

            <?php ActiveForm::end(); ?>
       
    


</div>


