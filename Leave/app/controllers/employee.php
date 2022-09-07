<?php

class Employee extends Controller{

    function index()
    {
        $this->model("employeeData");
        $this->view("admin/employeepage");
    }

    function pageNo()
    {
        $disp = new Employeedata();
        $sql = $disp->page();
        $row = mysqli_fetch_array($sql);
        $total_records = $row[0];
        $page_per_record = 4;
        $total_pages = ceil($total_records/$page_per_record);
        $_SESSION['totalpage'] = $total_pages;
        $pageLink = "";
        $page = $_SESSION['pages'];

        if($page>1)
        {
            echo "<a href = 'employee?page=".($page - 1)."'>Prev</a>";
        }
        
        
        for($i = 1;$i <= $total_pages; $i++)
        {
            if($i == $page)
            {
                $pageLink = "<a class = 'active' href = 'employee?page=".$i."'>".$i."</a>";
            }
            else
            {
                $pageLink = "<a href = 'employee?page=".$i."'>".$i."</a>";
            }
        }
        echo $pageLink;

        if($page < $total_pages)
        {
            echo "<a href = 'employee?page=".($page + 1)."'>Next</a>";
        }
    }
}
?>