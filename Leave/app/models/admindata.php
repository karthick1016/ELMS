<?php

class Admindata extends Database
{
    public function underManager($table1,$table2,$id,$name,$managername,$managerid)
    {
        $display = "SELECT $table1.$id, $table1.$name, $table2.$managername FROM $table1,$table2 WHERE $table1.$managerid=$table2.$managerid ";
        $displaying = mysqli_query($this->conn,$display);
        return $displaying;
    }
}
?>
