<?php

class Admin extends Controller
{
    function index()
    {
        $this->model("logincode");
        $this->view("admin");
    }
}
?>