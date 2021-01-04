<?php

namespace App\Services\DBManager;

interface DBManagerInterface
{
    public function findAll(string $table);

    public function findOneBy(string $table, string $column, $value);

    public function findBy(string $table, string $column, $value);

    public function insert(string $table, string $request);

    public function update(string $table, string $request);

    public function delete(string $table, string $column, $value);
}