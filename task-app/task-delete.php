<?php

include('database.php');

if(isset($_POST['id'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM task WHERE ID = $id";

    $result = mysqli_query($connection, $query);
    
    if(!$result) {
      die('Delete Failed' . mysqli_error($connection));
    }
}   echo 'Task deleted successfully';

 ?>