<?php

include 'abstract.php';
class Car extends Database
{
    public $tbl = 'model';

    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tbl(
            id int auto_increment primary key,
            carbrand varchar(255),
            model varchar(255),
            price int
            )
            ";

        $this->init();
        $this->conn->query($sql);
    }

    public function insert(array $para)
    {
        $carbrand = $para['carbrand'];
        $model = $para['model'];
        $price = $para['price'];


        $insert = "INSERT INTO $this->tbl values(null, '$carbrand', '$model', '$price')";
        return $this->conn->query($insert);
    }

    public function getAll()
    {
        $all = "SELECT * FROM $this->tbl order by id desc";
        return $this->conn->query($all);
    }

}

?>