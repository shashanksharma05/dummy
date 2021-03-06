<!doctype html><html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="P90yziZNuJJoAyXlk2kQTQhH5hqigMuIyL8QHRzwqh0" />
	<meta name="description" content="<?php if(!empty($meta['title'])){echo $meta['description'];}?>" />
	<meta name="keywords" content="<?php if(!empty($meta['title'])){echo $meta['keywords'];}?>" />
	<title><?php if(!empty($meta['title'])){echo $meta['title'];}else{echo 'CompanyVakil.com';} ?></title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/logo.png">
	<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/frst-timeline-style-7.css">
	<!-- <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css"> -->
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>assets/js/custom.js"></script> -->
	<style>
		.dropdown-submenu{position:relative;}
		.dropdown-submenu>.dropdown-menu{
			top:0;
			left:100%;
			margin-top:-6px;
			margin-left:-1px;
			-webkit-border-radius:0 6px 6px 6px;
			-moz-border-radius:0 6px 6px 6px;
			border-radius:0 6px 6px 6px;
		}
		.dropdown-submenu>a:after{
			display:block;
			content:" ";
			float:right;
			width:0;
			height:0;
			border-color:transparent;
			border-style:solid;
			border-width:5px 0 5px 5px;
			border-left-color:#000;
			margin-top:5px;
			margin-right:-10px;
		}
		.dropdown-submenu .dropdown-menu li a{white-space: normal !important;}
		.dropdown-submenu:hover>a:after{border-left-color:#fff;}
		.dropdown-submenu.pull-left{float:none;}
		.dropdown-submenu.pull-left>.dropdown-menu{
			left:-100%;
			margin-left:10px;
			-webkit-border-radius:6px 0 6px 6px;
			-moz-border-radius:6px 0 6px 6px;
			border-radius:6px 0 6px 6px;
		}
		.badge {
			padding: 3px 6px;
			color: #553eda;
			background-color: #fff;
			margin-left: 2px;
		}
	</style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114282843-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-114282843-1');
	</script>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "Organization",
			"name": "Company Vakil",
			"url": "https://www.companyvakil.com/",
			"logo": "https://www.companyvakil.com/assets/images/Company%20Vakil%20Logo.svg",
			"sameAs" : [
			"https://www.instagram.com/companyvakil/",
			"https://www.facebook.com/CompanyVakil-764656367061431/",
			"https://twitter.com/CompanyVakil",
			]
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"name": "Company Vakil",
			"url": "https://www.companyvakil.com/"
		}
	</script>
