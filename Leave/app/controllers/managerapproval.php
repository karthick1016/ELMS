<?php


class Managerapproval extends Controller{

    function index()
    {  
        $this->model("leaveapproval");
        $this->view("manager/managerapproval");
    }
}

?>