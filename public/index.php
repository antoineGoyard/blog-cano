<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\UsersController;
use App\Controller\ArticlesController;
use App\Controller\DefaultController;



switch ($_GET['c']) {

    case 'articles':
        $articlesController = new ArticlesController();
        switch ($_GET['a']) {
            case 'all':
                $articlesController->all();
                break;
            }
        break;

    case 'category':
        $articlesController = new ArticlesController();
        switch ($_GET['a']) {
            case 'hardware':
                $articlesController->byCategory(1);
                break;
                
            case 'fun':
                $articlesController->byCategory(6);
                break;
                
            case 'science':
                $articlesController->byCategory(7);
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

