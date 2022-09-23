<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('connect.php');
  
  $id_get=$_POST['id_get'];
 

    function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
	  
	  // HTTP headers
HeaderingExcel('teacher.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('Violeta integrated School');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 10);






$query=mysqli_query($conn,"select * from employee where School='Violeta Integrated School'")or die(mysqli_error());
$row=mysqli_fetch_array($query);


   $worksheet1->write_string(0,0,"Republic of the Philippines");
   $worksheet1->write_string(3,0,"Department:");   $worksheet1->write_string(3,1,"Department of Education");  
   $worksheet1->write_string(4,0,"Bureau/Agency:");   $worksheet1->write_string(4,1,"Office of the Secretary");  
   $worksheet1->write_string(5,0,"Organizational Unit:");   $worksheet1->write_string(5,1,"3031.14 - Violeta Integrated School");  
  
   






/////////////////
	

	$qryreport = mysqli_query($conn,"select * from employee where School='Violeta Integrated School'")or die(mysqli_error());
	
	$sqlrows=mysqli_num_rows($qryreport);
	$j=10;
	
	WHILE ($reportdisp=mysqli_fetch_array($qryreport)) {
	$j=$j+1;
			$firstName = $reportdisp['FirstName'];
	
			
			
			
			 $leaderid = $reportdisp['employeeID']; 
			 
			 $qryleader = mysqli_query($conn,"select * from employee where employeeID='".$leaderid."' and School='Violeta Integrated School'")or die(mysqli_error());
				$leader = mysqli_fetch_assoc($qryleader);
				
			
			
			 $worksheet1->write_string($j,0,"$firstName");
		
			 
	}
	
	
	
/////////////////
  
  
	
  
  
$workbook->close();
?>