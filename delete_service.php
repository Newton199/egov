
  <?php
include('dbcon.php');

$id=$_POST['id'];


mysqli_query($conn,"delete from service_record where service_record_id='$id'")or die(mysqli_error());
  
?>

