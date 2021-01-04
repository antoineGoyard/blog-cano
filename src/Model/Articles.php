<?php

namespace App\Model;

class Articles
{
    private int $id_article;
    private string $name_article;
    private string $date_article;
    private string $content_article;
    private string $short_content_article;
    private int $id_user;
    private int $id_picture;
    private int $id_category;

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

    /**
     * Get the value of name_article
     */ 
    public function getName_article()
    {
        return $this->name_article;
    }

    /**
     * Set the value of name_article
     *
     * @return  self
     */ 
    public function setName_article($name_article)
    {
        $this->name_article = $name_article;

        return $this;
    }

   

    /**
     * Get the value of content_article
     */ 
    public function getContent_article()
    {
        return $this->content_article;
    }

    /**
     * Set the value of content_article
     *
     * @return  self
     */ 
    public function setContent_article($content_article)
    {
        $this->content_article = $content_article;

        return $this;
    }

    /**
     * Get the value of short_content_article
     */ 
    public function getShort_content_article()
    {
        return $this->short_content_article;
    }

    /**
     * Set the value of short_content_article
     *
     * @return  self
     */ 
    public function setShort_content_article($short_content_article)
    {
        $this->short_content_article = $short_content_article;

        return $this;
    }

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
     * Get the value of date_article
     */ 
    public function getDate_article()
    {
        return $this->date_article;
    }

    /**
     * Set the value of date_article
     *
     * @return  self
     */ 
    public function setDate_article($date_article)
    {
        $this->date_article = $date_article;

        return $this;
    }

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
     * Get the value of id_category
     */ 
    public function getId_category()
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     *
     * @return  self
     */ 
    public function setId_category($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }
}