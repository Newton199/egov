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
                        <li class="active"><a href="emp_profiles.php"><i class="icon-group icon-large"></i>Profiles</a></li>
                        <li class="divider-vertical"></li>
                        <li class="divider-vertical"></li>
                        <li><a href="leave_record.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
                        <li class="divider-vertical"></li>
                        <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
                        <li class="divider-vertical"></li>

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
            <div class="left-nav">
                <ul class="nav nav-tabs nav-stacked">
                    <li>
                        <a href="user_account.php"><font color="white"><i class="icon-user icon-large"></i>User Account</font></a>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-stacked">
                    <li>
                        <a href="emp_profiles.php"><font color="white">All</font></a>
                    </li>
                    <li><a href="violeta_IS.php"><font color="white">Violeta Integrated School</font></a></li>
                    <li><a href="sibato_IS.php"><font color="white">Sibato Integrated School</font></a></li>
                    <li><a href="Napilas_IS.php"><font color="white">Napilas Integrated School</font></a></li>
                    <li><a href="don_albino_IS.php"><font color="white">Don Albino & Do�a Dolores Jison Integrated School</font></a></li>
                    <li><a href="guinhalaran_IS.php"><font color="white">Guinhalaran Integrated School</font></a></li>
                    <li><a href="montila.php"><font color="white">Do�a Angeles J. Montinola Memorial High School</font></a></li>
                    <li><a href="Eustaquio.php"><font color="white">Eustaquio Lopez National High School</font></a></li>
                    <li><a href="Lantawan.php"><font color="white">Lantawan Integrated School</font></a></li>
                    <li><a href="Don_Felix.php"><font color="white">Don Felix T. Lacson Memorial National High School</font></a></li>
                    <li><a href="Montserrat.php"><font color="white">Do�a Montserrat Lopez Memorial High School</font></a></li>
                    <li class="active"><a href="SPED.php">SPED Center - Silay South</a></li>
                    <li><a href="guimbala_on.php"><font color="white">Brgy. Guimbala-on National High School</font></a></li>
                    <li><a href="don_serafin.php"><font color="white">Don Serafin L. Golez Memorial Integrated School</font></a></li>
                    <li><a href="Pre-School.php"><font color="white">Division of Silay Pre-School</font></a></li>
                    <li><a href="elem_school.php"><font color="white">Elementary School</font></a></li>
                </ul>
            </div>
            <div class="right-nav-content">
                <div class="alert alert-info">
                    <h2>SPED Center - Silay South Employee List</h2>
                </div>

                <a class="btn btn-primary" id="add"  data-content="Click here to Add Employee" rel="popover" data-original-title="Add Employee?" href="emp_add.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Add Employee</a>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $('#add').popover('show')
                        $('#add').popover('hide')

                    });
                </script>



                <?php $emp_query=mysqli_query($conn,"select * from employee where School='SPED Center - Silay South'");
                    $row=mysqli_fetch_array($emp_query);
                    $id=$row['employeeID']; ?>

                <div class="excel">    <form method="POST" action="violeta_excel.php">
                        <input type="hidden" name="id_get" value="<?php echo $id; ?>">
                        <button  data-content="Click here to download Employee Excel File" rel="popover" data-original-title="Download Excel?" id="save_voter" class="btn btn-success" name="save"><i class="icon-download icon-large"></i>Download Excel File</button>
                        <script type="text/javascript">
                            jQuery(document).ready(function() {
                                $('#save_voter').popover('show')
                                $('#save_voter').popover('hide')

                            });
                        </script>

                    </form></div>

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
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from employee where School='SPED Center - Silay South'");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['employeeID']; ?>

                        <tr class="del<?php echo $id ?>">
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['LastName']; ?></td>
                        <td><?php  echo $row['MiddleName']?></td>
                        <td><?php echo $row['Sex'] ?></td>
                        <td align="center"><img width="40" height="30" src="<?php echo $row['location'];?>" border="0" onmouseover="showtrail('<?php echo $row['location'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onmouseout="hidetrail()"></a></td>

                        <td align="center" width="240">
                            <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    $('#p<?php echo $id; ?>').popover('show')
                                    $('#p<?php echo $id; ?>').popover('hide')

                                });
                            </script>


                            <a class="btn btn-Success"  id="p<?php echo $id; ?>" data-content="Click here to Edit Employee" rel="popover" data-original-title="Edit?"  href="edit_emp.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;
                            <a class="btn btn-warning"  data-toggle="modal" href="#<?php echo $id; ?>" ><i class="icon-list icon-large"></i>&nbsp;View</a>

                            <div class="modal hide fade" id="d<?php echo $id; ?>">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">�</button>
                                    <h3> </h3>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-error">
                                        <p><font color="gray">Are You Sure you Want to Delete This User?</font></p>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn" data-dismiss="modal">No</a>
                                    <a href="delete_emp.php<?php echo '?id='.$id; ?>" class="btn btn-primary">Yes</a>
                                </div>
                            </div>



                            <a class="btn btn-danger1" data-toggle="modal" href="#d<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                        </td>
                        <input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>">

                        <div class="modal hide fade" id="<?php echo $id ?>">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">�</button>
                                <div class="alert alert-info">
                                    <h2>Employee Information</h2>
                                </div>

                            </div>    
                            <div class="modal-body">
                                <span>
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <p class="help-block">Item No:&nbsp;<b><?php echo $row['ItemNo']; ?></b></p>
                                            <p class="help-block">FirstName:&nbsp;<b><?php echo $row['FirstName']; ?></b>&nbsp;&nbsp;&nbsp; LastName:&nbsp;<b><?php echo $row['LastName']; ?></b>&nbsp;&nbsp;&nbsp;MiddleName:&nbsp;<b><?php echo $row['MiddleName']; ?></b></p>
                                            <p class="help-block">Sex:&nbsp;<b><?php echo $row['Sex']; ?></b>&nbsp;&nbsp;&nbsp;BirthDate:&nbsp;<b><?php echo $row['Date_of_Birth']; ?></b>  
                                                &nbsp;&nbsp;
                                                Position:&nbsp;<b><?php echo $row['Position']; ?></b></p>
                                            <p class="help-block">Salary_Grade:&nbsp;<b><?php echo $row['salary_grade']; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;Step:&nbsp;<?php echo $row['step'];?>
                                                &nbsp;&nbsp;
                                                Tin:&nbsp;<b><?php echo $row['tin']; ?></b>
                                                &nbsp;&nbsp;  &nbsp;&nbsp;
                                                Status:&nbsp;<b><?php echo $row['Status']; ?></b></p>
                                            <p class="help-block">Eligibility:&nbsp;<b><?php echo $row['Eligibility']; ?></b>
                                                &nbsp;&nbsp;
                                                Organizational Unit:&nbsp;<b><?php echo $row['School']; ?></b>
                                            </p>                   
                                            <img width="150" height="150" src="<?php echo $row['location'];?>"/>
                                        </fieldset>
                                    </form>
                                </span>


                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn" data-dismiss="modal">Close</a>

                            </div>
                        </div>    
                    </div>
                </div>




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
        
        

    