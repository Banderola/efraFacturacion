<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\DashboardAsset;
use yii\bootstrap\ActiveForm;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="with-side-menu control-panel control-panel-compact">
<?php $this->beginBody() ?>

<div class="wrap">
    <header class="site-header">
        <div class="container-fluid">
            <a href="#" class="site-logo">
                <img class="hidden-md-down" src="img/logo-2.png" alt="">
                <img class="hidden-lg-up" src="img/logo-2-mob.png" alt="">
            </a>
            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">
                        <div class="dropdown dropdown-notification notif">
                            <a href="#"
                               class="header-alarm dropdown-toggle active"
                               id="dd-notification"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <i class="font-icon-alarm"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
                                <div class="dropdown-menu-notif-header">
                                    Notifications
                                    <span class="label label-pill label-danger">4</span>
                                </div>
                                <div class="dropdown-menu-notif-list">
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-1.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Morgan</a> was bothering about something
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-2.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-3.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-4.jpg" alt="">
                                        </div>
                                        <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-notif-more">
                                    <a href="#">See more</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="dropdown dropdown-notification messages">
                            <a href="#"
                               class="header-alarm dropdown-toggle active"
                               id="dd-messages"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <i class="font-icon-mail"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
                                <div class="dropdown-menu-messages-header">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active"
                                               data-toggle="tab"
                                               href="#tab-incoming"
                                               role="tab">
                                                Inbox
                                                <span class="label label-pill label-danger">8</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               data-toggle="tab"
                                               href="#tab-outgoing"
                                               role="tab">Outbox</a>
                                        </li>
                                    </ul>
                                    <!--<button type="button" class="create">
                                        <i class="font-icon font-icon-pen-square"></i>
                                    </button>-->
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-incoming" role="tabpanel">
                                        <div class="dropdown-menu-messages-list">
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/ava.jpg" alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/ava.jpg" alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something...</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-outgoing" role="tabpanel">
                                        <div class="dropdown-menu-messages-list">
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/ava.jpg" alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/img/ava.jpg" alt=""></span>
                                                <span class="mess-item-name">Christian Burtons</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-notif-more">
                                    <a href="#">See more</a>
                                </div>
                            </div>
                        </div>
       
                        <div class="dropdown user-menu">
                            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/ava.jpg" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
                                <div class="dropdown-divider"></div>
                                <!--<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>-->
                                
                                <?php $form = ActiveForm::begin(['action' =>['site/logout'],]) ?>
                                <?= Html::submitButton('<span class="font-icon glyphicon glyphicon-log-out"></span>Logout (admin)', ['class' => 'dropdown-item btn-link', 'name' => 'login-button']) ?>
                                <?php ActiveForm::end(); ?>
                                
                            </div>
                        </div>
    
                        <button type="button" class="burger-right">
                            <i class="font-icon-menu-addl"></i>
                        </button>
                    </div><!--.site-header-shown-->
    
                    <div class="mobile-menu-right-overlay"></div>
                    <div class="site-header-collapsed">
                        <div class="site-header-collapsed-in">
                            <div class="dropdown dropdown-typical">
                                <div class="dropdown-menu" aria-labelledby="dd-header-sales">
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                      
                            
                </div><!--site-header-content-in-->
            </div><!--.site-header-content-->
        </div><!--.container-fluid-->
    </header><!--.site-header-->
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="grey">
                <span>
                    <i class="font-icon font-icon-home"></i>
                    <span class="lbl">Inicio</span>
                
            </li>
            <li class="brown">
                <span>
                    <i class="glyphicon glyphicon-tasks"></i>
                    <span class="lbl">Informe General</span>
                </span>
            </li>
            <li class="purple">
                <span>
                    <i class="fa fa-file-text"></i>
                    <span class="lbl">Facturacción</span>
                </span>
                
            </li>
            <li class="green">
                <a href="mail.html">
                    <i class="font-icon font-icon-wallet"></i>
                    <span class="lbl">Liquidaciones</span>
                </a>
            </li>
            <li class="red">
                <a href="mail.html">
                    <i class="font-icon font-icon-case-2"></i>
                    <span class="lbl">Seguridad Social</span>
                </a>
            </li>
            <li class="gold with-sub">
                <span>
                    <i class="font-icon font-icon-user"></i>
                    <span class="lbl">Socios</span>
                </span>
                <ul>
                    <li><a href="ui-form.html"><span class="lbl">Listado</span></a></li>
                    <li><a href="ui-buttons.html"><span class="lbl">Nuevo</span></a></li>
                </ul>
            </li>
            <li class="blue-sky with-sub">
                <span>
                    <i class="font-icon font-icon-contacts"></i>
                    <span class="lbl">Contactos</span>
                </span>
                <ul>
                    <li><a href="ui-form.html"><span class="lbl">Listado</span></a></li>
                    <li><a href="ui-buttons.html"><span class="lbl">Nuevo</span></a></li>
                </ul>
            </li>
            <li class="aquamarine">
                <a href="tables.html">
                    <span class="fa fa-pencil-square-o"></span>
                    <span class="lbl">Tareas</span>
                </a>
            </li>
            <li class="gold with-sub">
                 <span>
                    <i class="fa fa-folder-open"></i>
                    <span class="lbl">Catálogos</span>
                 </span>
                 <ul>
                    <li><a href="ui-form.html"><span class="lbl">Profeciones</span></a></li>
                    <li><a href="ui-buttons.html"><span class="lbl">Estado Socios</span></a></li>
                    <li><a href="ui-buttons.html"><span class="lbl">Provincia</span></a></li>
                    <li><a href="ui-buttons.html"><span class="lbl">Municipio</span></a></li>
                </ul>
            </li>
            <li class="red">
                <a href="tables.html">
                    <span class="font-icon font-icon-del"></span>
                    <span class="lbl">Salir</span>
                </a>
            </li>
            
    </nav><!--.side-menu-->
    
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
