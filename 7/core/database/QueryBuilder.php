<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function selectAll($table) {

        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    
    }

    function insert($table, $parameters) {

        // insert into %table_name (%column1, %column2, ...) values (%value1, #value2, ...);

        // array_keys($parameters); // взять ключи массива ['one', 'two', 'three'];

        // implode(', ',array_keys($parameters)) --> превращает ['one', 'two', 'three'] в "one, two, three"
        // ':' . implode(', :', array_keys($parameters)) --> превращает ['one', 'two', 'three'] в ":one, :two, :three"

        

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table, 
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

            var_dump('Succesfully added!');

        } catch (Exception $e) {

            die($e->getMessage());

            // var_dump('Something went wrong :( ');

        }

    }
}