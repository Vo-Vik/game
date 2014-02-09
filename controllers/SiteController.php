<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
    * This is the default 'index' action that is invoked
    * when an action is not explicitly requested by users.
    */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
