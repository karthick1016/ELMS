<?php

class Deleteemployee extends Controller
{
    function Index()
    {
        $this->model("employeeData");
        $this->model("employeeallcrud");
        $this->view("admin/deleteemployee");
    }
}
?>