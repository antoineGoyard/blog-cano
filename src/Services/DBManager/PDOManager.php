<?php

namespace App\Services\DBManager;

use Exception;
use PDO;

class PDOManager implements DBManagerInterface
{
    private PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=blogCano', 'root', '');
        } catch (Exception $exception) {
            die('Erreur lors de la connexion à la BDD : ' . $exception->getMessage());
        }
    }

    public function findAll(string $table)
    {
        $request = "SELECT * FROM $table";
        $statement = $this->pdo->query($request, PDO::FETCH_ASSOC);

        $results = [];
        while ($row = $statement->fetch()) {
            $results[] = $row;
        }
        return $results;
    }

    public function findOneBy(string $table, string $column, $value)
    {
        $request = "SELECT * FROM $table WHERE $column = '$value'";
        $statement = $this->pdo->query($request, PDO::FETCH_ASSOC);

        while ($row = $statement->fetch()) {
            return $row;
        }

        return null;
    }

    public function findBy(string $table, string $column, $value)
    {
        $request = "SELECT * FROM $table WHERE $column = '$value'";
        $statement = $this->pdo->query($request, PDO::FETCH_ASSOC);

        $results = [];
        while ($row = $statement->fetch()) {
            $results[] = $row;
        }
        return $results;
    }

    public function insert(string $table, string $request)
    {
        $query = "INSERT INTO $table $request";
        var_dump($query);
        $this->pdo->query($query);
    }

    public function update(string $table, string $request)
    {
        $query = "UPDATE $table SET $request";
        var_dump($query);
        $this->pdo->query($query);
    }

    public function delete(string $table, string $column, $value)
    {
        $query = "DELETE FROM $table WHERE $column = '$value'";
        $this->pdo->query($query);
    }
}