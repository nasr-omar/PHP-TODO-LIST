<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo Tasks</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body>
    <form class="" action="insert.php" method="post">
      <div class="container" id="task_div">
  <input type="text" required class="task" name='task' aria-label="Sizing example input"
  aria-describedby="inputGroup-sizing-lg">
    <button type="submit" name="add" class="btn btn-primary">Add Task</button>
  </div>
</form>
  </body>
</html>

<?php
include('conn.php');
if (isset($_POST['add'])) {
  $task=$_POST['task'];
  $date=$_POST['date'];

}
$sql="SELECT * FROM `list` ";
$result=mysqli_query($conn, $sql);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table class="table table-dark table-striped">
  <thead>
    <th>#</th>
    <th>Task</th>
    <th>Date</th>
    <!-- <th>status</th> -->
    <th colspan="2" id="action">Action</th>
  </thead>
  <tbody>
  <?php $i=1; while ($row=mysqli_fetch_array($result)) {?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['task']; ?></td>
    <td><?php echo $row['date']; ?></td>

    <td><a href="edit.php?editask=<?php echo $row['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td><a href="delete.php?deltask=<?php echo $row['id'];?>id="delete""><i class="fa-solid fa-trash"></i></a></td>
  </tr>
  <?php $i++;}?>
    </tbody>
</table>
<footer id="sign"> &copy Nasrudin <?php echo date('Y'); ?></footer>
   </body>
 </html>
