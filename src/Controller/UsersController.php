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

    public function connectAdmin()
    {
        $user = $this->usersRepository-> findOneById(3);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            if ($_POST['mail'] === $user->getMail_user()  && password_verify($_POST['pwd'] , $user->getPwd_user() ))
            {
                session_start();
                $_SESSION['login'] = $_POST['mail'];
                $_SESSION['pwd'] = $user->getPwd_user() ;
                require __DIR__ . '/../View/admin/admin.php';
                
                return;
            } else
                {
                    var_dump('pas ok');
                }
        }
       
        require __DIR__ . '/../View/admin/adminConnection.php';
    }
}
