				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>Trademark Registration in India</h1> 
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>100% online process </h4>
									<p>Get your Trademark registered without stepping out of your house. Email us the required documents and let us do the rest.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
								    <h4>Company Vakil Guarantee </h4>
								    <p>We take pride in our error free platform aimed on satisfying our clients, if you are still not satisfied, we refund your money.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
								    <h4>Trademark Status Update </h4>
								    <p>With Company Vakil, you receive an automated update at every step of your trademark registration.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>Most efficient Registration Platform </h4>
									<p>At Company Vakil your registrations are handled by experts at every stage.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>Making Trade Mark registrations affordable</h4>
									<p>At Company Vakil we keep everything transparent and affordable including cost – No extra fees.</p>
								</div>
							</div>
							<?php } ?>
							<div class="c_search">
								<?php if(!empty($package_detail)){ ?>
								<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-r-30">Buy Now</a>
                        		<?php } ?>
								<button type="button" class="btn btn-default" onclick="$('html, body').animate({scrollTop: $('#documents').offset().top}, 2000);">Learn more</button>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<?php $this->load->view('page/contact-us'); ?>
							<div class="c_search text-white">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section2">
			<div class="container">
				<div class="section_mgn">
				<?php if(!empty($package_detail)){ ?>
					<h3 class="text-blue upper text-center m-b-100"><b>TOTAL Trademark Registration COST BREAKDOWN</b></h3>
					<div class="card">
						<h4 class="text-center">Before we Submit your Trademark Registration application, we do a Detailed Brand Name Check and inform you of any direct conflicts so that your brand has a better chance of succeeding</h4>
						<div>Consultancy<span class="fright">FREE</span></div><hr>
						<div>Trademark Name Search<span class="fright">FREE</span></div><hr>
						<div>Government Fee for Individuals and startups <span class="fright">Rs <?php echo $package_detail['packagePrice']; ?>*</span></div><hr>
						<?php if ($package_detail['packageFee'] != 0) { ?>
						<div>Professional fees  <span class="fright">Rs <?php echo $package_detail['packageFee']; ?>***</span></div><hr>
						<?php } ?>
						<p>
							<b>Total<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-l-30">Buy Now</a>
							<span class="fright">Rs <?php echo $package_detail['packageTotalPrice']; ?>**</span></b>
						</p>

						<p><small>*Including stamp duty. For companies government fees is Rs <?php echo $package_detail['packagePrice']; ?> </small><br><!-- <small>*** Professional Fees for Companies is Rs <?php //echo $package_detail['packageFee']; ?></small><br> --><small>** for bulk trademarks please email – info@companyvakil.com</small></p>
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
					<h3 class="text-blue upper text-center"><b>TRADEMARK REGISTRATION IN INDIA</b></h3>
					<h4> WHAT IS TRADEMARK REGISTRATION ONLINE?</h4>
					<p>“Trademark” is a sign used by businessmen or traders to differentiate their services and goods from others. A sign may include anything from a label, slogan, title, color, word or a heading etc. It indicates the origin of trade and is an effective tool of marketing for highlighting the services and goods of a trader. In India, for registration of a sign, it should also be capable of being expressed through graphic representation that includes pictures, words or both. Other significant factors for registration of a trademark in our country are as follows :</p>
					<p>Trademark registration are legally recognized and derive their legitimacy from the Trade Marks Act 1999.</p>

					<p>The Act allows for registration of trademarks that are used or that will be used by an owner to indicate his identity and draw a connection between him and his goods through these marks and confers the right to exclusive use of such marks.</p>

					<p>A Trade mark is registered generally for a time period of Ten years but is renewable according to the rules of Trademarks Act, 1999 after payment of a required sum of money that is prescribed.</p>

					<p>It is necessary to renew a trademark by filing an application for the same within six months from date of expiry of the last registration of the mark.</p>

					<p>Register your trademark in India with Help of Company Vakil’s Expert Trademark Attorneys</p>

					<h3 class="text-blue upper text-center m-t-5"><b>REASONS to register TRADEMARK online</b></h3>
					<p>There are many reasons for getting a Trademark Registration Online:-</p>
					<p>
						<ul>
							<li>It helps in identification of an owner and the services and goods offered by him.</li> 
							<li>It facilitates in advertisement of services and goods and generates an image of these services and goods that leads to more purchase.</li>
							<li>It is a symbol of affiliation and loyalty and may promote consumers to build a particular lifestyle.</li> 
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>PROCEDURE FOR Online TRADEMARK REGISTRATION</b></h3>
					<p>It is recommended to engage in a trademark research concerning relevant classes before applying for its registration to avoid the possibility of another similar or identical trademark that might have been registered for which an application has been submitted.</p>

					<p>The person claiming Ownership has to file an application for Online Trademark Registration or file it physically at the Trademark Registry’s office that is closest to the place of business operation. </p>

					<p>The registrar examines the application and ascertains the distinctiveness of it by ensuring it is not in conflict with the pending or already registered trademarks and issues an examination report.</p>

					<p>The trademark Journal publishes the application before or after its acceptance.</p>

					<p>A third party may oppose the registration within a period of three months which might be extended maximum to one month.</p>

					<p>The registrar has to register trademark in a case where the opposition decides in applicant’s favor.</p>
					<p>The registrar has to issue a Trademark Registration Certificate to the applicant on registering the Trademark.</p>
					
					<h3 class="text-blue upper text-center m-t-5"><b>REQUIREMENTS for e-filing TRADEMARK</b></h3>
					<p>Applicant has to furnish his Full name and address in the application and mention other details such as specifying whether an Individual i.e. a Proprietorship / Small Business / Startup or a Partnership / LLP / OPC / Pvt Limited and then giving a description of goods & services, with their respective Trademark Class Nationally and Internationally is given. Other specifications to be included is what type of Trademark Application is being done i.e. is it for a Wordmark, Device (i.e. a Logo), 3D mark, a Figure, A character, a Sound or a Color identified by the Goods and Services.</p>

					<h3 class="text-blue upper text-center m-t-5"><b>TRADEMARK REGISTRATION COST in India</b></h3>
					<p>
						<ul>
							<li>
							For filing new applications there are prescribed forms depending on the nature of application such as Form TMA, TM-P, TM-M, TM-R etc. Fees: is Rs.2,500/- onwards</li>

							<li>For filing form TM-0 for a notice opposing the published application in Trade Marks Journal. Fees: Rs. 2,500/- onwards</li>

							<li>For filing form TM-R to renew a trade mark which is recognized. Fees: Rs.9, 000/- For filing form for surcharging a belated renewal. Fees. Rs 5,000/-</li>

							<li>For filing form for restoration of a removed mark Trademark Government Fees: 5,000/-</li>
							<li>For filing form TM-M to apply for a registered trade mark’s rectification Fees: Rs. 3,000/-</li>
							<li>For giving details of entries in Register Fees: Rs. 900/-</li>
							<li>Preliminary advise of the Registrar as to the Trademark registration of a mark .Fees: Rs.900/-.</li>
							<li>For filing of Form for requesting copyright search and issuance of certificate. Fees:, 5,000/--</li>
							
						</ul>
					</p>

					<h3 class="text-blue upper text-center m-t-5"><b>BENEFITS AND ADVANTAGES OF TRADEMARK REGISTRATION</b></h3>
					<p>A registered trademark is useful for businesses and also benefits the consumers in a number of ways such as:</p>
					<p>
						<ul>
							<li><b>Right to Exclusive use</b><br>It enables the proprietor to exclusively use the mark for his goods and services. In case his trademark is used in an unauthorized manner, he retains the right to sue in case of infringement of his right and powerful remedies are granted to him by law.</li>
							<li><b>Right to Hypothecation of a Registered TM</b><br>One can pledge a registered trademark as security to avail loan facilities.<br>Right to enjoyment of Intangible Property<br>it symbolizes and creates an intangible property that is identifiable in the eyes of law. It indicates the goodwill or reputation of a product.</li>
							<li><b>Right to License a Registered Trademark</b><br>A license of trademark is capable of being recorded on trademark register. This enables the licensee to imitate legal proceedings in case his rights are infringed upon.</li>
							<li><b>Right to Assign a Registered Mark</b><br>One can transfer it, unlike a common law trademark, which is transferable only with the business because it derives its goodwill from the business and the two are not severable.</li>
							<li><b>Right to deter the Mark</b><br>It acts as a deterrent to other businessman to not use similar trademarks in connection to services and goods offer by its original owner.</li>
							<li><b>Useful in proceedings</b><br>Registered trade mark may be used an evidence for validation of proprietorship rights attained by registration.</li>
							<li><b>Right to use the word Registered or “R”</b><br>It also helps the consumers to make a rational decision while buying goods by searching for good brand names of their choice and avoiding the ones that gave them a bad experience.</li>

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
						<h3 class="upper"><b>DOCUMENTS REQUIRED FOR TRADEMARK REGISTRATION In India</b></h3>
						<div class="text-justify"><h4>All the Documents are required only in scanned form, you can attach the document in an online form or email it to us on documents@companyvakil.com. Feel free to get in touch for any query.</h4>
						<p>
							<ul>
								<li>Name and Copy of your Brand’s Logo / Mark ( if you are getting a trademark on logo ) </li>
								<li>Power of Attorney / Authorization Form : TM-48 ( We will provide it to you )</li>
								<li>Information Sheet to be filled with basic Information required for efiling of Trade Mark Application ( We will provide the information sheet )</li>
								<li>An Affidavit, in case the name or mark to be trademarked is already being commercially used by you or your business. </li>
								<li>In case of International Trade marks – A certified copy by applicant stating its use etc.</li>
								<li>If an application for Trade Mark has already been made in other countries, a list of these countries with the date is required.</li>								
							</ul>
						</p>
						</div>
						<?php } ?>
					</div>
					<div class="row">
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
					</div>

				</div>
			</div>
		</div>
		<div class="section4">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>WHAT Do YOU GET after online trademark application in india?</b></h3>
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
					</div>

				</div>
			</div>
		</div>
		<div class="section5">
			<div class="container">
				<div class="section_mgn">
					
					<h3 class="text-white upper text-center m-b-100"><b>TIME TAKEN in trademark registration process</b></h3>
					
					<div class="frst-timeline frst-timeline-style-7 frst-alternate frst-date-opposite">
		                <div class="frst-timeline-block frst-odd-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">2 to 4 working hours</span>
		                            <h2>DETAILED TRADEMARK CHECK</h2>
		                        </div>
		                        
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-even-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">3 working days</span>
		                            <h2>TRADEMARK APPLICATION FILING ( TM )</h2>
		                        </div>
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-odd-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">12 to 24 month</span>
		                            <h2>TRADEMARK REGISTRATION – Indian Government Process <span style="font-size:24.0pt;color:red">®</span></h2>
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
					<h3 class="text-blue upper text-center"><b>About Company Vakil </b></h3>
					<p>We are India`s one stop tech legal registration platform aimed on making legal registrations efficient and affordable to end user, i.e. individuals, entrepreneurs or business owners. </p>
					<p>Company Vakil with the help of technology and experts such as lawyers, Chartered accountants, company secretary makes registration error-free and seamless.</p>
					<p>We provide variety of services such as Company registration, trademark registration, trademark renewal, SSI Registration, GST registration, IEC Code Registration etc. Get your TM Registered in India with help of Company Vakil experts today. 
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose Company Vakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At Company Vakil all your TM Registration queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your Mark gets Registered in India.</p> 

					<p><b>Money Back Guarantee –</b> Company Vakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with our Trademark Filing Consultancy we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through Company Vakil we try to make the process of Online TM Registration as convenient and seamless as possible, with tools like Free trade mark and company check available on our website.</p>

					<p><b>Customer redressal –</b> We at Company Vakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					<h3 class="text-blue upper text-center m-b-100"><b>FREQUENTLY ASKED QUESTIONS</b></h3>
					<div>
						<h4><u>Trademark Registration</u></h4>
						<h4>What can be applied for a Trademark Registration?</h4>
						<p>You can Apply for Trademark Registration of a Word, Device (Logo), Symbol, Design, Shape, Label, Combinations of Colors that can be represented on a Paper Graphically and Specific Tunes or Sounds. Everything stated above should be unique and distinctive to the Trademarks of others.</p>
						<hr>
						<h4>What cannot be Trademarked?</h4>
						<p>When a Trademark is Deceptively similar or identical to an existing Registered or Applied Trademark, that Trademark can’t be Registered.</p>
						<hr>
						<h4>What are Trademark Classes?</h4>
						<p>There are total of 45 Trademark Classes defined by the Trademark Registry, they are a division of various types and forms of Business Sectors having various goods and services and a Trademark is to be applied and register in your work Specific class only.
						</p>
						<hr>
						<h4>What does TM symbol on an Applied Trademark Stands for?</h4>
						<p>The moment a Trademark is applied, the applicant is gets a Provisional Trademark i.e. TM next to their Trademark word, Device etc. its considered as a warning to the potential infringers that the Trademark is under the Process of Registration.</p>
						<hr>
						<h4>What does ® Symbol on a Trademark Stands for?</h4>
						<p>® Symbol on a Trademark is used when the Trademark Application has been approved and got registered with the Trademark Registry. It is a Registered Trademark in India.</p>
						<hr>
						<h4>What is a Trademark Name Availability Check?</h4>
						<p>Trademark Name Check is a pre requisite before filling a name in trademark application, it is important to check if the name you wish to trademark is not already registered in the database of trademark registry. We at company Vakil provide a free search tool for it.</p>
						<hr>
						<h4>How Accurate is your Trademark Information?</h4>
						<p>Our Trade-Mark Data gets updated every week for an accurate trademark registration in India, Our database is in sync with the database of trademark registry of India,
						</p>
						<hr>
						<h4>There is already a Similar Trademark applied in my relevant TM Class?</h4>
						<p>Not an issue we can create a Unique Combination of words and Logo for the same and apply it in your relevant class we call it a Composite Mark Strategy, for any queries you can contact us.</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		