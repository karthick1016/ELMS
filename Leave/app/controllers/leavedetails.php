<?php

class Leavedetails extends Controller
{
    function Index()
    { 
        $this->model("leaveapproval");
        $this->view("employee/leavedetails");
       
    }
}

?>