<?php
include('conn.php');

if (isset($_POST['add'])) {
  // $id=$i;
  $task=$_POST['task'];

$sql="INSERT INTO `list` (task) VALUES('$task')";
$result=mysqli_query($conn,$sql);
if ($result) {
  header('location:index.php');
}else {
  die(mysqli_error($conn));
}
}






 ?>
