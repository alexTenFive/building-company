<?php

class DB
{
    public static function getConnection()
    {
        $params = include ROOT . '/config/db_params.php';

        $dsn = "pgsql:host={$params['host']};port={$params['port']};dbname={$params['dbname']};";

        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec('set names utf8');

        return $db;
    }
}