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
        <title>Login - CompanyVakil Admin</title>

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/admin/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box" style="background-color: #553eda;">
                                    <h2 class="text-uppercase">
                                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/Company Vakil Logo.svg" /></a>
                                    </h2>
                                    <h4 class="text-white font-bold m-b-0">Admin</h4>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="<?php echo base_url('admin/login'); ?>" method="post">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="username" placeholder="Username">
                                                <?php echo ((form_error('username') != "") ? '<span class="help-inline" style="color:red">' . form_error('username') . '</span>' : ''); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" autocomplete="off" placeholder="Password">
                                                 <?php echo ((form_error('pwd') != "") ? '<span class="help-inline" style="color:red">' . form_error('pwd') . '</span>' : ''); ?>
                                            </div>
                                        </div>
                                        <p class="help-inline" style="color:red;font-size:15px;">
                                            <?php
                                            if ($this->session->flashdata('msg')) {
                                                echo $this->session->flashdata('msg');
                                            }
                                            ?>
                                        </p>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div> -->

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-info waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollTo.min.js"></script>
        
        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.app.js"></script>

    </body>
</html>