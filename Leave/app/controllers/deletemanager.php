<?php


class DeleteManager extends Controller
{
    function Index()
    {
        $this->model("managerData");
        $this->view("admin/deletemanager");
    }

    public function deleteManager()
    {
        $delete = new ManagerData();
        $id = $_GET['deleteManager'];
        $deleteAssoc = $delete->deleteAssoc($id,"managerid");
        $sql = $delete->deleteManager($id,"managerid");
        if($deleteAssoc)
        {
            if($sql)
            {
                header("location:manager");
            }
            echo "Not";

        }
    }
}


?>