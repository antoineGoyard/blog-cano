<?php 

namespace App\Repository;

use App\Model\Categories;
use App\Services\DBManager\DBManagerInterface;

class CategoriesRepository
{
    private string $table = 'categories';
    private DBManagerInterface $DBManager;

    public function __construct(DBManagerInterface $DBManager)
    {
        $this->DBManager = $DBManager;
    }

    public function findAll()
    {
        $results = $this->DBManager->findAll($this->table);
        $categories= [];

        foreach ($results as $result)
        {
            $categories[] = $this->toObject($result);
        }
        return $categories;
    }

    public function findOneById($id)
    {
        $res = $this->DBManager->findOneBy($this->table, 'id_category',$id);
        return $this->toObject($res);
    }

    public function insert ($newC)
    {
        $this->DBManager->insert($this->table,"(name_category, def_category)
            VALUES('".$newC->getName_category()."', '".$newC->getDef_category()."')");
    }

    public function update($newC)
    {
        $this->DBManager->update($this->table,"
            name_category = '".$newC->getName_category()."',
            def_category = '".$newC->getDef_category()."'
            WHERE id_category = '".$newC->getId_category()."'
        ");
    }

    public function delete($id)
    {
        $this->DBManager->delete($this->table, 'id_category',$id);
    }

    private function toObject($array)
    {
        $res = new Categories();
        
        $res->setId_category($array['id_category'])
            ->setName_category($array['name_category'])
            ->setDef_category($array['def_category']);

        return $res;
    }
}