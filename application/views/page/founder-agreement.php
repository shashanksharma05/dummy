				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>Founders agreement </h1> 
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>An Agreement between founders, that outlines all the important aspect of their relationship</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>100% online process </h4>
									<p>Get founders agreement drafted without stepping out of your house. Email us the required documents and let us do the rest. </p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
								    <h4>CompanyVakil Guarantee </h4>
								    <p>We take pride in our error free platform aimed on satisfying our clients, if you are still not satisfied, we refund your money.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>Most efficient Registration Platform </h4>
									<p>At CompanyVakil your registrations are handled by experts at every stage.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>Making registrations affordable and hassle free </h4>
								</div>
							</div>
							<?php } ?>
							<div class="c_search text-white">
								
								<?php if(!empty($package_detail)){ ?>
								<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-r-30">Buy Now</a>
								<?php } ?>
								<button type="button" class="btn btn-default" onclick="$('html, body').animate({scrollTop: $('#documents').offset().top}, 2000);">Learn more</button>
							
							</div>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<?php $this->load->view('page/contact-us'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section2">
			<div class="container">
				<div class="section_mgn">
					<?php if(!empty($package_detail)){ ?>
					<h3 class="text-blue upper text-center m-b-100"><b>Total Cost</b></h3>
					<div class="card">
						<div>Consultancy<span class="fright">FREE</span></div><hr>
						<div>Drafting charges<span class="fright">Rs <?php echo $package_detail['packagePrice']; ?></span></div><hr>
						<?php $additional = json_decode($package_detail['AdditionalPrice'],true);
                		if(!empty($additional)){ ?>
						<div><?php echo $additional['label']; ?><span class="fright"><?php echo $additional['price']; ?></span></div><hr>
						<?php } ?>
						<p><b>Total <a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-l-30">Buy Now</a><span class="fright">Rs <?php echo $package_detail['packageTotalPrice']; ?> </span></b></p>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		<div class="india-contract">
			<div class="container">
				<div class="section_mgn">
					<?php if(!empty($meta['section2']) && $meta['section2']!='<p>&nbsp;</p>'){ echo $meta['section2']; ?>
					<?php }else{ ?>
					<h3 class="text-blue upper text-center"><b>FOUNDER AGREEMENT IN INDIA</b></h3>
					<p>A founder agreement is a contract between the co-founders of a company. It covers aspects such as the ownership, duties, roles, responsibilities, and the initial investment of each founder.</p>

					<p>The essence of the founders’ agreement is that it assigns a specific role to the founders of an enterprise and thus preventing any ambiguity amongst them within the organization in the future.</p>

					<p>This helps the entrepreneurial organization to achieve their goals and objectives in a better and amicable way without any conflicts amongst the founders, further facilitating better relationships between them.</p>

					<p>Before drafting a founders’ agreement, it is essential for the founders to discuss openly the aspects of the agreement. Generally, the agreement is made during the incorporation of the organization.</p>

					<p>Some of the essential elements of a founders’ agreement are as follows:</p>
					<p>
						<ul>
							<li><b>Business Definition </b>The agreement must define the potential of the enterprise clearly. The objectives of the venture, vision, and mission are to be defined.</li>
							<li><b>Ownership </b>The ownership element of the agreement addresses the percentage or number of shares which is held by each co-founder.</li>
							<li><b>Capital </b>The Capital Clause sets out the initial investment contributed as capital by each founder.</li> 
							<li><b>Roles and Responsibilities</b>This ensures that the roles and responsibilities of each founder like decision-making, powers, duties etc are set out clearly to prevent any vagueness and ambiguity in the future.</li>
							<li><b>Compensation</b>It is also important to clarify in the agreement the compensation or salary that the founders are entitled to draw.</li>
							<li><b>Dissolution</b>The dissolution clause talks about the possibility of winding-up and liquidation of the enterprise. It sets out the manner of distribution of proceeds, assets and liabilities amongst the founders at the time of winding up or liquidation of the enterprise.</li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>What is a Founder Agreement?</b></h3>
					<p>It is a contract governing business relationships of company’s founders who enter into such a contract to regulate uncovered matters in <a href="https://www.companyvakil.com/terms-of-service">company’s agreement</a>. It sets out the responsibilities, rights, obligations and liabilities of every founder.
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why Founder Agreement Is Needed</b></h3>
					<p>It is essential to enter into such agreements to solve issues in case any difficulty arises. In absence of an agreement to this effect, one partner may walk away and use 
					</p>
					<p>Knowledge of the business and know-how for competition. </p>
					<p>One may also get into a situation where one partner takes a back step and just reap the benefits of hard labour of the other partner. </p>
					<p>None of these positions are favourable for the business and are undesirable. Thus if one does not engage in future planning, he/she might end up jeopardising the business even before it starts. </p>
					<h3 class="text-blue upper text-center m-t-5"><b>Founder Agreement PROCESS</b></h3>
					<p>
					    <ul>
							<li>The responsibilities and roles of each co-founder are to be established to have a well-functioned management system. </li>
							<li>Allocation of ownership of new enterprise amongst founding team. Upfront splitting up of equity between the founders is imperative to ensure that there are no hurt feelings or misunderstandings after things come into play and this exercise is to be nailed down very carefully.  </li>
							<li>Implementation of terms for market vesting for all founders’ equity so that future planning can be done.</li> 
							<li>When co-founders start reiterating an idea and cone up with a business plan or start developing and building a platform or a product, intellectual property (IP) is created. It is necessary to ensure that whatever developments are done in IP do not belong to an individual but the entity.</li>
						</ul>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="section3" id="documents">
			<div class="container">
				<div class="section_mgn">
					<div class=" text-center text-white m-b-100">
						<?php if(!empty($meta['section3']) && $meta['section3']!='<p>&nbsp;</p>'){ echo $meta['section3']; ?>
						<?php }else{ ?>
						<h3 class="upper"><b>documents required</b></h3>
						<h4> All the Documents are required only in scanned form, you can attach the document in the form after payment or email it to us on documents@companyvakil.com . Feel free to get in touch for any query.</h4>
						<?php } ?>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-3"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Founder Agreement Sheet"></div>
								<p class="m-b-10"><b>Information sheet</b></p>
								<p class="card-body">You will be asked to fill it after making payment or email it to us</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-3"></div>
					</div>

				</div>
			</div>
		</div>
		<div class="section4">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>what will you get?</b></h3>
					<div class="row">
						<div class="col-md-2 col-sm-12"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Certificate of Founder Agreement"></div>
								<p class="m-b-10"><b>Founders Agreement</b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/rubber-stamp.png" alt="Rubber Stamp"></div>
								<p class="m-b-10"><b>4 free reviews and changes as per your need.</b></p>
							</div>
						</div>
						<div class="col-md-2 col-sm-12"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="section5">
			<div class="container">
				<div class="section_mgn">
					
					<h3 class="text-white upper text-center m-b-100"><b>total time taken</b></h3>
					
					<div class="frst-timeline frst-timeline-style-7 frst-alternate frst-date-opposite">
		                <div class="frst-timeline-block frst-odd-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">2-3 days</span>
		                            <h2>Founder's Agreement</h2>
		                        </div>
		                        
		                    </div>
		                </div>
		            
		            </div>
				</div>
			</div>
		</div>
		<div class="section6">
			<div class="container">
				<div class="section_mgn">
					<?php if(!empty($meta['section4']) && $meta['section4']!='<p>&nbsp;</p>'){ echo $meta['section4']; ?>
					<?php }else{ ?>
					<h3 class="text-blue upper text-center"><b>About CompanyVakil </b></h3>
					<p>We are India`s one stop tech legal registration platform aimed on making legal registrations efficient and affordable to end user, i.e. individuals, entrepreneurs or business owners. </p>
					<p>CompanyVakil with the help of technology and experts such as lawyers, Chartered accountants, company secretary makes registration error-free and seamless.</p>
					<p>We provide variety of services such as Company registration, <a href="https://www.companyvakil.com/trademark-registration">trademark</a> registration, <a href="https://www.companyvakil.com/copyright-registration">copyright</a>, <a href="https://www.companyvakil.com/MSME-registration">ssi registration</a>, GST registration, <a href="https://www.companyvakil.com/import-export-code">Import Export Code Registration</a>, <a href="https://www.companyvakil.com/patent-registration">Patent Registration</a>, <a href="https://www.companyvakil.com/trademark-renewal-and-assignment">trademark renewal</a> etc. Get Founder agreement format or sample from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai and other cities in India.
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose CompanyVakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At companyvakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

					<p><b>Money Back Guarantee –</b> CompanyVakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through CompanyVakil we try to make the process of registration as convenient and seamless as possible. With options like <a href="https://www.companyvakil.com/search/trademark">trademark</a> and <a href="https://www.companyvakil.com/search/company">company search</a> bar it is a breeze for a user to search the right name for their company.</p>

					<p><b>Customer redressal –</b> We at CompanyVakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					
					<h3 class="text-blue upper text-center m-b-100"><b>frequently asked questions</b></h3>
					<div>
						<h4><u>Founder's Agreement</u></h4>
						<h4>What is a Founder’s Agreement?</h4>
						<p>It is an agreement that gives an outline of various roles and responsibilities of the founding members of a Company, the amount of equity vested in it and the ownership of intellectual Property formed by them plus their roles and responsibilities. It even takes in consideration about their departure or Death.</p>
						<hr>
						<h4>Benefits of a Founder’s Agreement?</h4>
						<p>Following are the benefits of having it :-</p>
						<p>1. It Clears the Air on may matters that may be undiscussed between the co-founders
							</br>2. It gives an opportunity to early team members to discuss the important matters and clearing their doubts and having a better relationship.
							</br>3. Further on it defines the roles of all the co-founders and early team members.
						    </br>4. It leads to a good understanding amongst the founding members.
						</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		