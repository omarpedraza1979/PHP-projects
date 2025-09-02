<?php

include('database.php');

 if(isset($_POST['name'])){
    echo "llegando a server PHP : " ;
    $name        = $_POST['name'];
    $description = $_POST['description'];

    $query = "INSERT into task(name, description) VALUES ('$name','$description')";
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
      die('Query Failed' . mysqli_error($connection));
    }
    echo 'Task added successfully';


 }



?>