				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>Terms of service</h1> 
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>A necessity for every business providing services specially websites.</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>100% online process </h4>
									<p>Get Terms of Service drafted without stepping out of your house. Email us the required documents and let us do the rest. </p>
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
					<h3 class="text-blue upper text-center"><b>TERMS OF SERVICE</b></h3>
					
					<p>An <a href="https://www.companyvakil.com/terms-of-service">agreement of Term of Service</a> is used in almost every kind of mobile app or website that one is developing such as Android apps, blogs, or simple websites. It lays down guidelines and rules that are to be followed by its visitors or users to get benefit of a mobile app or a website. It is not required in law that one has to sets general rules and guidelines in the agreement for his website, mobile app etc. Get agreement of Term of Service from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil. </p>

					<h4>WHAT IS TERM OF SERVICE</h4>
					<p>It is a legal agreement that must be agreed to by the users to access or use a website or an app. It is the same as a Terms of Use or a Terms and Conditions agreement and is also abbreviated as ToS or TOU and TOS.</p>
					
					<h3 class="text-blue upper text-center m-t-5"><b>TERM OF SERVICE PROCESS</b></h3>
					<p>
						<ul>
							<li>It is important to have such agreement but one needs to keep in mind that these are legal agreements and are enforceable. Terms of Services that can be made enforceable is dependent on one’s mobile app, website and a lot of other factors including one’s app/website design, business model, etc. </li>
							
							<li>It depends on what one is interested to cover or on what he wants to put a ban, industry in which one operates, his business model and on all these basis Terms of Service may exclude or include more rules. </li>
							
							<li>If many third parties are involved in one’s mobile app or website making it complex, one can split the legal agreements to make users understand well the agreements with which they are bound. 
							
							</li> 
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>WHY TERM OF SERVICE IS NEEDED</b></h3>
					<p>Agreements of this kind enables the service providers to set important guidelines for their customers/ users/ visitors irrespective of the kind of medium or platform one is using such as:</p>
					<p>
						<ul>
							<li>Users can be informed about the website, the logo, its content, etc. and that it is the property of service provider and has protection of copyright laws. </li>

							<li>Users may be informed that they have the choice of disabling their account in case users create an account with them and disabling access to the website in case of any abuse such as if others spam. </li>

							<li>It enables the service providers to also set community guidelines if their mobile apps or website is used by consumers who know how to create content and share it with other users. Such guidelines may include banning users to share or upload any content that is not theirs. </li>
							<li>How users can use the content you’ve created or use the content other users created on your website/mobile app </li>
							<li>It helps in giving directions to users regarding how they have to use the content content of those providing the service or other users using the website.</li>
						</ul>
					</p>
					
					<h3 class="text-blue upper text-center m-t-5"><b>ADVANTAGES AND BENEFITS OF TERM OF SERVICE</b></h3>
					<p>Terms of service are also known as terms of use and terms and conditions are rules by which one must agree to abide in order to use a service. Terms of service can also be merely a disclaimer, especially regarding the use of websites.</p>

					<p>The Terms of Service Agreement is mainly used for legal purposes by companies which provide software or services, such as browsers, e-commerce, search engines, social media, and transport services.</p>

					<p>The terms of service agreement is a legal document that contains certain terms and conditions which are to be followed by the user using the website.</p>

					<p>The Terms & Conditions are displayed on the website and they can be seen easily as they are put up at a noteworthy section of the site.</p>

					<p>The terms of service benefits in the following ways:-</p>

					<p>
						<ul>
							<li>This makes the customers and visitors of the site aware of the legal restrictions on the use of information available on the site.</li>

							<li>This helps in restricting the use of information and any other sensitive data or details displayed on the website.</li>
							<li>It facilitates defining the privacy policy and accountability of the organization. It creates public awareness</li>
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
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Term of service agreement sheet"></div>
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
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="term of services"></div>
								<p class="m-b-10"><b>Terms of Services</b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/rubber-stamp.png" alt="Stamp term and condition"></div>
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
		                        <div class="frst-timeline-content-inner"><span class="frst-date">2-3 working days</span>
		                            <h2>Terms of Services</h2>
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
					<p>We provide variety of services such as Company registration, <a href="https://www.companyvakil.com/trademark-registration">trademark registration</a>, copyright, udhyog aadhaar (<a href="https://www.companyvakil.com/MSME-registration">MSME</a>), <a ahref="https://www.companyvakil.com/GST-registration">GST registration</a>, Import Export Code Registration, <a href="https://www.companyvakil.com/patent-registration">patent registration</a>, <a href="https://www.companyvakil.com/trademark-renewal-and-assignment">trademark renewal</a>, <a href="https://www.companyvakil.com/trademark-objection">TM Objection</a>, <a href="https://www.companyvakil.com/employment-contract">Employment Contract</a> etc.
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose CompanyVakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At companyvakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

					<p><b>Money Back Guarantee –</b> CompanyVakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through CompanyVakil we try to make the process of registration as convenient and seamless as possible. With options like trademark and company search bar it is a breeze for a user to search the right name for their company.</p>

					<p><b>Customer redressal –</b> We at CompanyVakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					<h3 class="text-blue upper text-center m-b-100"><b>frequently asked questions</b></h3>
					<div>
						<h4><u>Terms of Service & Privacy Policy</u></h4>
						<h4>What are Terms of Service Agreement?</h4>
						<p>Terms of Service Agreements mention the Conditions on which the services are being delivered, all online businesses portals need this Terms of Services to be defined.</p>
						<hr>
						<h4>What is Privacy Policy?</h4>
						<p>Every online business portal has a Privacy Policy, it defines what will be and what won’t be done with the user’s information.</p>
						<hr>
						<h4>Why are Terms of Service Agreement and Privacy Policy needed?</h4>
						<p>1. It is important to have them to place limitations on what can be done and what can’t be done with the user’s Information.
							</br>2. It is important to specify what information is collected and if its kept confidential or shared or sold to others
							</br>3. It is important to intimate your customer regarding the Terms and Condition of services they are being delivered.
						    </br>4. It is mandatory for Ecommerce Websites to have them.
						</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		