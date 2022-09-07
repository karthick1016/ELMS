<?php
class Adminpage extends Controller
{
     function index()
    {
        $this->model("admindata");
        $this->view("admin/adminpage");
    }
}
?>