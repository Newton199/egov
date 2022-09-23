<?php include('dbcon.php'); include('session.php');include('header.php'); $get_id=$_GET['id'];?>
<body>
<?php include('nav-top.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li>
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
   <li class="divider-vertical"></li>
  <li><a href="emp_profiles.php"><i class="icon-group icon-large"></i>Profiles</a></li>
   <li class="divider-vertical"></li>
   <li class="divider-vertical"></li>
     <li><a href="leave_record.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
   <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>


  <form class="navbar-search pull-right" method="POST" action="search.php">
  <input type="text" name="search" class="search-query" placeholder="Search">
</form>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">

<div id="element" class="hero-body">

<?php $result=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die (mysqli_error());
$get_row=mysqli_fetch_array($result);
 ?>
<h2><font color="white"><?php echo $get_row['FirstName']; ?>&nbsp;&nbsp;<?php echo $get_row['MiddleName']; ?>&nbsp;&nbsp;<?php echo $get_row['LastName']; ?></font></h2>
<a class="btn btn-primary" href="service_record.php"><i class="icon-plus-sign icon-large"></i>&nbsp;Add New Service Record</a>
<div class="button-back">
<a class="btn btn-success" href="service_record.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
</div>
<hr>
<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Service Exclusive Date</th>
				<th>Designation</th>
				<th>Status</th>
				<th>Salary</th>
				<th>Station/Place</th>
				<th>Branch</th>
				<th>Remarks</th>
				</tr>
			</thead>
			<tbody>

<?php $emp_query=mysqli_query($conn,"select * from employee");
while($row=mysqli_fetch_array($emp_query)){ $id=$row['employeeID']; ?>

<tr class="del<?php echo $id ?>">
	<td><?php echo $row['FirstName']; ?></td>
	<td><?php echo $row['LastName']; ?></td>
	<td><?php  echo $row['MiddleName']?></td>
	<td><?php echo $row['Sex'] ?></td>
	<td><?php echo $row['Sex'] ?></td>
	<td><?php echo $row['Sex'] ?></td>
	<td><?php echo $row['Sex'] ?></td>
	

<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>





	
	</tr>
<?php }?>
			</tbody>
		</table>


</div>
<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
		

	