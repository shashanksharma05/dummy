				<div class="section_mgn">
					<div class="row">
						<div class="col-md-6 text-white company-registration left-banner">
							<?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
							<?php }else{ ?>
							<h1>Employment Contract</h1> 
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>An agreement between an employer and employee and is the basis of the employment relationship</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-xs-12">
									<h4>100% online process </h4>
									<p>Get Employment Contract drafted without stepping out of your house. Email us the required documents and let us do the rest. </p>
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
					<h3 class="text-blue upper text-center"><b>EMPLOYMENT CONTRACT IN INDIA</b></h3>
					<p>A contract of employment is a bilateral agreement for the exchange of service and remuneration for a given period of time. It is just like any other contract which involves essentials such as an offer, acceptance, consideration, competent parties, legal object and free consent.</p>

					<p>An employment contract is a document binding the parties in an employer-employee relationship.</p>

					<p>Generally, the employer and the employee sign a letter of appointment prior to signing of a formal <a href="https://www.companyvakil.com/employment-contract">employment contract</a> to cover the period of probation unless a person employed is confirmed by the employer.</p>

					<p>An employment contract generally includes:-</p>
					<p>
						<ul>
							<li>Particulars of the person employed i.e. the employee (name, birth date, nationality etc) </li>
							<li>Position of the Employee in the organization</li>
							<li>His work hours and duties Salary or Remuneration Allowances</li>
							<li>Benefits Leave</li>
							<li>Retirement Age</li>
							<li>Clause regarding termination of employment</li>
							<li>It is not mandatory for employment contracts to be in writing, they can be oral also. A written employment contract is preferable to avoid disputes at a later stage. The employer and employee should enter into such a contract after getting acquainted with all terms and conditions of the employment provided in the agreement and must agree upon them in the same sense.</li>

							<li>A contract of employment also contains certain terms and conditions to which both employee and employer are bound. A breach of such terms and condition will repudiate the contract.</li>

							<li>Thus, to summarize, employment contract is a contract of service between the employee and the employer to serve the latter fulfilling all terms and conditions provided in the contract. They have become the need of the hour at the workplace to maintain better relationships between employer and the employee.</li>
						</ul>
					</p>

					<h3 class="text-blue upper text-center"><b>What is an Employment Agreement?</b></h3>
					<p>An employment contract is an agreement between an employer and an employee, signed by both the parties that sets out both the responsibilities and rights of the two parties, that is, company and worker.
					</p>
					<h3 class="text-blue upper text-center"><b>Why Employment Contract Is Needed</b></h3>
					<p>Also known as a contract of employment or employment agreement, it lays out the rights and responsibilities of both an employer and an employee.<br>Following specifications can be included in it:
						<ul>
							<li>The agreed upon salary, commission, or wage between both parties. </li>
							<li>The schedule about number of hours and days an employee is required to work. </li>
							<li>The duration an employee has agreed to work for a company. This time period may be ongoing in some cases and fixed for a specified duration among others. </li>
							<li>The responsibilities a worker is expected to perform in the course of employment.</li> 
							<li>Confidential statement might be included as part of a contract in some cases, though in most cases a worker signs a non-disclosure statement separately. </li>
							<li>Contract may state that control and ownership is to be retained by company over every communication in cases employees are involved in handling email, social media, websites etc. </li>
							<li>It should set out all benefits that form a part of employment including perks, 401k, health insurance, vacation time etc. </li>
							<li>The inclusion of a non-compete agreement or NCC which states that when an employee will leave the job, he will not take up jobs to keep a check on future competition. </li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>EMPLOYMENT CONTRACT PROCESS</b></h3>
					<p>
					    <ul>
							<li>In most cases, employees are required to sign a contract that specifies terms of the employment. </li>
							<li>It documents their salary, start date, benefits package etc. </li>
							<li>In case a relocation package/ signing bonus are offered, the requirements of repayment are stipulated in case an employee terminates employment prior to a certain date. </li>
							<li>Noncompete and nondisclosure clauses may be included in the contract. </li> 
							<li>An employee is expected to sign only if he is ready to work and can remain committed for the job. He is expected to not engage in a job search any further and reject any future offers that he may receive. </li>
							<li>Once an employment contract is signed by an employee, the process of an employment contract is over.</li>
						</ul>
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Advantages and Benefits of Employment Contract</b></h3>
					
					<p>
						<ul>
							<li>An employment contract clearly defines an employee’s job, responsibilities and benefits. It helps in preventing any confusion related to the job.  </li>
							<li>It also ensures that legal remedies are available to both the parties when one of them breaches a condition of the contract. </li>
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
						<h3 class="upper text-center"><b>Documents required for Employment Contract</b></h3>
						<div class="text-justify">
							<h4> All the Documents are required only in scanned form, you can attach the document in the form after payment or email it to us on documents@companyvakil.com . Feel free to get in touch for any query.</h4>
							<li>Written and verbal agreements between an employer and an employee may include valid provisions of an employment contract.</li>
							<li>Other documents that may form part of such contract include company bulletins and handbook of an employee. </li>
							<li>If one has been employed for a long time, the employer’s conduct may be understood to imply a provision of a valid employment contract. For example, if one’s job performance is appreciated by the employer, this may imply that he will not be terminated from his position because of his work, if he continues to work maintaining the same standard. </li>
						</div>
						<?php } ?>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-3"></div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/moa.png" alt="Information sheet for Employment"></div>
								<p class="m-b-10"><b>Information sheet to be filled </b></p>
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
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/certificate.png" alt="Employment Contract"></div>
								<p class="m-b-10"><b>Employment Contract</b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
					        <div class="form_card1 bg-white text-center">
								<div class="section_img m-b-10"><img src="<?php echo base_url(); ?>assets/images/rubber-stamp.png" alt="Rubber Stamp for Employment"></div>
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
		                        <div class="frst-timeline-content-inner"><span class="frst-date">2 to 3 working days</span>
		                            <h2>Drafting of Employment contract according to your need</h2>
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
					<p>We provide variety of services such as Company registration, trademark registration, copyright, <a href="https://www.companyvakil.com/MSME-registration">ssi</a>, <a href="https://www.companyvakil.com/GST-registration">GST registration</a>, <a href="https://www.companyvakil.com/import-export-code">IE Code Registration</a>, <a href="https://www.companyvakil.com/patent-registration">patent registration</a> etc. Get Employment contract sample or format from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil. 
					</p>
					<h3 class="text-blue upper text-center m-t-5"><b>Why choose CompanyVakil</b></h3>
					<p><b>Legal Experts at your Fingertips –</b> At companyvakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

					<p><b>Money Back Guarantee –</b> CompanyVakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

					<p><b>Seamless Process –</b> Through CompanyVakil we try to make the process of registration as convenient and seamless as possible. With options like trademark and company search bar it is a breeze for a user to search the right name for their company.</p>

					<p><b>Customer redressal –</b> We at CompanyVakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
					</p>
					<h3 class="text-blue upper text-center m-b-100"><b>frequently asked questions</b></h3>
					<div>
						<h4><u>Employment Agreement</u></h4>
						<h4>What is an Employment Agreement?</h4>
						<p>Employment Agreement is a necessary instrument while hiring any employee or consultant as it defines and addresses all the terms and conditions governing employment comprehensively plus the rights and duties of each concerned party to it.
                        </p>
						<hr>
						<h4>What are the common Points included in an Employment Contract?</h4>
						<p>Common points would be Breakdown of Salary, Notice Period, Date of Joining and Non-Compete Clause.</p>
						<hr>
						<h4>Benefits of an Employment Contracts?</h4>
						<p>Following are the benefits of having it :-
						</p>
						<p>1. It minimizes the Risk by protecting the rights of both employers and employees.
							</br>2. It sets the expectation of an Employee psychologically and creates a sense of respect for the terms mention in it.
							</br>3. The contract defines the responsibilities and expectations of both the Parties.
						</p>
						<hr>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		