<?php

namespace App\repository;

use App\Model\Articles;
use App\Services\DBManager\DBManagerInterface;

class ArticlesRepository
{
    private string $table = 'articles';
    private DBManagerInterface $DBManager;

    public function __construct(DBManagerInterface $DBManager)
    {
        $this->DBManager = $DBManager;
    }

    public function findAll()
    {
        $results = $this->DBManager->findAll($this->table);
        $articles= [];

        foreach ($results as $result)
        {
            $articles[] = $this->toObject($result);
        }
        $articles = array_reverse($articles);
        return $articles;
    }

    public function last()
    {
        $results = $this->DBManager->findAll($this->table);
        $articles= [];
        $last = [];

        foreach ($results as $result)
        {
            $articles[] = $this->toObject($result);
        }
        $length = sizeof($results);
        for ($i = $length-3; $i < $length; $i++)
        {
            $last[]=$articles[$i];
        }
        $last = array_reverse($last);
        return $last;
    }

    public function findByCategory($cate){
        $res = $this->DBManager->findBy($this->table,'id_category',$cate);
        $articles= [];

        foreach ($res as $result)
        {
            $articles[] = $this->toObject($result);
        }
        $articles = array_reverse($articles);
        return $articles;
    }

    public function findOneById($id)
    {
        $res = $this->DBManager->findOneBy($this->table,'id_article',$id);
        return $this->toObject($res);
    }

    public function delete($id)
    {
        $this->DBManager->delete($this->table, 'id_article', $id);
    }

    public function update($newA)
    {
        $this->DBManager->update($this->table, " 
            name_article = '".$newA->getName_article()."',
            date_article = '".$newA->getDate_article()."',
            content_article = '".$newA->getContent_article()."',
            short_content_article = '".$newA->getShort_content_article()."',
            id_user = '".$newA->getId_user()."'
            WHERE id_article = '".$newA->getId_article()."'
        ");
    }

    public function insert($newA)
    {
        $this->DBManager->insert($this->table,"(name_article, date_article, content_article, short_content_article, id_user)
            VALUES('".$newA->getName_article()."', '".$newA->getDate_article()."','".$newA->getContent_article()."','".$newA->getShort_content_article()."','".$newA->getId_user()."')");
    }

    private function toObject($array)
    {
        $res = new Articles();
        
        $res->setId_article($array['id_article'])
            ->setName_article($array['name_article'])
            ->setDate_article($array['date_article'])
            ->setContent_article($array['content_article'])
            ->setShort_content_article($array['short_content_article'])
            ->setId_user($array['id_user']);

        return $res;
    }
}