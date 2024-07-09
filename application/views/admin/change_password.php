<?php include(APPPATH."views/admin/common/header.php"); ?>


    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        
        <!-- top-nav -->
        <?php include(APPPATH."views/admin/common/top_nav.php"); ?>

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->


        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            <!-- sidebar link -->
            <?php include(APPPATH."views/admin/common/sidebar.php"); ?>


            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- FLASH MESSAGE -->
                    <?php include(APPPATH."views/admin/common/flash.php"); ?>


                    <!-- BEGIN PAGE BASE CONTENT -->

                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject font-red-sunglo bold uppercase">Change Password</span>
                            </div>
                        </div>
                        <div class="portlet-body form">


                            <!-- BEGIN FORM-->
                            <form action="" class="form-horizontal" method="POST">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Old Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="old_password" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">New Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="new_password" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="confirm_password" required class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-4">
                                            <!-- <button type="submit" name="submit" class="btn green">Submit</button> -->
                                            <input type="submit" name="submit" value="Submit" class="btn green">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>

                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            

            <!-- BEGIN QUICK SIDEBAR -->
                <!-- deleted all the codes of this section -->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->

<?php include(APPPATH."views/admin/common/footer.php"); ?>
<script>
    $(document).ready(function() {
        $('.ajax-tbl').DataTable({
            // "scrollX": true,
            ordering: false
        });
    } );
</script>