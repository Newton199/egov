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

        <div id="element" class="hero-body-service">


            <div class="alert alert-info">
                <?php
                    $leave_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_errno());
                    $row=mysqli_fetch_array($leave_query);
                    $member_id=$row['employeeID'];
                ?>
                <h2>Add Service Record to <?php echo $row['FirstName']." ".$row['LastName']; ?></h2>

                <div class="pull-right">
                <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="emp_profiles.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                  </div>
            </div>

       

            <div class="hero-body-add-user">                 
                <form class="form-horizontal" method="post">
                    <fieldset>

                        <input type="hidden" name="name" value="<?php echo $member_id; ?>" >
                        <div class="control-group">
                            <label class="control-label" for="input01">Inclusive Dates:</label>
                            <div class="controls">
                                <input type="text" id="smaller" name="from" class="Birthdate"   placeholder="from">
                                <input type="text" id="smaller" name="to" class="Birthdate"  placeholder="To">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Designation:</label>
                            <div class="controls">
                                <input type="text" name="Designation" class="input-xlarge" id="input01"  placeholder="Designation">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"   for="input01">Status:</label>
                            <div class="controls">
                                <input type="text"  name="Status" class="input-xlarge" id="input01"  placeholder="Status">

                            </div>
                        </div>

                                      <div class="control-group">
                            <label class="control-label"   for="input01">Salary:</label>
                            <div class="controls">
                                <input type="text"  name="Salary" class="input-xlarge" id="input01"  placeholder="Salary">

                            </div>
                        </div>

                        
                                   <div class="control-group">
                            <label class="control-label"   for="input01">Station/Place:</label>
                            <div class="controls">
                                <input type="text"  name="Station" class="input-xlarge" id="input01"  placeholder="Station/Place">

                            </div>
                        </div>
                        
                        
                                     <div class="control-group">
                            <label class="control-label"   for="input01">Branch:</label>
                            <div class="controls">
                                <input type="text"  name="Branch" class="input-xlarge" id="input01"  placeholder="Branch">

                            </div>
                        </div>
                        
                        
                                      <div class="control-group">
                            <label class="control-label"   for="input01">Remarks:</label>
                            <div class="controls">
                                <input type="text"  name="Remarks" class="input-xlarge" id="input01"  placeholder="Remarks">

                            </div>
                        </div>
                        

                        <div class="control-group">

                            <div class="controls">
                                <button name="save" class="btn btn-large">Save</button>

                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>


        <?php

            include('dbcon.php');    
            if (isset($_POST['save'])){

            $id_emp=$_POST['name'];
            $from_date=$_POST['from'];
            $to_date=$_POST['to'];
            $Designation=$_POST['Designation'];
            $Status=$_POST['Status'];
            $Salary=$_POST['Salary'];
            $Station=$_POST['Station'];
            $Branch=$_POST['Branch'];
            $Remarks=$_POST['Remarks'];
     
     mysqli_query($conn,"insert into service_record (employeeID,from_date,to_date,Designation,status,salary,station_place,branch,Remarks)
     values ('$id_emp','$from_date','$to_date','$Designation','$Status','$Salary','$Station','$Branch','$Remarks')
     ") or die (mysqli_error());

     header('location:emp_profiles.php');
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
        
        

    