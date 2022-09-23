<?php include('dbcon.php'); include('header.php'); $get_id=$_GET['id'];?>
<body>


    <div class="wrapper">
        <center> <h2>DEPARTMENT OF EDUCATION</h2></center>
        <center><h2>DIVISION OF SILAY CITY</h2></center>
        <center><h2>SILAY CITY</h2></center>


        <?php $result=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die (mysqli_error());
            $get_row=mysqli_fetch_array($result);
        ?>

		

        Name:<?php echo $get_row['FirstName']; ?>&nbsp;&nbsp;<?php echo $get_row['MiddleName']; ?>&nbsp;&nbsp;<?php echo $get_row['LastName']; ?>&nbsp; 
        <br>
        Position:<?php echo $get_row['Position']; ?>
        <br>
        Emp No:<?php echo $get_row['Employee_No']; ?>
        <br>
        District:<?php echo $get_row['District']; ?> 
        <br>
        <br>

		Date of Original Appointment: <center><h2>SERVICE LEAVE CARD</h2></center>
        <br>
		
		

        <center>
            <table border="1" width="800">



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

             

                    </tr>
                </thead>
                <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from service_credits where employeeID='$get_id' order by from_date");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['service_credits_id']; $emp=$row['employeeID'];  ?>

                        <tr class="del<?php echo $id ?>">

                               <td align="center"><?php echo $row['from_date']."  / ".$row['to_date']; ?></td>
                            <td align="center"><?php echo $row['LE_vacation']." / ".$row['LE_sick']; ?></td>
                            <td align="center"><?php echo $row['LS_vacation']." / ".$row['LS_sick']; ?></td>
                            <td align="center"><?php echo $row['B_vacation']." / ".$row['B_sick']; ?></td>
                            <td align="center"><?php echo $row['total'];?></td>



                        </tr>
                        <?php }?>
                </tbody>
            </table>
        </center>
        <br>
        
       

    </div>
</body>

        



