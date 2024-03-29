<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} order by date_time desc");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = vsprintf('insert into %s (%s) values (:%s)', [
            $table,
            implode(',', array_keys($parameters)),
            implode(', :', array_keys($parameters)),
        ]);

        try {
            $this->pdo->prepare($sql)->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
