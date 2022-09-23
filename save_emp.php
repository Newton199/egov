<?php


include('dbcon.php');
include('session.php'); 

if (isset($_POST['save'])){
 
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
$salary_grade=$_POST['salary_grade'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			

mysqli_query($conn,"insert into employee (FirstName,LastName,MiddleName,Sex,Date_of_Birth,Position,ItemNo,Tin,Status,Eligibility,School,salary_grade,location)
values('$FirstName','$LastName','$MiddleName','$Sex','$Birthdate','$Position','$Item','$Tin','$Status','$Eligibility','$School','$salary_grade','$location')")or die(mysqli_error());


$logout_query=mysqli_query($conn,"select * from user where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$FirstName $LastName', 'Add Employee', NOW(),'$type')")or die(mysqli_error());

header('location:emp_profiles.php');

}
?>
