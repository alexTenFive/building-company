<?php

class Employees
{
    public static function checkEmployeesData($login, $password)
    {
        $db = DB::getConnection();

        $password = md5($password);

        $query = "SELECT * FROM main.employee WHERE login = :login AND password = :password";

        $res = $db->prepare($query);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->bindValue(':login', $login, PDO::PARAM_STR);
        $res->bindValue(':password', $password, PDO::PARAM_STR);
        $res->execute();

        $row = $res->fetch();

        if ($row) {
            return $row['personnel_number'];
        }
    }

    public static function auth($employee_id)
    {
        $_SESSION['employee'] = $employee_id;
    }

    public static function checkLogged()
    {
        if (isset($_SESSION['employee'])) {
            return $_SESSION['employee'];
        }

        header('Location: auth');
    }
}