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

    public function selectUsers($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUser($table, $username) {
        $statement = $this->pdo->prepare("select * from {$table} where username = '{$username}'");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function createUser($table, $username, $password, $name, $surname) {
        $statement = $this->pdo->prepare("insert into {$table} (username, name, surname, password) values ('{$username}', '{$name}', '{$surname}', '{$password}')");
        $statement->execute();
    }

    public function updateUser($table, $field, $value, $old_value, $username_field, $username) {
        $statement = $this->pdo->prepare("update {$table} set {$field} = '{$value}' where {$field} = '{$old_value}' and {$username_field} = '{$username}'");
        $statement->execute();
    }
}