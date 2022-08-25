<?php

class Managerleave extends Controller
{
    public function index()
    {
        $this->model("leaveapproval");
        $this->view("manager/managerleave");
    }
}
?>