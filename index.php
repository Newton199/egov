<?php
session_start();
 include('dbcon.php');include('header.php');?>
<body>
<?php include('nav-top1.php'); ?>
<div class="wrapper">

</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div id="element" class="hero-body-index">
    <div class="alert alert-info">
 	<p><font color=""><h2>Login</h2></font></p>
	Enter the details to login your account
    </div>

	<hr>
	<form method="POST" >
	<table>
    <tr><td><font color="">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary btn-large" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Login</button></td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	
	</br>
	<div class="error">
	<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysqli_query($conn,"select * from user where UserName='$UserName' and Password='$Password' and User_Type='Admin'");
$count=mysqli_num_rows($login_query);

$login_query1=mysqli_query($conn,"select * from user where UserName='$UserName' and Password='$Password' and User_Type='User'");
$count1=mysqli_num_rows($login_query1);



$row1=mysqli_fetch_array($login_query1);
if(mysqli_num_rows($login_query1) > 0){
	$f=$row1['FirstName'];
	$l=$row1['LastName'];
}
$row=mysqli_fetch_array($login_query);
if(mysqli_num_rows($login_query) > 0){
$f=$row['FirstName'];
$l=$row['LastName'];
}




if ($count1 == 1){
$_SESSION['id']=$row1['User_id'];
$_SESSION['User_Type']=$row1['User_Type'];
$type=$row1['User_Type'];

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysqli_error());


echo('<script>location.href = "home_user.php";</script>');
}

if ($count > 0){
$_SESSION['id']=$row['User_id'];
$_SESSION['User_Type']=$row['User_Type'];
$type=$row['User_Type'];

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysqli_error());


echo('<script>location.href = "home.php";</script>');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">�</button>
   Please check your UserName and Password
    </div>
<?php } 

}

?>	
</div>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<?php include('footer.php');?>


</div>
</body>
</html>