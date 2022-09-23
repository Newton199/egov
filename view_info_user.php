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

        <div id="element" class="hero-body-info">


            <div class="alert alert-info">
                <h2>
                    <?php
                        $get_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_error());
                        $row=mysqli_fetch_array($get_query);$id=$row['employeeID'];

                        echo 'Personal Information of'." ".$row['FirstName']." ".$row['LastName'];

                    ?>
                </h2>
            </div>

            <hr>

            <div class="pull-right">  

                <a href="emp_profiles_user.php" class="btn btn-success btn-large"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
            </div>
            <br>
            <br>
            <br>

            <div class="pull-left">
                <img width="200" height="200" class="pics2x" src="<?php echo $row['location']; ?>">
              
                
            </div>
                
            <div class="pull-right">
                <div class="hero-unit-info">

                    <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span6"> Item No:<font color="orange"><b><?php echo $row['Item_Number']; ?></b> </font></div>
                                <div class="span2">Sex:<font color="orange"><b><?php echo $row['Sex']; ?></b> </font></div>
                                <div class="spa42">Employee No:<font color="orange"><b><?php echo $row['Employee_No']; ?></b> </font></div>
                            </div>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span3">Date of Birth:<font color="orange"><b><?php echo $row['Date_of_Birth']; ?></b> </font></div>
                                <div class="span5">Place of Birth:<font color="orange"><b><?php echo $row['birth_place']; ?></b> </font></div>
                                <div class="span4">Civil Status:<font color="orange"><b><?php echo $row['civil_status']; ?></b> </font></div>
                            </div>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span4">Citizenship:<font color="orange"><b><?php echo $row['citizenship']; ?></b> </font></div>
                                <div class="span3">Height(m):<font color="orange"><b><?php echo $row['height']; ?></b> </font></div>
                                <div class="span3">Weight(kg):<font color="orange"><b><?php echo $row['weight']; ?></b> </font></div>
                                <div class="span2">Blood Type:<font color="orange"><b><?php echo $row['blood_type']; ?></b> </font></div>
                            </div>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span6">GSIS ID NO:<font color="orange"><b><?php echo $row['gsis']; ?></b> </font></div>
                                <div class="span6">PAG-IBIG ID NO:<font color="orange"><b><?php echo $row['pag_ibig']; ?></b> </font></div>

                            </div>
                        </div>
                    </div>
                    
                    
                    
                        <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span6">PHILHEALTH NO:<font color="orange"><b><?php echo $row['PHILHEALTH']; ?></b> </font></div>
                                <div class="span6">SSS NO:<font color="orange"><b><?php echo $row['SSS']; ?></b> </font></div>

                            </div>
                        </div>
                    </div>


                         <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span5">Authorized Salary:<font color="orange"><b><?php echo $row['Authorized_Salary']; ?></b> </font></div>
                                <div class="span5">Actual Salary:<font color="orange"><b><?php echo $row['Actual_Salary']; ?></b> </font></div>
                                <div class="span2">Step:<font color="orange"><b><?php echo $row['step']; ?></b> </font></div>

                            </div>
                        </div>
                    </div>
                    
                       <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span6">Status:<font color="orange"><b><?php echo $row['Status']; ?></b> </font></div>
                                <div class="span6">Civil Service Eligibility:<font color="orange"><b><?php echo $row['Civil_Service_Eligibility']; ?></b> </font></div>
                           

                            </div>
                        </div>
                    </div>
                    
                         <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span6">Residential Address:<font color="orange"><b><?php echo $row['Residential_Address']; ?></b> </font></div>
                                <div class="span2">ZIP CODE:<font color="orange"><b><?php echo $row['ZIP_CODE1']; ?></b> </font></div>
                                <div class="span4">Telephone NO:<font color="orange"><b><?php echo $row['Telephone_NO']; ?></b> </font></div>
                           

                            </div>
                        </div>
                    </div>
                    
                          <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span6">Permanent Address:<font color="orange"><b><?php echo $row['Residential_Address']; ?></b> </font></div>
                                <div class="span2">ZIP CODE:<font color="orange"><b><?php echo $row['ZIP_CODE1']; ?></b> </font></div>
                                <div class="span4">Cellphone_NO:<font color="orange"><b><?php echo $row['Telephone_NO']; ?></b> </font></div>
                           

                            </div>
                        </div>
                    </div>
                    
                               <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span4">Email Address:<font color="orange"><b><?php echo $row['Email_Address']; ?></b> </font></div>
                                <div class="span4">Agency Employee NO:<font color="orange"><b><?php echo $row['ZIP_CODE2']; ?></b> </font></div>
                                <div class="span4">Tin:<font color="orange"><b><?php echo $row['Cellphone_NO']; ?></b> </font></div>
                           

                            </div>
                        </div>
                    </div>

                    
                                <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span7">Item Number:<font color="orange"><b><?php echo $row['Item_Number']; ?></b> </font></div>
                                <div class="span5">Position:<font color="orange"><b><?php echo $row['Position']; ?></b> </font></div>
                              

                            </div>
                        </div>
                    </div>

                    
                                  <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span3">Area Code:<font color="orange"><b><?php echo $row['Area_Code']; ?></b> </font></div>
                                <div class="span3">Area Type:<font color="orange"><b><?php echo $row['Area_Type']; ?></b> </font></div>
                                <div class="span6">P/P/A ATTRIBUTION:<font color="orange"><b><?php echo $row['ATTRIBUTION']; ?></b> </font></div>
                              

                            </div>
                        </div>
                    </div>
                    
                                       <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span3">Remarks:<font color="orange"><b><?php echo $row['Remarks']; ?></b> </font></div>
                           
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>

            </div>
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
        
        

    