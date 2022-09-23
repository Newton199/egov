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
                        <li class="active"><a href="leave_record.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
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
                    <li class="active">
                        <a href="leave_list.php"><i class="icon-plus icon-large"></i>Leave Record List</a>
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
                    <li><a href="SPED.php"><font color="white">SPED Center - Silay South</font></a></li>
                    <li><a href="guimbala_on.php"><font color="white">Brgy. Guimbala-on National High School</font></a></li>
                    <li><a href="don_serafin.php"><font color="white">Don Serafin L. Golez Memorial Integrated School</font></a></li>
                    <li><a href="Pre-School.php"><font color="white">Division of Silay Pre-School</font></a></li>
                    <li><a href="elem_school.php"><font color="white">Elementary School</font></a></li>

                </ul>
            </div>
            <div class="right-nav-content">
                <div class="alert alert-info">
                    <h2>Employee with Leave Record List</h2>
                </div>

            
                <hr>
                <table class="users-table">
                 

                <div class="demo_jui">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Inclusive Dates</th>
                            <th>No. of Days Served Rendered</th>
                            <th>No. of Days Service Credits Approved</th>
                           
                        </tr>
                    </thead>
                    <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from employee");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['employeeID']; ?>

                        <tr class="del<?php echo $id ?>">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      



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
        
        

    