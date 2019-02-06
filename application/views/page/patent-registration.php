        <div class="section_mgn">
            <div class="row">
                <div class="col-md-6 text-white company-registration left-banner">
                    <?php if(!empty($meta['section1']) && $meta['section1']!='<p>&nbsp;</p>'){ echo $meta['section1']; ?>
                    <?php }else{ ?>
                    <h1>Patent Registration</h1> 
                    <div class="row">
                        <div class="col-md-1 col-xs-1">
                            <h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="interface"></h4>
                        </div>
                        <div class="col-md-11 col-xs-11">
                            <h4>100% online process </h4>
                            <p>Get your Patent registered without stepping out of your house. Get in touch with our Patent experts. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-xs-1">
                            <h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="interface"></h4>
                        </div>
                        <div class="col-md-11 col-xs-11">
                            <h4>CompanyVakil Guarantee </h4>
                            <p>We take pride in our error free platform aimed on satisfying our clients, if you are still not satisfied, we refund your money.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-xs-1">
                            <h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="interface"></h4>
                        </div>
                        <div class="col-md-11 col-xs-11">
                            <h4>Most efficient Registration Platform</h4>
                            <p> At CompanyVakil your registrations are handled by experts at every stage.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-xs-1">
                            <h4><img src="<?php echo base_url(); ?>assets/images/interface.png" alt="interface"></h4>
                        </div>
                        <div class="col-md-11 col-xs-11">
                            <h4>Making registrations affordable and hassle free </h4>
                        </div>
                    </div>
                    <?php } ?>
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
            <h3 class="text-blue upper text-center m-b-100"><b>Patent Registration Cost with Breakdown </b></h3>
            <?php if(!empty($package_detail)){ ?>
            <div class="card">
                <h4 class="text-center">Before we Submit your application, we do a thorough Patent search and inform you of any direct conflicts so that your filling has a better chance of succeeding</h4>
                <div>Consultancy<span class="fright">FREE</span></div><hr>
                <?php $additional = json_decode($package_detail['AdditionalPrice'],true);
                if(!empty($additional)){ foreach($additional as $price){ ?>
                <div><?php echo $price['label']; ?><span class="fright">Rs <?php echo $price['price']; ?></span></div><hr>
                <?php } } ?>
                <div>Full Patent Registration <span class="fright">Rs <?php echo $package_detail['packagePrice']; ?></span></div><hr>
                <p><b>Total<a href="<?php echo base_url('buypackage/').$package_detail['ID']; ?>" class="btn btn-orange m-l-30">Buy Now</a><span class="fright"> Rs <?php echo $package_detail['packageTotalPrice']; ?></span></b></p>
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
            <h3 class="text-blue upper text-center"><b>Patent Registration in India</b></h3>
            <p>A Patent is a kind of reward granted by the government to the inventor in return of his disclosure of his invention to the public for the benefit of the society. It is an exclusive right of the inventor over his invention and the registration of the patent benefits the inventor to protect his invention. Such invention must be new and inventive solution to an existing technological problem. It must be capable of being used in an industry.</p>
            <p>Registration of the patent helps the inventor or the patentee to control the making, using, selling or importing of the patented product or process for producing that product without his/her consent. In India, applications for registration of patents are processed by the Patent Office, Controller General of Patents, Designs & Trade Marks. Register patent from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil. </p>
            <p>Utility, novelty, an inventive step and industrial application are the important considerations for granting a patent right.</p>

            <p>
                <ul>
                    <li><b>Novelty</b><br>The invention must be new or novel which means that the invention must never be made before or used before. It must possess some new or novel characteristic which is not known in existing public knowledge.</li> 
                    <li><b>Inventive Step</b><br>The invention must involve a step towards a new invention. An inventive step is a feature of an invention that involves technical advance as compared to the existing knowledge or having economic significance or both that makes the invention non obvious to a person skilled in the art.</li>
                    <li><b>Industrial Application</b><br>There must be an industrial application of the invention i.e. the invention must be capable of being used in the industry.</li> 
                </ul>
            </p>
            <p>The patent rights are granted for a limited period of time in exchange for complete public disclosure of the invention.</p>
            <h4>What is Patent Registration?</h4>
            <p>A Patent is a right for an invention granted for a limited period of time to the inventor (also known as patentee) by the Government, in exchange of full disclosure of his invention for excluding others, from making, selling, importing the patented product or process without his consent.</p>

            <p>Registration of the patent helps the inventor or the patentee to control the making, using, selling or importing of the patented product or process for producing that product without his/her consent. In India, applications for registration of patents are processed by the Patent Office, Controller General of Patents, Designs & Trade Marks.</p>

            <p>The true and first inventor of the patent can apply for the registration of a patent. He shall be granted registration only if his invention is new or novel, involves an inventive step and is capable of industrial application.</p>

            <p>A registered patent will have a validity of 20 years from the date of filing of patent application, irrespective of whether it is filed with provisional or complete specification.</p>

            <p>Registration of a patent has its own benefits such as the owner of the patent have legal protection of his invention and he is entitled to sue a person in case of infringement of his right. Registration of patent also grants monopoly and an exclusive right to the owner.
            </p>
            
            <h3 class="text-blue upper text-center m-t-5"><b>Reasons to register Patent Registration</b></h3>
            <p>
                <ul>
                    <li>It guarantees legal protection to the owner of the patent which means that the owner can sue any person who infringes his right over the patent.</li>
                    <li>It grants monopoly and an exclusive right to the owner. It helps the inventor or the patentee to control the making, using, selling or importing of the patented product or process for producing that product without his/her consent.</li>

                    <li>It allows the inventor to stop other people from using the invention without his permission which in turn provides a unique competitive edge for the business.</li>

                    <li>As an inventor, you are entitled to get royalty for the use of your registered patent.</li>

                    <li>Registration of patent ensures the protection of the patent for a period of 20 years.</li>

                    <li>If the patent is registered, it can be sold or transferred to another person by a way of transfer or franchising trough which the patentee can get royalty and gain revenue.</li>

                </ul>

            </p>
            
            <h3 class="text-blue upper text-center m-t-5"><b>Patent Registration Process</b></h3>
            <p>In India, applications for registration of patents are processed by the Patent Office, Controller General of Patents, Designs & Trade Marks. The process of registration of a patent is a crucial part and one needs to be thorough about the invention before filing the application for registration of the patent.</p>
            <p>
                <ul>
                    <li><b>Details of the Patent</b><br>All the information and details pertaining to the invention to be patented must be collected. The applicability of the invention, the area of invention, usage of such invention and the process of using it must be specified clearly.</li>
                    <li><b>Search the Patent</b><br>All inventions are not patentable. There are certain considerations as to patent an innovation as mentioned above. There are various inventions that cannot be patented as per the Indian laws relating to patents. So, one needs to check whether his/her invention is patentable or not. If such invention is already patented by someone else then the inventor cannot be granted registration of the patent.</li>

                    <li><b>Patent Application</b><br>An application containing all the details and information regarding the invention is to be made to the Patent Office.</li>

                    <li><b>Examination of Application</b><br>The authorities of the Patent Office review the application. They check for all the necessary criteria i.e. Novel idea, inventive step and industrial application required for patenting the invention. If there are any objections as to the idea, it is conveyed to applicant to work upon it.</li>

                    <li><b>Grant of Patent</b><br>If the invention is meeting all the requirements of patentability, then a Patent is granted to the applicant. The grant of patent is notified in the patent journal and is also updated online on the site.</li>

                </ul>

            </p>

            <h3 class="text-blue upper text-center m-t-5"><b>Documents required for patent registration</b></h3>
            <p>The following documents are needed to be furnished for the purpose of registration of a patent:-</p>
            <p>
                <ul>
                    <li>Application for Grant of Patent (Form 1)</li>
                    <li>Proof of right to file application from the inventor.</li>
                    <li>Provisional/Complete specification (Form 2)</li>
                    <li>Statement and Undertaking (Form 3)</li>
                    <li>Declaration as to inventorship in (Form 5)</li>
                    <li>Power of authority (Form 26), if patent application is being filed by a Patent Agent.</li>
                    <li>Statutory fees</li>
                    <li>All patent applications must bear the signature of the applicant or authorized person or Patent Attorney along with name and date.</li>
                    <li>Provisional or complete specification must be signed by the agent/applicant with date on the last  page  of  the  specification. The drawing sheets attached should also contain the signature of an applicant or his agent in the right hand bottom corner.</li>
                    <li>Priority document must be filed in the case of Convention Application & PCT National Phase Application.</li>
                </ul>
            </p>

            <h3 class="text-blue upper text-center m-t-5"><b>Advantages & Benefits for Patent Registration</b></h3>
            <p>Registration of a patent confers a list benefits to the patentee. The following are the advantages and benefits of registration of a patent:-</p>
            <p>
                <ul>
                    <li><b>	Protection</b><br>It guarantees legal protection to the owner of the patent which means that the owner can sue any person who infringes his right over the patent. Registration of patent ensures the protection of the patent for a period of 20 years</li>
                    <li><b>Exclusive Right</b><br>It grants monopoly and an exclusive right to the owner. It helps the inventor or the patentee to control the making, using, selling or importing of the patented product or process for producing that product without his/her consent. It allows the inventor to stop other people from using the invention without his permission which in turn provides a unique competitive edge for the business.</li>
                    <li><b>Generation of Revenue</b><br>If the patent is registered, it can be sold or transferred to another person by a way of transfer or franchising trough which the patentee can get royalty and gain revenue. As an inventor, you are entitled to get royalty for the use of your registered patent. The patent can be used in the form of an intangible asset which procures revenue.</li>
                    <li><b>Encouraging Innovation</b><br>A Patent encourages and promotes innovation. It is way of rewarding the inventors for their research, knowledge and invention. The protection of such invention encourages others to invent something novel capable of industrial application.</li>
                    <li><b>Growth of Society and Economy</b><br>A Patent is a means of sharing the knowledge and resources with the society. Underlying economic and commercial justification for the patent system is that it acts as a stimulus to investment in the industrial innovation. Innovative technology leads to the maintenance of and increase in nation's stock of valuable, tradable and industrial assets.</li>
                </ul>

            </p>
            
            <h3 class="text-blue upper text-center m-t-5"><b>Patent Registration Cost/Fee</b></h3>
            <p>There are two types of costs involved in registration of a patent i.e.</p>
            <p>
                <ul>
                    <li><b>Government Fees</b><br>The filing of application to the government for the registration can incur you a cost of INR 50,000 to 70,000. The cost is a sum of the costs which are incurred during the stages of registration, right from the starting of novelty search of the patent to the grant of the patent.</li>
                    <li><b>Professional Fees</b><br>CompanyVakil.com can help you to get a patent registered at a very nominal profession cost of Rs 40,000</li>
                </ul>

            </p>
            <?php } ?>
        </div>
    </div>
