<?php
       include_once '../dbconn.php'; 

        if(isset($_GET['del'])){
          $del_id = $_GET['del'];
        $delete = "DELETE FROM processor WHERE p_id='$del_id'";
        $run_delete = mysqli_query($conn,$delete);
          if($run_delete == true){
            echo "Record has been deleted";
          }else{
            echo "Failed to delete the record";
          }
        }
    ?>