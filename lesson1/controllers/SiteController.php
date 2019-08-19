<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 19.08.2019
 * Time: 13:44
 */

namespace app\controllers;


use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex ()
    {
        return $this->render('index');
    }
}