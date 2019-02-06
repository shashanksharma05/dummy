				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>Private Limited Company Registration in India</h1> 
							<div class="row">
								<div class="col-md-1 col-xs-1">
									<h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="Company Name Registration in India by Company Vakil"></h4>
								</div>
								<div class="col-md-11 col-xs-11">
									<h4>100% online process </h4>
									<p>Get your company registered without stepping out of your house. Email us the required documents and let us do the rest.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 col-xs-1">
									<h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="Company Vakil Guarantees for Pvt Ltd Registration in India"></h4>
								</div>
								<div class="col-md-11 col-xs-11">
								    <h4>Company Vakil Guarantee </h4>
								    <p>We take pride in our error free platform aimed on satisfying our clients, if you are still not satisfied, we refund your money.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 col-xs-1">
									<h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="PVT LTD CO. incorporation India just got simpler with Company Vakil"></h4>
								</div>
								<div class="col-md-11 col-xs-11">
									<h4>Most Efficient Company Registration Platform in India</h4>
									<p>At Company Vakil your Company incorporations are handled by experts at every stage.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 col-xs-1">
									<h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="Company Vakil Experts help you incorporate Pvt. Ltd. entity in India"></h4>
								</div>
								<div class="col-md-11 col-xs-11">
									<h4>Making Company registration in India affordable and hassle free</h4>
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
					<h3 class="text-blue upper text-center m-b-100"><b>PRIVATE LIMITED COMPANY REGISTRATION COST in india WITH BREAKDOWN </b></h3>
					<div class="card">
						<h4 class="text-center">Before we Submit your application, we do a basic company name check and inform you of any direct conflicts so that your name has a better chance of succeeding</h4>
						<div>Consultancy<span class="fright">FREE</span></div><hr>
						<div>Co. Name Availability Check <span class="fright">FREE</span></div><hr>
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

						<p><small>*Above mentioned government fees for registration of private Limited is calculated on minimum capital of Rs 1,00,000.</small><br><small>Stamp duty Extra for States: Punjab, Kerala, Madhya Pradesh</small><br><small>Charges extra for NRI/Foreign Directors, or Foreign shareholding companies. Timelines would also be significantly higher </small></p>
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
					<h3 class="text-blue upper text-center"><b>Private Limited Company Registration in India</b></h3>
					<p>A <a href="https://www.companyvakil.com">company</a> is an association of persons who share a common goal. A Private Limited Company is a corporate legal entity. It is one of the most popular and easy to incorporate and is a privately held business entity in India. The word 'Private' denotes that a Pvt. Ltd. Co. cannot invite general Public to purchase its Shares and the word 'Limited' denotes that the Liability of the Shareholders and Directors is Limited.</p>

					<p>This type of business entity limits owner liability to their shares, limits the number of shareholders to 50, and restricts shareholders from publicly trading shares. It has a Minimum of two members and a maximum of 200 members. It is governed by the Companies Act, 2013, Ministry of Corporate Affairs, and the Companies Incorporation Rules, 2014.</p>

					<p>For private limited company registration in India, a minimum of two shareholders and two directors are required. A natural person can be both a director and shareholder, while a corporate legal entity can only be a shareholder. Further, foreign nationals, foreign corporate entities or NRIs are allowed to be Directors and/or Shareholders of a the same with Foreign Direct Investment, making it the preferred choice of entity for foreign promoters.</p>

					<p>Registering a private limited company in India is a crucial part for any business. It provides an asset of advantages to an Entity.</p>

					<p>Some of the salient features of a private limited company in India are limited liability, perpetual succession, corporate legal entity, trustworthiness, capital funding and raising, easy transferability, etc. Register a Pvt. Ltd in India with help of Company Vakil Experts today. Private limited form of incorporation is ideal for start-ups and growing businesses</p>

									
					<h3 class="text-blue upper text-center m-t-5"><b>REASONS TO REGISTER A PRIVATE LIMITED COMPANY in India</b></h3>
					<p>
						<ol>
							<li><p><b>Credibility </b>
							<br>Registering a Pvt. Ltd. Co. facilitates credibility of the business. Nowadays, customers, vendors and investors look for credibility in the business entity before dealing. It creates a professional image and boosts the business value. Most importantly, registration ensures a certain degree of brand uniqueness and also eliminates duplication in the market.
