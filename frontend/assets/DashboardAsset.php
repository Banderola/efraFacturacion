<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/lib/lobipanel/lobipanel.min.css',
        'css/lib/jqueryui/jquery-ui.min.css',
        'css/lib/font-awesome/font-awesome.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/lib/jquery/jquery.min.js',
        'js/lib/tether/tether.min.js',
        'js/lib/bootstrap/bootstrap.min.js',
        'js/plugins.js',
        'js/lib/jqueryui/jquery-ui.min.js',
        'js/lib/lobipanel/lobipanel.min.js',
        'js/lib/match-height/jquery.matchHeight.min.js',
        'https://www.gstatic.com/charts/loader.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
