<?php

class Clients
{
    public static function checkClientsData($login, $password)
    {
        $db = DB::getConnection();

        $password = md5($password);

        $query = "SELECT * FROM main.client WHERE login = :login AND password = :password";

        $res = $db->prepare($query);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->bindValue(':login', $login, PDO::PARAM_STR);
        $res->bindValue(':password', $password, PDO::PARAM_STR);
        $res->execute();

        $row = $res->fetch();

        if ($row) {
            return $row['client_id'];
        }
    }

    public static function checkUser($login)
    {
        $db = DB::getConnection();

        $query = "SELECT COUNT(*) FROM main.client WHERE login = :login";

        $res = $db->prepare($query);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->bindValue(':login', $login, PDO::PARAM_STR);
        $res->execute();

        $row = $res->fetch();

        if (!$row['count']) {
            return true;
        }

        return false;

    }

    public static function registrateUser($cname, $phone, $ctype, $cicode, $caddress, $login, $password)
    {
        $password = md5($password);

        $db = DB::getConnection();

        $query = "INSERT INTO main.client(cname, cphone, ctype, cicode, caddress, login, password)
                  VALUES (:cname, :cphone, :ctype, :cicode, :caddress, :login, :password)";
        $res = $db->prepare($query);
        $res->bindParam(':cname', $cname, PDO::PARAM_STR);
        $res->bindParam(':cphone', $phone, PDO::PARAM_STR);
        $res->bindParam(':ctype', $ctype, PDO::PARAM_STR);
        $res->bindParam(':cicode', $cicode, PDO::PARAM_STR);
        $res->bindParam(':caddress', $caddress, PDO::PARAM_STR);
        $res->bindParam(':login', $login, PDO::PARAM_STR);
        $res->bindParam(':password', $password, PDO::PARAM_STR);
        $res->execute();

        if ($row = $res->fetch()) {
            header('Location: clients/account');
        }
    }

    public static function auth($client_id)
    {
        $_SESSION['client'] = $client_id;
    }


    public static function checkLogged()
    {
        if (isset($_SESSION['client'])) {
            return $_SESSION['client'];
        }

        header('Location: auth');
    }
}
