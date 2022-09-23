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
                        <li><a href="emp_profiles.php"><i class="icon-group icon-large"></i>Profiles</a></li>
                        <li><a href="leave_record.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
                        <li class="active"><a href="entry.php"><i class="icon-list icon-large"></i>Entry</a></li>
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

        <div id="element" class="hero-body-emp">


            <div class="alert alert-info">
                <h2>Entry List</h2>
            </div>

            <hr>




            <div class="row-fluid">
                <div class="span12">

                    <div class="row-fluid">
                        <div class="span4">
                            <a data-toggle="modal" href="#School_entry" class="btn"><i class="icon-plus-sign icon-large"></i>&nbsp;Add School Entry</a>
                            <div class="modal hide fade" id="School_entry">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">?</button>

                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-info">
                                        Add School Entry
                                    </div>
                                    <form method="post">
                                        <center>
                                            <p>  Name of School:<input type="text" name="school"> </p>
                                            <button  class="btn btn-primary btn-large" name="add_entry"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                        </center>
                                    </form>

                                    <?php
                                        if (isset($_POST['add_entry'])){

                                            $school=$_POST['school'];

                                            mysqli_query($conn,"insert into school (Name) values ('$school')")or die(mysqli_errno());
                                            echo('<script>location.href = "entry.php";</script>');
                                            // header('location:entry.php');
                                        }

                                    ?>
                                </div>
                            </div>





                            <div class="color_white">
                                <table class="table table-bordered  table-condensed">
                                    <thead>
                                        <tr>
                                            <th>School</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $emp_query=mysqli_query($conn,"select * from school");
                                            while($row=mysqli_fetch_array($emp_query)){ $id=$row['school_id']; ?>

                                            <tr class="del<?php echo $id ?>">
                                                <td><?php echo $row['Name']; ?></td>



                                                <td><a href="delete_entry.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Delete</a>  </td>
                                            </tr>
                                            <?php }?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!-- 2nd -->
                        <div class="span4">
                            <a data-toggle="modal" href="#add_position" class="btn"><i class="icon-plus-sign  icon-large"></i>&nbsp;Add Position Entry</a>
                            <div class="modal hide fade" id="add_position">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">?</button>

                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-info">
                                        Add Position
                                    </div>
                                    <form method="post">
                                        <center>
                                            <p>Position:<input type="text" name="position"> </p>
                                            <button  class="btn btn-primary btn-large" name="add_entry"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                        </center>
                                    </form>

                                    <?php
                                        if (isset($_POST['add_entry']) && $_POST['position']){

                                            $position=$_POST['position'];

                                            mysqli_query($conn,"insert into position (position) values ('$position')")or die(mysqli_errno());
                                            // header('location:emp_profiles.php');
                                            echo('<script>location.href = "emp_profiles.php";</script>');
                                        }

                                    ?>
                                </div>
                            </div>
                            <div class="color_white">
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Position</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $emp_query=mysqli_query($conn,"select * from position");
                                            while($row=mysqli_fetch_array($emp_query)){ $id_position=$row['position_id']; ?>

                                            <tr class="del<?php echo $id_position; ?>">
                                                <td><?php echo $row['position']; ?></td>



                                                <td><a href="delete_entry_position.php<?php echo '?id='.$id_position; ?>" class="btn btn-danger">Delete</a>  </td>
                                            </tr>
                                            <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--- 3 -->
                        <div class="span4">   
                            <a data-toggle="modal" href="#add_qualification" class="btn"><i class="icon-plus-sign  icon-large"></i>&nbsp;Add Qualification Entry</a>
                            <div class="modal hide fade" id="add_qualification">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">?</button>

                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-info">
                                        Add Entry Qualification
                                    </div>
                                    <form method="post">
                                        <center>
                                            <p>Qualification:<input type="text" name="qualification"> </p>
                                            <button  class="btn btn-primary btn-large" name="add_q"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                        </center>
                                    </form>

                                    <?php
                                        if (isset($_POST['add_q'])){

                                            $qualification=$_POST['qualification'];

                                            mysqli_query($conn,"insert into qualification (qualification) values ('$qualification')")or die(mysqli_errno());
                                            echo('<script>location.href = "entry.php";</script>');
                                            // header('location:entry.php');
                                        }

                                    ?>
                                </div>
                            </div>
                            <div class="color_white">  
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $emp_query=mysqli_query($conn,"select * from qualification");
                                            while($row=mysqli_fetch_array($emp_query)){ $id_qualification=$row['qualification_id']; ?>

                                            <tr class="del<?php echo $id_qualification; ?>">
                                                <td><?php echo $row['qualification']; ?></td>



                                                <td><a href="delete_entry_qualification.php<?php echo '?id='.$id_qualification; ?>" class="btn btn-danger">Delete</a>  </td>
                                            </tr>
                                            <?php }?>
                                    </tbody>
                                </table>
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
        
        

    