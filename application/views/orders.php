		<style type="text/css">
			.main-wrapper .nav>li>a {
			    padding: 8px 13px;
			}.main-wrapper .nav-pills>li>a {
			    border-radius: 1px; 
			}.main-wrapper .nav-pills>li.active>a, .main-wrapper .nav-pills>li.active>a:focus, .main-wrapper .nav-pills>li.active>a:hover {
			    background-color: #485bdc;
			    /*background-image: radial-gradient(circle farthest-side at center bottom,#009cde,#003087 125%);*/
			    color: #fff;
			}ol.progtrckr {
			    margin: 0;
			    padding: 0;
			    list-style-type none;
			}

			ol.progtrckr li {
			    display: inline-block;
			    text-align: center;
			    line-height: 3.5em;
			}
			.main-wrapper .nav>li>a, .main-wrapper .nav>li>a:focus, .main-wrapper .nav>li>a:hover
			{
				color: #000;
			}
			ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="5"] li { width: 20%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%;margin-right: -5px; }
			ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%;margin-right: -5px; }

			ol.progtrckr li.progtrckr-done {
			    color: black;
			    border-bottom: 4px solid yellowgreen;
			}
			ol.progtrckr li.progtrckr-todo {
			    color: silver; 
			    border-bottom: 4px solid silver;
			}

			ol.progtrckr li:after {
			    content: "\00a0\00a0";
			}
			ol.progtrckr li:before {
			    position: relative;
			    bottom: -2.5em;
			    float: left;
			    left: 50%;
			    line-height: 1em;
			}
			ol.progtrckr li.progtrckr-done:before {
			    content: "\2713";
			    color: white;
			    background-color: yellowgreen;
			    height: 2.2em;
			    width: 2.2em;
			    line-height: 2.2em;
			    border: none;
			    border-radius: 2.2em;
			}
			ol.progtrckr li.progtrckr-todo:before {
			    content: "\039F";
			    color: silver;
			    background-color: white;
			    font-size: 2.2em;
			    bottom: -1.2em;
			}
		</style>
	</div>
