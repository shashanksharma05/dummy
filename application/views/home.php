		<div class="section_mgn">
			<div class="row">
				<div class="col-md-6 text-white">
					<div class="c_search m-b-100" >
						<h1 style="font-size: 21px !important;">Company Name Search / Trademark Public Search</h1>
						<div class="main-search-wrapper full-width">
							<form method="get" action="<?php echo base_url('search/company'); ?>">
								<div class="form-group has-feedback">
							        <input type="text" class="form-control cmpny_input" name="value" placeholder="Enter Company Name" required>
							        <span class="form-control-feedback" aria-hidden="true">
							        	<button  type="submit" class="btn btn-default">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
							        </span>
							    </div>
								<div class="fright">
							        <label class="radio-inline"><input type="radio" class="cmpny" name="type" value="company" checked>Company</label>
									<label class="radio-inline"><input type="radio" class="cmpny" name="type" value="trademark">Trademark</label>
								</div>
							</form>
						</div>
					</div>
					<div class="row text-center m-t-30">
						<div class="col-md-4 col-sm-4">
							<img src="<?php echo base_url(); ?>assets/images/100.png" class="m-b-10" alt="100 % Online Company Search and Trademark Search">
						</div>
						<div class="col-md-4 col-sm-4">
							<img src="<?php echo base_url(); ?>assets/images/guarantee.png" class="m-b-10" alt="Company Vakil Guarantee for Trademark Public Search and Company Name Search">
						</div>
						<div class="col-md-4 col-sm-4">
							<img src="<?php echo base_url(); ?>assets/images/lowest-price.png" class="m-b-10" alt="Lowest price in India with MCA Company Name Search and Trademark Public Search tool">
						</div>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<?php $this->load->view('page/contact-us'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

		<div class="section4">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>EASY AS 1 - 2 - 3</b></h3>
					<div class="row">
						<div class="col-md-4 col-sm-6 text-center">
							<h4><b>Step - 1</b></h4>
					        <div class="form_card1 bg-white">
								<div class=" m-b-10"><img src="<?php echo base_url(); ?>assets/images/search-and-company.png" alt="Company Search and Trademark Search Bar Tool"></div>
								<p class="card-body">Search Company / Trademark Name availability through our Free Trademark Public Search and MCA Company Search bar and proceed with registration</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 text-center">
							<h4><b>Step - 2</b></h4>
					        <div class="form_card1 bg-white">
								<div class=" m-b-10"><img src="<?php echo base_url(); ?>assets/images/add-to-cart.png" alt="Company Vakil Experts to help you search your Company Name and Trademark"></div>
								<p class="card-body">After your Trademark or Company Search our Legal Consultants will get in touch with you </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 text-center">
							<h4><b>Step - 3</b></h4>
					        <div class="form_card1 bg-white">
								<div class=" m-b-10"><img src="<?php echo base_url(); ?>assets/images/email.png" alt="Make payment online after searching your Company Name or trademark Name"></div>
								<p class="card-body">Make Payment online, Submit us your Documents and let us do the rest</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section3">
			<div class="container">
				<div class="section_mgn">
					<div class=" text-center text-white m-b-100">
						<h3 class="upper"><b>OUR SERVICES</b></h3>
					</div>
					<div class="service_card">
						<div class="row">
							<div class="grid destination-grid-wrapper" style="position: relative;">
								<div class="col-sm-3 col-md-3 col-xs-12">
									<ul class="nav nav-pills nav-stacked">
									<?php if(!empty($services)){ foreach ($services as $key => $service) { ?>
								        <li class="<?php if($key==0){echo 'active';} ?>">
											<a data-toggle="pill" href="#section<?php echo $key; ?>"><h4><?php echo $service['serviceName']; ?></h4></a>
										</li>
									<?php } } ?>
								    </ul>
								</div>
								<div class="tab-content">
									<?php if(!empty($services)){ foreach ($services as $key => $service) { ?>
	    							<div id="section<?php echo $key; ?>" class="tab-pane fade <?php if($key==0){echo 'in active';} ?>">
										<?php if(!empty($service['services'])){ foreach ($service['services'] as $value) { ?>
										<div class="col-sm-3 col-md-3 col-xs-12">
											<div class="scrollspy-sidebar sidebar-detail affix-top bg-light service_subcard section_subcard" role="complementary">
											<ul class="scrollspy-sidenav1">
												<div class="f-16">
													<h4><b><?php echo $value['packageName']; ?> – Rs <?php echo $value['packageTotalPrice']; ?></b></h4>
												</div>
												<p class="f-12">
													<?php echo $value['Description']; ?>
												</p>
												<a class="btn btn-orange m-r-30" href="<?php echo base_url($value['packageSlug']); ?>">Read More</a>
											</ul>
											</div>
										</div>
										<?php } } ?>
									</div>
									<?php } } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section31">
			<div class="container">
				<div class="section_mgn">

					<h3 class="text-white upper text-center"><b>WHY CHOOSE COMPANY VAKIL</b></h3>
					<p class="text-white text-center m-tb-50">Company Vakil with help of technology simplifies the process of registrations in India with our Unique Trademark and Company Search Tool. Company Vakil believes in complete transparency in price, process and time consumption. Company Vakil follows the likes of famous Just in Time process to deliver services on time without a hitch.</p>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      	<!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
					      	<?php if(!empty($meta['timeline'])){ foreach (json_decode($meta['timeline']) as $key => $value) { ?>
					      	<li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key==0) echo 'active'; ?>"></li>
					      	<?php } } ?>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner">
					        <!-- <div class="item active">
					        	<div class="col-md-2"></div>
					        	<div class="col-md-8">
						        	<div class="form_card1 bg-white">
						        		<div class="row">
											<div class="col-md-4 col-xs-12"><img src="<?php echo base_url(); ?>assets/images/step-1.png" alt="Legal Experts with you "></div>
											<div class="col-md-8 col-xs-12">
												<h4><b>Legal Experts at your fingertips</b></h4>
												<p> At Company Vakil your services are fulfilled by our team of legal experts including Chartered Accountants (CA`s), Company Secretary ( CS) -  from Company Name Search and Trademark Public search to Filing we provide free consultancy till your service is fulfilled</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2"></div>
					      	</div> -->

					      	<?php if(!empty($meta['timeline'])){ foreach (json_decode($meta['timeline']) as $key => $value) { ?>
					      	<div class="item <?php if($key==0) echo 'active'; ?>">
					        	<div class="col-md-2"></div>
					        	<div class="col-md-8">
						        	<div class="form_card1 bg-white">
										<div class="row">
											<div class="col-md-4 col-xs-12"><img src="<?php echo base_url(); ?>assets/images/step-1.png" alt="Legal Experts here to help you Search your Company name and Trademark your Brand"></div>
											<div class="col-md-8 col-xs-12">
												<h4><b><?php echo($value->title); ?></b></h4>
												<p><?php if(!empty($value->detail)) echo($value->detail); ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2"></div>
					      	</div>
					      	<?php } } ?>

					    </div>

					</div>
				</div>
			</div>
		</div>

<!-- Changes to be done from here -->

		<div class="section6">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>Company / Trademark Name Search</b></h3>

					<div class="c_search">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="main-search-wrapper full-width">
									<form method="get" action="<?php echo base_url('searchNew/company'); ?>">
										<div class="form-group has-feedback">
									        <input type="text" class="form-control cmpny_input" name="value" placeholder="Enter Company Name" id="searchCTDBox" required>
									        <span class="form-control-feedback" aria-hidden="true">
									        	<button type="submit" class="btn btn-default">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
									        </span>
											<div id="resultCTD"></div>
									    </div>
										<div class="fright">
									        <label class="radio-inline"><input type="radio" class="cmpny newCompany" name="type" value="company" checked>Company</label>
											<label class="radio-inline"><input type="radio" class="cmpny newCompany" name="type" value="trademark">Trademark</label>
											<label class="radio-inline"><input type="radio" class="cmpny newCompany" name="type" value="director">Director</label>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section7">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>OUR CLIENTS</b></h3>

					<div class="row text-center">
						<div class="col-md-1 col-sm-12"></div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/bris.png" alt="Bristolux a Trademark by company vakil CA, CS and Lawyer">
						</div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/cedo.png" alt="Cedo a Trademark done by company vakil Attorneys">
						</div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/ys-events.png" alt="YS Events a TM filed by Company Vakil experts">
						</div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/fp.png" alt="Flitpay a brand applied by Company Vakil’s Expert Chartered Accountants">
						</div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/jass.png" alt="Jass Records a Brand application by Company Vakil Experts like Advocates, CA ’s and CS">
						</div>
						<div class="col-md-1 col-sm-12"></div>
					</div>
					<div class="row text-center">
						<div class="col-md-1 col-sm-12"></div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/mom.png" alt="Mad Over Marketing a Trademark applied by Company Vakil’s Legal Experts">
						</div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/speed.png" alt="Speed Records a Brand and Company formed by Company Vakil">
						</div>
						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/plane-my-place.png" alt="Plan my Place a TM applied by Company Vakil">
						</div>

						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/rb.png" alt="TRB a Trademark filed after Trademark Search and ROC Company Search">
						</div>

						<div class="col-md-2 col-sm-6">
							<img src="<?php echo base_url(); ?>assets/images/deco.png" alt="Decoarte a TM application made by Company Vakil’s Lawyers, CA’s and CS">
						</div>
						<div class="col-md-1 col-sm-12"></div>
					</div>

				</div>
			</div>
		</div>

		<?php if(!empty($meta['section2']) && $meta['section2']!='<p>&nbsp;</p>'){ ?>
		<div class="section3 <?php echo $meta['name']; ?>" id="documents">
			<div class="container">
				<div class="section_mgn">
					<div class="text-white m-b-100 page_dnm">
						<?php echo $meta['section2']; ?>
					</div>

				</div>
			</div>
		</div>
		<?php } ?>

		<?php if(!empty($meta['section3']) && $meta['section3']!='<p>&nbsp;</p>'){ ?>
		<div class="section4 <?php echo $meta['name']; ?>">
			<div class="container">
				<div class="section_mgn page_dnm">
					<?php echo $meta['section3']; ?>
				</div>
			</div>
		</div>
		<?php } ?>

	<script type="text/javascript">
		$(document).ready(function() {
			var value = 'company';
			$('.newCompany').click(function()
		    {
		        value = $(this).val();
		        if(value == 'company')
		        {
			        $('.cmpny_input').attr("placeholder", "Enter Company Name");
			        $('.cmpny_input').parent().parent().attr("action", "http://companyvakil.com/searchNew/company");
					$("#resultCTD").html("");
		    	}
		      	else if(value == 'trademark')
		      	{
			        $('.cmpny_input').attr("placeholder", "Enter Trademark Name");
			        $('.cmpny_input').parent().parent().attr("action", "http://companyvakil.com/searchNew/trademark");
					$("#resultCTD").html("");
		    	}
				else
		      	{
			        $('.cmpny_input').attr("placeholder", "Enter Director Name");
			        $('.cmpny_input').parent().parent().attr("action", "http://companyvakil.com/searchNew/director");
					$("#resultCTD").html("");
		    	}
			});

			$("#searchCTDBox").keyup(function(){
				var searchData = $("#searchCTDBox").val();
				if(searchData != '')
				{
					$.ajax({
						url : "<?php echo base_url();?>ajaxsearch/fetchData",
						method : "POST",
						data :
						{
							searchData : searchData,
							typeCTD : value
						},
						success : function(response){
							$("#resultCTD").html(response);
						}
					});
				}
				else
				{
					$("#resultCTD").html("");
				}
			});
		});
	</script>
