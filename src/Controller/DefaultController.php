<?php 

namespace App\Controller;

class DefaultController
{
    public function home ()
    {
        require __DIR__ . '/../View/default/home.php';
    }
}