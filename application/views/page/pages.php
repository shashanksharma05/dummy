				<div class="section_mgn  <?php echo $meta['name']; ?>">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<div class="row">
								<div class="col-md-12 col-xs-12">
									<?php echo $meta['section1']; ?>
								</div>
							</div>
							<div class="c_search">
								<?php if(!empty($package_detail)){ ?>
								<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-r-30">Buy Now</a>
                        		<?php } ?>
								<button type="button" class="btn btn-default" onclick="$('html, body').animate({scrollTop: $('#documents').offset().top}, 2000);">Learn more</button>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<?php $this->load->view('page/contact-us'); ?>
							<!-- <div class="c_search text-white">
								<h4>Trademark Name availability </h4>
								<div class="main-search-wrapper full-width text-center">
									<form method="get" action="<?php echo base_url('search/trademark'); ?>">
										<div class="form-group has-feedback">
									      <input type="text" class="form-control" name="value" placeholder="Enter Trademark Name" required>
									        <span class="form-control-feedback" aria-hidden="true">
									        	<button  type="submit" class="btn btn-default" type="submit">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
									        </span>
									    </div>
									</form>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section2 <?php echo $meta['name']; ?>">
			<div class="container">
				<div class="section_mgn">
				<?php setlocale(LC_MONETARY,"en_US"); if(!empty($package_detail)){ ?>
					<h3 class="text-blue upper text-center m-b-100"><b><?php echo $meta['package_title']; ?></b></h3>
					<div class="card">
						<!-- <h4 class="text-center">Before we Submit your Trademark Registration application, we do a Detailed Brand Name Check and inform you of any direct conflicts so that your brand has a better chance of succeeding</h4> -->
						<div>Consultancy<span class="fright">FREE</span></div><hr>
						<div>Trademark Name Search<span class="fright">FREE</span></div><hr>
						<div>Government Fee for Individuals and startups <span class="fright">Rs <?php echo str_replace("$", "", money_format("%n",$package_detail['packagePrice'])); ?>*</span></div><hr>
						<?php if ($package_detail['packageFee'] != 0) { ?>
						<div>Professional fees  <span class="fright">Rs <?php echo str_replace("$", "", money_format("%n",$package_detail['packageFee'])); ?>***</span></div><hr>
						<?php } ?>
						<p>
							<b>Total<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-l-30">Buy Now</a>
							<span class="fright">Rs <?php echo str_replace("$", "", money_format("%n",$package_detail['packageTotalPrice'])); ?>**</span></b>
						</p>

						<p><!-- <small>*Including stamp duty. For companies government fees is Rs <?php echo $package_detail['packagePrice']; ?> </small><br> --><!-- <small>*** Professional Fees for Companies is Rs <?php //echo $package_detail['packageFee']; ?></small><br> --><!-- <small>** for bulk trademarks please email – info@companyvakil.com</small> --><small><?php echo $meta['package_content']; ?></small></p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="india-contract">
			<div class="container">
				<div class="section_mgn page_dnm">
					<?php //echo $meta['section2']; ?>
				</div>
			</div>
		</div>
		
		<div class="section3 <?php echo $meta['name']; ?>" id="documents">
			<div class="container">
				<div class="section_mgn">
					<div class="text-white m-b-100 page_dnm">
						<?php echo $meta['section2']; ?>
					</div>
					<!-- <div class="row">
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Online Trademark Application information sheet"></div>
								<p class="m-b-10"><b>Trademark Application Information sheet</b></p>
								<p class="card-body">You will receive an information sheet after the payment is Successful</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Trade Mark Registration Certificate"></div>
								<p class="m-b-10"><b>Power of Attorney -  for Trademark eFiling</b></p>
								<p class="card-body">You will receive a copy from us.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Board Resolution for company trademark"></div>
								<p class="m-b-10"><b>Board Resolution for Trademark Registration Online</b></p>
								<p class="card-body">Only required in case of company, we will prepare it for you.</p>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
		<div class="section4 <?php echo $meta['name']; ?>">
			<div class="container">
				<div class="section_mgn page_dnm">
					<?php echo $meta['section3']; ?>
					<!-- <h3 class="text-blue upper text-center m-b-100"><b>WHAT Do YOU GET after online trademark application in india?</b></h3>
					<div class="row">
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/pan-number.png" alt="TM Acknowledgement for Trade Mark filing in India"></div>
								<p class="m-b-10"><b>Trademark Acknowledgement</b></p>
								<p class="card-body">Acknowledgement issued by the Trademark Registry of India</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Trademark Receipt after eFiling of Trademark"></div>
								<p class="m-b-10"><b>Trademark Receipt</b></p>
								<p class="card-body">A Receipt issued by the Indian Trademark Registry</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="TMA Form by Trade mark Registry"></div>
								<p class="m-b-10"><b>TMA Form</b></p>
								<p class="card-body">TMA Form issued by the Trademark Registry</p>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
		<div class="section5 <?php echo $meta['name']; ?>">
			<div class="container">
				<div class="section_mgn">
					
					<h3 class="text-white upper text-center m-b-100"><b>TIME TAKEN in registration process</b></h3>
					
					<div class="frst-timeline frst-timeline-style-7 frst-alternate frst-date-opposite">
		                <?php if(!empty($meta['timeline'])){ foreach (json_decode($meta['timeline']) as $key => $value) { ?>
			                <div class="frst-timeline-block <?php if(($key+1)%2!=0){ echo 'frst-odd-item'; }else{ echo 'frst-even-item'; } ?>" data-animation="slideInUp">
			                    <div class="frst-timeline-img"> <span></span> </div>
			                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
			                        <div class="frst-timeline-content-inner"><span class="frst-date"><?php echo($value->date); ?></span>
			                            <h2><?php echo($value->title); ?></h2>
			                            <p><?php if(!empty($value->detail)) echo($value->detail); ?></p>
			                        </div>
			                        
			                    </div>
			                </div>
		                <?php } } ?>
		            </div>
				</div>
			</div>
		</div>
		<div class="section6 <?php echo $meta['name']; ?>">
			<div class="container">
				<div class="section_mgn page_dnm">
					<?php echo $meta['section4']; ?>
				</div>
			</div>
		</div>
		