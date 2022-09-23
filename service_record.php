<?php include('dbcon.php'); include('session.php');include('header.php'); ?>
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
<div class="left-nav">

<ul class="nav nav-tabs nav-stacked">
  <li class="active">
    <a href="emp_profiles.php">All</a>
  </li>
  <li><a href="violeta_IS.php"><font color="white">Violeta Integrated School</font></a></li>
  <li><a href="sibato_IS.php"><font color="white">Sibato Integrated School</font></a></li>
  <li><a href="Napilas_IS.php"><font color="white">Napilas Integrated School</font></a></li>
  <li><a href="don_albino_IS.php"><font color="white">Don Albino & Do�a Dolores Jison Integrated School</font></a></li>
  <li><a href="#"><font color="white">Guinhalaran Integrated School</font></a></li>
  <li><a href="#"><font color="white">Do�a Angeles J. Montinola Memorial High School</font></a></li>
  <li><a href="#"><font color="white">Eustaquio Lopez National High School</font></a></li>
  <li><a href="#"><font color="white">Lantawan Integrated School</font></a></li>
  <li><a href="#"><font color="white">Don Felix T. Lacson Memorial National High School</font></a></li>
  <li><a href="#"><font color="white">Do�a Montserrat Lopez Memorial High School</font></a></li>
  <li><a href="#"><font color="white">SPED Center - Silay South</font></a></li>
  <li><a href="#"><font color="white">Brgy. Guimbala-on National High School</font></a></li>
  <li><a href="#"><font color="white">Don Serafin L. Golez Memorial Integrated School</font></a></li>

</ul>
</div>
<div class="right-nav-content">
<h2><font color="white">Employee List Service Records</font></h2>
	<hr>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>FirstName</th>
				<th>LastName</th>
				<th>MiddleName</th>
				<th>Sex</th>
				<th>Actions</th>
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
	
	<td align="center">
	<a class="btn btn-info" href="view_record.php<?php echo '?id='.$id; ?>" ><i class="icon-list icon-large"></i>&nbsp;View</a>
</td>
<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>




	
	</tr>
<?php }?>
			</tbody>
		</table>

</div>
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
		
		
<script type="text/javascript">
	$(document).ready( function() {
	
	$('.btn-danger1').click( function() {
		
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this Employee?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_emp.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow'); 
			} 
			}); 
			}else{
			return false;}
		});				
	});

</script>
	