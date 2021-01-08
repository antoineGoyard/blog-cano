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
            if (isset($_POST['chargement']))
            {
                var_dump($_FILES);
            
                if($_FILES['monfichier']['error'] == 0){
                    ?> <pre><?php print_r($_POST) ?> </pre> <?php
                    
                    //test taille
                    if($_FILES['monfichier']['size'] > 1500000){
                        $error = "Votre fichier est trop lourd.";
                    }
                    
                    // test extension
                    $extension = strrchr($_FILES['monfichier']['name'],'.');
                    if($extension != '.jpg'){
                        $error = "Votre fichier n'est pas conforme.";
                    }
            
                    // au final :
                    if(!isset($error)){
                        var_dump("c'est la vie");
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'assets/img/'.$_FILES['monfichier']['name']);
                        echo "le fichier est chargé";
                    }
            
                }else{
                    $error = "problème formulaire";
                }

              $new = new Pictures;
              $new->setName_picture($_FILES['monfichier']['name']);
              $new->setSource_picture($_FILES['monfichier']['name']);
              $this->PicturesRepository->insert($new);
            }
        }
    }
}