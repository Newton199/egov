<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($conn,"delete from position where position_id='$id'")or die(mysqli_error());
header('location:entry.php');
?>