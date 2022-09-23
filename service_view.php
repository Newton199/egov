<?php include('dbcon.php'); include('header.php'); $get_id=$_GET['id'];?>
<body>


    <div class="wrapper">
        <center> <h2>Service Record</h2></center>
        <center><i>(To be Accomplished by employer)</i></center>


        <?php $result=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die (mysqli_error());
            $get_row=mysqli_fetch_array($result);
        ?>


        Name:<?php echo $get_row['FirstName']; ?>&nbsp;&nbsp;<?php echo $get_row['MiddleName']; ?>&nbsp;&nbsp;<?php echo $get_row['LastName']; ?>&nbsp; 
        <br>
        Birth:<?php echo $get_row['Date_of_Birth']; ?>
        <br>
        Address:<?php echo $get_row['Permanent_Address']; ?>
        <br>
        Item No:<?php echo $get_row['Item_Number']; ?> 
         <br>
      Employee No:<?php echo $get_row['Employee_No']; ?>
        <br>
        <br>

        This is certify that the employee named herein above actually rendered services in this office as shown by the service record below, each line of 
        w/c is suported by appointment and other reliable documents issued by this office and approved by the authorities concerened.___________________

        <br>
        <br>

        <center>
            <table border="1" width="700">



                <thead>
                    <tr>


                        <th>Inclusive Date</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Salary</th>
                        <th>Station/Place</th>
                        <th>Branch</th>
                        <th>Remarks</th>

                    </tr>
                </thead>
                <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from service_record where employeeID='$get_id' order by from_date");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['service_record_id']; $emp=$row['employeeID'];  ?>

                        <tr class="del<?php echo $id ?>">
                            <?php
                                $result=mysqli_query($conn,"select * from employee  where employeeID='$emp'")or die(mysqli_error());
                                $row_emp=mysqli_fetch_array($result);
                            ?>
                            <td><?php echo $row['from_date']."  -  ".$row['to_date']; ?></td>
                            <td><?php echo $row['Designation']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td><?php echo $row['station_place']; ?></td>
                            <td><?php echo $row['branch']; ?></td>
                            <td><?php echo $row['Remarks']; ?></td>




                        </tr>
                        <?php }?>
                </tbody>
            </table>
        </center>
        <br>
        NOTE:
        <br>
        <br>

        Issued in compliance with the Executive Order No. 54, dated August 3, 1954 and in accordance with the Circular No. 58, dated
        August 10, 1954.

        <br>
        <div align="right">CERTIFIED CORRECT:</div>
        <br>
        <br>
        <br>
        <div align="right">_________________</div>
        <div align="right">Administrative Officer:</div>

    </div>
</body>

        


