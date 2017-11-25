<?php

namespace app\controllers;

use yii\web\ErrorAction;

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
                'class' => ErrorAction::class,
                'view' => '/etc/error.twig'
            ],
        ];
    }

    /**
     * Index page
     *
     * @return string
     * @throws \yii\base\InvalidParamException
     */
    public function actionIndex()
    {
        return $this->render('index.twig');
    }
}
