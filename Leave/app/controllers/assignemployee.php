<?php

class Assignemployee extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/assignemployee");
    }
}


?>