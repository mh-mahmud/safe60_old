<!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url('admin'); ?>" style="background:#245479">

						<!--<img width="155px" style="margin-top:0px" src="<?php //echo base_url(); ?>assets/images/betwon_logo.jpeg" alt="logo" class="logo-default" />-->
                        <img height="70px" id="header-logo" src="<?= base_url(); ?>assets/images/logo-safe60.jpeg" alt="Logo" class="responsive">
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            
                            
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <?php
                                        $notifications = $this->db->query("SELECT COUNT(*) AS count_val FROM complain WHERE admin_view=0")->row();
                                        $notifications = $notifications->count_val;
                                    ?>
                                    <span style="color:red;font-weight:bold">(<?php echo $notifications; ?>)</span>
                                    <span class="username username-hide-on-mobile"> <?php echo @$this->session->userdata('admin_access_data')->full_name; ?> </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/admin/layouts/layout4/img/avatar9.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?php echo base_url('admin'); ?>">
                                            <i class="icon-user"></i> Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('customer_complain'); ?>">
                                            <i class="icon-bulb"></i> Complain </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin_logout'); ?>">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->

                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->