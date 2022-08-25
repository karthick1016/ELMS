<?php

class Deleteemployee extends Controller
{
    function Index()
    {
        $this->model("employeeData");
        $this->view("admin/deleteemployee");
    }
    
    public function deleteEmployee()
    {
            $delete = new Employeedata();
            $id = $_GET['deletedata'];
            $deleteAssoc = $delete->deleteAssoc($id,"assoc.employeeid");
            $sql = $delete->deleteEmployee($id,"id");
        
            if($deleteAssoc)
            {
                if($sql)
                {
                    header("location:employee");
                }
                    echo "Not";
                }
           
    }
}
?>