<?php

class SiteController
{
    public function actionIndex()
    {
        $clients = Clients::getAllClients();
        require_once ROOT . '/Views/Site/index.php';
    }
}