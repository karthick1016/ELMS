<?php

class Leave extends Controller{

    function index()
    {
        $this->model("leaveData");
        $this->view("admin/leavepage");
    }
}
?>