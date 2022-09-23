  <div class="modal hide fade" id="<?php echo $id; ?>">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">?</button>

                                    </div>
                                    <div class="modal-body">

                                        <div class="alert alert-info">
                                            <h2>View what?</h2>
                                        </div>

                                        <center>
                                            <p><a href="view_info.php<?php echo '?id='.$id; ?>" class="btn btn-info btn-large"><i class="icon-User icon-large"></i>&nbsp;Personnel Information</a></p>
                                            <p><a href="view_leave.php<?php echo '?id='.$id; ?>" class="btn btn-large"><i class="icon-file icon-large"></i>&nbsp;View Service Credits</a> </p>
                                            <p><a href="view_service.php<?php echo '?id='.$id;  ?>" class="btn btn-success btn-large"><i class="icon-file icon-large"></i>&nbsp;Service Record</a></p> 
                                        </center>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn" data-dismiss="modal">Close</a>

                                    </div>
                                </div>