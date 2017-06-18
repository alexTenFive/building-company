<?php

/**
 * Created by PhpStorm.
 * User: sic-12
 * Date: 18.06.2017
 * Time: 14:59
 */
class ClientsAccountController
{
    public function actionIndex()
    {
        $result = Clients::checkLogged();

        require_once ROOT . '/Views/Account/Clients/index.php';

        return true;
    }
}