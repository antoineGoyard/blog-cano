<?php

namespace App\model;

class Pictures_articles_join
{
    private int $id_picture;
    private int $id_article;
    

    /**
     * Get the value of id_picture
     */ 
    public function getId_picture()
    {
        return $this->id_picture;
    }

    /**
     * Set the value of id_picture
     *
     * @return  self
     */ 
    public function setId_picture($id_picture)
    {
        $this->id_picture = $id_picture;

        return $this;
    }

    /**
     * Get the value of id_article
     */ 
    public function getId_article()
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     *
     * @return  self
     */ 
    public function setId_article($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }
}