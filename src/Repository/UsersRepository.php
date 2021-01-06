<?php 

namespace App\Repository;

use App\Model\Users;
use App\Services\DBManager\DBManagerInterface;

class UsersRepository
{
    private string $table = 'users';
    private DBManagerInterface $DBManager;

    public function __construct(DBManagerInterface $DBManager)
    {
        $this->DBManager = $DBManager;
    }

    public function findAll()
    {
        $results = $this->DBManager->findAll($this->table);
        $users= [];

        foreach ($results as $result)
        {
            $users[] = $this->toObject($result);
        }
        return $users;
    }

    public function findOneById($id)
    {
        $res = $this->DBManager->findOneBy($this->table, 'id_user',$id);
        return $this->toObject($res);
    }

    public function delete($id)
    {
        $this->DBManager->delete($this->table, 'id_user',$id);
    }

    public function insert ($newU)
    {
        $this->DBManager->insert($this->table,"(name_user, mail_user, role_user, pwd_user, picture_user)
            VALUES('".$newU->getName_user()."','".$newU->getMail_user()."','".$newU->getRole_user()."','".$newU->getPwd_user()."', '".$newU->getPicture_user()."')");
    }

    private function toObject($array)
    {
        $res = new Users();
        
        $res->setId_user($array['id_user'])
            ->setName_user($array['name_user'])
            ->setMail_user($array['mail_user'])
            ->setRole_user($array['role_user'])
            ->setPwd_user($array['pwd_user'])
            ->setPicture_user($array['picture_user']);

        return $res;
    }
}