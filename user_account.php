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
       
        
            <div class="alert alert-info">
                <h2>User Account List</h2>
            </div>    
                <hr>      
                   <div class="pull-right">
                    <a href="emp_profiles.php" class="btn btn-large btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
            <a class="btn btn-primary btn-large" id="add"  data-content="Click here to Add User" data-original-title="Add User?" rel="popover" href="add_user.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Add User</a>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#add').popover('show')
                    $('#add').popover('hide')

                });
            </script>
             </div>
             <br>
             <br>
             <br>
          
        
            <table class="users-table">


            <div class="demo_jui">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                    <thead>
                        <tr>
                            <th>UserName</th>
                            <th>Password</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>User Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $user_query=mysqli_query($conn,"select * from user");
                            while($row=mysqli_fetch_array($user_query)){ $id=$row['User_id']; ?>

                            <tr class="del<?php echo $id ?>">
                                <td><?php echo $row['UserName']; ?></td>
                                <td><?php echo $row['Password']; ?></td>
                                <td><?php echo $row['FirstName']; ?></td>
                                <td><?php  echo $row['LastName']?></td>
                                <td><?php echo $row['User_Type'] ?></td>
                                <td width="160">
                                    <a class="btn btn-success" href="edit_user.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;	

                                    <a class="btn btn-danger1"  data-toggle="modal" href="#d<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>

                                    <div class="modal hide fade" id="d<?php echo $id; ?>">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">?</button>
                                            <h3> </h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-error">
                                                <p><font color="gray">Are You Sure you Want to Delete This User?</font></p>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn" data-dismiss="modal">No</a>
                                            <a href="del_user.php<?php echo '?id='.$id; ?>" class="btn btn-primary">Yes</a>
                                        </div>
                                    </div>
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
		

	