				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>One Person Company Registration</h1> 
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>100% online process </h4>
									<p>Get your company registered without stepping out of your house. Email us the required documents and let us do the rest. </p>
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
									<h4>Most efficient Registration Platform</h4>
									<p>At CompanyVakil your registrations are handled by experts at every stage.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>Making registrations affordable and hassle free</h4>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<?php $this->load->view('page/contact-us'); ?>
							<div class="c_search text-white">
								<h4>Company Name availability </h4>
								<div class="main-search-wrapper full-width text-center">
									<form method="post" action="<?php echo base_url('search/company'); ?>">
										<div class="form-group has-feedback">
									      <input type="text" class="form-control" name="company" placeholder="Enter Company Name" required>
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
					<h3 class="text-blue upper text-center m-b-100"><b> One Person Company total cost with break down</b></h3>
					<div class="card">
						<div>Consultancy<span class="fright">FREE</span></div><hr>
						<div>Company Name Availability search <span class="fright">FREE</span></div><hr>
						<?php $additional = json_decode($package_detail['AdditionalPrice'],true);
                		if(!empty($additional)){ foreach($additional as $price){ 
							if($price['price']>0){?>
						<div><?php echo !empty($price['dsc'])?$price['dsc'].' ':''; echo $price['label']; ?><span class="fright">Rs <?php echo $price['price']; ?></span></div><hr>
                		<?php } } } ?>
						<div>Professional fees  <span class="fright">Rs <?php echo $package_detail['packageFee']; ?></span></div><hr>
						<p><b>Total<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-l-30">Buy Now</a>
						<span class="fright">Rs <?php echo $package_detail['packageTotalPrice']; ?> </span></b>
						</p>
						<p><small>*Above mentioned government fees is calculated on minimum capital of Rs 1,00,000.</small><br><small>Stamp duty Extra for States: Punjab, Kerala, Madhya Pradesh</small></p>
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
					<h3 class="text-blue upper text-center"><b>One Person Company Registration in India</b></h3>
					<p>In India, the concept of One Person Company (OPC) was presented to support the individual entrepreneurs through the introduction of the Companies Act, 2013. As the name suggests, only one member can incorporate One Person Company in India whose liability will be limited as that of private companies. </p>
					<p>A single person was not able to start a Company; previously as at least two Directors and Members are required to establish a private company whereas in a Public Company, three Directors and seven members are required. But now as per Section 62 of the Company’s Act 2013, a company can be formed with just one Director and one member. It is another form of a private company. Register a opc company from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil. </p>
					<p>For registration of one person Company, one must have an in-depth knowledge of its features and facilities. For this, one can consult the services of CompanyVakil.com. It offers services in company registration like registration of <a href="https://www.companyvakil.com/private-limited-company">Pvt. Limited Company</a>, <a href="https://www.companyvakil.com/limited-liability-partnership">LLP Registrations</a> and <a href="https://www.companyvakil.com/one-person-company">OPC Registrations</a>. Get a consultation for registration of one person company in India by arranging an appointment with CompanyVakil.com.</p>
					<p>
						<ul>
							<li><p>Introduction of the concept of One Person Company has brought a revolution in the corporate sector of the country. While incorporating an OPC, one needs to get it registered to ensure the efficiency of the company. Following are the major reasons to register the One Person company in India: </p>
								<ul>
									<li>Separate Legal Entity: One Person Company enjoys the recognition as a separate legal entity and it is considered distinct and different from it sole director and owner. </li>
									<li>Improved Credibility: By registering, the credibility of One Person Company can be improved as a corporate entity which enables the service providers to yield more projects from the potential clients. </li>
									<li>Single promoter: It is easy for the sole owner and promoter to manage and get it registered by following easy steps.</li>
									<li>Easy and Online: The registration process is quite easy, efficient, affordable, guaranteed and moreover, one can get the OPC registered online through CompanyVakil.com without any hassle. </li>
									<li>Just Rs. 8,999: It costs just Rs. 8,999 for a person who is looking for OPC registration through ComapnyVakil.com. </li>
									<li>Less Compliance: OPC Registration demands lesser compliance in comparison to Private companies and other forms of companies.</li>
									<li>Limited Liability: OPC protects the assets of the promoter by providing limited liability protection services as similar to that of private companies. </li>
								</ul>
							</li>
							<li><p>Following is the process that is followed to get the company registered as One Person Company:</p>
								<ul>
									<li><p>Obtain Digital signature certificate (DSC) - The first and the foremost step is to get the Digital Signature Certificate (DSC) of the proposed Director. It requires the following documents:</p>
									<ol>
										<li>Valid Email Id</li>
										<li>Phone Number</li>
										<li>Address Proof</li>
										<li>Aadhaar card</li>
										<li>PAN card</li>
										<li>Photograph</li>
									</ol>	
									</li>
									<li>Obtain Director Identification Number (DIN) - Once the process of Digital Signature Certificate (DSC) is completed, further is the step to apply for the Director Identification Number (DIN) of the proposed Director in the Form DIR – 3 along with the name and the address proof of the director.. </li>
									<li>Name search and finalization - While incorporating an OPC, the next step is to decide on the name of the Company. One has to file INC – 1 to get the name approval from the Ministry of Corporate Affairs (MCA). This can be done by giving six names in the order of the preference. </li>
									<li>SPICe form submission - All the documents need to be attached to SPICe MOA, SPICe Form, and SPICe AOA along with the DSC of the Director and the professional, and it will be uploaded to the MCA site for their approval.</li>
									<li>Certificate of Incorporation - Upon verification, the Registrar of Companies (ROC) issues a Certificate of Incorporation and one can commence their business after receiving a Certificate of Incorporation.</li>
								</ul>
								<p>You can avail the services of CompanyVakil.com for detailed guide and getting your One Person Company registered in a minimum time period. </p>
							</li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Minimum Requirements for One Person Company Registration </b></h3>
					<p>Following are the requirements that are needed to be complied with for starting the One Person Company.</p>
					<p>
						<ul>
							<li>It is stated that only a natural person who is the resident of India will only be eligible to act as a member and nominee of a One Person Company.</li> 
							<li>No one can be a part of two or more OPCs. A person can join only one OPC. </li>
							<li>Minimum one shareholder and one Director is required for its registration. The director and the promoter can be the same person. </li> 
							<li>One nominee is also required. </li>
							<li>The Minimum Authorised Share Capital required is to be Rs. 1 Lakhs.</li>
							<li>Director Identification Number is required for the directors and Digital Signatures are required from a promoter and a witness.  </li>
							<li>After the OPC is registered, the company will have to maintain proper books of accounts and also will have to participate in a Statutory audit of Financial Statements. Along with that, OPC will have to file a business income tax return every year before 30th September. </li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Advantages & Benefits of One Person Company </b></h3>
					<p>The chief advantage of One Person Company (OPC) is that there can only be one member to start an OPC. It is a separate legal unit proposing limited liability shied to the promoters as well it has continuity of business and easy to incorporate. Apart from enjoying a recognition and prestige as a separate legal entity, OPCs has following advantages:  </p>
					<p>
						<ul>
							<li><b>Easy Funding</b><br>OPC can generate its funds through various sources like financial institutions, angel investors, or venture capital etc. thus progressing itself towards a private limited company.</li> 
							<li><b>More opportunities due to Limited liability</b><br>One of the major advantages that One Person Company enjoys is that it has more opportunities since the liability of the OPC is limited and the individual could take more risk in business without affecting or suffering the loss of personal assets. It is the encouragement to new, young and innovative start-ups.</li>
							<li>An OPC can avail the various benefits that are being provided to the Small Scale Industries like easy funding from the bank or the lower rate of Interest on loans without depositing any security in return.</li> 
							<li> The OPC with bad credit rating may even get the loan. The credit rating of the OPC is immaterial if the rating of OPC is as per norms.</li>
							<li>The remuneration that is paid to the director will be allowable for deduction as per income tax laws. Benefits of presumptive taxation are also available to the OPCs which are subject to income tax act.</li>
							<li>The newly set-up OPC is small, micro, or medium, hence it is covered under the Enterprises Development Act, 2006 act. Thus OPC enjoys the benefits of this act as well. As per this Act, if the buyer receives his/her payment after a specified period, he is entitled to receive three times the interest on the bank rate.</li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Disadvantages of One Person Company   </b></h3>
					<p>Even if the One Person Company allows a single person to operate the company’s day to day activities, at the same time, it has several drawbacks as mentioned below. Everyone looking to incorporate One person Company must keep these limitations in mind before registration. </p>
					<p>
					    <ul>
							<li>Every One Person Company must suggest a nominee Director in its MoA and AoA who will be offered the ownership of the OPC in case of the incapacitated sole Director. </li>
							<li>Also, if OPC crosses an annual turnover of Rs. 2 crores, it has to be converted into a private company.  </li>
							<li>One person Company can have a minimum or maximum no. of one member.</li>
							<li>One Person Company cannot run Non – Banking Financial Investment undertakings comprising investment in securities, etc.</li> 
							<li>One Person Company cannot be incorporated or converted into a company under Section 8 of the Act.</li>
							<li>One Person Company is put on the same tax slab as other private companies for taxation purposes. As per the Income Tax Act, 1961, private companies have been placed under the tax bracket of 30% on total income. </li>
							<li>As compared to proprietorship firms, one person companies need to be registered with the registrar of companies under the Companies Act, 2013. This entails expenditure on the government charges and professional fees which will have to be paid to the CA or CS. </li> 
							<li>Also in comparison to proprietorship forms, one person company does have periodic compliance costs every year. It needs to get its accounts audited and will need to file returns yearly.</li>
							<li>A person shall not be eligible to join more than one OPCs or become the nominee in more than one of the similar company.</li>
							<li>NRIs are not allowed for incorporating the One Person Company in India.</li> 
							<li>It allows only an Indian citizen to be eligible to incorporate a One Person Company and only a resident of India can be a nominee for the only member of One Person Company.</b></li>
						</ul>
					</p>
					<p>CompanyVakil.com has really transparent and efficient system to register an OPC in a minimum time span. One can easily connect with any of the associates of CompanyVakil.com through their website. </p>
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
						<h3 class="upper text-center "><b>documents required</b></h3>
						<div class="justify"><h4> All the Documents are required only in scanned form, you can attach the document in the form after payment or email it to us on documents@companyvakil.com . Feel free to get in touch for any query.</h4>
						<p>
							<ul>
								<li>For OPC registration, Memorandum of Association (MoA) is required and it is basically the object to be followed by the Company for which the business is going to be incorporated.</li>
								<li>Also, Articles of the Association (AoA) needs to be submitted while registration process which lays down the by-laws on which the company is going to operate.</li>
								<li>A nominee on behalf of one director and promoter has to be appointed in case of his death and sometimes if he fails to perform his duties, the nominee will come into the picture and perform on behalf of the director. Nominee’s consent in Form INC – 3 will be taken along with his PAN card and Aadhar Card.</li>
								<li>A proof of the Registered office of the proposed Company along with the proof of the ownership and a NOC from the owner will be required to be furnished while registration of a company.</li>
								<li>Affidavit certificate and a consent letter of the proposed Director of Form INC -9 and DIR – 2 resp.</li>
								<li>Another document required will be the declaration by the professional certifying that all compliances have been made. </li>
							</ul>
						</p>
						<p>CompanyVakil.com have reliable services to introduce you to the all the major requirements and registration process of One Person Company.</p>
						</div>
						<?php } ?>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/office.png" alt="No Objection Certificate NOC for one person company"></div>
								<p class="m-b-10"><b>Registered Office Proof</b></p>
								<p class="card-body">No Objection Certificate (NOC) from the owner, Utility bill (should not be older than two months) and Notarized Rent agreement (in case of rented property)/ Registry Proof or House Tax Receipt (in case of owned property)</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/address-proof.png" alt="Address proof for  opc"></div>
								<p class="m-b-10"><b>Address Proof</b></p>
								<p class="card-body">Latest Bank statement/ Utility bill in the name of director which should not be older then two months</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/id-proof.png" alt="ID Proof for opc Company"></div>
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
						<div class="col-md-2 col-sm-12"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/dsc.png" alt="Digital Signature for Directors"></div>
								<p class="m-b-10"><b>DSC (Digital Signature Certificate) & DIN (Director Identification Number)</b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/pan-number.png" alt="PAN Number"></div>
								<p class="m-b-10"><b>PAN & TAN Number</b></p>
							</div>
						</div>
						<div class="col-md-2 col-sm-12"></div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-12"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Incorporation Certificate"></div>
								<p class="m-b-10"><b>Incorporation Certificate</b></p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Rules and Objectives"></div>
								<p class="m-b-10"><b>MOA & AOA</b></p>
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
		                            <h2>DIRECTOR IDENTIFICATION NUMBER (DIN)</h2>
		                            <p>Directors Identification number is a unique eight-digit number which is a mandatory requirement for all the directors of the company. Ministry of corporate affairs allots a DIN to every director of the company with a lifetime validity without which one cannot be a director.</p>
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
		                            <p>After the stage of Name Approval, we draft a Memorandum of association and Articles of association for your company. All the incorporation documents need to be submitted with the prescribed e-form SPICe 32 along with the AOA, MOA and subscription statement. Once all the documents are duly verified and approved by the government, the certificate of incorporation is emailed to you. During which, we will apply for PAN and TAN of your company.</p>
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
					<p>We provide variety of services such as Company registration, <a href="https://www.companyvakil.com/trademark-registration">trademark registration</a>, <a href="https://www.companyvakil.com/copyright-registration">copyright</a>, udhyog aadhaar (<a href="https://www.companyvakil.com/MSME-registration">MSME</a>), GST registration, Import Export Code Registration, <a href="https://www.companyvakil.com/trademark-renewal-and-assignment">Trademark Renewal</a> etc. OPC registration from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil. 
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose CompanyVakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At companyvakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

					<p><b>Money Back Guarantee –</b> CompanyVakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through CompanyVakil we try to make the process of registration as convenient and seamless as possible. With options like trademark and company search bar it is a breeze for a user to search the right name for their company.</p>

					<p><b>Customer redressal –</b> We at CompanyVakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					<h3 class="text-blue upper text-center m-b-100"><b>frequently asked questions</b></h3>
					<div>
						<h4><u>OPC</u></h4>
						<h4>What is an OPC?</h4>
						<p>OPC i.e. One Person Company is a blend of both Sole Proprietorship and Private Limited Company and enjoy certain benefits of both types of organisation.</p>
						<hr>
						<h4>What is a DSC i.e. a Digital Signature Certificate?</h4>
						<p>DSC is Considered as an Identity of a Director, its an Electronically Encrypted Signature unique to a particular person and has been made Mandatory by MCA for the Director of a Company.</p>
						<hr>
						<h4>What is Authorized Capital and Paid Up Capital, respectively?</h4>
						<p>Authorised Capital is the maximum Amount of Equity Share that can be Issued by a Pvt. Ltd. Co. and Paid UP Capital is the total amount of Shares issued to the Shareholders. Authorized Capital can be Raised anytime after Commencement of a Company to issue more Shares to the Shareholders.
						</p>
						<hr>
						<h4>Capital required for incorporating a One Person Company?</h4>
						<p>OPC can be Incorporated with any amount of Capital but no Proof for the same is required during Incorporation Process, Stamp Duty i.e. Govt. Fees has to be paid on Shares issued i.e. Authorised Capital (minimum Shares have to be of Rs. 1,00,000).
						</p>
						<hr>
						<h4>On What Address can a One Person Company be registered?</h4>
						<p>The Address of the Registered office needs to be of India. It can be on an Industrial, Residential or Commercial Premises where Communication from MCA can be received.</p>
						<hr>
						<h4>Can a Foreign National or an NRI be a Director or Shareholder in an OPC?</h4>
						<p>Yes a Foreign National or an NRI can be a Director in an OPC but can’t be a share Holder in it.</p>
						<hr>
						<h4>Difference between a Nominee and Director of an OPC?</h4>
						<p>For Incorporation of an OPC a Director and a Nominee is required. Director is the one who is the member that Leads, Promotes and Supervises the actions of an OPC but a Nominee is a member who shall on the Death or incapacitation of Promotor member become the member of the OPC.
						</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		