
  <?php
include('dbcon.php');

$id=$_POST['id'];


mysqli_query($conn,"delete from service_credits where service_credits_id='$id'")or die(mysqli_error());
  
?>

