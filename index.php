<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define("ROOT", __DIR__);

session_start();

// some comment
require_once '/Components/autoload.php';

$router = new Router;

$router->run();
