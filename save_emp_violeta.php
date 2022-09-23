<?php

include('dbcon.php');
 
 
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MiddleName=$_POST['MiddleName'];
$Sex=$_POST['Sex'];
$Birthdate=$_POST['Birthdate'];
$Position=$_POST['Position'];
$Item=$_POST['Item'];
$Tin=$_POST['Tin'];
$Status=$_POST['Status'];
$Eligibility=$_POST['Eligibility'];
$School=$_POST['School'];


mysqli_query($conn,"insert into employee (FirstName,LastName,MiddleName,Sex,Date_of_Birth,Position,ItemNo,Tin,Status,Eligibility,School)
values('$FirstName','$LastName','$MiddleName','$Sex','$Birthdate','$Position','$Item','$Tin','$Status','$Eligibility','Violeta Integrated School')")or die(mysqli_error());

?>
