<?php include('dbcon.php');include('header.php'); ?>
<body>


<?php
if (isset($_POST['print'])){

							$Position=$_POST['print_position'];
							
?>

 <center> <h2>DEPARTMENT OF EDUCATION</h2></center>
        <center><h2>DIVISION OF SILAY CITY</h2></center>
        <center><h2>SILAY CITY</h2></center>
<br>
<br>
<br>

<center>
           <h2>
		   
		     <?php
                    

              

                        $name_query=mysqli_query($conn,"select * from position where position='$Position'")or die(mysqli_error());
                        $query_row=mysqli_fetch_array($name_query);

                        echo $query_row['position']." ".'Personnel List';

                   

                ?>
		   </h2>
</center>

  <center>
            <table width="800"  border="1">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>MiddleName</th>
                        <th>Sex</th>
                        <th>School</th>
                       
                    </tr>
                </thead>
                <tbody>
                 
                        <?php

                            $emp_query=mysqli_query($conn,"select * from employee where Position='$Position'");
                            while($row=mysqli_fetch_array($emp_query)){ $id=$row['employeeID']; ?>

                            <tr>
                                <td><?php echo $row['FirstName']; ?></td>
                                <td><?php echo $row['LastName']; ?></td>
                                <td><?php  echo $row['MiddleName']?></td>
                                <td><?php echo $row['Sex'] ?></td>
                                <td><?php echo $row['School'] ?></td>
                               
                              
                            </tr>
                            <?php }?>
                </tbody>
            </table>
						
				

<?php } ?>				
							