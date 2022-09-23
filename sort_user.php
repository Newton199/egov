<?php include('dbcon.php'); include('session.php');include('header.php'); ?>
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

    <div id="element" class="hero-body">


        <div class="alert alert-info">
            <h2>
                <?php
                    if(isset($_POST['filter'])){

                        $sort=$_POST['sort'];

                        $name_query=mysqli_query($conn,"select * from school where Name='$sort'")or die(mysqli_error());
                        $query_row=mysqli_fetch_array($name_query);

                        echo $query_row['Name']." ".'Personnel Record';

                    }

                ?>

            </h2>
        </div>

        <hr>

        <div class="pull-right">  
         
      
                
    <form method="POST" action="PSIPOP_excel.php">
    <input type="hidden" name="id_excel" value="<?php echo $sort; ?>">
    <button id="save_voter" class="btn btn-success btn-large" name="save"><i class="icon-download icon-large"></i>&nbsp;PSIPOP</button>
    </form>
                                                         




        </div>



       
        <form method="post">

            <select name="sort" class="span4">
                <option>Sort Personnel by School</option>

                <?php
                    $while_query=mysqli_query($conn,"select * from school")or die(mysqli_error());
                    while($row=mysqli_fetch_array($while_query)){
                    ?>

                    <option><?php echo $row['Name'];?></option>


                    <?php }; ?>
            </select>          
            <button name="filter" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
        </form>

        <!-- position sort -->
        <form method="post" action="sort1_user.php">

            <select name="position" class="span4">
                <option>Sort Personnel by Position</option>

                <?php
                    $while_query=mysqli_query($conn,"select * from position")or die(mysqli_error());
                    while($row=mysqli_fetch_array($while_query)){
                    ?>

                    <option><?php echo $row['position'];?></option>


                    <?php }; ?>
            </select>          
            <button name="filter1" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
        </form>

        <!--- Qualification -->
        <form method="post" action="sort2_user.php">

            <select name="qualification" class="span4">
                <option>Sort Personnel by Qualification</option>

                <?php
                    $while_query=mysqli_query($conn,"select * from qualification")or die(mysqli_error());
                    while($row=mysqli_fetch_array($while_query)){
                    ?>

                    <option><?php echo $row['qualification'];?></option>


                    <?php }; ?>
            </select>          
            <button name="filter2" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
        </form>









        <br>

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
                    <?php
                        if (isset($_POST['filter'])){

                            $sort=$_POST['sort'];
                        ?>

                        <?php

                            $emp_query=mysqli_query($conn,"select * from employee where School='$sort'");
                            while($row=mysqli_fetch_array($emp_query)){ $id=$row['employeeID']; ?>

                           <tr class="del<?php echo $id ?>">
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php  echo $row['MiddleName']?></td>
                            <td><?php echo $row['Sex'] ?></td>
                            <td align="center"><img width="40" height="30" src="<?php echo $row['location'];?>" border="0" onmouseover="showtrail('<?php echo $row['location'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onmouseout="hidetrail()"></a></td>

                            <td align="center" width="200">      
                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        $('#p<?php echo $id; ?>').popover('show')
                                        $('#p<?php echo $id; ?>').popover('hide')

                                    });
                                </script>


                           
                                <a class="btn btn-warning"  data-toggle="modal" href="#<?php echo $id; ?>" ><i class="icon-list icon-large"></i>&nbsp;View</a>
                                <?php
                                    include('button_view_user.php');
                                ?>
                                <a class="btn "  data-toggle="modal" href="#a<?php echo $id; ?>" ><i class="icon-plus icon-large"></i>&nbsp;Add</a>
                                <?php
                                    include('button_add_user.php');
                                ?>
                            </td>
                        </tr>
                            <?php }}?>
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
        
        

    