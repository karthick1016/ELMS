<?php

class Managerdashboard extends Controller
{
    public function index()
    {
        $this->model("managerData");
        $this->model("employeecode");
        $this->view("manager/managerdashboard");
    }
}

?>