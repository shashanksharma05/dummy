<div class="section_mgn">
	<div class="row">
		<div class="col-md-12 text-white">
			<div class="c_search m-b-100" style="margin-top: 15px; margin-bottom: 20px;">
				<h1 style="font-size: 21px !important;">Company Name Search / Trademark Public Search</h1>
				<div class="main-search-wrapper full-width">
					<form method="get" action="search/company">
						<div class="form-group has-feedback">
							<input type="text" class="form-control cmpny_input" name="value" value='<?php echo $companyArray['companyName'];?>' required disabled>
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
}

.card{
padding: 3%;
}

.cardUpDown{
margin-bottom: 20px;
}

</style>

<div class="section2" style=" margin-bottom: 50px;">
<div class="container">
<div class="section_mgn" style="margin-top: 70px;">
	<h1 class="text-blue upper text-center m-b-100" style="margin-bottom: 50px;"><b><?php echo $companyArray['companyName'];?></b><br><span style="color: #000000; font-size:16px; float:right; text-transform:capitalize;">As on <?php echo date("F d Y");?></span></h1>

	<p align="justify"><?php echo $companyArray['companyName'];?>, is an entity incorporated on <?php echo $companyArray['incorporationDate'];?> under Ministry of Corporate Affairs (MCA). <?php echo $companyArray['companyName'];?> is also an entity listed under Class as a <?php echo $companyArray['companyClass'];?> organization having Registration Number for the Company or Limited Liability Partnership as <?php echo $companyArray['registrationNumber'];?>. </p>
	<p align="justify"><?php echo $companyArray['companyName'];?> is a <?php echo $companyArray['companySubCategory'];?> and further <?php echo $companyArray['companyName'];?> is Classified as a <?php echo $companyArray['companyCategory'];?>. The concerned entity is incorporated and registered under its relevant statue by the Registrar of Companies (i.e. R.O.C), <?php echo $companyArray['roc'];?>. The official address for the Registered office of the organization in question i.e. <?php echo $companyArray['companyName'];?> is <?php echo $companyArray['address'];?>.</p>
	<p align="justify">As per the information with Registrar of Companies, <?php echo $companyArray['roc'];?> under Ministry of Corporate Affairs(MCA), <?php echo $companyArray['companyName'];?> has a corporate Identification Number i.e. CIN as <?php echo $companyArray['cin'];?> and is a <?php echo $companyArray['companyClass'];?> Entity i.e. a <?php echo $companyArray['companyCategory'];?> having an Authorised Share Capital of Rs. <?php echo $companyArray['authorised'];?> and Paid up Share Capital of Rs. <?php echo $companyArray['paidUp'];?> having <?php echo $companyArray['noOfMembers'];?> Members and is currently <?php echo $companyArray['listing'];?> organization. <?php echo $companyArray['companyName'];?>'s main objective is <?php echo $companyArray['activity'];?> and work to be done under the same is <?php echo $companyArray['activity'];?>. The latest Annual General Meeting of <?php echo $companyArray['companyName'];?> was last held on <?php echo $companyArray['dataOfLastAnnualGeneralMeening'];?> and the Balance sheet was last updated on <?php echo $companyArray['dataOfLastBalanceSheet'];?>.
	</p>
	<p align="justify" style="padding-bottom : 30px;">Directors are basically the people or the force running the Entity i.e. the Decision makers of the concerned organization and the Directors of <?php echo $companyArray['companyName'];?> are <?php echo $directorsAll;?>. As per the Contact information with the MCA, the email address in the Registrar of Companies (R.O.C) records for the above entity is <?php echo $companyArray['email'];?>.The Current Status of the <?php echo $companyArray['companyName'];?> as per MCA Records is - <?php echo $companyArray['status'];?>.
	</p>

	<div class="row">
		<div class="col-md-6">
			<div class="card col-md-12 cardUpDown">
				<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Company Details</h2>
				<div class="divBlockParent">
					CIN
					<div class="fright divBlockChild"><?php echo $companyArray['cin'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Company Name
					<div class="fright divBlockChild" style="direction: rtl;"><?php echo $companyArray['companyName'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Company Status
					<div class="fright divBlockChild" style="color:#553eda"><?php echo $companyArray['status'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					RoC
					<div class="fright divBlockChild"><?php echo $companyArray['roc'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Registration Number
					<div class="fright divBlockChild"><?php echo $companyArray['registrationNumber'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Company Category
					<div class="fright divBlockChild"><?php echo $companyArray['companyCategory'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Company Sub Category
					<div class="fright divBlockChild"><?php echo $companyArray['companySubCategory'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Class of Company
					<div class="fright divBlockChild"><?php echo $companyArray['companyClass'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Date of Incorporation
					<div class="fright divBlockChild"><?php echo $companyArray['incorporationDate'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Age of Company
					<div class="fright divBlockChild"><?php echo $ageCompany;?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Activity
					<div class="fright divBlockChild"><?php echo $companyArray['activity'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Number of Members
					<div class="fright divBlockChild"><?php echo $companyArray['noOfMembers'];?></div>
				</div>
			</div>
			<div class="card col-md-12 cardUpDown">
				<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Share Capital & Number of Employees</h2>
				<div class="divBlockParent">
					Authorised Capital
					<div class="fright divBlockChild"> ?<?php echo substr($companyArray['authorised'],1);?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Paid up capital
					<div class="fright divBlockChild"> ?<?php echo substr($companyArray['paidUp'],1);?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Number of Employees
					<div class="fright divBlockChild"> <?php echo $companyArray['noOfMembers'];?></div>
				</div>
			</div>
			<div class="card col-md-12 cardUpDown">
				<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Listing and Annual Compliance Details</h2>
				<div class="divBlockParent">
					Listing status
					<div class="fright divBlockChild"> <?php echo $companyArray['listing'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Date of Last Annual General Meeting
					<div class="fright divBlockChild"> <?php echo $companyArray['dataOfLastAnnualGeneralMeening'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Date of Latest Balance Sheet
					<div class="fright divBlockChild"> <?php echo $companyArray['dataOfLastBalanceSheet'];?></div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card col-md-12 cardUpDown">
				<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Legal Report</h2>
				<div class="divBlockParent">
					View all criminal and civil cases of "MONDEO" PROCESSORS AND MANUFACTURERS PRIVATE LIMITED
				</div>
				<br>
				<a class="btn btn-orange m-r-30">Purchase Legal Report</a>
			</div>
			<div class="card col-md-12 cardUpDown">
				<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Financial Report</h2>
				<div class="divBlockParent">
					<b>Balance Sheet</b>
				</div>
				<hr>
				<div class="divBlockParent">
					Paid-up Capital
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Reserves & Surplus
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Long Term Borrowings
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Short Term Borrowings
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Trade Payabales
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Current Investments
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Inventories
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Trade Receivables
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Cash and Bank Balances
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr><br>
				<div class="divBlockParent">
					<b>Profit & Loss</b>
				</div>
				<hr>
				<div class="divBlockParent">
					Total Revenue (Turnover)
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Total Expenses
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Employee Benefit Expenses
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Finance Costs
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Depriciation
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Profit Before Tax
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Profit After Tax
					<div class="fright divBlockChild"><i class="fas fa-user-lock"></i></div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="card col-md-12 cardUpDown">
			<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Contact Details</h2>
			<div class="col-md-6">
				<div class="divBlockParent">
					Email ID:
					<div class="fright divBlockChild"> <?php echo $companyArray['email'];?></div>
				</div>
				<hr>
				<div class="divBlockParent">
					Website:
					<div class="fright divBlockChild"> -</div>
				</div>
				<hr>
				<div class="divBlockParent">
					Address:
					<div class="fright divBlockChild"> <?php echo $companyArray['address'];?></div>
				</div>
			</div>
			<div class="col-md-6">
				//
			</div>
		</div>
	</div>

	<div class="row">
		<div class="card col-md-12 cardUpDown">
			<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Director Details</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<td><strong>DIN</strong></td>
							<td><strong>Director Name</strong></td>
							<td><strong>Designation</strong></td>
							<td><strong>Appointment Date</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php
						while($directorCompanyArray = mysql_fetch_array($directorCompany))
						{
							$directorNameTable = mysql_query("select * from directors where din='".$directorCompanyArray['din']."'");
							$directorNameTableArray = mysql_fetch_array($directorNameTable);
						?>
						<tr class="accordion-toggle main-row">
							<td>
								<p><?php echo $directorCompanyArray['din'];?></p>
							</td>
							<td>
								<p><a href="director.php?id=<?php echo $directorNameTableArray['Id']?>"> <?php echo $directorNameTableArray['directorName'];?></a></p>
							</td>
							<td>
								<p><?php echo $directorCompanyArray['designation']?></p>
							</td>
							<td>
								<p><?php echo $directorCompanyArray['appointmentDate']?></p>
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
		</div>
	</div>
	<!--
	<div class="row">
		<div class="card col-md-12 cardUpDown">
			<h2 class="text-center" style="margin-top: 10px; margin-bottom: 20px;">Companies with Similar Address</h2>
			<table id="results" class="table table-striped col-md-12 col-sm-12 col-xs-12">
				<thead>
					<tr>
						<th>
							<h4>CIN</h4>
						</th>
						<th>
							<h4>Name</h4>
						</th>
						<th>
							<h4>Address</h4>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<h5>U74900DL2010PTC198324</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/CIENA-COMMUNICATIONS-INDIA-PRIVATE-LIMITED/U74900DL2010PTC198324">CIENA COMMUNICATIONS INDIA PRIVATE LIMITED</a></td>
						<td>Kochhar &amp; Co., Suite/Unit No.1120-1121, 11th Floor DLF Tower A, Jasola District Center New Delhi New Delhi DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U72200DL2005PTC138035</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/CIENA-INDIA-PRIVATE-LIMITED/U72200DL2005PTC138035">CIENA INDIA PRIVATE LIMITED</a></td>
						<td>Kochhar &amp; Co.,Suite/Unit No.1120-1121, 11th Floor DLF Tower A, Jasola District Center New Delhi New Delhi DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U70101DL1997PTC090431</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/CUSHMAN-AND-WAKEFIELD-INDIA-PRIVATE-LIMITED/U70101DL1997PTC090431">CUSHMAN AND WAKEFIELD INDIA PRIVATE LIMITED</a></td>
						<td>JA 1120 and JA 1121, 11th Floor, Tower A, DLF Towers Jasola, Jasola District Centre New Delhi New Delhi DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U74140DL2004PTC126112</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/CUSHMAN-AND-WAKEFIELD-PROPERTY-MANAGEMENT-SERVICES-INDIA-PRIVATE-LIMITED/U74140DL2004PTC126112">CUSHMAN AND WAKEFIELD PROPERTY MANAGEMENT SERVICES INDIA PRIVATE LIMITED</a></td>
						<td>JA 1120 and JA 1121, 11th Floor, Tower A, DLF Towers Jasola, Jasola District Centre New Delhi New Delhi DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U74900DL2007PTC166095</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/CONFIAR-CONSULTANTS-INDIA-PRIVATE-LIMITED/U74900DL2007PTC166095">CONFIAR CONSULTANTS INDIA PRIVATE LIMITED</a></td>
						<td>1120-1121, 11TH FLOOR, TOWER-A DLF TOWERS JASOLA, JASOLA DISTRICT CENTER NEW DELHI DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U74920DL2005PTC142140</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/KOCHHAR-INVESTIGATION-SERVICES-PRIVATE-LIMITED/U74920DL2005PTC142140">KOCHHAR INVESTIGATION SERVICES PRIVATE LIMITED</a></td>
						<td>1120-1121, 11TH FLOOR, TOWER-A DLF TOWERS JASOLA, JASOLA DISTRICT CENTER NEW DELHI DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U93000DL2012PTC230282</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/DRS-DISASTER-RESPONSE-SYSTEMS-PRIVATE-LIMITED/U93000DL2012PTC230282">DRS DISASTER RESPONSE SYSTEMS PRIVATE LIMITED</a></td>
						<td>Suite No. 1120 - 1121, 11th Floor, Tower - A, DLF Towers Jasola, Jasola District Center Delhi South Delhi DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U80302DL2009PTC195037</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/MOUNTBATTEN-BUSINESS-INSTITUTE-PRIVATE-LIMITED/U80302DL2009PTC195037">MOUNTBATTEN BUSINESS INSTITUTE PRIVATE LIMITED</a></td>
						<td>11th Floor, Tower A, DLF Towers Jasola, Jasola District Center New Delhi New Delhi DL 110025 IN</td>
					</tr>
					<tr>
						<td>
							<h5>U25111DL1998PTC095032</h5>
						</td>
						<td><a href="https://www.zaubacorp.com/company/MICHELIN-INDIA-PRIVATE-LIMITED/U25111DL1998PTC095032">MICHELIN INDIA PRIVATE LIMITED</a></td>
						<td>Unit 1120 -21 11th Floor Tower A DLF Towers Jasola District Center New Delhi South Delhi DL 110025 IN</td>
					</tr>
				</tbody>
			</table>


		</div>
	</div>
-->

</div>
</div>
</div>