</div>

<div class="section6">
    <div class="container">
        <div class="section_mgn">
            <?php if(!empty($meta['section3']) && $meta['section3']!='<p>&nbsp;</p>'){ echo $meta['section3']; ?>
            <?php }else{ ?>
            <h3 class="text-blue upper text-center"><b>About CompanyVakil </b></h3>
            <p>We are India`s one stop tech legal registration platform aimed on making legal registrations efficient and affordable to end user, i.e. individuals, entrepreneurs or business owners. </p>
            <p>CompanyVakil with the help of technology and experts such as lawyers, Chartered accountants, company secretary makes registration error-free and seamless.</p>
            <p>We provide variety of services such as <a href="https://www.companyvakil.com/private-limited-company">Company registration</a>, <a href="https://www.companyvakil.com/trademark-registration">trademark registration</a>, <a href="https://www.companyvakil.com/copyright-registration">copyright</a>, udhyog aadhaar (MSME), <a href="https://www.companyvakil.com/GST-registration">GST</a>, <a href="https://www.companyvakil.com/import-export-code">Import Export Code Registration</a> etc. Get Patent registration from Jaipur, Mumbai, Bangalore, Tamilnadu, Gurugram, GOA, Haryana, Gujarat, West Bengal, assam, Pune, Kerala, Ahmedabad, Delhi, Indore, Kolkata, karnataka, maharashtra, uttar pradesh, telangana, coimbatore, patiala, chennai etc with Companyvakil. 
            </p>
            <h3 class="text-blue upper text-center m-t-5"><b>Why choose CompanyVakil</b></h3>
            <p><b>Legal Experts at your Fingertips –</b> At companyvakil all your queries are handled by experts at every stage, we have a team of lawyers, chartered accounts and company secretary to help you till your service is fulfilled</p> 

            <p><b>Money Back Guarantee –</b> CompanyVakil believes strongly in Customer satisfaction, and all our associates and professionals make sure you are provided with all the information required at every stage. Yet if you are not satisfied with the service provided we shall refund you the money.</p>

            <p><b>Seamless Process –</b> Through CompanyVakil we try to make the process of registration as convenient and seamless as possible. With options like trademark and company search bar it is a breeze for a user to search the right name for their company.</p>

            <p><b>Customer redressal –</b> We at CompanyVakil give upmost importance to customer’s satisfaction, that said we have a customer redressal team setup that outranks every other legal portal in the country, with an option to chat with our CEO if our team fails to fulfill your query.
            </p>
            <h3 class="text-blue upper text-center m-b-100"><b>Frequently asked questions</b></h3>
            <div>
                <h4><u>Patent Registration</u></h4>
                <h4>What is a Patent?</h4>
                <p>In simple words, A Patent is a Statutory Right given by the government for having a Monopoly over an Invention to the Patentee (i.e. the Applicant) for a limited period of time.</p>
                <hr>
                <h4>What can be Patented?</h4>
                <p>When a Trademark is Deceptively similar or identical to an existing Registered or Applied Trademark, that Trademark can’t be Registered.A patent can be either on an invented product or a process that is new and involves inventive steps and is capable of Industrial Application.</p>
                <hr>
                <h4>  When should I apply for a Patent, before or after the Publication of Invention?</h4>
                <p>It is advisable to apply a Patent before Publication of invention, i.e. the Invention should not be published or disclosed in public as that might be detrimental to its Novelty and won’t be considered Novel anymore. However, in few cases there is an option for grace of 12 months for Patent Application filing.</p>
                <hr>
                <h4>What is a Provisional Application for Patent?</h4>
                <p>Provisional Application is basically an Application filed with Provisional Specifications describing the Invention, which is useful for deciding the Priority date of the Invention. it is considered useful and important because it gives ample amount of time to the Applicant for assessing the Market. It has to be followed by a Complete Specification i.e. a Full Patent Application within a period of 12 Months or it holds no value post it and would be deemed to be Abandoned.</p>
                <hr>
                <h4>Is it mandatory to do a Provisional Patent Application before a Full and Complete Patent?</h4>
                <p>No, it is not mandatory to do a Provisional Patent Application, an Applicant can go for a full & Complete Patent Application by filing Complete Specifications of the Invention with the Patent Registry.</p>
                <hr>
                <h4>What is a Patent Search?</h4>
                <p>Patent Search is an extensive database search done by our Team of Experts to check whether there is already a similar patent existing in India or Internationally.</p>
                <hr>
                <h4>How long is a Patent Valid in India?</h4>
                <p>A Patent is valid for a Period of 20 Years from the date of Filing of Patent Application in India.
                </p>
                <hr>
            </div>
            <?php } ?>

        </div>
    </div>
</div>