<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span6">

            <?php
                $edit_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_error());
                $row=mysqli_fetch_array($edit_query);
                
                
            ?>
            
            
                <div class="form-horizontal">
                    <fieldset>
                    
                         <div class="control-group">
                            <label class="control-label" for="input01">Employee No:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo  $row['Employee_No']; ?>"  name="Employee_No" class="input-xlarge" id="input01" >

                            </div>     
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="input01">Surname:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo  $row['LastName']; ?>"  name="surname" class="input-xlarge" id="input01" >

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label"  for="input01">FirstName:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo  $row['FirstName']; ?>" name="firstname" class="input-xlarge" id="input01" >

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label"  for="input01">MiddleName:</label>
                            <div class="controls">
                                <input type="text"  name="middlename" value="<?php echo  $row['MiddleName']; ?>" class="input-xlarge" id="input01">

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Residential Address:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" value="<?php echo  $row['Residential_Address']; ?>"  name="Residential_Address" id="input01">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">ZIP CODE:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="ZIP_CODE1" value="<?php echo  $row['ZIP_CODE1']; ?>" id="input01" >

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Telephone NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Telephone_NO" id="input01" value="<?php echo  $row['Telephone_NO']; ?>">

                            </div>     
                        </div>
                                                                                                                            


                        <div class="control-group">
                            <label class="control-label" for="input01">Permanent Address:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Permanent_Address" id="input01"  value="<?php echo  $row['Permanent_Address']; ?>">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">ZIP CODE:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="ZIP_CODE2" id="input01" value="<?php echo  $row['ZIP_CODE2']; ?>" >

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Email Address:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Email_Address" id="input01" value="<?php echo  $row['Email_Address']; ?>" >

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Cellphone NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Cellphone_NO" id="input01" value="<?php echo  $row['Cellphone_NO']; ?>">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Agency Employee NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Agency_Employee_NO" id="input01" value="<?php echo  $row['Agency_Employee_NO']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Tin:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="tin" id="input01" value="<?php echo  $row['tin']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Item Number:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Item_Number" id="input01" value="<?php echo  $row['Item_Number']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Position:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Position" id="input01" value="<?php echo  $row['Position']; ?>">

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Area Code:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Area_Code" id="input01" value="<?php echo  $row['Area_Code']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Area Type:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Area_Type" id="input01" value="<?php echo  $row['Area_Type']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">P/P/A ATTRIBUTION:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="ATTRIBUTION" id="input01" value="<?php echo  $row['ATTRIBUTION']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">School:</label>
                            <div class="controls">
                              <select class="input-xlarge" name="school">
                              <option><?php echo $row['School']; ?></option>
                              <?php
                                  $school_query=mysqli_query($conn,"select * from school")or die(mysqli_error());
                                  while($school_row=mysqli_fetch_array($school_query)){
                              ?>
                              <option>
                                    <?php echo $school_row['Name']; ?>
                              </option>
                              
                              <?php
                                  };
                               ?>
                              </select>

                            </div>     
                        </div>

						   <div class="control-group">
                            <label class="control-label" for="input01">District:</label>
                            <div class="controls">
                                     <input type="text" class="input-xlarge" name="District" id="input01" placeholder="District">

                            </div>     
                        </div>



                    </fieldset>
                </div>

            </div>
            <div class="span6">


                <div class="form-horizontal">
                    <fieldset>
					
					<div class="control-group">
                            <label class="control-label" for="input01">Classification</label>
                            <div class="controls">
                              <select name="Classification" class="span6">
							  <option><?php echo $row['Classification']; ?>
                              <option>Teaching</option>
                              <option>Non-Teaching</option>
                              </select>

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Image:</label>
                            <div class="controls">
                                <input type="file" name="image" class="font"> 

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Date of Birth:</label>
                            <div class="controls">
                                <input type="text"  name="Birth_date" class="Birthdate" value="<?php echo $row['Date_of_Birth']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Place of Birth:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="birth_place" id="input01" value="<?php echo $row['birth_place']; ?>" >

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Sex:</label>
                            <div class="controls">
                                <select name="sex">
                                <option><?php echo $row['Sex']; ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Civil Status:</label>
                            <div class="controls">
                                <input type="text" name="civil_status" class="input-xlarge" id="input01" value="<?php echo $row['civil_status']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Citizenship:</label>
                            <div class="controls">
                                <input type="text" name="citizenship" class="input-xlarge" id="input01" value="<?php echo $row['citizenship']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">

                            <div class="controls">
                                Height(m): <input type="text" class="input-mini" id="input01" name="height" value="<?php echo $row['height']; ?>">
                                Weight(kg): <input type="text" class="input-mini" id="input01" name="weight" value="<?php echo $row['weight']; ?>">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Blood Type:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="blood_type" id="input01" value="<?php echo $row['blood_type']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">GSIS ID NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="gsis" id="input01" value="<?php echo $row['gsis']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">PAG-IBIG ID NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="pag_ibig" id="input01" value="<?php echo $row['pag_ibig']; ?>">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">PHILHEALTH NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="PHILHEALTH" id="input01" value="<?php echo $row['PHILHEALTH']; ?>">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">SSS NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="SSS" id="input01" value="<?php echo $row['SSS']; ?>">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Authorized Salary:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Authorized_Salary" id="input01" value="<?php echo $row['Authorized_Salary']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Actual Salary:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Actual_Salary" id="input01" value="<?php echo $row['Actual_Salary']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Step:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="step" id="input01" placeholder="Step" value="<?php echo $row['step']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Status:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Status" id="input01" placeholder="Status" value="<?php echo $row['Status']; ?>">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Civil Service Eligibility:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Civil_Service_Eligibility" id="input01" value="<?php echo $row['Civil_Service_Eligibility']; ?>">

                            </div>     
                        </div>   

						
                                  <div class="control-group">
                            <label class="control-label" for="input01">Qualification:</label>
                            <div class="controls">
                            <select name="qualification" class="span6">
							<option><?php echo $row['qualification'] ?></option>
                            <?php
                                $qaulification_query=mysqli_query($conn,"select * from qualification")or die(mysqli_error());
                                while($row=mysqli_fetch_array($qaulification_query)){
                            ?>
                            <option>
                                 <?php
                                     echo $row['qualification'];
                                 ?>
                            </option>
                            <?php
                                }
                            ?>
                            </select>

                            </div>     
                        </div>

						
						
                        <div class="control-group">
                            <label class="control-label" for="input01">Remarks:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Remarks" id="input01" value="<?php echo $row['Remarks']; ?>">

                            </div>     
                        </div>

                    </fieldset>
                </div>



            </div>
        </div>
    </div>                                   
                        </div>
                        
                 