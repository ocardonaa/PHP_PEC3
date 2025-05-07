<?php

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    protected function execute_query($statement, $class) {
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, "{$class}");
    }

    public function selectAll($table, $class) {
        $statement = $this->pdo->prepare("select * from {$table}");
        return $this->execute_query($statement, $class);
    }

    public function singleVideogame($id, $table, $class) {
        $statement = $this->pdo->prepare("select * from {$table} where id = {$id}");
        return $this->execute_query($statement, $class);
    }

    public function sortVideogames($query, $class) {
        $statement = $this->pdo->prepare($query);
        return $this->execute_query($statement, $class);
    }
}