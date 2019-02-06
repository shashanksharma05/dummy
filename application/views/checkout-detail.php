		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css"> 
		<style>
				ul.similar-found 
				{
					margin-left: 0px;
				}
		</style>
		</div>
	</div>
		<div class="main-wrapper" style="padding: 80px 0;">

			<div class="container">
			
				<div class="row">
		
					<div class="col-sm-12 col-md-12">
						<div class="f1-steps">
                			<div class="f1-progress">
                			    <div class="f1-progress-line" data-now-value="33.33" data-number-of-steps="3" style="width: 33.33%;"></div>
                			</div>
                			<div class="f1-step active">
                				<div class="f1-step-icon"><i class="fa fa-list"></i></div>
                				<p>Checkout</p>
                			</div>
                			<div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-credit-card"></i></div>
                				<p>Payment</p>
                			</div>
                		    <div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
                				<p>Thank You</p>
                			</div>
                		</div>
					</div>
					
				</div>
				<div class="row"><div class="col-sm-12 col-md-12"><div class="message"></div></div></div>
				<div class="row m-t-20">
				    <div class="col-md-9">
				    	<h3>Your Orders</h3>
				    	<table class="table">
				    		<thead>
				    			<tr>
				    				<td class="text-left" style="color: #999999; font-size: 1.2em;"><h4>Product</h4></td>
				    				<td class="text-right" style="color: #999999; font-size: 1.2em;"><h4>Price</h4></td>
				    			</tr>
				    		</thead>
				    		<tbody>
				    	<?php $TotalPrice = 0; if(!empty($carts)){ 
				    	foreach ($carts as $cart) {
		                	$TotalPrice = $TotalPrice+$cart['packageTotalPrice']; ?>
		                	<tr>
		                		<td class="text-left">
		                			<?php if($cart['Type']=='Company'){ ?>
		                			<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $cart['Keyword'].' '.$cart['packageName']; ?></h4>
		                			<ul class="similar-found"> <li>DIN for 2 Directors</li> <li>Digital Signature for 2</li> <li>Name Approval</li> <li>MOA / AOA</li> <li>ROC Registration Certificate</li> <li>1 x Company PAN &amp; TAN</li> <li>Documents Notarization</li> </ul>
		                			<?php }else if($cart['Type']=='Trademark'){ ?>
		                			<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $cart['Keyword'].' Trademark Class '.$cart['packageClass']; ?></h4>
		                			<p style="font-size: 14px;">Trademark Filing for Class <?php echo $cart['packageClass']; ?></p>
		                			<?php }else if($cart['Type']=='Copyright'){ ?>
									<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo 'Copyright Registration'; ?></h4>
									<p style="font-size: 14px;">Copyright Registration for <?php echo $cart['Keyword']; ?></p>
									<?php }else if($cart['Type']=='Patent'){ ?>
									<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo 'Patent Registration'; ?></h4>
									<?php }else if($cart['Type']=='Trademark Non Class'){ ?>
									<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $cart['packageName']; ?></h4>
									<?php }else{ ?>
									<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $cart['packageType']; ?></h4>
									<p style="font-size: 14px;"><?php echo $cart['packageType'].' for '.$cart['Keyword']; ?></p>
									<?php } ?>
		                			<a href="javascript:void(0)" class="text-danger remove small" data-id="<?php echo $cart['PackageID']; ?>">Remove item</a> 
		                			<br>
		                		</td>
		                		<td class="text-right"><h4 style="margin-top: 0px;">Rs.<?php echo $cart['packageTotalPrice']; ?></h4></td>
		                	</tr>
				        <?php } } ?>
				    		</tbody>
				        </table>
						<h3>Contact Information</h3>
						<?php if(empty($account)){ ?>
						<div class="col-md-9">
							<center><a href="javascript:void(0)" class="btn btn-sm btn-facebook">LogIn with Facebook</a></center>
							<!-- <a href="#" class="btn btn-lg btn-danger" style="background: #df4b38">LogIn with Google</a> -->
							<div style="height: 1px; margin: 35px 0; border-top: 1px solid #CCC;  text-align: center; position: relative;">
								<span style="padding: 0 10px; position: relative; top: -.7em; background: white; display: inline-block;">Or
								</span>
							</div>
						</div>
						<?php } ?>
						<div class="col-md-9">
							<form action="<?php echo base_url('checkout/payment'); ?>" accept-charset="UTF-8" method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<input type="text" name="Name" class="form-control" placeholder="Full Name" required="required" value="<?php if(!empty($account)){echo $account->Name;} ?>">
				  					</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="number" name="Phone" class="form-control" placeholder="Mobile" required="required" value="<?php if(!empty($account)){echo $account->Phone;} ?>">
				  					</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<input type="email" name="Email" class="form-control" placeholder="Email" required="required" <?php if(!empty($account)){ echo 'readonly'; } ?> value="<?php if(!empty($account)){echo $account->Email;} ?>">
				  					</div>
								</div>
								<div class="col-md-12">
									<hr>
									<div class="form-group">
										<input type="text" name="Address" class="form-control" placeholder="Address" required="required" value="<?php if(!empty($account)){echo $account->Address;} ?>">
				  					</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="City" class="form-control" placeholder="City" required="required" value="<?php if(!empty($account)){echo $account->City;} ?>">
				  					</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="State" class="form-control" placeholder="State" required="required" value="<?php if(!empty($account)){echo $account->State;} ?>">
				  					</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="number" name="Pincode" class="form-control" placeholder="PinCode" required="required" value="<?php if(!empty($account)){echo $account->Pincode;} ?>">
				  					</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="Country" value="India" class="form-control" placeholder="Country" disabled="disabled" required="required">
				  					</div>
								</div>
			
								<div class="col-md-12">
									<button type="submit" class="btn btn-md btn-orange">
										Continue
									</button>
									<br>
									<br>
								</div>
							</div>
							</form>
					  	</div>
				    </div>
				    <!-- end of left column -->
				    
				    <div class="col-md-3 m-t-30">
				      	<div class="panel-custom">
					      	<div class="text-left" id="show_cart">
					          	<div id="cart_product">
					          		<h3 style="margin: 0px;">Total</h3>
                    				<div>Inclusive of all taxes</div>
					              	<h3 class="text-right total-amount" style="font-size: 1.6em">Rs.<?php echo $TotalPrice; ?></h3>
					          	</div>
					      	</div> 
					    </div>

				      	<div class="panel-custom">
			            	<h4 style="margin: 0px;">Documents Required</h4>
					    </div>  

					    <div class="panel-custom">
					        <h4 style="margin: 0px;">Company</h4>
							<br>
							<div class="text-left">
							  <ul class="similar-found">
							    <li><a href="<?php echo base_url('private-limited-company'); ?>" target="_blank">Private Limited Company</a></li>
							    <li><a href="<?php echo base_url('limited-liability-partnership'); ?>" target="_blank">Limited Liability Partnership</a></li>
							    <li><a href="<?php echo base_url('one-person-company'); ?>" target="_blank">One Person Company</a></li>
							  </ul>
							</div>
						</div>    
						<div class="panel-custom">
					        <h4 style="margin: 0px;">Trademark</h4>
							<br>
							<div class="text-left">
							  <ul class="similar-found">
							    <li><a href="<?php echo base_url('trademark-registration'); ?>" target="_blank">Trademark Registration</a></li>
							    <li><a href="<?php echo base_url('trademark-renewal-and-assignment'); ?>" target="_blank">Trademark Renewal and Assignment</a></li>
							    <li><a href="<?php echo base_url('trademark-objection'); ?>" target="_blank">Trademark Objection</a></li>
							  </ul>
							</div>
						</div> 
					</div>
					<!-- end of right column -->
				</div>
			</div>
			<section></section>
		</div>
		
		<script type="text/javascript">
			jQuery(function($){
				$(document).ready(function(){
					$('body').on('click', '.remove', function() {
						var item = $(this); var id = item.data('id');
						$.ajax({
						    type: "POST",
						    url: "<?php echo base_url('home/removecartfromcheckout'); ?>",
						    data: {id:id},
						    dataType: 'json',
						    success: function(response) {
						    	if(response.msg=='ok'){
						      		$('.total-amount').text('Rs.'+response.res);
						      		$('.badge').text(response.badge);
						      		item.parent().parent().remove();
						    	}else{
						    		$('.message').html('<div class="alert alert-danger"><i class="fa fa-info"></i> '+response.msg+'</div>');
						    	}
						    }
						});
					});
					$('form').submit(function(){
				        var value = $('[name="Name"]').val();
				        if(value){
				        	$('#introLoader').show().css('background-color','transparent');
				        	$('.theme-dark.gifLoader .gifLoaderInner').css('background-color','transparent');
				        }

				    });
				});
			});
		</script>
