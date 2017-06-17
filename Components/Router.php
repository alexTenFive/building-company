<?php

/**
 * Created by PhpStorm.
 * User: sic-12
 * Date: 07.06.2017
 * Time: 22:48
 */
class Router
{
    private $routes = [];

    public function __construct()
    {
        $routePath = ROOT . '/config/route.php';
        $this->routes  = include($routePath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $patternURI => $routePath) {
            if (preg_match("~^$patternURI$~", $uri)) {
                //Получение внутреннего пути
                $internalPath = preg_replace("~^$patternURI$~", $routePath, $uri);
                //Делим на сегменты
                $segments = explode('/', $internalPath);
                //Генерируем имя класса
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                //Генерируем имя метода в классе
                $actionName = 'action' . ucfirst(array_shift($segments));
                //Получаем параметры запроса
                $parametres = $segments;

                $classFile = ROOT. '/Controllers/'. $controllerName . '.php';

                if (file_exists($classFile)) {
                    include_once $classFile;
                }

                $controllerObject = new $controllerName;

                $result = call_user_func_array([$controllerObject, $actionName], $parametres);

                if($result != null) {
                    break;
                }

            }
        }
    }
}