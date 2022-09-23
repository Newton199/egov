<?php include('dbcon.php');include('header.php'); ?>
<body>


    <div class="wrapper">

        <center>Republic of the Philippines</center>
        <center>Department of Education </center>
        <center>Region VI - Western Visayas </center>
        <center>Division of Silay City</center>
        <center>City of Silay</center>
        <br>

        <div align="right">
            <?php
                $Today=date('y:m:d');
                $new=date('l, F d, Y',strtotime($Today));
                echo $new; ?>
        </div>
        <br>
       <center> It is hereby made a matter of record that the following national/city teachers rendered </center>
        <center> service during the ____________________________________________ on the inclusive dates</center>
        <center>indicated opposite their names for which they are hereby given service credits.</center>
        <br>
        <center>


            <table border="1">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Inclusive Date</th>
                        <th width="150">No. of Days Served Rendered</th>
                        <th width="150">NO. of Days Service Credit Approved</th>

                    </tr>
                </thead>
                <tbody>
				<?php if (isset($_POST['print'])){
				
				$sort=$_POST['print_sort']; ?>
				
                    <?php $emp_query=mysqli_query($conn,"select * from leave_record where from_date like '%$sort%'");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['leave_id']; $emp=$row['employeeID'];  ?>

                        <tr class="del<?php echo $id ?>">
                            <?php
                                $result=mysqli_query($conn,"select * from employee  where employeeID='$emp'")or die(mysqli_error());
                                $row_emp=mysqli_fetch_array($result);
                            ?>
                            <td align="center"><?php  echo $row_emp['FirstName']." ".$row_emp['LastName'];?></td>
                            <td align="center" ><?php echo $row['from_date']."-".$row['to_date']; ?></td>
                            <td align="center" width="100"><?php echo $row['No_of_Days']; ?></td>
                            <td align="center" width="100"><?php echo $row['No_of_Days_approved']; ?></td>
                        </tr>
                        <?php }}?>
                </tbody>
            </table>
        </center>
                <br>
                <br>
                <br>
        <center>This covers the services rendered by the teachers listed above in connection with the</center>
        <center>____________________________________________________________________</center>
        <br>
        <br>
        <br>
        <div align="right">
         ________________________
       <p>School Division Superintendent</p> 
        </div>  
        
    </div>



</body>


    

