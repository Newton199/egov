
  <?php
include('dbcon.php');

$id=$_POST['id'];


mysqli_query($conn,"delete from leave_record where leave_id='$id'")or die(mysqli_error());
  
?>


