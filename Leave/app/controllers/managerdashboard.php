<?php

class Managerdashboard extends Controller
{
    public function index()
    {
        $this->model("managerData");
        $this->view("manager/managerdashboard");
    }
}

?>