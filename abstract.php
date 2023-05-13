





<?php 

abstract class Database
{
    public $conn;
    
    public function init()
    {
        $this->conn = new mysqli("localhost", "root", "");
        $this->conn->query("CREATE DATABASE IF NOT EXISTS melgazo");
		$this->conn = new mysqli("localhost","root","","melgazo");
    }
}

?>