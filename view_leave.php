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
                        <li class="active"><a href="emp_profiles.php"><i class="icon-group icon-large"></i>Profiles</a></li>
                        <li><a href="leave_record.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
                        <li><a href="entry.php"><i class="icon-list icon-large"></i>Entry</a></li>
                        <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
                        <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
                        <form  method="POST" action="search.php" class="navbar-search pull-right">
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

    <div class="alert alert-info">
 <h2><font><?php echo $get_row['FirstName']; ?>&nbsp;&nbsp;<?php echo $get_row['MiddleName']; ?>&nbsp;&nbsp;<?php echo $get_row['LastName']; ?> &nbsp;Service Credits</font></h2>
    </div>
<div class="button-back">
<a class="btn  btn-large btn-success" href="emp_profiles.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
</div>
<hr>
<table class="users-table">


        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                <thead>
                    <tr>
                      
                       <th>Name</th>
                       <th>Inclusive Date</th>
                <th>No. of Days Served Rendered</th>
                <th>NO. of Days Service Credit Approved</th>
                <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from leave_record where employeeID='$get_id'");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['leave_id']; $emp=$row['employeeID'];  ?>
                              
                        <tr class="del<?php echo $id ?>">
                        <?php
                            $result=mysqli_query($conn,"select * from employee  where employeeID='$emp'")or die(mysqli_error());
                            $row_emp=mysqli_fetch_array($result);
                        ?>
                            <td><?php  echo $row_emp['FirstName']." ".$row_emp['LastName'];?></td>
                            <td><?php echo $row['from_date']."-".$row['to_date']; ?></td>
                            <td width="150"><?php echo $row['No_of_Days']; ?></td>
                            <td width="150"><?php echo $row['No_of_Days_approved']; ?></td>
                            <td>
                              <a class="btn btn-danger1"  id="<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                            </td>
                    
                            
                           

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
	<button type="button" class="close" data-dismiss="modal">?</button>
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
      
        if(confirm("Are you sure you want to delete this Record?")){
            
        
            $.ajax({
            type: "POST",
            url: "delete_leave.php",
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
