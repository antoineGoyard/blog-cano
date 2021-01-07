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

    public function add()
    {
        var_dump('coucou');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            var_dump('coucou1');
            if (isset($_POST['add']))
            {
                var_dump('coucou2');
              $new = new Pictures;
              $new->setName_picture($_POST['name']);
              $new->setSource_picture($_POST['source']);
              var_dump([$_POST['name']]);
              var_dump([$_POST['source']]);
              $this->PicturesRepository->insert($new);  
              
            }
        }
    }
}