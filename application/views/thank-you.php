				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
		</div>
	</div>
		<div class="main-wrapper" style="padding: 80px 0;">

			<div class="container">
			
				<div class="row">
		
					<div class="col-sm-12 col-md-12">
						<div class="f1-steps">
                			<div class="f1-progress">
                			    <div class="f1-progress-line" data-now-value="100" data-number-of-steps="3" style="width: 100%;"></div>
                			</div>
                			<div class="f1-step active">
                				<div class="f1-step-icon"><i class="fa fa-list"></i></div>
                				<p>Checkout</p>
                			</div>
                			<div class="f1-step active">
                				<div class="f1-step-icon"><i class="fa fa-credit-card"></i></div>
                				<p>Payment</p>
                			</div>
                		    <div class="f1-step active">
                				<div class="f1-step-icon" style="background: #2f863e;"><i class="fa fa-check"></i></div>
                				<p>Thank You</p>
                			</div>
                		</div>
					</div>
					
				</div>
				<div class="row"><div class="col-sm-12 col-md-12"><div class="message"></div></div></div>
				<div class="row m-t-20">
				    <div class="col-md-9">
				    	<h3 style="color:#2f863e;"><?php echo $this->session->orderMessage; $this->session->unset_userdata('orderMessage'); ?></h3>
				    	<h5>Your Confirmation order no. is <span style="color: #f35b3f;font-weight: bold;font-size: 18px;"><?php echo $orderData['OrderID']; ?></span>. and complete order details are</h5>
				    	<table class="table">
				    		<thead>
				    			<tr>
				    				<td class="text-left" style="color: #999999; font-size: 1.2em;">Product</td>
				    				<td class="text-right" style="color: #999999; font-size: 1.2em;"></td>
				    			</tr>
				    		</thead>
				    		<tbody>
				    	<?php if(!empty($orderData['OrderDetails'])){ 
				    	foreach ($orderData['OrderDetails'] as $order) { ?>
		                	<tr>
		                		<td class="text-left">
		                			<?php if($order['packageType']=='Company'){ ?>
		                			<h4 style="text-transform: capitalize; margin-top: 0px;"><?php echo $order['Keyword'].' '.$order['packageName']; ?></h4>
		                			<ul class="similar-found"> <li>DIN for 2 Directors</li> <li>Digital Signature for 2</li> <li>Name Approval</li> <li>MOA / AOA</li> <li>ROC Registration Certificate</li> <li>1 x Company PAN &amp; TAN</li> <li>Documents Notarization</li> </ul> 
		                			<?php }else{ ?>
		                			<h4 style="text-transform: capitalize;margin-top: 0px;"><?php echo $order['Keyword'].' Trademark Class '.$order['packageClass']; ?></h4>
		                			<p style="font-size: 14px;">Tradmark Filing for Class <?php echo $order['packageClass']; ?></p>
		                			<?php } ?>
		                		</td>
		                		<td class="text-right"><h4>Rs.<?php echo $order['packageTotalPrice']; ?></h4></td>
		                	</tr>
				        <?php } } ?>
				    		</tbody>
				        </table>
			        	<div class="panel-custom">
				        	<div class="row">
						      	<div class="col-md-6 text-left">
						          	<h3 style="margin: 0px;">Total Amount Pay</h3>
	                    			<div>Inclusive of all taxes</div>
                    			</div>
                    			<div class="col-md-6">
						            <h3 class="text-right" style="font-size: 1.6em">Rs.<?php echo $orderData['AmountPay']; ?></h3>
						      	</div> 
						    </div>
						</div>
						<?php if(!empty($orderData['Name'])){ ?>
						<div class="panel-custom">
							<h3 class="text-left">Contact Information</h3>
							<table class="table">
					    		<thead>
					    			<tr>
					    				<th>Name</th><th>Email</th><th>Phone</th><th>Address</th>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<td><?php if(!empty($orderData['Name'])){ echo $orderData['Name']; } ?></td>
					    			<td><?php if(!empty($orderData['Email'])){ echo $orderData['Email']; } ?></td>
					    			<td><?php if(!empty($orderData['Phone'])){ echo $orderData['Phone']; } ?></td>
					    			<td><?php if(!empty($orderData['Address'])){ echo $orderData['Address']; } 
					    			if(!empty($orderData['City'])){ echo ','.$orderData['City']; } 
					    			if(!empty($orderData['State'])){ echo ','.$orderData['State']; } 
					    			if(!empty($orderData['Pincode'])){ echo ','.$orderData['Pincode']; } 
					    			if(!empty($orderData['Country'])){ echo ','.$orderData['Country']; } ?></td>
					    		</tbody>
					    	</table>
						</div>
						<?php } ?>
				    </div>
					<!-- end of right column -->
				</div>
			</div>
			<section></section>
		</div>
				<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script> 