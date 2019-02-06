<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">

        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/cv-fav.png">
        <!-- App title -->
        <title><?php if(!empty($title)): echo $title; endif; ?></title>
        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/switchery/switchery.min.css">
        <!-- jQuery header -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/modernizr.min.js"></script>

    </head>
    <body>
         <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main" style="background-color: #553eda;">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="<?php echo base_url('admin/dashboard'); ?>" class="logo">
                            <!-- <h3 class="text-white" style="margin-top: 20px;text-transform: capitalize;">CompanyVakil</h3> -->
                            <img src="<?php echo base_url('assets/images/Company Vakil Logo.svg'); ?>" />
                        </a>

                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <!-- <li class="navbar-c-items">
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li> -->

                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-user"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Hi, Admin</h5>
                                    </li>
                                    <li><a href="<?php echo base_url('admin/logout'); ?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>

                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu <?php if(!empty($page) && $page=='dashboard'){echo 'active';} ?>">
                                <a href="<?php echo base_url('admin/dashboard'); ?>"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="<?php echo base_url('admin/users'); ?>"><i class="mdi mdi-account-multiple"></i>Users</a>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='orders'){echo 'active';} ?>">
                                <a href="<?php echo base_url('admin/orders'); ?>"><i class="fa fa-inbox"></i>Orders</a>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='packages'){echo 'active';} ?>">
                                <a href="javascript:void(0)"><i class="fa fa-ticket"></i>Packages</a>
                                <ul class="submenu">
                                    <li class="<?php if(!empty($page2) && $page2=='company'){echo 'active';} ?>">
                                        <a href="<?php echo base_url('admin/packages/company'); ?>">Company Packages</a>
                                    </li>
                                    <li class="has-submenu <?php if(!empty($page2) && $page2=='trademark'){echo 'active';} ?>">
                                        <a href="javascript:void(0)">Trademark</a>
                                        <ul class="submenu">
                                            <li class="<?php if(!empty($page3) && $page3=='trademark-class'){echo 'active';} ?>">
                                                <a href="<?php echo base_url('admin/packages/trademark-classes'); ?>">Trademark Classes</a>
                                            </li>
                                            <li class="<?php if(!empty($page3) && $page3=='trademark'){echo 'active';} ?>">
                                                <a href="<?php echo base_url('admin/packages/trademark'); ?>">Trademark Packages</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="<?php if(!empty($page2) && $page2=='Copyright'){echo 'active';} ?>">
                                        <a href="<?php echo base_url('admin/packages/Copyright'); ?>">Copyright Packages</a>
                                    </li>
                                    <li class="<?php if(!empty($page2) && $page2=='Patent'){echo 'active';} ?>">
                                        <a href="<?php echo base_url('admin/packages/Patent'); ?>">Patent Package</a>
                                    </li>
                                    <li class="<?php if(!empty($page2) && $page2=='Legal Documentation'){echo 'active';} ?>">
                                        <a href="<?php echo base_url('admin/packages/Legal'); ?>">Legal Documentation Packages</a>
                                    </li>
                                    <li class="<?php if(!empty($page2) && $page2=='Mandatory Compliances'){echo 'active';} ?>">
                                        <a href="<?php echo base_url('admin/packages/Mandatory'); ?>">Mandatory Compliance Packages</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='company'){echo 'active';} ?>">
                                <a href="javascript:void(0)"><i class="fa fa-building"></i>Company</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('admin/companies'); ?>">All Companies</a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)<?php //echo base_url('admin/add-company'); ?>">Add New Company</a>
                                    </li> -->
                                </ul>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='company'){echo 'active';} ?>">
                                <a href="javascript:void(0)"><i class="fa fa-trademark"></i>Trademark</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('admin/trademarks'); ?>">All Trademarks</a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)<?php //echo base_url('admin/add-company'); ?>">Add New Company</a>
                                    </li> -->
                                </ul>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='contacts'){echo 'active';} ?>">
                                <a href="<?php echo base_url('admin/contact_messages'); ?>"><i class="fa fa-envelope"></i>Contact messages</a>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='pages'){echo 'active';} ?>">
                                <a href="<?php echo base_url('admin/pages'); ?>"><i class="fa fa-file"></i>Pages</a>
                            </li>

                            <li class="has-submenu <?php if(!empty($page) && $page=='style'){echo 'active';} ?>">
                                <a href="<?php echo base_url('admin/style'); ?>"><i class="fa fa-code"></i>Style</a>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
            <div class="loader hide"><img src="<?php echo base_url('assets/images/BGLoader.gif'); ?>" style="height: 5px;width: 100%;margin-top:-18px;" /></div>
        </header>
        <!-- End Navigation Bar-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#navigation .navigation-menu li a,.pagination li a').click(function(){
                    $('.loader').removeClass('hide');
                });
            });
        </script>
