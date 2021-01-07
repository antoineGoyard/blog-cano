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
        session_start();
        if (  isset($_SESSION['login']) && isset($_SESSION['login']) )
        {
            if(empty($_GET['a']))
            {
            require __DIR__ . '/../src/View/admin/admin.php';
            }
            switch ($_GET['a']) 
            {
                case 'article':
                    var_dump($_SESSION['login']);
                    $articlesController = new ArticlesController();
                    $articlesController->allAdmin();
                    break;
             }
        } else{
        $userController = new UsersController();
        $userController->connectAdmin();
        }
    break;
   
    default:
    $homeController = new DefaultController();
    $homeController->home();
    $articlesController = new ArticlesController();
    $articlesController->last();
   
    break;
}

