<div class="section_mgn">
	<div class="row">
		<div class="col-md-12 text-white">
			<div class="c_search m-b-100" style="margin-top: 15px; margin-bottom: 20px;">
				<h1 style="font-size: 21px !important;">Company Name Search / Trademark Public Search</h1>
				<div class="main-search-wrapper full-width">
					<form method="get" action="search/company">
						<div class="form-group has-feedback">
							<input type="text" class="form-control cmpny_input" name="value" value='<?php echo $directorQueryOneArray['directorName']?>' required disabled>
							<span class="form-control-feedback" aria-hidden="true">
							<button  type="submit" class="btn btn-default">
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

<style>

.divBlockParent{
overflow: auto;
}

.divBlockChild{
max-width: 50%;
direction: rtl;
}

.card{
padding: 3%;
}
</style>

<div class="section2" style=" margin-bottom: 50px;">
<div class="container">
<div class="section_mgn" style="margin-top: 70px;">
	<h1 class="text-blue upper text-center m-b-100" style="margin-bottom: 50px;"><b><?php echo $directorQueryOneArray['directorName']?></b><br><span style="color: #000000; font-size:14px; float:right; text-transform:capitalize;">About <?php echo $directorQueryOneArray['directorName']?>, As on <?php echo date("F d Y")?></span></h1>

	<p align="justify" style="padding-bottom : 30px;"><?php echo $directorQueryOneArray['directorName']?> is a Director / Partner registered by Registrar of Companies under Ministry of Corporate Affairs (MCA). Director’s Identification Number i.e. DIN of <?php echo $directorQueryOneArray['directorName']?> is <?php echo $directorQueryTwoArray['din']?>. For Obtaining a unique DIN Number <?php echo $directorQueryTwoArray['din']?> , <?php echo $directorQueryOneArray['directorName']?> had to register a DSC i.e. a Digital Signature Certificate with the Ministry of Corporate Affairs (MCA). Detailed information about <?php echo $directorQueryOneArray['directorName']?> is mentioned below with his/her Past and Current directorship holdings.</p>

	<div class="container">
		<div class="row">
			<div class="card col-md-12">
				<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Companies Associated With</h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<th>
								<h4>Company</h4>
							</th>
							<th>
								<h4>Designation</h4>
							</th>
							<th>
								<h4>Original Date of Appointment</h4>
							</th>
						</tr>
						<?php
						$otherCompanies = mysql_query("select * from companydirectors where din='".$directorQueryTwoArray['din']."'");
						if(mysql_num_rows($otherCompanies)>0)
						{
							while($otherCompaniesArray = mysql_fetch_array($otherCompanies))
							{
								$otherCompanyDetail = mysql_query("select * from company where cin='".$otherCompaniesArray['cin']."'");
								$otherCompanyDetailArray = mysql_fetch_array($otherCompanyDetail);
						?>
						<tr>
							<td>
								<h5><a href="company.php?id=<?php echo $otherCompaniesArray['cin'];?>"> <?php echo $otherCompanyDetailArray['companyName'];?></a></h5>
							</td>
							<td>
								<h5><?php echo $otherCompaniesArray['designation'];?></h5>
							</td>
							<td>
								<h5><?php echo $otherCompaniesArray['appointmentDate'];?></h5>
							</td>
						</tr>
						<?php
					}
				}
				else {
					?>
					<tr>
						<td colspan="4">
							<h5>No results found</h5>
						</td>
					</tr>
					<?php
				}?>
					</tbody>
				</table>
			</div>
		</div>

		<p style="padding-top: 10px;"><h3>Some important terms to be understood while evaluating the information about <?php echo $directorQueryOneArray['directorName']?> as a Director / Partner / Designated Partner in an entity</h3></p>
		<p>
			<ol>
				<li>
					Ministry of Corporate Affairs – Also known as MCA, it is the ministry that regulates the company law and various rules made under it. Basically every entity is first approved by the MCA and then finally its registered with the Ministry. So MCA is the body which issues the DIN Number to the concerned Director/Partner, like the DIN issued to <?php echo $directorQueryOneArray['directorName']?> post registration is <?php echo $directorQueryTwoArray['din']?>.
				</li>
				<li>
					Director’s Identification Number (DIN) –Director’s Identification Number or DIN is a unique 8 Digit number allotted by the Ministry of corporate Affairs to the concerned person applying for the same. DIN has a life-long validity once created and can be accessed anytime via MCA’s Master Data Base. For e.g. DIN allotted to Dir. or Partner <?php echo $directorQueryOneArray['directorName']?> is <?php echo $directorQueryTwoArray['din']?>.
				</li>
				<li>
					Digital Signature Certificate (DSC) – Digital Signature Certificate, commonly known as a DSC is an encrypted signature owned by a specific person, which can be accessed ones a particular password is inserted. Its basically a digital equivalent i.e. an electronic format of a physical signature by a person. So the same is a mandatory requirement for any Dir. or partner into a Company or an LLP respectively i.e. why a DSC is owned by <?php echo $directorQueryOneArray['directorName']?>.
				</li>
				<li>
					Partner – Partner is a person who partially owns a particular business and has specific share fixed in that entity. Then Partnership entity’s registered with the MCA are called Limited Liability Partnership and the owner of the entity are called as Designated Partners to the concerned LLP.
				</li>
				<li>
					Appointment Date – Appointment Date is the date on which a person is appointed as director of a Company, <?php echo $directorQueryOneArray['directorName']?> has been appointed as a Director / Partner to the entities mentioned above with the Appointment Dates written next to it.
				</li>
				<li>
					Board of Directors – BOD is a Collective body of a group of Managers of an organisation known as Directors, and they are the people running the organisation by jointly overseeing the activities of the Company and generating revenue for the organization. They are the representative of Shareholders of a company. So as per the details stated above <?php echo $directorQueryOneArray['directorName']?> having DIN <?php echo $directorQueryTwoArray['din']?> might be part of the BOD’s of Companies mentioned above.
				</li>
				<li>
					Share Holders – Shareholders are the owners of a company, basically they own a certain stake into a company because they hold a particular amount of its Share.
				</li>
				<li>
					Director (i.e Dir.) – Directors are those individuals, who are incharge of a concerned Company, they run, control, direct and manage the venture’s operation and they even act as agents of the organization for conducting transactions on Company’s behalf. They are also considered as Trustees to the Company’s money and properties. Director is a Company’s representative for the outside world, so he has to be a careful, honest, rational and diligent individual towards the entity. A Dir. is appointed via specific Appointment process stated by MCA and once they are registered with MCA they are issued a DIN like <?php echo $directorQueryOneArray['directorName']?> has been issued a unique DIN <?php echo $directorQueryTwoArray['din']?>, and only then <?php echo $directorQueryOneArray['directorName']?> became eligible to be appointed as a Director in the concerned entity.
				</li>
			</ol>
		</p>

		<p style="padding-top: 10px;"><h3>Role of <?php echo $directorQueryOneArray['directorName']?> as a Director / Partner in the Concerned Entities</h3></p>
		<p>
			As stated above Director / Partner is the force that runs an Organization. And to become the force that runs the whole entity, there has to be certain powers vested in the hands of a Dir. or the board or the Designated Partner. <br>Company-Law has clearly defined the powers vested in the hands of a Partners / Directors like <?php echo $directorQueryOneArray['directorName']?> and because of these powers they are eligible to have following roles in an Organization :-</p>
		<p>
			<ul>
				<li>
					<?php echo $directorQueryOneArray['directorName']?>’s Role as an Agent – Director acts as an Agent of a  Company, he is the person who conducts all the business activities of the Company. He/she acts as the main representative of the entity. So this is how <?php echo $directorQueryOneArray['directorName']?> the director acts as an agent of the organisation.
				</li>
				<li>
					<?php echo $directorQueryOneArray['directorName']?>’s Role as an Employee – Generally a Director of a company is in a service Contract with the company and that makes the Director an Employee to the company. As they become employee to a Company they become fully eligible to draw their remuneration from the organization.
				</li>
				<li>
					<?php echo $directorQueryOneArray['directorName']?>’s Role as a Trustee – A Director of a company has a fiduciary relationship with the organization, that means that he/she works only in favor and for the benefit of a Company. There is a high level of Trust factor involved between the Dir. and the concerned entity. Director or the BOD acts as a trustee to the entity because they act as the caretakers of the Company’s money and property, they keep all the business’s assets and liabilities in a check and safeguard the same on behalf of the Company. So <?php echo $directorQueryOneArray['directorName']?> (<?php echo $directorQueryTwoArray['din']?>) even acts a Trustee to the mentioned company.
				</li>
				<li>
					<?php echo $directorQueryOneArray['directorName']?>’s Role as an Officer – A Company’s Director generally holds a specific position in the company and that position defines the duty of the Director The position can be anything ranging from an MD to CEO to president etc. A Director-acts as an Officer the moment he/she has been allotted their role in the Organisation and the director or the BOD are the ones responsible for all the everyday activities of the corporation. So as stated above <?php echo $directorQueryOneArray['directorName']?> holding DIN Number <?php echo $directorQueryTwoArray['din']?>, would also be considered as an Officer of the corporation.
				</li>
			</ul>
			<p>These are some of the roles that a Director or a Board of Directors abide by, while being part of a Corporation.</p>
		</p>

		<p style="padding-top: 10px;"><h3><?php echo $directorQueryOneArray['directorName']?> (DIN – <?php echo $directorQueryTwoArray['din']?>)  can also be any of the following types of Director or Partner in his/her future ventures</h3></p>
		<p>
			So the various types of Partners and Directors in a corporation are explained as follows:-</p>
		<p>
			<ol>
				<li>
					Resident Directors – Every company is bound to have atleast 1 Resident director i.e. a person who has stayed in India for not less than 182 days in the previous calendar year. So if <?php echo $directorQueryOneArray['directorName']?> has stayed in India for not less then 182 Days in Previous Calendar year he would be treated as one the Resident Directors.
				</li>
				<li>
					Independent Directors – An Independent Director (Ind. Dir.) is the one other than an MD, Whole Time or Nominee Director. There are certain classes of Companies which have to appoint Independent Dir. and the same is mentioned under the Companies (Appointment and Qualification of Directors) Rules, 2013 . So if <?php echo $directorQueryOneArray['directorName']?> falls under a certain Class as per the rules under the concerned law then he would qualify for being an Ind. Dir. To know if <?php echo $directorQueryOneArray['directorName']?> having DIN <?php echo $directorQueryTwoArray['din']?>, qualifies as an Independent Director, you can consult our Company Vakil Experts.
				</li>
				<li>
					Small Shareholders Directors – A listed organisation may allow one Director to be elected by small shareholders of the organization. A Small Shareholder Director is elected on a notice by minimum of 1000 Small Shareholder or 10% of total small shareholders, which ever is lower. To know if <?php echo $directorQueryOneArray['directorName']?> Qualifies for the same or is his Company a listed organisation consult our expert Chartered Accountants and Advocates.
				</li>
				<li>
					Women Director – In certain scenarios as per law, atleast 1 woman director becomes compulsory for a company. All necessary directions for the same have been defined and described clearly under Company Law.
				</li>
				<li>
					Additional Directors – A Company can appoint an Individual as an Additional Director (Add. Dir.) for a period of 1 year until the next AGM of the organisation and if there is an absence of Annual General Meeting then this director would retire on the scheduled date of the AGM. To know if <?php echo $directorQueryOneArray['directorName']?> having DIN <?php echo $directorQueryTwoArray['din']?> is an Additional Director into the Company, contact our Consultants.
				</li>
				<li>
					Nominee Director – A Nominee Director can be appointed by 3rd parties via Contractual Agreements, or by a specific Class of Shareholders, or even by the Central Government in case of any mismanagement or oppression. To check whether the Organisation of <?php echo $directorQueryOneArray['directorName']?> (DIN <?php echo $directorQueryTwoArray['din']?>) has any Nominee Director or if <?php echo $directorQueryOneArray['directorName']?> is himself/herself the one appointed as a Nominee  Dir., Consult our Lawyers.
				</li>
				<li>
					Shadow Director – An individual which is not appoint as a Director to the BOD, but the board is accustomed to act on his/her direction. But this holds true only If the concerned person is not giving any direction in its professional capacity. If you wish to find out that <?php echo $directorQueryOneArray['directorName']?> with DIN number <?php echo $directorQueryTwoArray['din']?> is a Shadow Director or not, you can contact our legal experts.
				</li>
				<li>
					Executive Director – An Executive Dir. is either a Whole time Director (WTD) or an MD appointed by the Company and the MD has certain powers to manage the whole organisation. To check whether <?php echo $directorQueryOneArray['directorName']?> (DIN <?php echo $directorQueryTwoArray['din']?>) is eligible to be an Executive Director in his/her future endeavors contact our Experts.
				</li>
				<li>
					Non-Executive Director – An Individual who is neither a WTD nor an MD of the organisation. To know if <?php echo $directorQueryOneArray['directorName']?> (DIN <?php echo $directorQueryTwoArray['din']?>) would be a Non-Executive Director in his/her future endeavors contact our Company Vakil Experts.
				</li>
				<li>
					General Partner – A General Partner is a partner having Unlimited Liability for debts incurred in a business, they are basically the members of a partnership firm and have unlimited liability. You can check the details above if <?php echo $directorQueryOneArray['directorName']?> is a General Partner or not.
				</li>
				<li>
					Limited Partner – Limited Partner is an Individual whose liability is limited to the extent of money they introduce in a venture. Basically it means that the Liability of a Partner is Limited legally upto the level of debt in an business. Details about <?php echo $directorQueryOneArray['directorName']?> being a Limited Partner or not is mentioned above, do check it for the same or you can consult our experts for guidance.
				</li>
				<li>
					Designated Partner – In case of an LLP i.e. Limited Liability Partnership, all the partners in the business are either Individuals or Body incorporates and they are all considered as Designated Partners to their Business happening under that LLP. All the details about <?php echo $directorQueryOneArray['directorName']?> (DIN 03320962 (DIN)) is mentioned above, do check out if he/she is a Designated Partner.
				</li>
			</ol>
			<p>For more details about <?php echo $directorQueryOneArray['directorName']?> feel free to contact Company Vakil Legal Experts.</p>
		</p>

	</div>

</div>
</div>
</div>