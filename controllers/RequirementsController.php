<?php

namespace fxdsp\controllers;

use yii\web\Controller;

/**
 * Default controller for the `requirements` module
 */
class RequirementsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
