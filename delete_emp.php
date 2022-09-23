<?php
include('dbcon.php');
include('session.php');

$id=$_GET['id'];
$logout_query=mysqli_query($conn,"select * from user where User_id=$id_session")or die(mysqli_error());
$user_row=mysqli_fetch_array($logout_query);
$user_name=$user_row['User_Type'];



$result=mysqli_query($conn,"select * from employee where employeeID='$id'")or die(mysqli_error);
$row=mysqli_fetch_array($result);
$f=$row['FirstName'];
$f=$row['LastName'];


mysqli_query($conn,"delete from employee where employeeID='$id'");

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Employee', NOW(),'$user_name')")or die(mysqli_error());

header('location:emp_profiles.php');
?>