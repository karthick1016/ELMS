<?php

class Leavedata extends Database
{
    public function insertLeave($type)
    {
        $insert = "INSERT INTO leaves(types) VALUES ('".$type."')";
        $inserting = mysqli_query($this->conn,$insert);
        return $inserting;
    }

    public function displayLeave()
    {
        $display = "SELECT * FROM leaves";
        $displaying = mysqli_query($this->conn,$display);
        return $displaying;
    }

    public function updateLeave($id,$type,$Sno)
    {
        $update = "UPDATE leaves SET types = '$type' WHERE $Sno = '$id'";
        $updating = mysqli_query($this->conn,$update);
        return $updating;
    }

    public function deleteLeave($id,$Sno)
    {
        $delete = "DELETE FROM leaves WHERE $Sno = '$id'";
        $deleting = mysqli_query($this->conn,$delete);
        return $deleting;
    }
}




?>