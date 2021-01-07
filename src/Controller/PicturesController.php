<?php

namespace App\Controller;

use App\Model\Pictures;
Use App\Repository\PicturesRepository;
use App\Services\DBManager\PDOManager;

class PicturesController 
{
    private PicturesRepository $PicturesRepository;

    public function __construct()
    {
        $manager = new PDOManager();
        $this->PicturesRepository = new PicturesRepository($manager);
        
    }

    public function all()
    {
        $pictures = $this->PicturesRepository->findAll();
        require __DIR__ . '/../View/admin/imgAdmin.php';
    }
}