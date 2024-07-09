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
                        <h3>User Bet History</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">

                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input placeholder="search by username, Sports, League Name, Match Name, Question or User Answer etc" type="text" class="form-control" name="search_data" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" name="submit" class="form-control btn btn-success" value="Submit">
                                            </div>
                                        </div>
                                    </form>

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
                                                <th>Username</th>
                                                <th>Sports</th>
                                                <!-- <th>League Name</th> -->
                                                <th>Match Name</th>
                                                <th>Question</th>
                                                <th>User Answer</th>
                                                <th>Match Bit Coin</th>
                                                <th>Rate</th>
                                                <th>Return Amount</th>
                                                <th>Previous Balance</th>
                                                <th>Current Balance</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($match_bit as $val) : ?>
                                                <tr class="odd gradeX">

                                                    <td><?= $val->username; ?></td>
                                                    
                                                    <td><?php echo $val->name; ?></td>
                                                    <!-- <td><?php //echo $val->league_title; ?></td> -->
                                                    <td><?php echo $val->title; ?></td>
                                                    <td><?php echo $val->match_option_title; ?></td>
                                                    <td><?php echo $val->option_title; ?></td>

                                                    <td><?= $val->bet_coin; ?></td>
                                                    <td><?= $val->option_coin; ?></td>
                                                    <td><?= $val->total_coin; ?></td>
                                                    <td><?= $val->prev_balance; ?></td>
                                                    <td><?= $val->cur_balance; ?></td>
                                                    <td><?= $val->created_at; ?></td>
                                                    <td>
                                                        <?php if($val->bet_status=='MATCH_RUNNING') { ?>
                                                            <img width="60" src="<?php echo base_url(); ?>assets/new_images/pending.jpg" alt="">
                                                        <?php } else if($val->bet_status=='WIN') { ?>
                                                            <img width="40" src="<?php echo base_url(); ?>assets/new_images/99_winner.jpeg" alt="">
                                                        <?php } else if($val->bet_status=='USER_CANCEL') { ?>
                                                            <img width="40" src="<?php echo base_url(); ?>assets/new_images/99_lost.jpeg" alt="">
                                                        <?php } else if($val->bet_status=='CANCEL_ADMIN') { ?>
                                                            <img width="40" src="<?php echo base_url(); ?>assets/new_images/99_lost.jpeg" alt="">
                                                        <?php } else if($val->bet_status=='LOST') { ?>
                                                            <img width="40" src="<?php echo base_url(); ?>assets/new_images/99_dislike.jpeg" alt="">
                                                        <?php } else if($val->bet_status=='BET_RETURN') { ?>
                                                            <img width="40" src="<?php echo base_url(); ?>assets/new_images/99_lost.jpeg" alt="">
                                                        <?php } ?>
                                                        <?php echo "<br/>[$val->bet_status]"; ?>
                                                    </td>
                                                    <!-- <td style="width:180px">
                                                        <a data-toggle="modal" data-target="#scrollmodal6" title="Result" href="javascript:void(0)"><i style="color:green" class="fa fa-check-square-o icon-edit"></i></a>
                                                        <a data-toggle="modal" data-target="#scrollmodal2" title="Edit" href="javascript:void(0)"><i class="fa fa-edit icon-edit"></i></a>
                                                        <a onclick="return confirm('Are you sure to remove this bet?');" title="Delete" href="<?php //echo base_url('remove_match/'.$val->id); ?>"><i class="fa fa-times icon-delete"></i></a>
                                                    </td> -->
                                                    <!-- <td></td> -->

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