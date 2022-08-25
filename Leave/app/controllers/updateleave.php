<?php

class UpdateLeave extends Controller
{
    function index()
    {
        $this->model("leaveData");
        $this->view("admin/updateleave");
    }

    public function updateLeave()
    {
        $updateLeave = new Leavedata();

        $id = $_GET['updatedata'];
        $types = $_POST['types'];

        $sql=$updateLeave->updateLeave($id,$types,"sno");
        if($sql)
        {
            echo "Update";
        }
        echo "No";
    }
}


?>