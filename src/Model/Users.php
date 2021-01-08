<?php 

namespace App\Model;

class Users 
{
    private int $id_user;
    private string $name_user;
    private string $mail_user;
    private string $role_user;
    private string $pwd_user;
    private string $picture_user;

    

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of name_user
     */ 
    public function getName_user()
    {
        return $this->name_user;
    }

    /**
     * Set the value of name_user
     *
     * @return  self
     */ 
    public function setName_user($name_user)
    {
        $this->name_user = $name_user;

        return $this;
    }

    /**
     * Get the value of mail_user
     */ 
    public function getMail_user()
    {
        return $this->mail_user;
    }

    /**
     * Set the value of mail_user
     *
     * @return  self
     */ 
    public function setMail_user($mail_user)
    {
        $this->mail_user = $mail_user;

        return $this;
    }

    /**
     * Get the value of role_user
     */ 
    public function getRole_user()
    {
        return $this->role_user;
    }

    /**
     * Set the value of role_user
     *
     * @return  self
     */ 
    public function setRole_user($role_user)
    {
        $this->role_user = $role_user;

        return $this;
    }

    /**
     * Get the value of pwd_user
     */ 
    public function getPwd_user()
    {
        return $this->pwd_user;
    }

    /**
     * Set the value of pwd_user
     *
     * @return  self
     */ 
    public function setPwd_user($pwd_user)
    {
        $this->pwd_user = $pwd_user;

        return $this;
    }

  

    /**
     * Get the value of picture_user
     */ 
    public function getPicture_user()
    {
        return $this->picture_user;
    }

    /**
     * Set the value of picture_user
     *
     * @return  self
     */ 
    public function setPicture_user($picture_user)
    {
        $this->picture_user = $picture_user;

        return $this;
    }
}