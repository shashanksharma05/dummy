                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <?php echo date('Y'); ?> © CompanyVakil. All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
        </div>

        <!-- jQuery footer -->
        <script src="<?php echo base_url(); ?>assets/admin/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.app.js"></script>
        <script>
        $(document).ready(function() {
            $('.alert').delay(3000).fadeOut(500);
            $('#alrt').delay(3000).fadeOut(500);
        });
        </script>
    </body>
</html>