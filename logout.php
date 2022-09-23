<?php
include('dbcon.php');
include('session.php');

$logout_query=mysqli_query($conn,"select * from user where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$f=$row['FirstName'];
$l=$row['LastName'];
$type=$row['User_Type'];
session_start();
session_destroy();

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'$type')")or die(mysqli_error());


header('location:index.php');

?>