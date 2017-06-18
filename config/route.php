<?php

//конфигурационный файл роутинга
//'контроллер/(действие/параметры)' => 'контроллер/метод/(аргументы функции)'
return [
    '' => 'site/index/$1',
    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog' => 'catalog/index',

    //auth
    'clients/auth' => 'auth/clientsAuth',
    'employees/auth' => 'auth/employeesAuth',

    //account
    'clients/account' => 'clientsAccount/index',
    'employees/account' => 'employeesAccount/index',

    //registration
    'registration' => 'registration/index',
    'registration/success' => 'registration/success'
];