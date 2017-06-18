<?php

class CatalogController
{
    public function actionIndex($page = 1)
    {
        $objects = Objects::getObjects(12, $page);
        $total = Objects::getTotalObjects();
        $pagination = new Pagination($total, $page,  Objects::OBJECTS_COUNT, 'page-');

        require_once ROOT . '/Views/Catalog/index.php';

        return true;
    }
}