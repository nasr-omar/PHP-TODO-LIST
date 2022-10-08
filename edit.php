<?php
include('conn.php');
$id=$_GET['editask'];

$sql="SELECT * FROM `list` WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$task=$row['task'];
$status=$row['status'];


if (isset($_POST['update'])) {
  $task=$_POST['task'];
  $status=$_POST['status'];

  $sql="UPDATE `list` SET id='$id', task='$task' WHERE id='$id'";
  $result=mysqli_query($conn, $sql);
if ($result) {
  header('location:index.php');
}else {
  die(mysqli_error($conn));
}
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Edit Tasks</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   </head>
   <body>
     <form class="" method="post">
       <div class="container" id="task_div">
   <input type="text" class="task" name='task' aria-label="Sizing example input"
   aria-describedby="inputGroup-sizing-lg" value="<?php echo $task; ?>">
     <button type="submit" name="update" class="btn btn-primary">Update Task</button>
   </div>
 </form>
   </body>
 </html>
