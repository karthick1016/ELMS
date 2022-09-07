<?php

class UpdateManager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->model("managerallcrud");
        $this->view("admin/updatemanager");
    }
}
?>