<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $stm = $this->pdo->prepare("select * from $table");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr, $table)
    {
        //INSERT INTO users (name) VALUES ("mgmg")
        $getDataKeys = array_keys($dataArr);
        $cols = (implode(", ", $getDataKeys));
        $questionMark = "";
        foreach ($getDataKeys as $key) {
            $questionMark .= "?, ";    
        }
        $questionMark = rtrim($questionMark, ', ');

        $sql = "INSERT INTO $table ($cols) VALUES($questionMark)";
        $stm = $this->pdo->prepare($sql);
        $stm->execute(array_values($dataArr));
    }
}