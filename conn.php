<?php
$conn=mysqli_connect("localhost:4000", "root", "", "todo");
if(!$conn){
  die(mysqli_error($conn));
}
 ?>
