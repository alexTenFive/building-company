<?php

class RegistrationController
{
    public function actionIndex()
    {
        $login = '';
        $password = '';
        $re_password = '';
        $cname = '';
        $phone = '';
        $address = '';
        $cicode = '';

        $errors = false;

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $re_password = $_POST['re_password'];
            $cname = $_POST['cname'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $ctype = $_POST['ctype'];
            $cicode = $_POST['cicode'];

            if (!Validate::checkName($cname)) {
                $errors[] = "Имя должно быть длиннее 3-х символов!";
            }

            if (!Validate::checkLogin($login)) {
                $errors[] = "Пароль может сожержать только a-zA-Z0-9 точку и подчёркивание";
            }

            if (!Clients::checkUser($login)) {
                $errors[] = "Пользователь с таким логином уже существует!";
            }

            if (!Validate::checkPassword($password)) {
                $errors[] = "Пароль должен быть больше 6 символов!";
            }

            if (!Validate::checkRePassword($password, $re_password)) {
                $errors[] = "Пароли не совпадают!";
            }

            if (Clients::checkUser($login)) {
                Clients::registrateUser($cname, $phone, $ctype, $cicode, $address, $login, $password);

                header('Location: registration/success');
            }



        }

        require_once ROOT . '/Views/Registration/registration.php';

        return true;
    }

    public function actionSuccess()
    {
        require_once ROOT . '/Views/Registration/success.php';

        return true;
    }
}