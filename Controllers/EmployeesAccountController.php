<?php

/**
 * Created by PhpStorm.
 * User: sic-12
 * Date: 18.06.2017
 * Time: 15:00
 */
class EmployeesAccountController
{
    public function actionIndex()
    {
        require_once ROOT . '/Views/Account/Employees/index.php';

        return true;
    }
}