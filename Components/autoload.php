<?php

// Регистрируем свой автозагрузчик классов
spl_autoload_register(function ($className) {
    $folders = [
        '/Models/',
        '/Components/'
    ];

    foreach ($folders as $folder) {
        $classPath = ROOT . $folder. $className . '.php';
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
});