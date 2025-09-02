<?php

   include("../conexion/conexion.php");
   date_default_timezone_set("America/Mexico_City");
   $fecha_actual=date("y-m-d h:i:s");
 
   $id_alumno="";

   if(isset($_GET['id'])){
      //echo "ALUMNOS ID = ",$id_alumno;
      $id_alumno= $_GET['id']; 
      $sql = "SELECT * FROM alumnos WHERE id_alumno = '$id_alumno' ";
      $result = mysqli_query($connection, $sql);

     while($fila = mysqli_fetch_array($result)) {

      //echo ", PASO 2";
      $id=$fila[0];
      $fecha=$fila[1];
      $nombre=$fila[2];
      $apellidos=$fila[3];
      $edad=$fila[4];
      $grado=$fila[5];
      $turno=$fila[6];
      
    }      
    
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP-MySql</title>
    <script
    src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script scr="../librerias/materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../librerias/materialize/css/materialize.min.css">

    <script> 
         
         $(document).ready(function(){
            id=$('#id_alumno').val();

            if(id.length > 0){
               $("#frm_register").hide();
            }else{
               $("#frm_actualizar").hide();
            }
         });
   </script>


</head>
<body>

<input type="hidden"  id="id_alumno"  value="<?php echo $id_alumno?>" placeholder="" >
 

 <div class="row">
    <div class="col l4" style="position: absolute; top: 15%;" id="frm_register" >

       <h5 class="blue-text">Registro de Alumnos</h5><br><br>

        <form action="control.php" method="POST" accept-charset="utf-8">
           <div class="input-field col l5">
              <label for="fecha">Fecha</label><br>
              <input type="text"  name="fecha" value="<?php echo $fecha_actual ?>" placeholder="" >
             
              
           </div>
        
           <div class="input-field col l12">
              <input type="text"  name="nombre" value="" placeholder="" >
              <label for="nombre">Nombre</label>
           </div>

           <div class="input-field col l12">
              <input type="text"  name="apellidos" value="" placeholder="" >
              <label for="apellidos">Apellidos</label>
           </div>

           <div class="input-field col l4">
              <input type="text" id="pp" name="edad" value="" placeholder="" >
              <label for="edad">Edad</label>
           </div>

           <div class="input-field col l4">
              <input type="text"  name="grado" value="" placeholder="" >
              <label for="grado">Grado</label>
           </div>

           <div class="input-field col l4">
              <input type="text"  name="turno" value="" placeholder="" >
              <label for="turno">Turno</label>
           </div>

           <div class="input-field col l12">
              <button type="submit"  class="blue btn-small" name="btn_guardar" >Guardar</button>
           </div>
           

        
        </form>

     </div>


     <div class="col l7 offset-l5" style="position: absolute; top: 15%;">
          <table>
            <h5 class="blue-text">LISTA</h5><br><br>
            <thead>
                <tr>
                      <th>Id</th>
                      <th>Fecha Registro</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Edad</th>
                      <th>Grado</th>
                      <th>Turno</th>
                </tr>
            </thead>

             <?php
                   include("../conexion/conexion.php");

                   $sql = "SELECT * FROM alumnos";
                   $result = mysqli_query($connection, $sql);
                       
                   while($fila = mysqli_fetch_array($result)) {
            ?>         

            <tbody>
                <tr>
                      <td><?php echo $fila[0]; ?></td>
                      <td><?php echo $fila[1]; ?></td>
                      <td><?php echo $fila[2]; ?></td>
                      <td><?php echo $fila[3]; ?></td>
                      <td><?php echo $fila[4]; ?></td>
                      <td><?php echo $fila[5]; ?></td>
                      <td><?php echo $fila[6]; ?></td>
                      <td><a href="index.php?id=<?php echo $fila[0]?>" class="blue btn-small">Editar</a> </td>
                </tr>
            </tbody>

            <?php
              }
            ?> 
          
          </table>
      </div>
 </div>
       
<div class="row">
<div class="col l4" style="position: absolute; top: 15%;" id="frm_actualizar" >

<h5 class="blue-text">Editar Informacion</h5><br><br>

 <form action="control.php" method="POST" accept-charset="utf-8">
    <div class="input-field col l5">
       <input type="text"  name="fecha" value="<?php echo $fecha?>" placeholder="" >
       <label for="fecha">Fecha</label>
       
    </div>

    <div class="input-field col l12">
       <input type="text"  name="id" value="<?php echo $id_alumno?>" placeholder="" >
       <label for="id">Id</label>
    </div>
 
    <div class="input-field col l12">
       <input type="text"  name="nombre" value="<?php echo $nombre?>" placeholder="" >
       <label for="nombre">Nombre</label>
    </div>

    <div class="input-field col l12">
       <input type="text"  name="apellidos" value="<?php echo $apellidos?>" placeholder="" >
       <label for="apellidos">Apellidos</label>
    </div>

    <div class="input-field col l4">
       <input type="text"  name="edad" value="<?php echo $edad?>" placeholder="" >
       <label for="edad">Edad</label>
    </div>

    <div class="input-field col l4">
       <input type="text"  name="grado" value="<?php echo $grado?>" placeholder="" >
       <label for="grado">Grado</label>
    </div>

    <div class="input-field col l4">
       <input type="text"  name="turno" value="<?php echo $turno?>" placeholder="" >
       <label for="turno">Turno</label>
    </div>

    <div class="input-field col l4">
       <button type="submit"  class="blue btn-small" name="btn_actualizar" >Actualizar</button>
    </div>

    <div class="input-field col l4">
       <button type="submit"  class="red accent-darken-4 btn-small" name="btn_eliminar" >Eliminar</button>
    </div>

    <div class="input-field col l4">
       <a href="index.php"  class="blue btn-small" name="btn_guardar" >Regresar</button>
    </div>
 
 </form>

</div>
</div>


</body>
</html>