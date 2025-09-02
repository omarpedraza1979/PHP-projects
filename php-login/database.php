

<?php

//$connection=  mysqli_connect('localhost','root','kiko.9732416','task_app1');

/* if($connection){
     echo "Database is connected ";
 }*/

 $server    = 'localhost';
 $username  = 'root';
 $password  = 'kiko.9732416';
 $database  = 'task_app1';

 try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);

 }catch(PDOException $e){
     die('Connection failed: '.$e->getmessage());

 }

?>