<?php

class Manager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/managerpage");
    }
}




?>