</head>
<body>
	<div id="introLoader" class="introLoading"></div>
	<button id="myBtn" title="Go to top">Top</button>
	<div class="wrapper">
		<div class ="section1">
			<nav class="navbar navbar-fixed-top" style="background-color: #553eda;">
			  	<div class="container">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/Company Vakil Logo.svg" style="width:250px;" alt="Company Vakil"></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				        <ul class="nav navbar-nav navbar-right">
					        <li class="dropdown services">
					            <a class="dropdown-toggle upper" data-toggle="dropdown" href="#">our services <span class="caret"></span></a>
					            <ul class="dropdown-menu service-dropdown">
						            <li class="dropdown dropdown-submenu">
						            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Start a Business </a>
						            	<ul class="dropdown-menu" style="width: 250px;">
						            		<li><a href="<?php echo base_url('private-limited-company'); ?>">Private Limited Company</a></li>
						            		<li><a href="<?php echo base_url('limited-liability-partnership'); ?>">Limited Liability Partnership</a></li>
											<li><a href="<?php echo base_url('one-person-company'); ?>">One Person Company</a></li>
						            	</ul>
						            </li>
						            <li class="divider"></li>
						            <li class="dropdown dropdown-submenu">
						            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Trademark </a>
						            	<ul class="dropdown-menu" style="width: 250px;">
											<li><a href="<?php echo base_url('trademark-registration'); ?>">Trademark Registration</a></li>
											<li><a href="<?php echo base_url('trademark-objection'); ?>">Trademark Objection</a></li>
											<li><a href="<?php echo base_url('trademark-renewal-and-assignment'); ?>">Trademark Renewal and Assignment</a></li>
										</ul>
						            </li>
									<li class="divider"></li>
									<li class="dropdown dropdown-submenu">
						            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Copyright</a>
						            	<ul class="dropdown-menu" style="width: 250px;">
											<li><a href="<?php echo base_url('copyright-registration'); ?>">Copyright Registration</a></li>
										</ul>
						            </li>
									<li class="divider"></li>
									<li class="dropdown dropdown-submenu">
						            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Patent </a>
						            	<ul class="dropdown-menu" style="width: 250px;">
											<li><a href="<?php echo base_url('trademark-registration'); ?>">Patent Search and Provisional Patent</a></li>
										</ul>
						            </li>
									<li class="divider"></li>
									<li class="dropdown dropdown-submenu">
						            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Legal Documentation </a>
						            	<ul class="dropdown-menu" style="width: 250px;">
											<li><a href="<?php echo base_url('terms-of-service'); ?>">Terms and services</a></li>
											<li><a href="<?php echo base_url('founder-agreement'); ?>">Founders Agreement</a></li>
											<li><a href="<?php echo base_url('employment-contract'); ?>">Employment Contract</a></li>
										</ul>
						            </li>
									<li class="divider"></li>
									<li class="dropdown dropdown-submenu">
						            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mandatory Compliance</a>
						            	<ul class="dropdown-menu" style="width: 250px;">
											<li><a href="<?php echo base_url('GST-registration'); ?>">Goods and Services Tax (GST) Registration</a></li>
											<li><a href="<?php echo base_url('MSME-registration'); ?>"> Micro Small Medium Enterprise (MSME) Registration </a></li>
											<li><a href="<?php echo base_url('import-export-code'); ?>">Import Export Code</a></li>
										</ul>
						            </li>
								</ul>
					        </li>   
					        <li class="active upper"><a href="http://blog.companyvakil.com">Learn</a></li>
					        <li class="upper" id="contact"><a href="#footer">contact</a></li>
					        <li class="dropdown bt-dropdown-click user-action">
								<?php if(empty($account)){ ?>
								<a data-toggle="modal" data-target="#loginModal" class=" btn-login upper">Log in</a>
								<?php }else{ ?>

								<a id="language-dropdown" class=" dropdown-toggle upper" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-user"></i> <?php echo $this->session->vakil_user_name; ?>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="language-dropdown">
									<li><a href="<?php echo base_url('user/account'); ?>"><i class="fa fa-gear"></i>&nbsp; My Account</a></li>
									<li><a href="<?php echo base_url('user/logout'); ?>"><i class="fa fa-lock"></i>&nbsp;&nbsp; Logout</a></li>
								</ul>
								<?php } ?>
							</li>
							<li class="upper"><a href="<?php echo base_url('checkout/detail'); ?>"><i class="fa fa-shopping-cart"></i><span class="badge"><?php if(!empty($count_carts)) {echo $count_carts;} else { echo 0;}?></span></a></li>
					    </ul>
				    </div>
			    </div>
			</nav>
			<div class="container">
			<?php if(empty($account)){ ?>
				<div class="modal fade modal-login modal-border-transparent" id="loginModal" " role="dialog" >
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
							<div class="clear"></div>
							<div id="modal-login-form-wrapper">
								
								<form id="login-form">
								
									<div class="modal-body">
								
										<h4 class="text-center heading mt-10 mb-20">Log-in</h4>
									
										<button type="button" class="btn btn-facebook btn-block upper">Log-in with Facebook</button>
										
										<div class="modal-seperator">
											<span>or</span>
										</div>
										
										<div class="form-group"> 
											<input name="email" class="form-control" placeholder="Email" type="text" required> 
										</div>
										<div class="form-group"> 
											<input name="password" class="form-control" placeholder="Password" type="password" required> 
										</div>
										<div class="form-group"> 
											<span class="text-danger login-error">
											<?php if($this->session->flashdata('message')){ ?>
											<p class="text-success"><?php echo $this->session->flashdata('message'); ?></p>
											<?php } ?>
											</span>
										</div>
						
										<div class="form-group">
											<div class="row gap-5">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="checkbox-block fa-checkbox"> 
														<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
														<label class="" for="remember_me_checkbox">remember</label>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 text-right"> 
													<a id="login_lost_btn" href="#lostModal" data-toggle="modal" data-dismiss="modal">Forgot Pass?</a>
												</div>
											</div>
										</div>
									
									</div>
									
									<div class="modal-footer">
									
										<div class="row gap-10">
											<div class="col-xs-6 col-sm-6 mb-10">
												<button type="submit" class="btn btn-primary btn-block">Log-in</button>
											</div>
											<div class="col-xs-6 col-sm-6 mb-10">
												<button type="button" class="btn btn-default btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
											</div>
										</div>
										<div class="text-left">
											No account? 
											<a href="#registerModal" data-toggle="modal" data-dismiss="modal">Register</a>
										</div>
										
									</div>
								</form>
								<!-- End # Login Form -->
							</div>
						</div>
					</div>
				</div>						
				<div class="modal fade modal-login modal-border-transparent" id="lostModal"  role="dialog" >
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
							<div class="clear"></div>
							<div id="modal-login-form-wrapper">
								<!-- Begin | Lost Password Form -->
								<form id="lost-form" >
									<div class="modal-body pb-5">
									
										<h3 class="text-center heading mt-10 mb-20">Forgot password</h3>
										<div class="form-group mb-10"> 
											<input name="lost_email" class="form-control" type="email" placeholder="Enter Your Email" required>
										</div>
										<div class=""> 
											<span class="text-success lost-success"></span>
											<span class="text-danger lost-error"></span>
										</div>
										<div class="text-center">
											<a href="#loginModal" data-toggle="modal" data-dismiss="modal">Log-in</a> or 
											<a href="#registerModal" data-toggle="modal" data-dismiss="modal">Register</a>
										</div>
										
									</div>
									
									<div class="modal-footer mt-10">
										
										<div class="row gap-10">
											<div class="col-xs-6 col-sm-6">
												<button type="submit" class="btn btn-primary btn-block">Submit</button>
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
				<div class="modal fade modal-login modal-border-transparent" id="registerModal"  role="dialog" >
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
							<div class="clear"></div>
							<div id="modal-login-form-wrapper">
								<form id="register-form" style="padding-left: 0px !important;">
								
									<div class="modal-body pb-5">
									
										<h3 class="text-center heading mt-10 mb-20">Register</h3>
										
										<button class="btn btn-facebook btn-block">Register with Facebook</button>
										
										<div class="modal-seperator">
											<span>or</span>
										</div>
										
										<div class="form-group"> 
											<input name="register_username" class="form-control" type="text" placeholder="Name" required> 
										</div>
										
										<div class="form-group"> 
											<input name="register_email" class="form-control" type="email" placeholder="Email" required>
										</div>
										<div class="form-group" >
											<input type="number" class="form-control" name="register_phone" placeholder="Enter your phone" required />
										</div>
									    <div class="form-group"> 
											<input name="register_password" class="form-control" type="password" placeholder="Password" required>
										</div>
										
										<div class="form-group"> 
											<input name="register_password_confirm" class="form-control" type="password" placeholder="Confirm Password" required>
										</div>
										<div class=""> 
											<span class="text-danger register-error"></span>
										</div>
										<div class="text-center"> 
											<span class="text-success register-success"></span>
										</div>
										
									</div>
										
									<div class="modal-footer mt-10">
									
										<div class="row gap-10">
											<div class="col-xs-6 col-sm-6 mb-10">
												<button type="submit" class="btn btn-primary btn-block register-form1">Register<img src=""></button>
											</div>
											<div class="col-xs-6 col-sm-6 mb-10">
												<button type="button" class="btn btn-default btn-inverse btn-block close-modal" data-dismiss="modal" aria-label="Close">Cancel</button>
											</div>
										</div>
										
										<div class="text-left">
												Already have account? <a href="#loginModal" data-toggle="modal" data-dismiss="modal">Sign-in</a>
										</div>
										
									</div>
										
								</form>
							
								<form id="verify-form" style="display: none;">
									<div class="modal-body pb-5">
									
										<h3 class="text-center heading mt-10 mb-20">Verify Phone</h3>
										<div class="form-group mb-10"> 
											<input name="verify_phone_otp" class="form-control" type="text" placeholder="Enter Your OTP" required>
											<input type="hidden" value="" class="return-number" name="verify_number">
										</div>
										<div class=""> 
											<span class="text-danger verify-error"></span>
										</div>
										<div class="text-center"> 
											<span class="text-success verify-success"></span>

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
							<?php if($this->session->flashdata('message')){ ?>
								$('.btn-login').click();
							<?php } ?>
							$('#login-form').submit(function(e){
								e.preventDefault();$('.login-error').text('');
								$.ajax({
									type: 'post',
									url: '<?php echo base_url('user/login'); ?>',
									data: $('#login-form').serialize(),
									dataType: 'json',
									success: function(response){
										if(response.code==200){
											window.location.href = response.url;
										}else{
											$('.login-error').html(response.msg);
										}
										$('#modal-login-form-wrapper').css('height','auto');
									}
								});
							});
							$('#register-form').submit(function(e){
								e.preventDefault();
								$('.register-error').text('');
								$('.register-success').text('');
								$('.verify-success').text('');
								$.ajax({
									type: 'post',
									url: '<?php echo base_url('user/register'); ?>',
									data: $('#register-form').serialize(),
									dataType: 'json',
									success: function(response){
										
									if(response.code==200){
											
											$("#register-form").css('display','none');
											$("#verify-form").css('display','block');
											$('.return-number').val(response.number);
											$('.verify-success').html(response.msg);

										}else{
											$('.register-error').html(response.msg);
										}
										$('#modal-login-form-wrapper').css('height','auto');
									}
								});
							});
							$('#lost-form').submit(function(e){
								e.preventDefault();
								$('.lost-error').text('');
								$('.lost-success').text('');
								$.ajax({
									type: 'post',
									url: '<?php echo base_url('user/forgotpassword'); ?>',
									data: $('#lost-form').serialize(),
									dataType: 'json',
									success: function(response){
										if(response.code==200){
											$('.lost-success').html(response.msg);
											$('#lost-form').trigger('reset');
										}else{
											$('.lost-error').html(response.msg);
										}
										$('#modal-login-form-wrapper').css('height','auto');
									}
								});
							});
							$('#verify-form').submit(function(e){

								e.preventDefault();
								$('.register-error').text('');
								$('.register-success').text('');
								$.ajax({
									type: 'post',
									url: '<?php echo base_url('user/verifyphone'); ?>',
									data: $('#verify-form').serialize(),
									dataType: 'json',
									success: function(response){
										if(response.code==200){
											alert(response.msg);
											alert(response.mail.msg);
											$("#modal .close-modal").click();
										}else{
											$('.verify-error').html(response.msg);

										}
										$('#modal-login-form-wrapper').css('height','auto');
									}
								});
							});
							$('html body').on('click', '.resend', function(){
								$.ajax({
									type: 'post',
									url: '<?php echo base_url('user/send_verify_email'); ?>',
									data: $('#login-form').serialize(),
									dataType: 'json',
									success: function(response){
										$('.login-error').html(response.msg);
									}
								});
							});
							$('form').submit(function()
						    {
						        var value = $('.cmpny_input').val();
						        if(value){
						        	$('#introLoader').show().css('background-color','transparent');
						        	$('.theme-dark.gifLoader .gifLoaderInner').css('background-color','transparent');
						        }

						    });
						});
									
				</script>
				
			<?php } ?>
			<script>
				
					$(document).ready(function(){
						$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
							event.preventDefault(); 
							event.stopPropagation(); 
							$(this).parent().siblings().removeClass('open');
							$(this).parent().toggleClass('open');
						});
						$('.services').hover(function() {
						    $(this).find('.service-dropdown').stop(true, true).delay(100).fadeIn(500);
						}, function() {
						    $(this).find('.service-dropdown').stop(true, true).delay(100).fadeOut(500);
						});
						
	                    $(window).scroll(function () {
	               
			                if($(this).scrollTop()>100){
			                    $(".navbar").css('background-color','#553eda');
			                    $(".navbar-brand img").css('width','auto');
			                }
			                else{
			                	$(".navbar").css('background-color','#553eda');
			                	$(".navbar-brand img").css('width','250px');
			                }
			            });
   
					});
				
			</script>
			<div class="clear"></div>