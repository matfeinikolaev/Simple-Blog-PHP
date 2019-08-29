<?php

class DataBase
{
    public $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertData($table, $parameters)
    {
        // Look at this: https://www.php.net/manual/en/pdo.prepare.php
        // Example #2 SQL statement template with question mark parameters
        // And try to rewrite this code

        $sql = vsprintf('insert into %s (%s) values (:%s)', [
            $table,
            implode(', ', array_keys($parameters)),
            implode(', :', array_keys($parameters)),
        ]);

        try {
            $this->pdo->prepare($sql)->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
