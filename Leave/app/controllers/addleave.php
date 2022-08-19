<?php

class Addleave extends Controller{

    function index()
    {   
        $this->model("leaveData");
        $this->view("admin/addLeave");
    }

    public function insert()
    {
        $insert = new Leavedata();

        $leave = $_POST['types'];

        $sql = $insert->insertLeave($leave);

        if($sql)
        {
            echo "Inserted";
        }
        echo "Not";
    }
}

?>