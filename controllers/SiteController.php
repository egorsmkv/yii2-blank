<?php

namespace app\controllers;

/**
 * Main controller
 *
 * @package app\controllers
 */
class SiteController extends BaseController
{
    /**
     * Show errors
     *
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '/etc/error.twig'
            ],
        ];
    }

    /**
     * Index page
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index.twig');
    }
}
