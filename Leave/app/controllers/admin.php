<?php

class Admin extends Controller
{
    function index()
    {
        $this->model("allLogin");
        $this->view("admin");
    }
}
?>