<?php

class Manager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/managerpage");
    }

    function pageNo()
    {
        $data = new ManagerData();
        $sql = $data->page();
        $row = mysqli_fetch_array($sql);
        $total_records = $row[0];
        $page_per_record = 4;
        $total_pages = ceil($total_records/$page_per_record);
        $_SESSION['totalmanagerpage'] = $total_pages;
        $pageLink = "";
        $page = $_SESSION['managerpage'];

        if($page>1)
        {
            echo "<a href = 'manager?page=".($page - 1)."'>Prev</a>";
        }

        for($i = 1;$i <= $total_pages; $i++)
        {
            if($i == $page)
            {
                $pageLink = "<a class = 'active' href = 'manager?page=".$i."'>".$i."</a>";
            }
            else
            {
                $pageLink = "<a href = 'manager?page=".$i."'>".$i."</a>";
            }
        }
        echo $pageLink;

        if($page < $total_pages)
        {
            echo "<a href = 'manager?page=".($page + 1)."'>Next</a>";
        }
    }
}




?>