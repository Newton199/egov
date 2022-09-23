<?php
  include('dbcon.php');
  
  $get_id=$_GET['id'];
  
  
  mysqli_query($conn,"delete from school where school_id='$get_id'")or die(mysqli_error());
  
  header('location:entry.php');
  
  
?>
