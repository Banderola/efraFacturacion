<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "createPost" permission
        $create = $auth->createPermission('create');
        $create->description = 'Create';
        $auth->add($create);

        // add "updatePost" permission
        $view = $auth->createPermission('view');
        $view->description = 'View';
        $auth->add($view);

        // add "author" role and give this role the "createPost" permission
        $client = $auth->createRole('client');
        $auth->add($client);
        $auth->addChild($client, $view);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $create);
        $auth->addChild($admin, $client);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($client, 2);
        $auth->assign($admin, 1);
    }
}