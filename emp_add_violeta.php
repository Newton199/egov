<?php include('dbcon.php'); include('session.php');include('header.php'); ?>
<body>
<?php include('nav-top.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li class="active">
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
   <li class="divider-vertical"></li>
  <li><a href="emp_profiles.php"><i class="icon-group icon-large"></i>Profiles</a></li>
   <li class="divider-vertical"></li>
  <li><a href="#"><i class="icon-list icon-large"></i>Service Credits</a></li>
   <li class="divider-vertical"></li>
  <li><a href="#"><i class="icon-table icon-large"></i>History Log</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
  <form class="navbar-search pull-right">
  <input type="text" class="search-query" placeholder="Search">
</form>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">

<div id="element" class="hero-body">
<div class="left-nav">

<ul class="nav nav-tabs nav-stacked">
  <li>
    <a href="user_account.php"><font color="white"><i class="icon-user icon-large"></i>User Account</font></a>
  </li>
</ul>


<ul class="nav nav-tabs nav-stacked">
  <li>
    <a href="emp_profiles.php"><font color="white">All</font></a>
  </li>
  <li class="active"><a href="violeta_IS.php">Violeta Integrated School</font></a></li>
  <li><a href="#"><font color="white">Sibato Integrated SchoolSchool</font></a></li>
  <li><a href="#"><font color="white">Napilas Integrated School</font></a></li>
  <li><a href="#"><font color="white">Don Albino & Doña Dolores Jison Integrated School</font></a></li>
  <li><a href="#"><font color="white">Guinhalaran Integrated School</font></a></li>
  <li><a href="#"><font color="white">Doña Angeles J. Montinola Memorial High School</font></a></li>
  <li><a href="#"><font color="white">Eustaquio Lopez National High School</font></a></li>
  <li><a href="#"><font color="white">Lantawan Integrated School</font></a></li>
  <li><a href="#"><font color="white">Don Felix T. Lacson Memorial National High School</font></a></li>
  <li><a href="#"><font color="white">Doña Montserrat Lopez Memorial High School</font></a></li>
  <li><a href="#"><font color="white">SPED Center - Silay South</font></a></li>
  <li><a href="#"><font color="white">Brgy. Guimbala-on National High School</font></a></li>
  <li><a href="#"><font color="white">Don Serafin L. Golez Memorial Integrated School</font></a></li>

</ul>
</div>
<div class="right-nav-content">
<h2><font color="white">Add Employee</font>
</br><font color="white">Violeta Integrated School</font></h2>
<hr>	

<form id="save_voter" class="form-horizontal">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
  
  <div class="control-group">
    <label class="control-label" for="input01">Item No:</label>
    <div class="controls">
    <input type="text" id="span3" name="Item" class="Item">
    </div>
    </div>
  
  
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="FirstName" class="FirstName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="LastName" class="LastName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
   <input type="text" name="MiddleName" class="MiddleName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Sex:</label>
    <div class="controls">
   <select name="Sex" class="Sex">
	<option>Male</option>
	<option>Female</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Birthdate:</label>
    <div class="controls">
   <input type="text" name="Birthdate" class="Birthdate">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Position:</label>
    <div class="controls">
   <input type="text" name="Position" class="Position">
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Tin:</label>
    <div class="controls">
   <input type="text" name="Tin" class="Tin">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Status:</label>
    <div class="controls">
   <input type="text" name="Status" class="Status">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Eligibility:</label>
    <div class="controls">
   <input type="text" name="Eligibility" class="Eligibility">
    </div>
    </div>
	
	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	


</div>
	</div>	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
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
$(document).ready( function () {

jQuery('#save_voter').submit(function(e){
    e.preventDefault();
var FirstName = jQuery('.FirstName').val();
var LastName = jQuery('.LastName').val();
var MiddleName = jQuery('.MiddleName').val();
var Sex = jQuery('.Sex').val();

var formData = jQuery(this).serialize();
    jQuery.ajax({
        type: 'POST',
        url:  'save_emp_violeta.php',
        data: formData,
            success:
      alert('Employee Added')
	
});


});
});
</script>