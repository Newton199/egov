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
                            <a href="home_user.php"><i class="icon-home icon-large"></i>Home</a>
                        </li>
                        <li class="active"><a href="emp_profiles_user.php"><i class="icon-group icon-large"></i>Profiles</a></li>
                        <li><a href="leave_record_user.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
                        
                        <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
                        <form  method="POST" action="search_user.php" class="navbar-search pull-right">
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
                <h2>Add Leave Record to <?php echo $row['FirstName']." ".$row['LastName']; ?></h2>

                <div class="pull-right">
                <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="emp_profiles_user.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
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
                            <label class="control-label" for="input01">No. of Days served Rendered:</label>
                            <div class="controls">
                                <input type="text" name="rendered" class="input-xlarge" id="input01"  placeholder="No. of Days served Rendered:">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"   for="input01">No. of Days Service Credits Aprroved:</label>
                            <div class="controls">
                                <input type="text"  name="approved" class="input-xlarge" id="input01"  placeholder="No. of Days Service Credits Aprroved">

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


                $emp_id=$_POST['name'];
                $from=$_POST['from'];
                $to=$_POST['to'];
                $rendered=$_POST['rendered'];
                $approved=$_POST['approved'];


                mysqli_query($conn,"insert into leave_record (from_date,to_date,employeeID,No_of_Days,No_of_Days_approved) 
                    values('$from','$to','$emp_id','$rendered','$approved')")or die(mysqli_error());

                header('location:emp_profiles_user.php');

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
        
        

    