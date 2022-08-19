<?php

class Employeeleave extends Controller
{
    function Index()
    { 
        $this->model("leaveapproval");
        $this->model("employeecode");
        $this->view("employee/employeeleave");
       
    }

    public function leaveApply()
    {
        $insert = new Leaveapproval();

        $fromDate = $_POST['fromdate'];
        $toDate = $_POST['to_date'];
        $leave_type = $_POST['leave_types'];
        $days = $_POST['number'];
        $description = $_POST['description'];

        $leaveapproval = $insert->insertData("leaveapprove",$fromDate,$toDate,$leave_type,$days,$description,$_SESSION['auth_user']['name'],$_SESSION['auth_user']['id']);
        // echo "hi";
        // if($sql)
        // {
            if($leaveapproval)
            {
                $_SESSION['request'] = "Request Send";
            }   
        // }
    }
}

?>