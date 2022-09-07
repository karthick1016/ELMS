<?php


class DeleteManager extends Controller
{
    function Index()
    {
        $this->model("managerData");
        $this->model("managerallcrud");
        $this->view("admin/deletemanager");
    }
}


?>