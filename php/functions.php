<?php

function insertT(){
    if (!empty($_GET['items'])) {
        $insert = new insert($_GET['items']);
        if ($insert->insertTask()) {
        //   echo '<script language="javascript">';
        //   echo 'alert("Task Inserted successfully")';
        //   echo '</script>';

          echo '<div class="col-md-9 alert alert-success alert-dismissible fade show" role="alert">
          <strong>Task Inserted successfully!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
          // echo "TASk INserted succesfully!";
        } else {
            
          echo '<div class="col-md-9 alert alert-Danger alert-dismissible fade show" role="alert">
          <strong>Error Task Not Inserted!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        //   echo "error";
        }
      }
    }


?>