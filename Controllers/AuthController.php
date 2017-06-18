<?php

class AuthController
{
    public function actionClientsAuth()
    {
        require_once ROOT . '/Views/Auth/Clients/login.php';

        return true;
    }

    public function actionEmployeesAuth()
    {
        require_once ROOT . '/Views/Auth/Employees/login.php';

        return true;
    }
}