<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span6">

                <div class="form-horizontal">
                    <fieldset>
                     <div class="control-group">
                            <label class="control-label" for="input01">Employee No:</label>
                            <div class="controls">
                                <input type="text"  name="Employee_No" class="input-xlarge" id="input01" placeholder="Employee No:" required>

                            </div>     
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="input01">Surname:</label>
                            <div class="controls">
                                <input type="text"  name="surname" class="input-xlarge" id="input01" placeholder="surname"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label"  for="input01">FirstName:</label>
                            <div class="controls">
                                <input type="text" name="firstname" class="input-xlarge" id="input01" placeholder="firstname"required>

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label"  for="input01">MiddleName:</label>
                            <div class="controls">
                                <input type="text"  name="middlename" class="input-xlarge" id="input01" placeholder="middlename"required>

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Residential Address:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Residential_Address" id="input01" placeholder="Residential Address"required>

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">ZIP CODE:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="ZIP_CODE1" id="input01" placeholder="ZIP CODE">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Telephone NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Telephone_NO" id="input01" placeholder="Telephone NO">

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Permanent Address:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Permanent_Address" id="input01" placeholder="Permanent Address NO">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Tel #:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="ZIP_CODE2" id="input01" placeholder="Telephone NO">

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Email Address:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Email_Address" id="input01" placeholder="Email Address(if any)">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Cellphone NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Cellphone_NO" id="input01" placeholder="Cellphone NO(if any)">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Agency Employee NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Agency_Employee_NO" id="input01" placeholder="Agency Employee NO">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Tin:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="tin" id="input01" placeholder="Tin">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Item Number:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Item_Number" id="input01" placeholder="Item Number"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Position:</label>
                            <div class="controls">
							<select name="Position" class="input-xlarge"required>
							<?php 
							$position_query=mysqli_query($conn,"select * from position")or die(mysqli_error());
							while($row_position=mysqli_fetch_array($position_query)){?>
							<option>
							<?php echo $row_position['position']; ?>
						
							<?php } ?>
										</option>
							</select>
                            

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Area Code:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Area_Code" id="input01" placeholder="Area Code"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Area Type:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Area_Type" id="input01" placeholder="Area Type">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">P/P/A ATTRIBUTION:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="ATTRIBUTION" id="input01" placeholder="P/P/A ATTRIBUTION "required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">School:</label>
                            <div class="controls">
                              <select class="input-xlarge" name="school"required>
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
                                     <input type="text" class="input-xlarge" name="District" id="input01" placeholder="Area Type"required>

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
                              <select name="Classification" class="span6"required>
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
                                <input type="text"  name="Birth_date" class="Birthdate" placeholder="Date of Birth"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Place of Birth:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="birth_place" id="input01" placeholder="Place of Birth">

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Sex:</label>
                            <div class="controls"required>
                                <select name="sex">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Civil Status:</label>
                            <div class="controls">
                                <input type="text" name="civil_status" class="input-xlarge" id="input01" placeholder="Civil Status">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Citizenship:</label>
                            <div class="controls">
                                <input type="text" name="citizenship" class="input-xlarge" id="input01" placeholder="Citizenship">

                            </div>     
                        </div>

                        <div class="control-group">

                            <div class="controls">
                                Height(m): <input type="text" class="input-mini" id="input01" name="height" placeholder="Height">
                                Weight(kg): <input type="text" class="input-mini" id="input01" name="weight" placeholder="Weight">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Blood Type:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="blood_type" id="input01" placeholder="Blood Type">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">GSIS ID NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="gsis" id="input01" placeholder="GSIS ID NO">

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">PAG-IBIG ID NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="pag_ibig" id="input01" placeholder="PAG-IBIG ID NO">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">PHILHEALTH NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="PHILHEALTH" id="input01" placeholder="PHILHEALTH NO">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">SSS NO:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="SSS" id="input01" placeholder="SSS NO">

                            </div>     
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="input01">Authorized Salary:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Authorized_Salary" id="input01" placeholder="Authorized Salary"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Actual Salary:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Actual_Salary" id="input01" placeholder="Actual Salary"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Step:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="step" id="input01" placeholder="Step"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Status:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Status" id="input01" placeholder="Status"required>

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Civil Service Eligibility:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="Civil_Service_Eligibility" id="input01" placeholder="Civil Service Eligibility"required>

                            </div>     
                        </div>
                        
                        
                                  <div class="control-group">
                            <label class="control-label" for="input01">Qualification:</label>
                            <div class="controls">
                            <select name="qualification" class="span6"required>
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
                                <input type="text" class="input-xlarge" name="Remarks" id="input01" placeholder="Remarks">

                            </div>     
                        </div>

                    </fieldset>
                </div>



            </div>
        </div>
    </div>                                   
                        </div>
                        
                 