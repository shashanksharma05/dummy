		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
</div>
	</div>
		<div class="main-wrapper" style="padding: 80px 0;">

		<div class="container">
			
				<div class="row">
		
					<div class="col-sm-12 col-md-12">
						<div class="f1-steps">
                			<div class="f1-progress">
                			    <div class="f1-progress-line" data-now-value="66.66" data-number-of-steps="3" style="width: 66.66%;"></div>
                			</div>
                			<div class="f1-step active">
                				<div class="f1-step-icon"><i class="fa fa-list"></i></div>
                				<p>Checkout</p>
                			</div>
                			<div class="f1-step active">
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
				    	<h3>Payment</h3>
				    	<h3>Your Total Payment : <span class="orange">Rs.<?php $TotalPrice = 0;if(!empty($carts)){
		                foreach ($carts as $cart) {
		                    $TotalPrice = $TotalPrice+$cart['packageTotalPrice'];
		                }
		                echo $TotalPrice;
            			} ?></span></h3>
						<h3>Finish Payment / <i class="fa fa-lock"></i>  secure</h3>
						
						<div class="col-md-9">
							<p>After clicking 'Pay Now' you will be directed to payment gateway to complete payment. You must complete the process or the process will not occur. Afterwards you will be redirected to us again.</p>
							<p>The payment amount will be debited from your account once the process is completed. </p>
					  	</div>
					  	<div class="row col-md-12">
					  		<br>
							<button type="submit" class="btn btn-md btn-success btn-pay">Pay Now</button>
							<br>
						</div>
				    </div>
				    <!-- end of left column -->
				    
				    <div class="col-md-3 m-t-30">
				      	<div class="panel-custom">
			            	<h4 style="margin: 0px;">Need Help?</h4>
							<br>
							<div class="text-center">
								<a href="#footer" class="btn btn-info btn-sm"> Contact Us </a>
							</div>

					    </div>  

					    <div class="panel-custom">
					        <h4 style="margin: 0px;">Learn Quick Terms</h4>
							<br>

							<div class="text-left">
							  <ul class="similar-found">
							    <li><a href="<?php echo base_url('terms_and_conditions'); ?>" target="_blank">Terms of Service</a></li>
							    <li><a href="<?php echo base_url('privacy_policy'); ?>" target="_blank">Privacy Policy</a></li>
							    <li><a href="<?php echo base_url('refund_policy'); ?>" target="_blank">Refund Policy</a></li>
							  </ul>
							</div>
					    </div>  
					</div>
					<!-- end of right column -->
				</div>
			</div>
			<section></section>
		</div>
		<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>  -->
		<script>
			var amount = <?php echo $TotalPrice*100; ?>;
			var options = {
			    "key": '<?php echo RAZOR_KEY; ?>',
			    "amount": amount, // 2000 paise = INR 20
			    "name": "<?php if(!empty($carts[0])){echo $carts[0]['Keyword'].' '.$carts[0]['packageName'];} ?>",
			    "description": "",
			    "image": "",
			    "handler": function (response){
			        if(response.razorpay_payment_id){
			        	$('#introLoader').show().css('background-color','transparent');
			        	$('.theme-dark.gifLoader .gifLoaderInner').css('background-color','transparent');
			          	$.ajax({
			              	type: "post",
			              	url: "<?php echo base_url('user/paymentConfirmed'); ?>",
			              	data: {payment_id:response.razorpay_payment_id,amount:amount},
			              	dataType: "json",
			              	success: function(response2, textStatus, jqXHR) {
				              	if(response2.code==200){
				              		window.location.href = '<?php echo base_url('checkout/paymentstatus?orderid='); ?>'+response2.order_id+'&message='+response2.message+'&code='+response2.code;
				              	}else{
				              		window.location.href = '<?php echo base_url('checkout/paymentstatus?message='); ?>'+response2.message+'&code='+response2.code;
				              	}
			              	},
			              	error: function(jqXHR, textStatus, errorThrown) {
			                	$('#introLoader').hide();
			               		alert(errorThrown);
			            	}
			          });
			        }else{
			        	window.location.href = '<?php echo base_url('checkout/paymentstatus?message='); ?>failed&code=201';
			        }
			    },
			    modal: {
			        escape: false,
			        ondismiss: function(){}
			    },
			    "prefill": {
			        "name": "<?php if(!empty($account)){echo $account->Name;} ?>",
			        "email": "<?php if(!empty($account)){echo $account->Email;} ?>",
			        "contact": "<?php if(!empty($account)){echo $account->Phone;} ?>"
			    },
			    "theme": {
			        "color": "#2E8ED7"
			    }
			};
			var rzp1 = new Razorpay(options);
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.btn-pay').click(function(){
			        rzp1.open();
			    });
			});
		</script>