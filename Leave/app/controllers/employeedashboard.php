<?php

class Employeedashboard extends Controller
{
    public function index()
    {
        $this->model("employeeData");
        $this->view("employee/employeedashboard");
    }
}





?>