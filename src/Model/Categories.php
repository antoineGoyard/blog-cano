<?php 

namespace App\Model;

class Categories
{
    private int $id_category;
    private string $name_category;
    private string $def_category;


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

    /**
     * Get the value of name_category
     */ 
    public function getName_category()
    {
        return $this->name_category;
    }

    /**
     * Set the value of name_category
     *
     * @return  self
     */ 
    public function setName_category($name_category)
    {
        $this->name_category = $name_category;

        return $this;
    }

    /**
     * Get the value of def_category
     */ 
    public function getDef_category()
    {
        return $this->def_category;
    }

    /**
     * Set the value of def_category
     *
     * @return  self
     */ 
    public function setDef_category($def_category)
    {
        $this->def_category = $def_category;

        return $this;
    }
}
