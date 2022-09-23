<a data-toggle="modal" href="#School_entry" class="btn"><i class="icon-plus-sign icon-large"></i>&nbsp;Add School Entry</a>
<div class="modal hide fade" id="School_entry">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">�</button>

    </div>
    <div class="modal-body">
        <div class="alert alert-info">
            Add School Entry
        </div>
        <form method="post">
            <center>
                <p>  Name of School:<input type="text" name="school"> </p>
                <button  class="btn btn-primary btn-large" name="add_entry"><i class="icon-save icon-large"></i>&nbsp;Save</button>
            </center>
        </form>

        <?php
            if (isset($_POST['add_entry'])){

                $school=$_POST['school'];

                mysqli_query($conn,"insert into school (Name) values ('$school')")or die(mysqli_errno());
                header('location:emp_profiles.php');
            }

        ?>
    </div>
</div>

<!--- next button -->
<a data-toggle="modal" href="#view_entry" class="btn "><i class="icon-list icon-large"></i>&nbsp;View School Entry</a>

<div class="modal hide fade" id="view_entry">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">�</button>

    </div>
    <div class="modal-body">
        <div class="alert alert-info">
            View School Entry
        </div>
        <table class="table table-bordered">
        <th>Name of School</th>
        <th>Action</th>
        <?php
            $result=mysqli_query($conn,"select * from school")or die(mysqli_error());
          while($row=mysqli_fetch_array($result)){ $id=$row['school_id']; 
        ?>
        <tr>
          <td width="400">
          <?php
               echo $row['Name'];
           ?>
          </td>
          <td>
          <a href="delete_entry.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php
          };
         ?>
        </table>
    </div>
            </div>
			


