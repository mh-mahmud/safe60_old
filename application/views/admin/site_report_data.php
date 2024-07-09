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
                        <h3>Final Report</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">

                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input placeholder="start date" type="date" class="form-control" name="start_date" required>
                                            </div>
                                            <div class="col-md-4">
                                                <input placeholder="end date" type="date" class="form-control" name="end_date" required>
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
                                    <table class="table table-striped table-bordered table-hover  order-column">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Total Bet</td>
                                                <td><?= $total_bet; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Total Return</td>
                                                <td><?= $total_return; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Total Refund</td>
                                                <td><?= $total_refund; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>User Withdraw</td>
                                                <td><?= $user_withdraw; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Club Withdraw</td>
                                                <td><?= $club_withdraw; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Sponsor Comission</td>
                                                <td><?= $sponsor_comission; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Total Withdraw</td>
                                                <td><?= $total_withdraw; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Deposit</td>
                                                <td><?= $deposit; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Balance</td>
                                                <td><?= $balance; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>Total User Win</td>
                                                <td><?= $user_win; ?></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td style="color:blue;font-weight:bold;">Reserve Coin</td>
                                                <td style="color:blue;font-weight:bold;"><?= $reserve_coin; ?></td>
                                            </tr>
                                            <!-- <tr class="odd gradeX">
                                                <td>Total User Lost</td>
                                                <td><?php //echo $board_win; ?></td>
                                            </tr> -->
                                            <tr class="odd gradeX">
                                                <td>Total Profit/Loss</td>
                                                <td style='<?= ($profit>0) ? "color:green" : "color:red"; ?>'><b><?= $profit; ?></b></td>
                                            </tr>
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