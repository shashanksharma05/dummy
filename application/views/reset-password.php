		</div>
	</div>
		<div class="main-wrapper" style="padding: 60px 0;">

			<div class="container">
			
				<div class="row">
		
					<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
						<h3><?php if($error){echo 'Forgot Password';}else{ echo 'Reset Password'; } ?></h3>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
						<form id="reset-form" method="post" action="">
						
							<div class="pb-5">
								<?php if($error){ ?>

								<div class="form-group"> 
									<input name="lost_email" class="form-control" type="email" placeholder="Enter Your Email" required>
								</div>

								<?php }else{ ?>
								<div class="form-group"> 
									<input name="reset_password" class="form-control" type="password" placeholder="New Password" required>
								</div>
								
								<div class="form-group"> 
									<input name="reset_password_confirm" class="form-control" type="password" placeholder="Confirm New Password" required>
								</div>

								<?php } if($this->session->flashdata('error')!=''){ ?>
								<div class="alert alert-danger"> 
									<span class="text-danger"><?php echo $this->session->flashdata('error'); $this->session->set_flashdata('error',''); ?></span>
								</div>
								<?php } if($error){ ?>
								<div class="alert alert-danger"> 
									<span class="text-danger"><?php echo $error; ?></span>
								</div>
								<div class=""> 
									<span class="text-success reset-success"></span>
									<span class="text-danger reset-error"></span>
								</div>
								<?php } ?>
								
							</div>
								
							<div class="modal-footer mt-10">
								<button type="submit" class="btn btn-primary"><?php if($error){echo 'Send Now';}else{ echo 'Reset Now'; } ?></button>
							</div>
								
						</form>
					</div>
				</div>
			</div>
			<section></section>
		</div>
		<?php if($error){ ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#reset-form').submit(function(e){
					e.preventDefault();$('.reset-error').text('');$('.reset-success').text('');$('.alert').remove();
					$.ajax({
						type: 'post',
						url: '<?php echo base_url('user/forgotpassword'); ?>',
						data: $('#reset-form').serialize(),
						dataType: 'json',
						success: function(response){
							if(response.code==200){
								$('.reset-success').html(response.msg);$('#reset-form').trigger('reset');
							}else{
								$('.reset-error').text(response.msg);
							}
						}
					});
				});
			});
		</script>
		<?php } ?>