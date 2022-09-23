<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('connect.php');
  


    function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
      
      // HTTP headers
HeaderingExcel('PSIPOP.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('candidate result');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 30);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 20);
  $worksheet1->set_column(1, 4, 10);
  $worksheet1->set_column(1, 5, 20);
  $worksheet1->set_column(1, 6, 20);
  $worksheet1->set_column(1, 7, 20);
  $worksheet1->set_column(1, 8, 20);
  $worksheet1->set_column(1, 9, 20);
  $worksheet1->set_column(1, 10, 20);
  $worksheet1->set_column(1, 11, 20);
  $worksheet1->set_column(1, 12, 20);
  $worksheet1->set_column(1, 13, 20);
  $worksheet1->set_column(1, 14, 35);
  $worksheet1->set_column(1, 15, 40);
  $worksheet1->set_column(1, 16, 10);
  $worksheet1->set_column(1, 17, 30);
  $worksheet1->set_column(1, 18, 20);







   $worksheet1->write_string(1,0,"Republic of the Philippines");
   $worksheet1->write_string(2,0,"DEPARTMENT OF BUDGET AND MANAGEMENT");
   $worksheet1->write_string(4,0,"PERSONAL SERVICES ITEMIZATION AND PLANTILLA OF PERSONNEL (PSIPOP)");
   $worksheet1->write_string(6,0,"Department:Department of Education");
   $worksheet1->write_string(7,0,"Bureau/Agency:Office of the Secretary");
   
   
   //
   $worksheet1->write_string(11,0,"ITEM NUMBER");
   $worksheet1->write_string(11,1,"POSITION TITLE");
   $worksheet1->write_string(11,2,"AUTHORIZED SALARY");
   $worksheet1->write_string(11,3,"Actual SALARY");
   $worksheet1->write_string(11,4,"STEP");
   $worksheet1->write_string(11,5,"AREA CODE");
   $worksheet1->write_string(11,6,"AREA TYPE");
   $worksheet1->write_string(11,7,"P/P/A ATTRIBUTION ");
   $worksheet1->write_string(11,8,"LASTNAME");
   $worksheet1->write_string(11,9,"FIRSTNAME ");
   $worksheet1->write_string(11,10,"MIDDLENAME");
   $worksheet1->write_string(11,11,"SEX");
   $worksheet1->write_string(11,12,"DATE OF BIRTH");
   $worksheet1->write_string(11,13,"TIN");
   $worksheet1->write_string(11,14,"DATE OF ORIGINAL APPOINTMENT");
   $worksheet1->write_string(11,15,"DATE OF LAST PROMOTION / APPOINTMENT");
   $worksheet1->write_string(11,16,"STATUS");
   $worksheet1->write_string(11,17,"CIVIL SERVICE ELIGIBILITY");
   $worksheet1->write_string(11,18,"Remarks");
   






        $sort=$_POST['id_excel'];

    

   $qryreport = mysqli_query($conn,"SELECT * FROM employee where School='$sort'") or die(mysqli_error());
    
   $sqlrows=mysqli_num_rows($qryreport);
    $j=11;
    
    WHILE ($reportdisp=mysqli_fetch_array($qryreport)) { $id=$reportdisp['employeeID'];
    $j=$j+1;
           $Item_Number = $reportdisp['Item_Number'];        
           $Position = $reportdisp['Position'];        
           $Authorized_Salary = $reportdisp['Authorized_Salary'];        
           $Actual_Salary = $reportdisp['Actual_Salary'];        
           $step = $reportdisp['step'];        
           $Area_Code = $reportdisp['Area_Code'];        
           $Area_Type = $reportdisp['Area_Type'];        
           $ATTRIBUTION = $reportdisp['ATTRIBUTION'];        
           $surname = $reportdisp['LastName'];        
           $firstname = $reportdisp['FirstName'];        
           $middlename = $reportdisp['MiddleName'];        
           $sex = $reportdisp['Sex'];        
           $Date_of_Birth = $reportdisp['Date_of_Birth'];        
           $tin = $reportdisp['tin'];        
           $Status = $reportdisp['Status'];        
           $Remarks = $reportdisp['Remarks'];        
           $Civil_Service_Eligibility = $reportdisp['Civil_Service_Eligibility'];        

           $date_from=mysqli_query($conn,"select * from service_record where employeeID='$id' order by from_date")or die(mysqli_error());
           $row=mysqli_fetch_array($date_from);
           
           $date1=$row['from_date'];
           
            $date_from=mysqli_query($conn,"select * from service_record where employeeID='$id' order by to_date DESC")or die(mysqli_error());
           $row=mysqli_fetch_array($date_from);
           
           $date2=$row['to_date'];


            
            
            
   
            
             $worksheet1->write_string($j,0,"$Item_Number");
             $worksheet1->write_string($j,1,"$Position");
             $worksheet1->write_string($j,2,"$Authorized_Salary");
             $worksheet1->write_string($j,3,"$Actual_Salary");
             $worksheet1->write_string($j,4,"$step");
             $worksheet1->write_string($j,5,"$Area_Code");
             $worksheet1->write_string($j,6,"$Area_Type");
             $worksheet1->write_string($j,7,"$ATTRIBUTION");
             $worksheet1->write_string($j,8,"$surname");
             $worksheet1->write_string($j,9,"$firstname");
             $worksheet1->write_string($j,10,"$middlename");
             $worksheet1->write_string($j,11,"$sex");
             $worksheet1->write_string($j,12,"$Date_of_Birth");
             $worksheet1->write_string($j,13,"$tin");
             $worksheet1->write_string($j,14,"$date1");
             $worksheet1->write_string($j,15,"$date2");
             $worksheet1->write_string($j,16,"$Status");
             $worksheet1->write_string($j,17,"$Civil_Service_Eligibility");
             $worksheet1->write_string($j,18,"$Remarks");
        
            
             
    }
    
    
    
/////////////////
  
  

  
$workbook->close();
?>