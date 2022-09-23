<?php include('dbcon.php'); include('session.php');include('header.php');  $get_id=$_GET['id'];?>
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

        <div id="element" class="hero-body-add">



            <div class="alert alert-info">
                <h2>Edit 
                    <?php
                        $name_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_error());
                        $name_row=mysqli_fetch_array($name_query);
                        echo $name_row['FirstName']." ".$name_row['LastName'];
                    ?>
                    Information
                </h2>  

                <div class="pull-right">
                    <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="view_info.php<?php echo '?id='.$get_id; ?>">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            $('#add').popover('show')
                            $('#add').popover('hide')

                        });
                    </script>

                </div> 
            </div>




            <!-- Para sa tabs -->



            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home"><font color="#5bc0de">Personal Info</font></a></li>

            </ul>
            <form method="post" enctype="multipart/form-data">
                <div class="tab-content">

                    <div class="tab-pane active" id="home">

                        <div class="hero-unit">
                            <?php
                                include('add_edit_info.php');  
                            ?>
                        </div>

                    </div>




                    <center>
                        <button class="btn btn-primary btn-large" name="save"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                    </center>   

                </div>   
            </form>

            <script>

                jQuery(document).ready(function() {
                    $('#myTab a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                    })

                    $(function () {
                        $('#myTab a:first').tab('show');
                    })
                })
            </script>


            <!-- end ka tab -->







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


<?php

    if (isset($_POST['save'])){

        $surname=$_POST['surname'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $sex=$_POST['sex'];
        $Date_of_Birth=$_POST['Birth_date'];
        $birth_place=$_POST['birth_place'];
        $civil_status=$_POST['civil_status'];
        $citizenship=$_POST['citizenship'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $blood_type=$_POST['blood_type'];
        $gsis=$_POST['gsis'];
        $pag_ibig=$_POST['pag_ibig'];
        $PHILHEALTH=$_POST['PHILHEALTH'];
        $SSS=$_POST['SSS'];
        $Authorized_Salary=$_POST['Authorized_Salary'];
        $Actual_Salary=$_POST['Actual_Salary'];
        $step=$_POST['step'];
        $Status=$_POST['Status'];
        $Civil_Service_Eligibility=$_POST['Civil_Service_Eligibility'];
        $Remarks=$_POST['Remarks'];
        $Residential_Address=$_POST['Residential_Address'];
        $ZIP_CODE1=$_POST['ZIP_CODE1'];
        $Telephone_NO=$_POST['Telephone_NO'];
        $Permanent_Address=$_POST['Permanent_Address'];
        $ZIP_CODE2=$_POST['ZIP_CODE2'];

        $Email_Address=$_POST['Email_Address'];
        $Cellphone_NO=$_POST['Cellphone_NO'];
        $Agency_Employee_NO=$_POST['Agency_Employee_NO'];
        $tin=$_POST['tin'];
        $Item_Number=$_POST['Item_Number'];

        $Position=$_POST['Position'];
        $Area_Code=$_POST['Area_Code'];
        $Area_Type=$_POST['Area_Type'];
        $ATTRIBUTION=$_POST['ATTRIBUTION'];
        $school=$_POST['school'];
        $Employee_No=$_POST['Employee_No'];




        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);
        $image_size= getimagesize($_FILES['image']['tmp_name']);


        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);            
        $location="upload/" . $_FILES["image"]["name"];


        mysqli_query($conn,"update employee set LastName='$surname',FirstName='$firstname',MiddleName='$middlename',
            Residential_Address='$Residential_Address',ZIP_CODE1='$ZIP_CODE1',Telephone_NO='$Telephone_NO',
            Permanent_Address='$Permanent_Address',ZIP_CODE2='$ZIP_CODE2',Email_Address='$Email_Address',
            Cellphone_NO='$Cellphone_NO',Agency_Employee_NO='$Agency_Employee_NO',tin='$tin',
            Item_Number='$Item_Number',Position='$Position',Area_Code='$Area_Code',Area_Type='$Area_Type',
            ATTRIBUTION='$ATTRIBUTION',School='$school',Date_of_Birth='$Date_of_Birth',birth_place='$birth_place',
            Sex='$sex',civil_status='$civil_status',citizenship='$citizenship',height='$height',weight='$weight',
            blood_type='$blood_type',gsis='$gsis',pag_ibig='$pag_ibig',PHILHEALTH='$PHILHEALTH',SSS='$SSS',
            Authorized_Salary='$Authorized_Salary',Actual_Salary='$Actual_Salary',step='$step',Status='$Status',
            Civil_Service_Eligibility='$Civil_Service_Eligibility',Remarks='$Remarks',location='$location',
            Employee_No=$Employee_No     

            where employeeID='$get_id'")or die(mysqli_error()); ?>

            <script type=text/javascript>
            window.location="view_info.php<?php echo '?id='.$get_id; ?>";
            </script>
            
            
<?php
    

 

    }


?>