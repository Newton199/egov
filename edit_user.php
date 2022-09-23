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
                <h2>Edit User</h2>
            </div>


            <hr>
            <div class="pull-right">
                <a class="btn btn-success btn-large" id="add"  data-content="Click here to return to User Account" data-original-title="Back?" rel="popover" href="user_account.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $('#add').popover('show')
                        $('#add').popover('hide')

                    });
                </script></div>



            <div class="hero-unit">
                <div class="hero-body-add-user">                 
                    <form class="form-horizontal" method="post">
                        <?php
                            $get_id=$_GET['id'];
                            $query_user=mysqli_query($conn,"select * from user where User_id='$get_id'")or die(mysqli_error());
                            $row=mysqli_fetch_array($query_user);
                        ?>
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="input01">UserName:</label>
                                <div class="controls">
                                    <input type="text" name="username" class="input-xlarge" id="input01"  value="<?php echo $row['UserName']; ?>">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">Password:</label>
                                <div class="controls">
                                    <input type="text" name="password" class="input-xlarge" id="input01" value="<?php echo $row['Password']; ?>">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"  for="input01">FirstName:</label>
                                <div class="controls">
                                    <input type="text"  name="firstname" class="input-xlarge" id="input01"  value="<?php echo $row['FirstName']; ?>">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"  for="input01">LastName:</label>
                                <div class="controls">
                                    <input type="text" name="lastname" class="input-xlarge" id="input01"  value="<?php echo $row['LastName']; ?>">

                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="input01">User Type:</label>
                                <div class="controls">
                                    <select class="span2" name="type">
                                        <option><?php
                                            echo $row['User_Type'];
                                        ?></option>
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>

                                </div>
                            </div>

                            <div class="control-group">

                                <div class="controls">
                                    <button class="btn btn-primary btn-large" name="save"><i class="icon-save icon-large"></i>&nbsp;Update</button>

                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

            <?php
                if (isset($_POST['save'])){

                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $firstname=$_POST['firstname'];
                    $lastname=$_POST['lastname'];
                    $type=$_POST['type'];

                    mysqli_query($conn,"update user set UserName='$username',
                        Password='$password',
                        FirstName='$firstname',
                        LastName='$lastname',
                        User_Type='$type'
                        where User_id='$get_id' ")or die(mysqli_error());


                    header('location:user_account.php');
                }
            ?>



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
        

    