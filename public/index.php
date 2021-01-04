<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\UsersController;
use App\Controller\ArticlesController;
use App\Controller\DefaultController;



switch ($_GET['c']) {
    case 'users':
        $productController = new UsersController();
        switch ($_GET['a']) {
            case 'all':
                $productController->all();
                break;
        }
        break;
    case 'articles':
        $articlesController = new ArticlesController();
        switch ($_GET['a']) {
            case 'all':
                $articlesController->all();
                break;
            }
        break;
    case 'admin':
        require __DIR__ . '/../src/View/admin/admin.php';
    break;
   
    
    default:
    $homeController = new DefaultController();
    $homeController->home();
    $articlesController = new ArticlesController();
    $articlesController->last();
   
    break;
}