<br>A Pvt. Ltd. Co. has more credibility than a sole proprietorship or a partnership firm. The registration process authenticates the existence of business thus improving the credibility of the corporation.</p></li>

							<li><p><b>Convertibility</b><br>A registered Private Limited Company India can convert its structure into a Public Limited Company. This helps to have a broader access to the market.</p></li>

							<li><p><b>Protection of Personal Assets </b>
							<br>Pvt. Ltd. Formation allows limited liability. In case of a wind up, only the assets of the business can be taken away by the creditors. They cannot touch any personal assets of the members.</p></li>

							<li><p><b>Funding</b><br>For any new business enterprise, funding is a very crucial aspect of establishing, maintaining and growing a business. For a business to grow quickly, it needs to have all types of funding which can be made available.<br>A Registered Private Limited Company attracts more investors as the registration process authenticates the existence of business.</p></li>
						</ol>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>PROCESS FOR PRIVATE LIMITED COMPANY REGISTRATION IN INDIA</b></h3>
					<p>Registration of a Pvt. Ltd. company is a simple 4-stage process. The following the stages of registration:-</p>
					<p>
						<ol>
							<li><p><b>Obtain Digital Signature Certificate (DSC) </b>
							<br>The first and foremost step involves the procuring of the digital signature certificate which is nothing but e-signature certificate which is issued by the Certifying Authority in token form and is valid for 1 or 2 years. All the proposed directors of the Pvt. Ltd. are required to apply for the digital signature i.e. DSC.</p></li>

							<li><p><b>Obtain Director Identification Number (DIN)</b><br>A registered Pvt Ltd Company in India can convert its structure into a Public Limited Company. This helps the corporation to have a broader access to the market. Directors Identification number is a unique eight-digit number which is a mandatory requirement for all the directors. Ministry of corporate affairs allots a DIN to every director with a lifetime validity.</p></li>

							<li><p><b> Reservation and Approval of Name via RUN (Reserve Unique Name) Form
