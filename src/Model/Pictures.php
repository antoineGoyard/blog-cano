<?php

namespace App\Model;

class Pictures
{
    private int $id_picture;
    private string $name_picture;
    private string $source_picture;
    

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
     * Get the value of name_picture
     */ 
    public function getName_picture()
    {
        return $this->name_picture;
    }

    /**
     * Set the value of name_picture
     *
     * @return  self
     */ 
    public function setName_picture($name_picture)
    {
        $this->name_picture = $name_picture;

        return $this;
    }

    /**
     * Get the value of source_picture
     */ 
    public function getSource_picture()
    {
        return $this->source_picture;
    }

    /**
     * Set the value of source_picture
     *
     * @return  self
     */ 
    public function setSource_picture($source_picture)
    {
        $this->source_picture = $source_picture;

        return $this;
    }
}