<?php

class Employeedashboard extends Controller
{
    public function index()
    {
        $this->model("employeeData");
        $this->model("employeecode");
        $this->view("employee/employeedashboard");
    }
}





?>