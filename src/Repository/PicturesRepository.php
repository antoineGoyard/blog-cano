<?php 

namespace App\Repository;

use App\Model\Pictures;
use App\Services\DBManager\DBManagerInterface;

class PicturesRepository
{
    private string $table = 'pictures';
    private DBManagerInterface $DBManager;

    public function __construct(DBManagerInterface $DBManager)
    {
        $this->DBManager = $DBManager;
    }

    public function findAll()
    {
        $results = $this->DBManager->findAll($this->table);
        $pictures= [];

        foreach ($results as $result)
        {
            $pictures[] = $this->toObject($result);
        }
        return $pictures;
    }

    public function findOneById($id)
    {
        $res = $this->DBManager->findOneBy($this->table, 'id_picture',$id);
        var_dump($res);
        return $this->toObject($res);

    }

    public function insert ($newP)
    {
        $this->DBManager->insert($this->table,"(name_picture, source_picture)
            VALUES('".$newP->getName_picture()."', '".$newP->getSource_picture()."')");
    }

    public function update($newP)
    {
        $this->DBManager->update($this->table,"
            name_picture = '".$newP->getName_picture()."',
            source_picture = '".$newP->getSource_picture()."'
            WHERE id_picture = '".$newP->getId_picture()."'
        ");
    }

    public function delete($id)
    {
        $this->DBManager->delete($this->table, 'id_picture',$id);
    }

    private function toObject($array)
    {
        $res = new Pictures();
        
        $res->setId_picture($array['id_picture'])
            ->setName_picture($array['name_picture'])
            ->setSource_picture($array['source_picture']);

        return $res;
    }
}