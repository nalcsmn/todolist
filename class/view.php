<?php
class view extends config{
    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
        echo "<h3 class='mb-4'>Pending Task</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
                 <th>Task Item</th>
                  <th>Action</th>
            </tr>
             </thead><tbody>";
        foreach($result as $data){
            echo "<tr>";
            echo "<td>$data[item]</td>";
            echo "<td>
                <a class='btn btn-info btn-sm' href='#'> Mark as Completed</a>
                <a class='btn btn-danger btn-sm' href='#'> Delete Task</a>
                </td>";

            echo "</tr>";

        }

        echo "</tbody></table>";


    }

    public function viewCompleteData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
        echo "<h3 class='mb-4 mt-5'>Completed Task</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
                 <th>Task Item</th>
                  <th>DaRE Completed</th>
            </tr>
             </thead><tbody>";
        foreach($result as $data){
            echo "<tr>";
            echo "<td>$data[item]</td>";
            echo "<td>$data[date_completed]</td>";

            echo "</tr>";

        }

        echo "</tbody></table>";


    }

}



?>