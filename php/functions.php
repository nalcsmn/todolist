<?php

function insertT(){
    if (!empty($_GET['items'])) {
        $insert = new insert($_GET['items']);
        if ($insert->insertTask()) {
        //   echo '<script language="javascript">';
        //   echo 'alert("Task Inserted successfully")';
        //   echo '</script>';

          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Task Inserted successfully!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
          // echo "TASk INserted succesfully!";
        } else {
            
          echo '<div class="alert alert-Danger alert-dismissible fade show" role="alert">
          <strong>Error Task Not Inserted!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        //   echo "error";
        }
      }
    }
    
    function deleteT(){
      if (!empty($_GET['delete'])) {
          $delete = new delete($_GET['delete']);
          if ($delete->deleteTask()) {
          //   echo '<script language="javascript">';
          //   echo 'alert("Task Inserted successfully")';
          //   echo '</script>';
  
            echo '<div class="col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Task deleted successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';
            // echo "TASk INserted succesfully!";
          } else {
              
            echo '<div class="col-md-9 alert alert-Danger alert-dismissible fade show" role="alert">
            <strong>Error Task Not delete!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';
          //   echo "error";
          }
        }
      }


      function editT(){
        if (!empty($_GET['edit'])) {
            $edit = new edit($_GET['edit']);
            if ($edit->editTask()) {
            //   echo '<script language="javascript">';
            //   echo 'alert("Task Inserted successfully")';
            //   echo '</script>';
    
              echo '<div class="col-md-9 alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Task Mark Done successfully!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
              // echo "TASk INserted succesfully!";
            } else {
                
              echo '<div class="col-md-9 alert alert-Danger alert-dismissible fade show" role="alert">
              <strong>Error Task Not edited!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            //   echo "error";
            }
          }
        }

?>