<?php

namespace App\Controller;

use App\Model\Categories;
Use App\Repository\CategoriesRepository;
use App\Services\DBManager\PDOManager;

class CategoriesController 
{
    private CategoriesRepository $categoriesRepository;

    public function __construct()
    {
        $manager = new PDOManager();
        $this->CategoriesRepository = new CategoriesRepository($manager);
        
    }

    public function all()
    {
        $categories = $this->CategoriesRepository->findAll();
        require __DIR__ . '/../View/admin/categoryAdmin.php';
    }
}