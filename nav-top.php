<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="marg_top">
                <a class="brand">
                    <img src="img/logo.png" width="200" height="58">
                </a> 
                <a class="brand">
                    <h2>Personnel Record Management System</h2>
                    <div class="chmsc_nav"><font size="4" color="white">Department of Education Silay City</font></div>
                </a>

                <div class="pull-right">
                    <font color="white">
                        <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?>

                        <p>
                            <?php

                                $user_query=mysqli_query($conn,"select *  from user where User_id='$id_session'")or die(mysqli_error());
                                $row=mysqli_fetch_array($user_query);
                                echo 'Welcome:'." ".$row['User_Type'];
                            ?>
                        </p>
                    </font>
                </div>
            </div>
        </div>
    </div>
	</div>