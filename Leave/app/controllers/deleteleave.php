<?php


class Deleteleave extends Controller
{
    function Index()
    {
        $this->model("leaveData");
        $this->view("admin/deleteleave");
    }
    public function deleteLeave()
    {
        $delete = new Leavedata();
        $id = $_GET['deletedata'];
        $sql = $delete->deleteLeave($id,"sno");
        if($sql)
        {
            header("location:leave");
        }
        echo "Not";
    }
}


?>