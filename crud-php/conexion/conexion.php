<?php
 $servidor="localhost";
 $usuario="root";
 $contraseña="kiko.9732416";
 $bd="escuela";

 $connection=  mysqli_connect($servidor,$usuario,$contraseña,$bd);

 if($connection){
     echo "conexion exitosa";

 }else{
     echo "conexion NO exitosa";
 }

?>