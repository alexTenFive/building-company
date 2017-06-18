<?php

class SiteController
{

    public function actionIndex()
    {
        $objects = Objects::getObjects();
        require_once ROOT . '/Views/Site/index.php';
    }
}