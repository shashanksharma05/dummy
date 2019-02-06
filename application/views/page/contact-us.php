                            <div class="form_card bg-white">
								<h3 style="margin-top: 0px;"><b>Contact Us Now!</b></h3>
								<form method="post" action="">
									<div class="form-group">
									    <label for="name">Name</label>
									    <input type="text" class="form-control" name="Name" placeholder="Enter Your Name" value="<?php if(!empty($account)){echo $account->Name;} ?>">
									</div>
									<div class="form-group">
									    <label for="pnumber">Phone Number<span class="text-danger">*</span></label>
									    <input type="text" class="form-control" name="Phone" placeholder="Enter Your Phone Number" maxlength="10"  pattern="[0-9]{10}" value="<?php if(!empty($account)){echo $account->Phone;} ?>" required>
									</div>
									<div class="form-group">
									    <label for="email">Email<span class="text-danger">*</span></label>
									    <input type="email" class="form-control" name="Email" placeholder="Enter your email id" value="<?php if(!empty($account)){echo $account->Email;} ?>" required>
									</div>
									<div class="form-group">
									    <label for="que">Other Questions</label>
									    <textarea class="form-control" name="Message" placeholder="Ask your questions here" rows="3"></textarea>
                                    </div>
                                    <div class="alert-message"></div>
									<button type="submit" class="btn btn-primary btn-block upper">Submit</button>
								</form> 
                            </div>
                            <div class="modal fade" id="mycontactModal" tabindex="-1" style="display: none;" role="dialog" aria-labelledby="agentModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-body"> 
                                            <div class="contact-message"></div>
                                        </div>
                                        <div class="modal-footer text-center">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <script type="text/javascript">
		                        $(document).ready(function() {
                                    $('.form_card form').submit(function(e){
                                        e.preventDefault();$('.contact-message').html('');loading();
                                        $.ajax({
                                            type: "POST",
                                            url: '<?php  echo base_url('home/contact_submit'); ?>',
                                            data: $('.form_card form').serialize(),
                                            dataType: 'json',
                                            success: function(response){
                                                if(response.status==200){
                                                    $('.form_card form').trigger('reset');
                                                    $('.alert-message').html('');
                                                    $('.contact-message').html(response.res);
                                                    $('#mycontactModal').modal({backdrop: 'static', keyboard: false});
                                                }else{
                                                    $('.alert-message').html(response.res);
                                                }
                                                $('#introLoader').hide();
                                            }
                                        });
                                    });
                                });
                            </script>
                            