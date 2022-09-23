<?php include('dbcon.php'); include('session.php');include('header.php'); $get_id=$_GET['id'];?>
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
						<li class="active"><a href="leave_record.php"><i class="icon-list icon-large"></i>Service Credits</a></li>
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

        <?php $result=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die (mysqli_error());
            $get_row=mysqli_fetch_array($result);
			$member_id=$get_row['employeeID'];
        ?>

        <div class="alert alert-info">
            <h2><font color=""><?php echo $get_row['FirstName']; ?>&nbsp;&nbsp;<?php echo $get_row['MiddleName']; ?>&nbsp;&nbsp;<?php echo $get_row['LastName']; ?>&nbsp; Leave Credits</font></h2>
        </div>


        <div class="button-back">
            <a class="btn  btn-large btn-success" href="emp_non_teaching.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
            <a href="print_service_credits.php<?php echo '?id='.$member_id; ?>" class="btn  btn-large"><i class="icon-print icon-large"></i>&nbsp;Print Preview</a>
        </div>
        <hr>
        
        <div class="color_white">
        <p>Position:&nbsp;<?php echo $get_row['Position']; ?></p>
        <p>Emp No:&nbsp;<?php echo $get_row['Employee_No']; ?></p>
        <p>District:</p>
   
        </div>
        
        
        <table class="users-table">


        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                <thead>
                    <tr>


                        <th>Period Covered</th>
                        <th>Leave Earned
                            <br>
                            Vaction - Sick
                        </th>
                        <th>Leave Spent
                            <br>
                            Vaction - Sick
                        </th>
                        <th>Balance
                            <br>
                            Vaction - Sick
                        </th>
                        <th>Total</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from service_credits where employeeID='$get_id' order by from_date");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['service_credits_id']; $emp=$row['employeeID'];  ?>

                        <tr class="del<?php echo $id ?>">
                            <?php
                                $result=mysqli_query($conn,"select * from employee  where employeeID='$emp'")or die(mysqli_error());
                                $row_emp=mysqli_fetch_array($result);
                            ?>
                            <td><?php echo $row['from_date']."  / ".$row['to_date']; ?></td>
                            <td><?php echo $row['LE_vacation']." / ".$row['LE_sick']; ?></td>
                            <td><?php echo $row['LS_vacation']." / ".$row['LS_sick']; ?></td>
                            <td><?php echo $row['B_vacation']." / ".$row['B_sick']; ?></td>
                            <td><?php echo $row['total'];?></td>
                  



                          

                            <td>
                                <a class="btn btn-danger1"  id="<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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




<script type="text/javascript">
    $(document).ready( function() {



        $('.btn-danger1').click( function() {

            var id = $(this).attr("id");

            if(confirm("Are you sure you want to delete this Record?")){


                $.ajax({
                    type: "POST",
                    url: "delete_service_credits.php",
                    data: ({id: id}),
                    cache: false,
                    success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                    } 
                }); 
            }else{
                return false;}
        });                
    });

</script>
