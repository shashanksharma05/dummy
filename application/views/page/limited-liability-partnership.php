				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>Limited Liability Partnership (LLP)</h1> 
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>100% online process </h4>
									<p>Get your LLP registered without stepping out of your house. Email us the required documents and let us do the rest. </p>
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
						</div>
						<div class="col-md-4 col-md-offset-2">
							<?php $this->load->view('page/contact-us'); ?>
							<div class="c_search text-white">
								<h4>Company Name availability </h4>
								<div class="main-search-wrapper full-width text-center">
									<form method="get" action="<?php echo base_url('search/company'); ?>">
										<div class="form-group has-feedback">
									      <input type="text" class="form-control" name="value" placeholder="Enter Company Name" required>
									        <span class="form-control-feedback" aria-hidden="true">
									        	<button  type="submit" class="btn btn-default" type="submit">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
									        </span>
									    </div>
										
									</form>
								</div>
								<?php if(!empty($package_detail)){ ?>
								<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-r-30">Buy Now</a>
                        		<?php } ?>
								<button type="button" class="btn btn-default" onclick="$('html, body').animate({scrollTop: $('#documents').offset().top}, 2000);">Learn more</button>
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
					<h3 class="text-blue upper text-center m-b-100"><b>Total cost with break down for Limited Liability Partnership</b></h3>
					<div class="card">
						<div>Consultancy<span class="fright">FREE</span></div><hr>
						<div>Name Availability search <span class="fright">FREE</span></div><hr>
						<div>Government Fee<span class="fright">Rs <?php echo $package_detail['packagePrice']; ?></span></div><hr>

						<?php $additional = json_decode($package_detail['AdditionalPrice'],true);
                		if(!empty($additional)){ foreach($additional as $price){ 
							if($price['price']>0){?>
						<div><?php echo !empty($price['dsc'])?$price['dsc'].' ':''; echo $price['label']; ?><span class="fright">Rs <?php echo $price['price']; ?></span></div><hr>
                		<?php } } } ?>
						<div>Professional fees  <span class="fright">Rs <?php echo $package_detail['packageFee']; ?></span></div><hr>
						<p><b>Total<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-l-30">Buy Now</a>
						<span class="fright">Rs <?php echo $package_detail['packageTotalPrice']; ?> </span></b>
						</p>

						<p><small>*Above mentioned government fees is calculated on minimum capital of Rs 1,00,000.</small><br><small>**Stamp duty Extra for States: Punjab, Kerala, Madhya Pradesh</small></p>
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
					<h3 class="text-blue upper text-center"><b>Limited Liability Partnership (LLP) Registration in India</b></h3>
					<p>A Limited Liability Partnership, popularly known as LLP has been introduced in India by way of Limited Liability Partnership Act, 2008. It combines the advantages of both, a company as well as a partnership into a single form of organization. In a LLP, one partner is not liable for another partner’s misconduct or negligence; this being an important difference from that of an unlimited partnership. It is an alternative corporate business which provides the benefits of limited liability of a company, but allows its members the flexibility of organising their internal management on the basis of a mutually arrived agreement, as is the case in a partnership firm. Register LLP company from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, coimbatore, patiala, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, chennai etc with Companyvakil. 
					</p>
					<p>All partners in a LLP have limited liability whereas in a traditional partnership firm the partners have unlimited liability.</p>
					<p>Low registration fee and easy maintenance makes LLP a first choice for many of the small businesses in India.</p>
					<p>A LLP is easy to establish and its registration process is quite flexible as such procedure does not impose detailed legal and procedural requirements. Also the process of registration of a LLP is quick as compared to that of a Company.</p>
					<p>However, a minimum of two partners is a must to form a LLP. The process of registration is initiated online by the partners. They need to file all the documents online. Such documents include PAN Card/ID Proof of the Partners, Address proof of the registered office of the LLP, Address proof of the partners, etc.</p>
					<p>Such form of partnership is best suitable for <a href="https://www.companyvakil.com/MSME-registration">small and medium sized enterprises</a>.</p>
					<p>The detailed registration procedure is explained further.</p>

					<h3 class="text-blue upper text-center m-t-5"><b>Reasons to register for Limited Liability Partnership LLP Registration</b></h3>
					<p>
					    <ul>
							<li><b>Low cost of Registration</b> - Firstly, registration and formation of a Limited Liability Partnership involves very low costs and expenses as compared to that of a company or a traditional partnership firm. </li>
							<li><b>Flexible Structure of business</b> - Limited Liability Partnership is the most flexible form of business where the partners frame the rules for its governance.</li>
							<li><b>Perpetual Succession for partners</b> - The registration of <a href="https://www.companyvakil.com/limited-liability-partnership">LLP</a> gives it a separate status of a legal entity, i.e. a legal entity separates from its partners. So, this gives the LLP perpetual succession, i.e. perpetual existence of LLP irrespective of changes in partners. </li>
							<li><b>No Minimum Capital Requirements</b> - For the purpose of registration, there is no such minimum capital requirement for a LLP. It is an internationally renowned form of business in comparison to a Company and it can be easily registered online.</li> 
							<li><b>No Partner limit</b> - There are no restrictions as to maximum number of partners in a LLP, so even if there are 2 partners in the LLP, they can register it successfully.</li>
							<li><b>Government Subsidies</b> - Registering the LLP helps in getting certain subsidies and reliefs from the government like tax exemption. Unlike a company, no tax is levied on profit distributed to the partners.</li>
							<li><b>Limited Liability of Partners</b> - Selecting LLP as a mode of business, limits the liabilities of the partners of the LLP i.e. the personal assets of the partner are not exposed except in case of fraud. No partner in a LLP shall be liable for the misconduct of the other partner(s), i.e. each partner is protected against the actions of the other partners which results in a lawsuit. </li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Process for LLP Registration in India </b></h3>
					
					<p>
						<ul>
							<li><b>Acquire DPIN, Acquire DSC </b><br>DPIN stands for Designated Partner Identification Number. For obtaining DPIN for the partners, DSC – Digital Signature Certificate is required. After obtaining the DSC of the proposed partner, one can acquire the DPIN. </li>
							<li><b>Register DPIN, DSC with LLP</b><br>After obtaining the DPIN and DSC, it needs to be registered immediately. This embarks the registration of the proposed LLP. </li>
							<li><b>Check Name Availability </b><br>Deciding an appropriate name for the business plays a crucial part of formation of LLP. So, an application for reservation of name is to be submitted to the Ministry of Corporate Affairs. Further, the application shall be scrutinized by the Registrar of Companies (ROC). Once the name selected is available then such application is approved. In case such name is registered by any other firm then selection of another name is to be made and submitted within a stipulated time of 60 days of notice of the rejection of name.</li>
							<li><b>Download LLP Forms </b><br>After the approval of the name and all the necessary verification, one can download the LLP forms online. The form needs to be duly filled along with the submission of relevant documents including include PAN Card/ID Proof of the Partners, Address proof of the registered office of the LLP & its partners etc. </li>
							<li><b>File electronically </b><br>The actual providing of information submission of documents takes place during filing for incorporation. The partners need to submit such information and documents within the prescribed time limit. </li>
							<li><b>Track Status</b><br>It takes time to process the application due to a number of application requests with the ROC. So, one needs to be patient enough to get their application processed. For this purpose, applicants are provided with the facility to track the status of their application online. </li>
							<li><b>Receipt of Certificate</b><br>Once the application is accepted, the Registrar issues the Certificate of Incorporation. After such issue, the LLP shall be considered to be registered.</li>
							<li><b>LLP is ready to function </b><br>It takes time to process the application due to a number of application requests with the ROC. So, one needs to be patient enough to get their application processed. For this purpose, applicants are provided with the facility to track the status of their application online. </li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Minimum Requirements for Limited Liability Partnership LLP Registration </b></h3>
					<p>
						<ul>
							
							<li><b>Two Partners</b><br>A minimum of two partners are required for the registration of the LLP. </li>
							<li><b>Designated Partners </b><br>Out of all the partners, two partners must be the designated partners.</li>
							<li><b>Registered Office </b><br>The registered office of the proposed LLP must be situated in India.</li>
							<li><b>Designated Partner to be resident of India  </b><br>Out of the designated partners of the proposed LLP, at least one of them must be a resident of India possessing all the valid ID Proof for the purpose of obtaining DPIN. </li>
							<li><b>No Capital Requirement </b><br>For the purpose of formation of a LLP, there is no such minimum capital requirement as compared to a Company. </li>
							<li><b>Documents </b><br>Necessary documents are required for the purpose of registration. Such documents are PAN Card/ID Proof of the Partners, Address proof of the registered office of the LLP, and Address proof of the partners. </li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Advantages & Benefits of LLP Company Registration</b></h3>
					
					<p>
						<ul>
							<li><b>Low Formation and Registration charges </b><br>The cost and expenses of incorporation of a LLP is less as compared to those of a Company. The registration fees is also economic. Therefore it is easy to establish a LLP. </li>
							<li><b>No minimum number of partners </b><br>There are no restrictions as to maximum number of partners in a LLP, so even if there are 2 partners in the LLP, they can register it successfully. 
							</li>
							<li><b>No minimum capital requirement </b><br>For the purpose of formation of a LLP, there is no such minimum capital requirement as compared to a Company. A LLP can be formed with the least contributed capital. Whereas in case of a Company there are minimum mandatory requirements.</li>
							<li><b>Certain Tax exemptions </b><br>Registering the LLP helps in getting certain subsidies and reliefs from the government like tax exemption. Unlike a company, no tax is levied on profit distributed to the partners. </li>
							<li><b>Separate Legal Entity  </b><br>Registration of the LLP gives it a separate legal status and it is treated as a separate person in the eyes of law. This means that the LLP has a separate legal existence from that of its partners. </li>
							<li><b>Flexibility </b><br>The formation of LLP ensures flexibility in its incorporation, operations and management without imposing detailed legal and procedural requirements. </li>
							<li><b>Perpetual Succession</b><br>Even if the partners of the LLP keep changing, the LLP exists. </li>
							<li><b>Internationally renowned </b><br>LLP is an internationally renowned form of business in comparison to a Company. </li>
							<li><b>Limited Liability of Partners </b><br>The partners of LLP have limited liability which means that the personal assets of the partners are not exposed or liable to be sold off during any contingency except in case of fraud by the partner. </li>
						</ul>
					</p>

					<h3 class="text-blue upper text-center m-t-5"><b>Disadvantages of Limited Liability Partnership Registration</b></h3>
					
					<p>
						<ul>
							<li><b>No Option to raise Funds </b><br>A LLP unlike a Company cannot raise funds from the public. It cannot take external commercial loans and borrowings from its foreign partners, foreign investors or any foreign institution. </li>
							<li><b>No separation of management </b><br>In a LLP, there is no separation of management from its owners. The owners i.e. the partners form the management body of the LLP which makes the decision making process and operations difficult. 
							</li>
							<li><b>Limitation as to formation </b><br>A minimum of two partners are required for the formation of a LLP. Unlike a sole proprietary where a single person is the owner, a LLP requires minimum two. Also, amongst the two partners, one should be a resident of India which means that any two foreign persons cannot form a LLP. </li>
							<li><b>Transfer of Ownership </b><br>In a LLP, the transfer of ownership is a very time consuming and a complicated task as ownership rights are not transferable easily without obtaining consents of all partners of the LLP. So, for the same, a partner has to obtain consent of all the other partners. 
							</li>
							<li><b>Foreign Partners </b><br>In order to form a LLP, at least one partner must be a resident of India. These criteria disallows the fact that no two foreign partners can form a LLP in India.
							</li>
							<li><b>Quantum of Penalties </b><br>Even though there are limited compliances for a LLP, the failure to comply results in stricter and higher penalties.</li>
							<li><b>Restricted access to Capital Markets </b><br>LLPs cannot get its shares listed in any stock exchange through initial public offerings. With this restriction, limited liability partnerships may find it difficult to attract outside investors to buy the shares. 
							</li>
						</ul>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="section3" id="documents">
			<div class="container">
				<div class="section_mgn">
					<div class="text-white m-b-100">
						<?php if(!empty($meta['section3']) && $meta['section3']!='<p>&nbsp;</p>'){ echo $meta['section3']; ?>
						<?php }else{ ?>
						<h3 class="upper text-center"><b>Documents Required for Limited Liability Company</b></h3>
						<div class="text-justify"><h4> All the Documents are required only in scanned form, you can attach the document in the form after payment or email it to us on documents@companyvakil.com . Feel free to get in touch for any query.</h4>
						<p>
							<ul>
								<li><b>PAN Card/ID Proof of the Partners </b><br>PAN Card copy of the proposed Partners of the LLP IS required for the registration of the LLP. PAN or Permanent Account Number is a unique identification number issued by the Department of Income Tax in India. <br><br>Along with the PAN Card copy, the Partners must also submit an address proof and residential proof.  </li>
								<li><b>Address proof of the registered office </b><br>The address proof of the registered office of the LLP is an important document. In addition to submitting identity, address and residential address of the Partners, proof must be provided to validate the registered office address of the LLP. The following documents must be submitted as an address proof of registered office: 
									<ul>
										<li>Utility Bill of the proposed Registered Office of the LLP </li>
										<li>No-Objection Certificate from the Landlord </li>
										<li>Rental Agreement Copy between the LLP and the Landlord </li>
									</ul>
								</li>
								<li><b>Address proof of the partners </b><br>The address proof submitted must have the name of the Partner as mentioned in the PAN Card. An address Proof includes Electricity Bill, Passport, Aadhar Card, Driving License, Passport, Telephone Bill, Bank statement etc. </li>
							</ul>
						</p>
						</div>
						<?php } ?>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/office.png" alt="No Objection Certificate NOC for LLP Registration"></div>
								<p class="m-b-10"><b>Registered Office Proof</b></p>
								<p class="card-body">No Objection Certificate (NOC) from the owner, Utility bill (should not be older than two months) and Notarized Rent agreement (in case of rented property)/ Registry Proof or House Tax Receipt (in case of owned property)</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/address-proof.png" alt="Address proof for  LLP Registration"></div>
								<p class="m-b-10"><b>Address Proof</b></p>
								<p class="card-body">Latest Bank statement/ Utility bill in the name of director which should not be older then two months</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/id-proof.png" alt="ID Proof for LLP Company"></div>
								<p class="m-b-10"><b>ID Proof and Passport size photo</b></p>
								<p class="card-body">Scanned copy of PAN Card of all directors and Aadhar card/ Voter ID/ Passport/ Driving License and Latest passport size photograph</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="section4">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>what will you get?</b></h3>
					<div class="row">
						<div class="col-md-2 col-sm-6"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/dsc.png" alt="Digital Signature for Directors"></div>
								<p class="m-b-10"><b>2 DSC (Digital Signature Certificate) </b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/pan-number.png" alt="PAN Number"></div>
								<p class="m-b-10"><b>PAN and TAN Number</b></p>
							</div>
						</div>
						<div class="col-md-2 col-sm-6"></div>
					</div>
					<div class="row m-t-5">
						<div class="col-md-2 col-sm-6"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Incorporation Certificate"></div>
								<p class="m-b-10"><b>Incorporation Certificate</b></p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/rubber-stamp.png" alt="Director Identification Number"></div>
								<p class="m-b-10"><b>DPIN (Designated Partnership Identification number)</b></p>
							</div>
						</div>
						<div class="col-md-2 col-sm-6"></div>
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
		                        <div class="frst-timeline-content-inner"><span class="frst-date">1 day</span>
		                            <h2>DIGITAL SIGNATURE CERTIFICATE (DSC)</h2>
		                            <p>DSC is an electronic online signature issued by licensed certifying authorities. All the proposed directors of the company are required to apply for the digital signature (DSC), it is necessary for digitally signing the electronic incorporation documents.</p>
		                        </div>
		                        
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-even-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">1 day</span>
		                            <h2>DESIGNATED PARTNERSHIP IDENTIFICATION NUMBER (DPIN)</h2>
		                            <p>DESIGNATED PARTNERSHIP IDENTIFICATION NUMBER is a unique number which is a mandatory requirement for all the partners of the LLP. Ministry of corporate affairs allots a DPIN to every partner of the LLP with a lifetime validity without which one cannot be a partner in the LLP.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-odd-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">5 to 7 days</span>
		                            <h2>NAME APPROVAL</h2>
		                            <p>Once we obtain the DIN and DSC of the directors, a list of 1 to 6 proposed names of the company will be will be submitted to MCA for approval. We will conduct a prior search for your name availability through our unique search portal. We get your company name approved subject to availability and naming guidelines. </p>
		                        </div>
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-even-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">5 to 7 days</span>
		                            <h2>INCORPORATION DOCUMENTS</h2>
		                            <p>After the stage of Name Approval, we draft the required Papers and LLP Agreement for your Limited Liability Partnership (LLP). All the incorporation documents need to be submitted with the prescribed e-form. Once all the documents are duly verified and approved by the government, the certificate of incorporation is emailed to you. During which, we will apply for PAN and TAN of your LLP.</p>
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
					<p>We provide variety of services such as <a href="https://www.companyvakil.com/private-limited-company">Company registration</a>, <a href="https://www.companyvakil.com/trademark-registration">trademark registration</a>, copyright, udhyog aadhaar (MSME), <a href="https://www.companyvakil.com/GST-registration">GST registration</a>, Import Export Code Registration etc. Register LLP Registration from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil.
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose CompanyVakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At companyvakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

					<p><b>Money Back Guarantee –</b> CompanyVakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through CompanyVakil we try to make the process of registration as convenient and seamless as possible. With options like trademark and company search bar it is a breeze for a user to search the right name for their company.</p>

					<p><b>Customer redressal –</b> We at CompanyVakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					<h3 class="text-blue upper text-center m-b-100"><b>frequently asked questions</b></h3>
					<div>
						<h4><u>LLP</u></h4>
						<h4>What is an LLP?</h4>
						<p>LLP i.e. Limited Liability Partnership is a is a Mix of Both Private Limited Company and Partnership Firm. A Partner’s Liability is Limited by the Amount of his Share into the LLP. <br>A Partner is not Liable for other Partner’s Default.</p>
						<hr>
						<h4>How many Partners are required to Incorporate a LLP?</h4>
						<p>Minimum 2 Partners are required and there is no Maximum Limit of Partners defined to incorporate an LLP.</p>
						<hr>
						<h4>Is a Limited Liability Partnership apt for Raising Funding?</h4>
						<p>No, LLP is not the right Structure for raising Funding from Private Investors. As Investors prefer a Stake via Equity of a Company rather than being a Partner into an Organisation. 
						</p>
						<hr>
						<h4>What is a DSC i.e. a Digital Signature Certificate?</h4>
						<p>DSC is Considered as an Identity of a Partner, its an Electronically Encrypted Signature unique to a particular person and has been made Mandatory by MCA for the Partners of an LLP.</p>
						<hr>
						<h4>Minimum Capital Required to Incorporate an LLP ?</h4>
						<p>There is No Minimum Capital requirement for an LLP, an LLP can be incorporated with any amount of Capital as decided amongst the Partners.</p>
						<hr>
						<h4>Who can be a Partner in an LLP?</h4>
						<p>A person should be 18 Years or above in age. No Limitation on their Residency and Citizenship. Foreign Nationals and foreign Companies can also form an LLP in India Provided there is atleast one Partner who is an Indian Resident.</p>
						<hr>
						<h4>Can an LLP be converted into a Pvt Ltd. Company?</h4>
						<p>Currently No, an LLP can’t be converted into a Pvt. Ltd. Company as they are governed by 2 different Acts and both of them are silent on this Matter, but Vice-Versa is possible.
						</p>
						<hr>
						<h4>Can a Partnership Firm be converted into an LLP?</h4>
						<p>Yes, a Partnership Firm can be converted into an LLP and its very advantageous to do so, as the liability of the Partners become Limited to their Share Amount.</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