</div>
		<div class="main-wrapper">

			<section style="padding: 100px 0;">
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
							        <li class=""><a href="<?php echo base_url('user/account'); ?>">My Account</a></li>
							        <li class="active"><a href="<?php echo base_url('user/myorders'); ?>">My Orders</a></li>
							        <li class=""><a href="#">Company</a></li>
							        <li class=""><a href="#">Trademark</a></li>
							    </ul>
							</div>
							<div class="tab-content">
    							<div id="section2" class="tab-pane fade active in">
									<div class="col-sm-9 col-md-9 col-xs-9">
										<div class="well well-sm text-white" style="background: #553eda;"><b>My Orders</b></div>
										<?php if(!empty($orders['list'])){ ?>
										<li class="list-group-item">Total <?php echo $orders['total']; ?> orders found.</li>
										<?php foreach ($orders['list'] as $key => $value) {
										$orderDetails = json_decode($value->OrderDetails,true); ?>
											<li class="list-group-item">
												<h5>Order Id : <span class="orange"><?php echo $value->OrderID; ?></span> <span class="pull-right">Placed on : <i class="text-muted"><?php echo date('d M Y h:i A',$value->OrderDate); ?></i></span></h5>
												<h5 style="margin-top: 0px;">Status : <span class="<?php if($value->OrderStatus='Confirmed'){echo 'text-success';}else if($value->OrderStatus=='Cancelled'){echo 'text-danger';} ?>"><?php echo $value->OrderStatus; ?></span></h5>
												<div class="table-responsive">
												<table class="table" style="width: 120%;max-width: 120%;">
										    		<thead>
										    			<tr>
										    				<td class="text-left" style="color: #999999; font-size: 1.2em;">Product - <?php echo count($orderDetails); ?></td>
										    				<td class="text-right" style="color: #999999; font-size: 1.2em;">Price</td>
										    			</tr>
										    		</thead>
										    		<tbody>
										    	<?php if(!empty($orderDetails)){ 
										    	foreach ($orderDetails as $o=>$order) { ?>
								                	<tr>
								                		<td class="text-left">
								                			<?php if($order['packageType']=='Company'){ ?>
								                			<h5 style="text-transform: capitalize;margin-top: 0px;"><?php echo $order['Keyword'].' '.$order['packageName']; ?></h5>
								                			<?php }else{ ?>
								                			<h5 style="text-transform: capitalize;margin-top: 0px;"><?php echo $order['Keyword'].' Trademark Class '.$order['packageClass']; ?></h5>
								                			<p style="font-size: 14px;">Tradmark Filing for Class <?php echo $order['packageClass']; ?></p>
								                			<?php } ?> 
								                		</td>
								                		<td class="text-right"><h5 style="margin-top: 0px;">Rs.<?php echo $order['packageTotalPrice']; ?></h5></td>
								                	</tr>
								                	<tr>
								                		<!-- <td colspan="2" style="border-top: none;">
								                			<?php if($order['packageType']=='Company'){ ?>
								                			<ol class="progtrckr" data-progtrckr-steps="5">
															    <li class="progtrckr-done"><div>Under DSC</div></li>
															    <li class="progtrckr-todo"><div>DIN Procedure</div></li>
															    <li class="progtrckr-todo"><div>E-Form Registration</div></li>
															    <li class="progtrckr-todo"><div>Incorporate company</div></li>
															    <li class="progtrckr-todo"><div>Registered</div></li>
															</ol>
															<?php }else{ ?>
															<ol class="progtrckr" data-progtrckr-steps="5">
															    <li class="progtrckr-done"><div>Under Examination</div></li>
															    <li class="progtrckr-todo" title="Published & awaiting opposition"><div>Published & await...</div></li>
															    <li class="progtrckr-todo"><div>Under Opposition</div></li>
															    <li class="progtrckr-todo"><div>Under Registration</div></li>
															    <li class="progtrckr-todo"><div>Registered</div></li>
															</ol>
															<?php } ?>
															<?php if($o+1!=count($orderDetails)){echo '<br>';} ?>
								                		</td> -->
								                		<td colspan="2" style="border-top: none;">
								                			<?php if($order['packageType']=='Company'){ ?>
								                			<ol class="progtrckr" data-progtrckr-steps="5">
															    <li class="progtrckr-done">Under DSC</li>
															    <li class="progtrckr-todo">DIN Procedure</li>
															    <li class="progtrckr-todo">E-Form Registration</li>
															    <li class="progtrckr-todo">Incorporate company</li>
															    <li class="progtrckr-todo">Registered</li>
															</ol>
															<?php }else{ ?>
															<ol class="progtrckr" data-progtrckr-steps="5">
															    <li class="progtrckr-done">Under Examination</li>
															    <li class="progtrckr-todo" title="Published & awaiting opposition">Published & await...</li>
															    <li class="progtrckr-todo">Under Opposition<</li>
															    <li class="progtrckr-todo">Under Registration</li>
															    <li class="progtrckr-todo">Registered</li>
															</ol>
															<?php } ?>
															<?php if($o+1!=count($orderDetails)){echo '<br>';} ?>
								                		</td>
								                	</tr>
										        <?php } } ?>
										    		</tbody>
										        </table>
										    	</div><hr>
										    	<h5>Total amount pay : Rs.<?php echo $value->AmountPay; ?>
								        		<span class="pull-right">Payment mode : <i class="text-muted"><?php echo $value->PaymentMethod; ?></i></span></h5>
											</li>
										<?php } ?>
											<li class="list-group-item">
												<div class="row"> 
													<?php if($orders['total']>3){ 
														$offset = $orders['offset'];
														if($offset+3 > $orders['total']){
															$item_to = $orders['total'];
														}else{$item_to = $offset+3;} ?>
													<div class="col-md-6 col-sm-6 col-xs-12"><p class="text-left">Order <?php echo $offset+1; ?> - <?php echo $item_to; ?> of <?php echo $orders['total']; ?></p></div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<p class="pull-right">
															<?php if($orders['page']!=1){ $page = $orders['page']-1; ?>
																<a href="<?php echo base_url('user/myorders?page=').$page; ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Previous</a>
															<?php } ?>
															<?php if($orders['pages']!=$orders['page']){ $page = $orders['page']+1;?>
																<a href="<?php echo base_url('user/myorders?page=').$page; ?>" class="btn btn-default">Next <i class="fa fa-arrow-right"></i></a>
															<?php } ?>
														</p>
													</div>
													<?php } ?>
												</div>
											</li>
										<?php }else{
											echo '<li class="list-group-item">No order create yet!</li>';
										} ?>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</section>
			<section></section>
		</div>