Once the DIN and DSC of the directors are obtained, a list of 2 proposed names under the RUN (Reserve Unique Name) form for Pvt. Ltd is submitted to MCA for approval. Some of the considerations before selecting the name are:-</b>
								<ol>
									<li>The name should be easy to spell and remember; </li>

									<li>The name shall be able to provide a distinct identity to the entity, It should be short & simple.</li>

									<li>The name should not contain any word as opposed to public policy or prohibited.</li>

									<li>Once the application submitted through Reserve Unique Name Form (i.e. RUN Form) is approved, the registrar shall reserve the name for a period of 20 days.</li>
								</ol></p>
							</li>
							<li><p><b>Certificate of Incorporation</b><br>
							After the stage of Name Approval, a Memorandum of association (MoA) and Articles of association (AoA) is drafted. Both MoA and AoA are charter documents for a Pvt. Ltd. Company in India. All the incorporation documents need to be submitted with the prescribed e-form SPICe-INC- 32 along with the AoA, MoA and subscription statement. Once all the documents are duly verified and approved by the government, the certificate of incorporation is emailed to the applicant by the Registrar under his seal and signature.
							<p>The Certificate of Incorporation (COI) issued will include the date of incorporation as well as the Permanent Account Number (PAN) of the entity.</p>
							<p>The applicant is now ready to start his/her business!</p></li>
						</ol>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>MINIMUM REQUIREMENTS FOR COMPANY REGISTRATION in India</b></h3>
					<p>
						<ol>
							<li>A minimum of 2 Shareholders and 2 Directors are required for the registration, where directors and shareholders can be same. </li>
							<li>Minimum 2 Persons & Maximum 200 Persons. </li>
							<li>There is No Minimum Authorized Share Capital but it is advisable to keep a minimum capital of ₹ 100,000 (INR One Lakh).</li> 
							<li>All Required documents ( Clear and on provided format )</li>
							<li>Name should be unique ( For the stage of name approval)</li>
							<li>Memorandum of Association and Articles of Association </li>
							<li>Words “Private Limited” to be added as suffix to the name is mandatorily</li>
						</ol>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>ADVANTAGES & BENEFITS OF PRIVATE LIMITED COMPANY in india</b></h3>
					<ol>
						<li><p><b>Easy Formation</b>
						<br>Formation of a Pvt. Ltd. Company requires a minimum of 2 members thus making the formation flexible.</p></li>

						<li><p><b>Flexible Entity</b><br>Private Limited Company Registration in India is not only easy to form, but is also easy to manage and run. The registration process takes between 7 to 10 working days. It offers the flexibility of a partnership firm and the advantages of a Public Ltd Co.</p></li>

						<li><p><b>Limited Liability</b><br>
						The liability of each member or shareholders is limited. This means that as a shareholder one will be liable to pay for liability only to the extent of the contribution made by such person.</p>
						</li>
						<li><p><b>Perpetual Succession</b><br>
						The entity always exists in the eyes of law even in case of death, insolvency or bankruptcy of any of its members. This leads to perpetual succession of the entity. The life of the corporation exists forever.</p></li>

						<li><p><b>Distinct Legal Entity</b><br>A Pvt. Ltd. Co. is a legal entity and artificial person established under the Companies Act. This means that though Member (Shareholders/Directors) are responsible for the management of the company. A member has no personal liability to the creditors for company’s debts.</p></li>

						<li><p><b>Expansion and Convertibility</b><br>
						There is a higher scope of expansion because it is easy to raise capital from financial institutes, angel investors, Venture Capitalist or any other external investment. A Pvt. Ltd. Co. is also flexible to be converted into other forms of business such as Public Limited Company, Nidhi Company, etc.</p>
						</li>
						<li><p><b>Dissolution</b><br>
						A Pvt. Ltd. Company Registered in India is also easy to wind up and dissolve after startup India.</p></li>
					</ol>
					<h3 class="text-blue upper text-center m-t-5"><b>DISADVANTAGES OF PRIVATE LIMITED in India</b></h3>
					
					<ol>
						<li><p><b>Procedural Compliance</b>
						<br>A Private Limited has Legal formalities throughout the year like Filing of Annual Returns, Income Tax Filings, Meetings, Records of Meetings, Invitation for the Meetings, Shareholders Meetings, Separate Directors Meetings, GST return filling etc.<br> Avoiding the Legal formalities will result in high penalties and even imprisonment of Directors.</p></li>

						<li><p><b>Share Transferability</b><br>Private limited Company restricts transferability of shares by its articles. Shares cannot be sold or transferred to anyone without the consent of the Board of Directors. In case of selling shares to an outsider a shareholder must make an offer to the existing shareholders of the corporation before selling.</p></li>

						<li><p><b>Capital Requirement</b><br>
						With New Company Registration rules, there is No Minimum Authorized Share Capital required for forming a Private Limited Company India. </p>
						</li>
						<li><p><b>Restricted Access to Capital Markets</b><br>
						A Pvt. Ltd. Company cannot get its shares listed in any stock exchange through initial public offerings. With this restriction, private limited companies may find it difficult to attract outside investors to buy the shares.</p></li>

						<li><p><b>Auditing</b><br>A Compulsory Audit has to be conducted in every financial year.</p></li>

						<li><p><b>Selection of Name</b><br>
						The availability of name becomes a problem certain guidelines are to be followed while selecting the name, we at Company Vakil have made it simple with our Company name search tool.</p>
						</li>
						<li><p><b>Comparatively Complicated than LLP</b><br>
						Procedure for Registration of Pvt Ltd. Company in India is comparatively complicated as well as costly in comparison to a Limited Liability Partnership (LLP).</p></li>
						<li><p><b>Profit Sharing </b><br>
						In a Pvt. Ltd. Company, profits are to be shared amongst larger number of people as it has many shareholders.</p>
						</li>
					</ol>
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
						<h3 class=" text-center upper"><b>DOCUMENTS REQUIRED FOR Online COMPANY REGISTRATION in India</b></h3>
						<div class="text-justify"><h4> All the Documents are required only in scanned form, you can attach the document in the form after payment or email it to us on documents@companyvakil.com. Feel free to get in touch for any query.</h4>
						<ul>
							<li>Passport size photograph of applicant;</li>
						    <li>Self-attested Address proof of applicant</li>
							<li>Self-attested PAN card of applicant</li>
							<li>Copy of ownership deed or sale deed (if you own the premises)</li>
							<li>Copy of latest utility bills, such as electricity bill or telephone bill as proof of registered office. (Not older than 2 months)</li>
							<li>Copy of rent agreement with No Objection Certificate (NOC) from the property owner (if office premise is rented).</li> 
							<li>Affidavits for non- acceptance.</li>
							<li>No Objection Certificate (NOC), if there is a change in the original subscribers of MOA. Subscriber Sheets of MoA and the AoA. </li>
							<li>Proof of Nationality which is needed if the subscriber is a foreign national. </li>
						</ul>
						</div>
						<?php } ?>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/office.png" alt="No Objection Certificate NOC for Company Registration in India"></div>
								<p class="m-b-10"><b>Registered Office Proof</b></p>
								<p class="card-body">No Objection Certificate (NOC) from the owner. Utility bill (not older than two months) and Notarized Rent agreement (if it is a rented property)/Registered Proof or House Tax Receipt (in case of owned property)</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/address-proof.png" alt="Address proof for Private Limited Company Registration India"></div>
								<p class="m-b-10"><b>Address Proof</b></p>
								<p class="card-body">Latest Bank statement/Utility bill in the name of director which should not be older than two months</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/id-proof.png" alt="ID Proof for registering your Entity"></div>
								<p class="m-b-10"><b>ID Proof and Passport size photo</b></p>
								<p class="card-body">Scanned copy of Passport size Photograph, PAN Card & Aadhar Card of all directors / Voter ID / Passport / Driving License </p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="section4">
			<div class="container">
				<div class="section_mgn">
					<h3 class="text-blue upper text-center m-b-100"><b>WHAT WILL YOU GET after Company Registration?</b></h3>
					<div class="row">
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/dsc.png" alt="Digital Signature of Directors for Company Formation in India"></div>
								<p class="m-b-10"><b>DSC</b></p>
								<p class="card-body">Digital signature for two directors to digitally sign the documents</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/pan-number.png" alt="PAN Number for Company Incorporation in India"></div>
								<p class="m-b-10"><b>PAN Number</b></p>
								<p class="card-body">PAN Number of the Entity to open a bank account and for filling Income Tax Returns</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Company Incorporation Certificate issued by ROC"></div>
								<p class="m-b-10"><b>Incorporation Certificate</b></p>
								<p class="card-body">Certificate of incorporation bearing company's registration number and details</p>
							</div>
						</div>
					<!-- </div>
					<div class="row m-t-5"> -->
						<div class="col-md-2"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/rubber-stamp.png" alt="Director Identification Number issued to director of a Pvt Ltd. Co."></div>
								<p class="m-b-10"><b>Director Identification Number (DIN)</b></p>
								<p class="card-body">DIN - A unique identification number allotted to each director</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Memorandum of Association and Articles of Association drafted for Pvt LTd. Co. Registration"></div>
								<p class="m-b-10"><b>MOA & AOA</b></p>
								<p class="card-body">Defines the Rules and Objectives of the Business</p>
							</div>
						</div>
						<div class="col-md-2"></div>
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
		                            <p>DSC is an electronic online signature issued by licensed certifying authorities. All the proposed directors of the company are required to apply for a digital signature (DSC), it is necessary for digitally signing the electronic incorporation documents.</p>
		                        </div>
		                        
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-even-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">1 day</span>
		                            <h2>DIRECTOR IDENTIFICATION NUMBER (DIN)</h2>
		                            <p>Directors Identification number is a unique eight-digit number which is a mandatory requirement for all the directors of the proposed corporation. Ministry of corporate affairs allots a DIN to every director of the entity with a lifetime validity without which one cannot be a director.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-odd-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">5 to 7 days</span>
		                            <h2>COMPANY NAME CHECK & APPROVAL</h2>
		                            <p>Once we obtain the DIN and DSC of the directors, a list of 2 proposed names for the entity will be submitted via a RUN Form (Reserve Unique Name Form) to MCA for approval. We will conduct a prior detailed check for your name availability through our unique name search tool. We get your name approved subject to availability and naming guidelines.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="frst-timeline-block frst-even-item" data-animation="slideInUp">
		                    <div class="frst-timeline-img"> <span></span> </div>
		                    <div class="frst-timeline-content animated zoomInLeft" style="position: relative;">
		                        <div class="frst-timeline-content-inner"><span class="frst-date">5 to 7 days</span>
		                            <h2>INCORPORATION DOCUMENTS</h2>
		                            <p>After the stage of Name Approval, we draft a Memorandum of association (MoA) and Articles of association (AoA) for your corporation. All the incorporation documents need to be submitted with the prescribed e-form SPICe - 32 along with the AoA, MoA and subscription statement. Once all the documents are duly verified and approved by the government, the certificate of incorporation is emailed to you. During which, we will apply for PAN and TAN of your newly commenced entity.</p>
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
					<p>We are India`s one stop tech legal registration platform aimed on making legal registrations efficient and affordable to end user, i.e. individuals, entrepreneurs or business owners.</p>
					<p>Company Vakil with the help of technology and experts such as lawyers, Chartered accountants, company secretary makes Company registration error-free and seamless.</p>
					<p>We provide variety of services such as Company registration, trademark registration, copyright, udyog aadhaar (MSME), GST registration, Import Export Code Registration etc. and with help of Company Vakil you can do an Online Company Registration from any Part of India.
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose Company Vakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At Company Vakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

					<p><b>Money Back Guarantee –</b> Company Vakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through Company Vakil we try to make the process of registration as convenient and seamless as possible. With free tools like trademark and company name check – it makes it easy and convenient for you to select and finalize the unique and right name for your brand.</p>

					<p><b>Customer redressal –</b> We at Company Vakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					<h3 class="text-blue upper text-center m-b-100"><b>FREQUENTLY ASKED QUESTIONS</b></h3>
					<div>
						<h4><u>Private Limited Company</u></h4>
						<h4>Do I Physically need to visit your Office or the whole process can be done Online?</h4>
						<p>No office/physical Visits are required, it is a 100% Online Process, and all the necessary Documents will be exchanged through email.</p>
						<hr>
						<h4>How many Shareholders can be there in a Pvt Ltd. Co.?</h4>
						<p>Minimum 2 or Maximum 200 Shareholders are required for its incorporation.</p>
						<hr>
						<h4>Who can be a Director in a Pvt Ltd. Co.?</h4>
						<p>Any Individual beyond the age of 18 Years can be a Director in a Pvt Ltd. NRI’s & Foreign Nationals can also start and Manage a Private Limited in India as there is no Restriction on Citizenship or Residential Status.
						</p>
						<hr>
						<h4>How many Directors are required to commence the Pvt. Ltd. Co.?</h4>
						<p>Minimum 2 and Maximum 15 Directors are required to incorporate a private ltd. in India.</p>
						<hr>
						<h4>Can an already employed person be a Director in a Company?</h4>
						<p>Yes, you can become a Director. If the Employment Contract allows you to do so. There are no Legal Limitation in this regard.</p>
						<hr>
						<h4>What is meant by Authorized Capital and Paid up Capital?</h4>
						<p>Authorized Capital is the maximum Amount of Equity Share that can be issued by a Pvt. Ltd. Co. and Paid UP Capital is the total amount of Shares issued to the Shareholders. Authorized Capital can be raised any time after Commencement of an Entity to issue more Shares to the Shareholders.</p>
						<hr>
						<h4>What is a DSC i.e. a Digital Signature Certificate?</h4>
						<p>DSC is considered an Identity of a Directors, it is an Electronically Encrypted Signature unique to a particular person and has been made Mandatory by MCA for all the Directors.
						</p>
						<hr>
						<h4>Why Should a Startup Choose a Pvt Ltd. Company?</h4>
						<p>Pvt Ltd. Co. is Considered as the best option for any Startup because of the following Reasons:-</p>
						<p>1. It shows a Startup’s Credibility and a Long Term Business Goal. 
							</br>2. Limited Liability i.e. it is limited to the Value of Shares Allotted 
							</br>3. Minimum 2 Directors/Shareholders are required to incorporate a Pvt. Ltd. Co.
						    </br>4. It is a Pre – Requisite for getting Funding. 
							</br>5. Flexible – In future can be converted into a public Limited Company’s
						    </br>6. Limited Annual Compliance
						</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		