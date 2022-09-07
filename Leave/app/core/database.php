<?php


class Database
{   
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABSE);

        if(!$this->conn)
        {
            echo "Not connect";
        }
        // echo "Connect";
        
    }
}
?>