<?php

namespace App\Controller;

use App\Model\Users;
Use App\Repository\UsersRepository;
use App\Services\DBManager\PDOManager;

class UsersController 
{
    private UsersRepository $usersRepository;

    public function __construct()
    {
        $manager = new PDOManager();
        $this->usersRepository = new UsersRepository($manager);
        
    }

    public function all()
    {
        $users = $this->usersRepository->findAll();
        require __DIR__ . '/../View/users/all.php';
    }
}
