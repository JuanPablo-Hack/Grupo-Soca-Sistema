<?php
  $id=$_POST['id'];
  include './conexion.php';
  $sql="DELETE FROM prospecion_mina WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if(!$result){
    echo 2;
  }else{
    echo 1;
  }
  
  
?>