<?php

class Counters extends Database
{
    function counts($table)
    {
        $query = "SELECT * FROM $table";
        $queryRun = $this->conn->query($query);
        if($queryTotal = mysqli_num_rows($queryRun))
        {
            echo "<h3>$queryTotal</h3>";
        }
        else{
            echo "<h4>0</h4>";
        }
    }

    function countLeaves($no)
    {
        $query = "SELECT * FROM leaveapprove WHERE status = '$no'";
        $queryRun = $this->conn->query($query);
        if($queryTotal = mysqli_num_rows($queryRun))
        {
            echo "<h3>$queryTotal</h3>";
        }
        else
        {
            echo "<h4>0</h4>";
        }
    }
}

?>