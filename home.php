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
                        <li><a href="emp_profiles.php"><i class="icon-group icon-large"></i>Profiles</a></li>
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

        <div id="element" class="hero-body">
            <div class="peace">
                <center>
                    <div id="piecemaker">
                        <p>Put your alternative Non Flash content here.</p>
                    </div>
                </center>
            </div>
            <div class="body-home">
                <div class="alert alert-info">
                    <h2>The DepEd Mission 
                    </h2>
                </div>
            </div>	
            <div class="hero-unit-home">

            To provide quality basic education that is equitably accessible to all and lay the foundation for life-long learning and service for the common good. 
            </div>

            <div class="body-home">
                <div class="alert alert-info">
                    <h2>The DepEd Vision </h2>
                </div>
            </div>	
            <div class="hero-unit-home">
       By 2030, DepEd is globally recognized for good governance and for developing functionally-literate and God-loving Filipinos. 

            </div>

        </div>	

        <?php include('footer.php');?>
    </div>
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