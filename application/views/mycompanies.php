		<style type="text/css">
			.nav>li>a {
			    padding: 8px 13px;
			}.nav-pills>li>a {
			    border-radius: 1px; 
			}.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
			    background-color: #009cde;
			    background-image: radial-gradient(circle farthest-side at center bottom,#009cde,#003087 125%);
			}
		</style>
		<div class="main-wrapper">

			<section style="padding: 20px 0;">
				<div class="container">

					<div class="grid destination-grid-wrapper" style="position: relative; height: 0px;">
			
						<div class="row">
						
							<div class="col-sm-3 col-md-3 col-xs-12">
								<div class="">
							        <a href="account">
							        	<img src="<?php if($account->Photo){echo $account->Photo;}else{echo base_url('assets/images/default-male.png'); } ?>" style="width: 100%;">
								    	<h4 class="text-center text-uppercase"><?php echo $this->session->vakil_user_name; ?></h4>
									</a>
								</div>
								<ul class="nav nav-pills nav-stacked">
							        <li class=""><a data-toggle="pill" href="#section1">My Account</a></li>
							        <li class=""><a data-toggle="pill" href="#section2">My Orders</a></li>
							        <li class="active"><a data-toggle="pill" href="#section3">Company</a></li>
							        <li class=""><a data-toggle="pill" href="#section4">Trademark</a></li>
							    </ul>
							</div>
							<div class="tab-content">
    							<div id="section1" class="tab-pane fade">
    								
									<div class="col-sm-9 col-md-9 col-xs-9">
										<div class="well well-sm bg-blue text-white"><b>My Account</b></div>
										<ul class="list-group">
											<li class="list-group-item"><?php echo $this->session->vakil_user_email; ?> <span class="pull-right text-success"><i class="fa fa-check"></i> Verified by <?php echo $account->SignupBy; ?></span></li>
										</ul>
										<ul class="list-group">
											<li class="list-group-item">Address</li>
											<li class="list-group-item"><?php echo !empty($account->Address)?$account->Address.', '.$account->City.', '.$account->State.', '.$account->Pincode:'-'; ?></li>
										</ul>
									</div>
									
								</div>
    							<div id="section2" class="tab-pane fade">
									<div class="col-sm-9 col-md-9 col-xs-9">
										<div class="well well-sm bg-blue text-white"><b>My Orders</b></div>
										<?php if(!empty($orders)){ ?>
										<li class="list-group-item">Total <?php echo $orders['total']; ?> orders found.</li>
										<?php foreach ($orders['list'] as $key => $value) {
										$orderDetails = json_decode($value->OrderDetails,true); ?>
											<li class="list-group-item">
												<h5>Order No. <span class="orange"><?php echo $value->OrderID; ?></span> <span class="pull-right">Date : <?php echo date('d M Y h:i A',$value->OrderDate); ?></span></h5>
												<span><?php echo count($orderDetails); ?> sub-orders</span>
												<table class="table">
										    		<thead>
										    			<tr>
										    				<td class="text-left" style="color: #999999; font-size: 1.2em;">Product</td>
										    				<td class="text-right" style="color: #999999; font-size: 1.2em;">Price</td>
										    			</tr>
										    		</thead>
										    		<tbody>
										    	<?php if(!empty($orderDetails)){ 
										    	foreach ($orderDetails as $order) { ?>
								                	<tr>
								                		<td class="text-left">
								                			<?php if($order['packageType']=='Company'){ ?>
								                			<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $order['Keyword'].' '.$order['packageName']; ?></h4>
								                			<?php }else{ ?>
								                			<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $order['Keyword'].' Trademark Class '.$order['packageClass']; ?></h4>
								                			<p style="font-size: 14px;">Tradmark Filing for Class <?php echo $order['packageClass']; ?></p>
								                			<?php } ?> 
								                			<br>
								                		</td>
								                		<td class="text-right"><h4 style="margin-top: 0px;">Rs.<?php echo $order['packageTotalPrice']; ?></h4></td>
								                	</tr>
										        <?php } } ?>
										    		</tbody>
										        </table>
											</li>
										<?php }  ?>
										<?php }else{
											echo '<li class="list-group-item">No order create yet!</li>';
										} ?>
									</div>
								</div>
								<div id="section3" class="tab-pane fade active in">
									<div class="col-sm-9 col-md-9 col-xs-9">
										<div class="well well-sm bg-blue text-white"><b>My Company</b></div>
									</div>
									<div class="col-sm-3 col-md-3 col-xs-12">
										<div class="scrollspy-sidebar sidebar-detail affix-top bg-light" role="complementary">
									
										<ul class="scrollspy-sidenav1">
											<div><i class="sprite ic-account-tax" title="Annual Compliances"></i></div>
											<h4>CLOSE A COMPANY</h4>
											<h4>₹4999 <small>onwards</small></h4>
											<p>A tedious, but very necessary, procedure that can even take over a year to complete.</p>
										
										</ul>
										</div>
									</div>
									<div class="col-sm-3 col-md-3 col-xs-12">
										<div class="scrollspy-sidebar sidebar-detail affix-top bg-light" role="complementary">
									
										<ul class="scrollspy-sidenav1">
											<div><i class="sprite ic-businessreg" title="ANNUAL COMPLIANCES"></i></div>
											
											<h4>CLOSE A COMPANY</h4>
											<h4>₹4999 <small>onwards</small></h4>
											<p>A tedious, but very necessary, procedure that can even take over a year to complete.</p>

										</ul>
										
										</div>
									</div>
									<div class="col-sm-3 col-md-3 col-xs-12">
										<div class="scrollspy-sidebar sidebar-detail affix-top bg-light" role="complementary">
									
											<ul class="scrollspy-sidenav1">
											<div><i class="sprite ic-intellectual" title="ANNUAL COMPLIANCES"></i></div>
											
											<h4>CLOSE A COMPANY</h4>
											<h4>₹4999 <small>onwards</small></h4>
											<p>A tedious, but very necessary, procedure that can even take over a year to complete.</p>

											</ul>
										
										</div>
									</div>
								</div>
								<div id="section4" class="tab-pane fade">
									<div class="col-sm-9 col-md-9 col-xs-9">
										<div class="well well-sm bg-blue text-white"><b>My Trademark</b></div>
									</div>
									<div class="col-sm-3 col-md-3 col-xs-12">
										<div class="scrollspy-sidebar sidebar-detail affix-top bg-light" role="complementary">
									
										<ul class="scrollspy-sidenav1">
											<div><i class="sprite ic-consult-lawyer" title="Lawyer/CA/CS consultation by 5+ years experienced professionals"></i></div>
											<h4>CLOSE A COMPANY</h4>
											<h4>₹4999 <small>onwards</small></h4>
											<p>A tedious, but very necessary, procedure that can even take over a year to complete.</p>
										
										</ul>
										</div>
									</div>
									<div class="col-sm-3 col-md-3 col-xs-12">
										<div class="scrollspy-sidebar sidebar-detail affix-top bg-light" role="complementary">
									
										<ul class="scrollspy-sidenav1">
											<div><i class="sprite ic-legal" title="CLose a Company"></i></div>
											
											<h4>CLOSE A COMPANY</h4>
											<h4>₹4999 <small>onwards</small></h4>
											<p>A tedious, but very necessary, procedure that can even take over a year to complete.</p>

										</ul>
										
										</div>
									</div>
									<div class="col-sm-3 col-md-3 col-xs-12">
										<div class="scrollspy-sidebar sidebar-detail affix-top bg-light" role="complementary">
									
											<ul class="scrollspy-sidenav1">
											<div><i class="sprite ic-businessreg" title="Close a Company"></i></div>
											<h4>CLOSE A COMPANY</h4>
											<h4>₹4999 <small>onwards</small></h4>
											<p>A tedious, but very necessary, procedure that can even take over a year to complete.</p>

											</ul>
										
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</section>
			<section></section>
		</div>
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