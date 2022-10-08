<?php
include('conn.php');
if(isset($_GET['deltask'])){
  $id=$_GET['deltask'];
  $sql= "DELETE FROM `list` WHERE id='$id'";
  $result= mysqli_query($conn, $sql);
  if($result){
    header('location:index.php');
  }else {
    die(mysqli_error($conn));
  }
}



 ?>
