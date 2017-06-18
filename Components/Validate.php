<?php

class Validate
{
    public static function checkLogin($login)
    {
        if (preg_match('~^[a-zA-Z0-9\._]+$~', $login)) {
            return true;
        }

        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) > 6) {
            return true;
        }

        return false;
    }

    public static function checkRePassword($password, $re_password)
    {
        if ($password === $re_password) {
            return true;
        }

        return false;
    }

    public static function checkName($name)
    {
        if (strlen($name) > 3) {
            return true;
        }

        return false;
    }
}