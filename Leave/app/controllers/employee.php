<?php

class Employee extends Controller{

    function index()
    {
        $this->model("employeeData");
        $this->view("admin/employeepage");
    }
}
?>