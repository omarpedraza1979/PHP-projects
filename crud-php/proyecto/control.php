<?php

 if(isset($_REQUEST['btn_guardar'])){

    include("../conexion/conexion.php");

    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $grado=$_POST['grado'];
    $turno=$_POST['turno'];
    
    $sql = "INSERT INTO alumnos (fecha, nombre, apellidos, edad, grado, turno) VALUES('$fecha','$nombre','$apellidos',' $edad','$grado','$turno')";
    $result = mysqli_query($connection, $sql);
        
    if(!$result) {
      die('Query Error' . mysqli_error($connection));
    }else{
        header('Location:index.php');
    }
}
 

if(isset($_REQUEST['btn_actualizar'])){

  include("../conexion/conexion.php");

  $id=$_POST['id'];

  $fecha=$_POST['fecha'];
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $edad=$_POST['edad'];
  $grado=$_POST['grado'];
  $turno=$_POST['turno'];
  
  $sql = "UPDATE alumnos SET fecha='$fecha' , nombre='$nombre' , apellidos='$apellidos', edad='$edad' , grado='$grado', turno='$turno'
         WHERE id_alumno = '$id'";

  $result = mysqli_query($connection, $sql);
      
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }else{
      header('Location:index.php');
  }
}


if(isset($_REQUEST['btn_eliminar'])){

  include("../conexion/conexion.php");

  $id=$_POST['id'];

  $sql = "DELETE FROM alumnos WHERE id_alumno = '$id'";

  $result = mysqli_query($connection, $sql);
      
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }else{
      header('Location:index.php');
  }
}

?>