<style type="text/css">
	.panel-custom {
    border: solid 1px #CCC;
    padding: 10px 15px;
    background: #FFF;
    margin-bottom: 10px;
    text-align: center;
}
.panel-custom h4 {
    font-size: 18px;
    margin-top: 5px;
}
.truncate {
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.package-img-block {
	overflow: hidden;
    position: relative;
}.package-img {
	height: 120px;
    background-size: cover!important;
    transform: scale(1.5);
}
@media (max-width:992px) {
	.package-img {
		height: 220px;
		background-size: cover!important;
		transform: scale(1);
	}
}
.modal-backdrop {
   background-color: #fff;
   opacity: 1 !important;
   z-index: 0;
	}
</style>
		</div>
	</div>
		<div class="main-wrapper" style="padding: 80px 0;">

			<div class="container">
			
				<div class="row">
		
					<div class="col-sm-12 col-md-12">
						<div class="main-search-wrapper full-width">
							<form method="get">
								<div class="form-group has-feedback">
							        <input type="text" class="form-control" placeholder="Search Company" name="value" value="<?php if(!empty($company)){echo $company; } ?>" required>
							        <span class="form-control-feedback" aria-hidden="true">
							        	<button  type="submit" class="btn btn-default">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</span>
							    </div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h4 style="margin-bottom: 15px;">
						<?php if(!empty($company) && !empty($data)){
						echo 'Sorry, <span class="orange upper">'.$company.'</span> is taken. Please search again with a different name';
						}else if(!empty($company)){
						echo 'Good news, <span class="orange upper">'.$company.'</span> is available.';
						}else{
						echo 'Please enter a <span class="orange upper">Company Name</span>';
						} ?>	
						</h4>
						<?php if(!empty($company)){ ?>
						<div class="alert alert-success">
							<i class="fa fa-check"></i> No Restricted words found.
						</div>
						<?php } if(!empty($company) && !empty($data)){ ?>
						<div class="alert alert-danger">
							<i class="fa fa-remove"></i> Similar Companies found.
						</div>
						<ul class="similar-found">
							<?php foreach ($data as $key => $value) {
								$location = explode('-',$value['ROC']);
								$location = !empty($location[1])?$location[1]:$value['state'];
								$year = date('Y',strtotime($value['date_of_incorporation']));
								echo '<li><strong>'.$value['company_name'].'</strong> in '.$location.' ('.$year.')</li>';
							} ?>
			            </ul>
						<?php }else if(!empty($company)){ ?>
						<div class="alert alert-success">
							<i class="fa fa-check"></i> No Companies have been registered with a similar name
						</div>
						<?php } ?>
					</div>

				</div>
				<?php if(!empty($company) && empty($data)){ ?>
				<div class="row">
				    <div class="col-md-9 col-sm-12 col-xs-12" style="padding-left: 5px;">
						<div class="message"></div>
				    	<?php if(!empty($packages)){
				    	foreach ($packages as $key => $package) { ?>
		                <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 10px 10px 0;">
				            <div class="panel-custom">
		                    	<h4 class="truncate" title="<?php echo $package['packageName']; ?>"><?php echo $package['packageName']; ?></h4>
		                        <center class="package-img-block">
									<div class="package-img" style="background:url(<?php if($package['ImagePath']){echo base_url($package['ImagePath']);}else{echo base_url('assets/images/no-image.png');} ?>) center no-repeat"></div>
	                        	</center>
			                    <h4>Rs.<?php echo $package['packageTotalPrice']; ?></h4>
				                <span class="help-block" style="font-size: 0.8em; padding-top: 0; margin-top: -10px;">Inclusive of all taxes and fees</span>
				                <?php if(!empty($package['cart'])){
				                	echo '<button id="item'.$package['ID'].'" type="button" data-id="'.$package['ID'].'" class="btn btn-sm disabled">Added</button>';
				                }else{ ?>
		                        <button type="button" id="item<?php echo $package['ID']; ?>" data-id="<?php echo $package['ID']; ?>" class="btn btn-sm btn-orange btn-cart">Add</button> 
		                        <?php } ?>
		                    </div>
				        </div>
				        <?php } } ?>
				    </div>
				    <!-- end of left column -->
				    
				    <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 10px;">
				      	<div class="panel-custom">
					      	<div class="text-left" id="show_cart">
					          	<div id="cart_product">
					              	<?php if(!empty($carts)){ echo $carts; }else{echo '<h4 class="text-center">Your cart is empty</h4>';} ?>
					          	</div>
					      	</div> 
					    </div>

				      	<div class="panel-custom">
			            	<h4 style="margin: 0px;">How does it work?</h4>
							<br>
							<div class="text-center">
								<a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-info btn-sm">
								    Company Registration
								</button></a>
							</div>

					    </div>  

					    <div class="panel-custom">
					        <h4 style="margin: 0px;">Documents Required</h4>
							<br>

							<div class="text-left">
							  <ul class="similar-found">
							    <li><a href="<?php echo base_url('private-limited-company/#documents'); ?>">Private Limited Company</a></li>
							    <li><a href="<?php echo base_url('limited-liability-partnership/#documents'); ?>" >Limited Liability Partnership</a></li>
							    <li><a href="<?php echo base_url('one-person-company/#documents'); ?>" >One Person Company</a></li>
							  </ul>
							</div>
					    </div>  
					</div>
					<!-- end of right column -->
				</div>
				<?php } ?>
			</div>
			<section></section>
		</div>
		<?php if(!empty($company)  && !$submit){ ?>
		<div class="modal fade" id="mycontactModal2" tabindex="-1" style="display: none;" role="dialog" aria-labelledby="agentModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top: 90px;">
					<div class="modal-header">
						<h4>Please share some details, before we provide you with the search results</h4>
					</div>
					<div class="modal-body"> 
						<form method="post" class="contactModal">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="Name" placeholder="Enter Your Name" value="">
							</div>
							<div class="form-group">
								<label for="number">Phone<span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="Phone" placeholder="Enter Your Phone" maxlength="10"  pattern="[0-9]{10}" value="" required>
							</div>
							<div class="form-group">
								<label for="email">Email<span class="text-danger">*</span></label>
								<input type="email" class="form-control" name="Email" placeholder="Enter your email id" value="" required>
							</div>
							<div class="alert-message"></div>
							<div class="modal-footer">
								<input type="hidden" class="form-control" name="keyword" value="<?php echo $company; ?>">
								<input type="hidden" class="form-control" name="type" value="Company">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form> 
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		<?php } ?>
		<script type="text/javascript">
			function loading(){
				$('#introLoader').show().css('background-color','transparent');
	        	$('.theme-dark.gifLoader .gifLoaderInner').css('background-color','transparent');
			}
			$(document).ready(function(){
				<?php if(!empty($company) /*&& !$submit*/){ ?>
					$('#mycontactModal2').modal({backdrop: 'static', keyboard: false});
					$('form.contactModal').submit(function(e){
						e.preventDefault();$('.contact-message').html('');
						$.ajax({
							type: "POST",
							url: '<?php  echo base_url('home/search_contact_submit'); ?>',
							data: $('form.contactModal').serialize(),
							dataType: 'json',
							success: function(response){
								if(response.status==200){
									$('form.contactModal').trigger('reset');
									$('.alert-message').html('');
									$('#mycontactModal2').modal('hide');
								}else{
									$('.alert-message').html(response.res);
								}
								$('#introLoader').hide();
							}
						});
					});
				<?php } ?>
				$('body').on('click', '.btn-cart', function() {
				var item = $(this); var id = item.data('id');var name = '<?php echo $company; ?>';
				var type = '<?php echo $type; ?>'; loading();
					$.ajax({
					    type: "POST",
					    url: "<?php echo base_url('home/addtocart'); ?>",
					    data: {id:id,name:name,type:type},
					    dataType: 'json',
					    success: function(response) {
					    	if(response.msg=='ok'){
					      		$('#cart_product').html(response.res);
					      		$('.badge').text(response.badge);
					      		item.html('Added');
					      		item.removeClass('btn-cart');
					      		item.removeClass('btn-primary');item.addClass('disabled');
					    	}else if(response.msg=='signin'){
								$('#loginModal').modal({backdrop: 'static', keyboard: false});
							}else{
					    		$('.message').html('<div class="alert alert-danger"><i class="fa fa-info"></i> '+response.msg+'</div>');
					    	}$('#introLoader').hide();
					    }
					});
				});
				$('body').on('click', '.remove', function() {
					var item = $(this); var id = item.data('id');loading();
					$.ajax({
					    type: "POST",
					    url: "<?php echo base_url('home/removecart'); ?>",
					    data: {id:id},
					    dataType: 'json',
					    success: function(response) {
					    	if(response.msg=='ok'){
					      		$('#cart_product').html(response.res);
					      		$('.badge').text(response.badge);
					      		$('#item'+id).html('Add <i class="fa fa-play"></i>');
					      		$('#item'+id).addClass('btn-cart');
					      		$('#item'+id).addClass('btn-primary');$('#item'+id).removeClass('disabled');
					    	}else{
					    		$('.message').html('<div class="alert alert-danger"><i class="fa fa-info"></i> '+response.msg+'</div>');
					    	}$('#introLoader').hide();
					    }
					});
				});
				$('form').submit(function(){
			        var value = $('[name="company"]').val();
			        if(value){ loading(); }
			    });
			});
		</script>