<?php include('dbcon.php'); include('session.php');include('header.php'); 
    $get_id=$_GET['id'];
?>
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

        <div id="element" class="hero-body-leave">


            <div class="alert alert-info">
                <?php
                    $leave_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_errno());
                    $row=mysqli_fetch_array($leave_query);
                    $member_id=$row['employeeID'];
                ?>
                <h2>Add Leave Credits to <?php echo $row['FirstName']." ".$row['LastName']; ?></h2>

                <div class="pull-right">
                <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="emp_non_teaching.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                  </div>
            </div>

       

            <div class="hero-body-add-user">                 
                <form class="form-horizontal" method="post">
                    <fieldset>

                        <input type="hidden" name="name" value="<?php echo $member_id; ?>" >
                        <div class="control-group">
                            <label class="control-label" for="input01">Period Covered Dates:</label>
                            <div class="controls">
                                <input type="text" id="smaller" name="from" class="Birthdate"   placeholder="from">
                                <input type="text" id="smaller" name="to" class="Birthdate"  placeholder="To">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Leave Earned Vacation:</label>
                            <div class="controls">
                                <input type="text" name="LEV" class="input-xlarge" id="input01"  placeholder="Leave Earned Vacation">

                            </div>
                        </div>
						
							<?php
						$query=mysqli_query($conn,"select * from service_credits where employeeID='$member_id' order by service_credits_id DESC ")or die(mysqli_error());
						$row=mysqli_fetch_array($query);
						?>
						
						<!-- hidden -->
					
						   <input type="hidden" name="LEV1" class="input-xlarge" id="input01"  value="<?php echo $row['LE_vacation']; ?>">
								<input type="hidden" name="LES1" class="input-xlarge" id="input01"  value="<?php echo $row['LE_sick']; ?>">
						
						<!-- end -->
						
						

                        <div class="control-group">
                            <label class="control-label"   for="input01">Leave Earned Sick</label>
                            <div class="controls">
                                <input type="text"  name="LES" class="input-xlarge" id="input01"  placeholder="Leave Earned Sick">

                            </div>
                        </div>
                        
                           <div class="control-group">
                            <label class="control-label" for="input01">Leave Spent Vacation:</label>
                            <div class="controls">
                                <input type="text" name="LSV" class="input-xlarge" id="input01"  placeholder="Leave Spent Vacation">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"   for="input01">Leave Spent Sick</label>
                            <div class="controls">
                                <input type="text"  name="LSS" class="input-xlarge" id="input01"  placeholder="Leave Spent Sick">

                            </div>
                        </div>

							
							<!-- hidden -->
							
							 <div class="control-group">
                            <div class="controls">
                                <input type="hidden"  name="BV1" class="input-xlarge" id="input01"  placeholder="Leave Spent Sick" value="<?php echo $row['B_vacation']; ?>">
                                <input type="hidden"  name="BS1" class="input-xlarge" id="input01"  placeholder="Leave Spent Sick" value="<?php echo $row['B_sick']; ?>">

                            </div>
                        </div>

							


                        <div class="control-group">

                            <div class="controls">
                                <button type="submit" name="save" class="btn btn-large"><i class="icon-save"></i>&nbsp;Save</button>

                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>


        <?php

            include('dbcon.php');    
            if (isset($_POST['save'])){


                $emp_id=$_POST['name'];
                $from=$_POST['from'];
                $to=$_POST['to'];
                $LEV=$_POST['LEV'];
                $LES=$_POST['LES'];
                $LSV=$_POST['LSV'];
                $LSS=$_POST['LSS'];
				
                $LEV1=$_POST['LEV1'];
                $BV1=$_POST['BV1'];
				
				$LES1=$_POST['LES1'];
                $BS1=$_POST['BS1'];
				
				$BV=($LEV - $LSV) + ($BV1);
			
				$BS=($LES - $LSS) + ($BS1);
				
				$total=$BV+$BS;

                mysqli_query($conn,"insert into service_credits (from_date,to_date,employeeID,LE_vacation,LE_sick,LS_vacation,LS_sick,B_vacation,B_sick,total) 
                    values('$from','$to','$emp_id','$LEV','$LES','$LSV','$LSS','$BV','$BS','$total')")or die(mysqli_error());

                header('location:emp_non_teaching.php');

            }

        ?>




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
        
        

    