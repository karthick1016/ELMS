<?php

class UpdateManager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/updatemanager");
    }

    public function update()
    {
        $updateManager = new ManagerData();

        $managerId = $_GET['updateManager'];
        $managerName = $_POST['name'];
        $managerEmail = $_POST['email'];
        $managerPassword = $_POST['password'];
        $managerNumber = $_POST['phone'];
        $assignEmp = $_POST['assign_emp'];
        $managerSql = $updateManager->updateManager($managerId,$managerName,$managerEmail,$managerPassword,$managerNumber,"managerid");
        $removeEmployee = $updateManager->removeEmployee($_SESSION['employeeid']);
        if(!empty($assignEmp))
        {
            foreach($assignEmp as $value)
            {
                if(!empty($value))
                {
                    $assignEmployee = $updateManager->assignEmployee("employee",$managerId,$value);
                    $assocemployee = $updateManager->assocEmployee("assoc",$managerId,$value);
                }
            }
        }
        if($managerSql)
        {
            if($assignEmployee)
            {
                if($removeEmployee)
                {
                if($assocemployee)
                {
                        $_SESSION['updatemanager'] = "Update Successfully";
                        header("location:manager");                        
                }
            }
            }
            
        }echo "Not";
    }
}
?>