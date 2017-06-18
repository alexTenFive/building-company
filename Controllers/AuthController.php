<?php

class AuthController
{
    public function actionClientsAuth()
    {
        $login = '';
        $password = '';

        $errors = false;

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            if (!Validate::checkLogin($login)) {
                $errors[] = "Неправильный логин!";
            }

            if (!Validate::checkPassword($password)) {
                $errors[] = "Слишком короткий пароль!";
            }

            $clientId = Clients::checkClientsData($login, $password);

            if ($clientId == false) {
               $errors[] = "Неверные данные для входа в систему";
            } else {
                Clients::auth($clientId);

                header('Location: account');
            }


        }

        require_once ROOT . '/Views/Auth/Clients/login.php';

        return true;
    }

    public function actionEmployeesAuth()
    {
        $login = '';
        $password = '';

        $errors = false;

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            if (!Validate::checkLogin($login)) {
                $errors[] = "Неправильный логин!";
            }

            if (!Validate::checkPassword($password)) {
                $errors[] = "Слишком короткий пароль!";
            }

            $employeeId = Employees::checkEmployeesData($login, $password);

            if ($employeeId == false) {
                $errors[] = "Неверные данные для входа в систему";
            } else {
                Employees::auth($employeeId);

                header('Location: account');
            }


        }

        require_once ROOT . '/Views/Auth/Employees/login.php';

        return true;
    }
}