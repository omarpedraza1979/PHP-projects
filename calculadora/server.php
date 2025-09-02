<?php

include("MathHelp_jmd.php");


   if(isset($_POST['raiz'])){
     $number= $_POST['raiz'];
     $raiz=sqrt($number);
     echo $raiz;
   }
 
   
   if(isset($_POST['calculo'])){
      $number= $_POST['calculo'];
      $resultado = MathHelp_jmd::calculate_str($number);
      
      if($resultado=="NaN"){
          echo false;
      }else{
          echo $resultado;
      }
    }
      

 
?>