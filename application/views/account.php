		<style type="text/css">
			.main-wrapper .nav>li>a {
			    padding: 8px 13px;
			}.main-wrapper .nav-pills>li>a {
			    border-radius: 1px; 
			}.main-wrapper .nav-pills>li.active>a, .main-wrapper .nav-pills>li.active>a:focus, .main-wrapper .nav-pills>li.active>a:hover {
			    background-color: #485bdc;
			    /*background-image: radial-gradient(circle farthest-side at center bottom,#009cde,#003087 125%);*/
			    color: #fff;
			}
			.main-wrapper .nav>li>a, .main-wrapper .nav>li>a:hover
			{
				color: #000;
			}
		</style>
		</div>
	</div>
		<div class="main-wrapper">

			<section style="padding: 100px 0;">
				<div class="container">

					<div class="grid destination-grid-wrapper" style="position: relative; height: 0px;">
			
						<div class="row">
							<?php if($this->session->flashdata('success')){
								echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
							}; ?>
							<div class="col-sm-3 col-md-3 col-xs-12">
								<div class="">
							        <a href="account">
							        	<img src="<?php if($account->Photo){echo $account->Photo;}else{echo base_url('assets/images/default-male.png'); } ?>" style="width: 100%;">
								    	<h4 class="text-center text-uppercase"><?php echo $this->session->vakil_user_name; ?></h4>
									</a>
								</div>
								<ul class="nav nav-pills nav-stacked">
							        <li class="active"><a href="<?php echo base_url('user/account'); ?>">My Account</a></li>
							        <li class=""><a href="<?php echo base_url('user/myorders'); ?>">My Orders</a></li>
							        <li class=""><a href="#">Company</a></li>
							        <li class=""><a href="#">Trademark</a></li>
							    </ul>
							</div>
							<div class="tab-content">
    							<div id="section1" class="tab-pane fade active in">
    								
									<div class="col-sm-9 col-md-9 col-xs-9">
										<div class="well well-sm text-white" style="background: #553eda;"><b>My Account</b></div>
										<ul class="list-group">
											<li class="list-group-item"><?php echo $this->session->vakil_user_email; ?> <span class="pull-right text-success"><i class="fa fa-check"></i> Verified by <?php echo $account->SignupBy; ?></span></li>
										</ul>
										<ul class="list-group">
											<li class="list-group-item">
												<div class="contact">
													<span>Phone : <?php echo !empty($account->Phone)?$account->Phone:'N/A'; ?></span>
													<span class="pull-right text-success"><i class="fa fa-check"></i> Verified by <?php echo $account->SignupBy; ?>
													</span>
												</div>
											</li>
										</ul>
										<ul class="list-group">
											<li class="list-group-item">Address <a href="javascript:;" data-toggle="collapse" data-target="#edit" class="pull-right edit"><i class="fa fa-pencil"></i></a></li>
											<li class="list-group-item">
											<div class="address"><?php echo !empty($account->Address)?$account->Address.', '.$account->City.', '.$account->State.', '.$account->Pincode:'-'; ?></div>
											<div id="edit" class="row collapse">
												<form class="form" method="post">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" rows="3" name="Address" placeholder="Enter your address..." required><?php echo $account->Address; ?></textarea>
														</div>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control" name="City" placeholder="Enter your city" value="<?php echo $account->City; ?>" required />
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="State" placeholder="Enter your state" value="<?php echo $account->State; ?>" required />
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="Pincode" placeholder="Enter your pincode" value="<?php echo $account->Pincode; ?>" required />
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="Country" value="India" readonly="readonly" />
														</div>
														<div class="form-group">
															<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
															<input type="button" class="btn btn-default edit" name="cancel" data-toggle="collapse" data-target="#edit" value="Cancel" />
														</div>
													</div>
												</form>
											</div>
											</li>
										</ul>
										<ul class="list-group">
											<li class="list-group-item">My orders <span class="pull-right"><a href="<?php echo base_url('user/myorders'); ?>">View orders</a></span></li>
										</ul>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</section>
			<section></section>
		</div>
		<div class="modal fade modal-verify modal-border-transparent" id="verifyModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<div class="clear"></div>
					<div id="modal-verify">
						<form id="verify-form">
							<div class="modal-body pb-5">
							
								<h3 class="text-center heading mt-10 mb-20">Verify Phone</h3>
								<div class="form-group mb-10"> 
									<input name="verify_phone_otp" class="form-control" type="text" placeholder="Enter Your OTP" required>
								</div>
								<div class=""> 
									<span class="text-success verify-success"></span>
									<span class="text-danger verify-error"></span>
								</div>
							</div>
							
							<div class="modal-footer mt-10">
								<div class="row gap-10">
									<div class="col-xs-6 col-sm-6">
										<button type="submit" class="btn btn-primary btn-block">Verify Now</button>
									</div>
									<div class="col-xs-6 col-sm-6">
										<button type="button" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
									</div>
								</div>
								
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.edit').click(function(){
					if($('.address').hasClass('hide')){
						$('.address').removeClass('hide');
					}else{
						$('.address').addClass('hide');
					}
				});
			});
		</script>