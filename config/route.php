<?php

//конфигурационный файл роутинга
//'контроллер/(действие/параметры)' => 'контроллер/метод/(аргументы функции)'
return [
    '' => 'site/index/$1',
    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog' => 'catalog/index'
];