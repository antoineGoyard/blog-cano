<?php

namespace App\Controller;

use App\Model\Articles;
Use App\Repository\ArticlesRepository;
use App\Services\DBManager\PDOManager;

class ArticlesController 
{
    private ArticlesRepository $articlesRepository;

    public function __construct()
    {
        $manager = new PDOManager();
        $this->articlesRepository = new ArticlesRepository($manager);
        
    }

    public function all()
    {
        $articles = $this->articlesRepository->findAll();
        require __DIR__ . '/../View/articles/all.php';
    }

    public function last()
    {

        $last3 = $this->articlesRepository->last();
        require __DIR__ . '/../View/articles/last.php';
    }

    public function byCategory($cate)
    {
        $articles = $this->articlesRepository->findByCategory($cate);
        require __DIR__ . '/../View/categories/oneCategory.php';
    }

    public function allAdmin()
    {
        $articlesAdmin = $this->articlesRepository->findAll();
        require __DIR__ . '/../View/admin/articlesAdmin.php';

    }
    
}