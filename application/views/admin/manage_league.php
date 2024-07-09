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
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Manage League Names</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <!-- <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Managed Table</span>
                                    </div> -->
                                    <div class="actions">
                                        <div class="btn-group">
                                            <button
                                            data-toggle="modal"
                                            data-target="#depositAccountModal"
                                            id="sample_editable_1_new"
                                            class="btn sbold green"> Add New
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div> -->
                                    <table class="table table-striped table-bordered table-hover  order-column ajax-tbl">
                                        <thead>
                                            <tr>
                                                <th>Sports Name</th>
                                                <th>League Name</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <!-- <th>Created at</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($get_data as $val) : ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $val->name; ?></td>
                                                    <td><?= $val->league_name; ?></td>
                                                    <td>
                                                        <?php if(!empty($val->filename)) : ?>
                                                            <img width="60" src="<?php echo base_url(); ?>uploads/<?php echo $val->filename; ?>">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($val->status=='1') { ?>
                                                            <span class="badge badge-success">Active</span>
                                                        <?php } else if($val->status=='0') { ?>
                                                            <span class="badge badge-danger">Inactive</span>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- <td><?php //echo $val->created_at?></td> -->
                                                    <td>
                                                        <a
                                                        class="account-modal btn btn-success btn-xs"
                                                        data-id="<?php echo $val->id; ?>"
                                                        data-sportsid="<?php echo $val->sports_id; ?>"
                                                        data-league_name="<?php echo $val->league_name; ?>"
                                                        data-status="<?php echo $val->status; ?>"
                                                        data-toggle="modal"
                                                        data-target="#editAccountModal">
                                                            Edit
                                                        </a>

                                                        <a
                                                        class="btn btn-xs btn-danger"
                                                        onclick="return confirm('Are you sure to remove this name?');"
                                                        href="<?= base_url('admin/remove_league_name/'.$val->id); ?>">
                                                            Delete
                                                        </a>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->

        <div id="depositAccountModal" class="modal fade" tabindex="-1" data-width="400">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add League Name</h4>
                    </div>
                    <div class="modal-body" style="padding:20px !important;">
                        <div class="row">
                            <div class="col-md-12">

                                <form enctype="multipart/form-data" action="<?php echo base_url('admin/add_league_name'); ?>" method="POST">

                                    <div class="form-group">
                                        <label for="sports_id" class="control-label mb-1">Sports Name</label>
                                        <select name="sports_id" class="form-control" required>
                                        <option value="">--- select ---</option>
                                            <?php foreach($sports as $val) : ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="match_status" class="control-label mb-1">League Name</label>
                                        <input type="text" name="league_name" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="match_status" class="control-label mb-1">Upload File</label>
                                        <input type="file" name="filename" class="form-control" required>
                                    </div>

                                    <div>
                                        <input type="submit" class="btn btn-sm btn-info btn-block" name="submit" value="Submit">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="editAccountModal" class="modal fade" tabindex="-1" data-width="400">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit League Name</h4>
                    </div>
                    <div class="modal-body" style="padding:20px !important;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="<?php echo base_url('admin/edit_league_name'); ?>" method="POST" enctype="multipart/form-data">

                                    <input id="league_id" type="hidden" name="league_id">

                                    <div class="form-group">
                                        <label for="sports_id" class="control-label mb-1">Sports Name</label>
                                        <select id="sports_id" name="sports_id" class="form-control" required>
                                        <option value="">--- select ---</option>
                                            <?php foreach($sports as $val) : ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1">League Name</label>
                                        <input id="league_name" type="text" name="league_name" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="match_status" class="control-label mb-1">Upload File</label>
                                        <input type="file" name="filename" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="match_status" class="control-label mb-1">Status</label>
                                        <select id="league_status" name="status" class="form-control" required>
                                            <option value="">-- select --</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div>
                                        <input type="submit" class="btn btn-sm btn-info btn-block" name="submit" value="Submit">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>

<?php include(APPPATH."views/admin/common/footer.php"); ?>
<script>
    $(document).ready(function() {
        $('.ajax-tbl').DataTable({
            // "scrollX": true,
            ordering: false
        });
    } );

    $('.account-modal').on('click', function() {
        var data_id = $(this).attr('data-id');
        var data_sportsid = $(this).attr('data-sportsid');
        var data_name = $(this).attr('data-league_name');
        var data_status = $(this).attr('data-status');

        $('#league_id').attr('value', data_id);
        $('#sports_id').val(data_sportsid);
        $('#league_name').attr('value', data_name);
        $('#league_status').val(data_status);
    });

</script>