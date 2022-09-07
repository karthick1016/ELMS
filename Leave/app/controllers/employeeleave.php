<?php

class Employeeleave extends Controller
{
    function Index()
    { 
        $this->model("leaveapproval");
        // $this->model("employeecode");
        $this->view("employee/employeeleave");
    }

    public function checkDate()
    {
        $exist = new Leaveapproval();
        if(isset($_POST['sub_btn']))
        {
            $fromDate = $_POST['fromdate'];
            if($fromDate == "")
            {
                echo $errorDate = "Please enter Date";
            }
        $exist->existDate($fromDate);
        }
        
    }
    public function toDate()
    {
        if(isset($_POST['sub_btn']))
        {
            $toDate = $_POST['to_date'];

            if($toDate == "")
            {
                echo $errorDate = "Please enter Date";
            }
        } 
    }

    public function days()
    {
        if(isset($_POST['sub_btn']))
        {
            $days = $_POST['number'];
            if($days == "")
            {
                echo $errorDate = "Please enter days";
            }
        }
    }

    public function description()
    {
        if(isset($_POST['sub_btn']))
        {
            $description = $_POST['description'];
            if($description == "")
            {
                echo $errorDate = "Please enter description";
            }
        }
    }

    public function leaveApply()
    {
        $insert = new Leaveapproval();
        $fromDate = $_POST['fromdate'];
        $toDate = $_POST['to_date'];
        $leave_type = $_POST['leave_types'];
        $days = $_POST['number'];
        $description = $_POST['description'];

        $leaveapproval = $insert->insertData("leaveapprove",$fromDate,$toDate,$leave_type,$days,$description,$_SESSION['name'],$_SESSION['id']);
        echo "hlo";
        if($leaveapproval)
        {
            $_SESSION['request'] = "Request Send";
        }   
    }
}

?>