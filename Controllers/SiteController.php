<?php

class SiteController
{

    public function actionIndex()
    {
        $objects = Objects::getObjects(3);
        require_once ROOT . '/Views/Site/index.php';
    }
}