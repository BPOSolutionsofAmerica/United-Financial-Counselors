<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <base href="" />

    <!-- Basic Page Needs
     ================================================== -->
     <meta charset="utf-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Appointment - United Financial Counselors</title>
     <meta name="description" content="Check seminars schedule of United Financial Counselors. Attend our seminar and get knowledge about your home buying financial needs.
">
     <meta name="keywords" content="">
    

     <?php include 'header.php'; ?>
     
    
    
</head>
    <body class="fixed-header two">
            
            <?php require 'navigation.php'; ?>
 <section class="subpage-header">
				<div class="container" style="margin-top: 30px;">
					<div class="site-title clearfix">
						<h1>Appointment</h1>
						<ul class="breadcrumbs">
							<li><a href="<?= base_url('');?>">Home</a></li>
							<li>Appoitment</li>
						</ul>
					</div>
					<a href="<?= site_url('contact');?>" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
			<!-- COMPANY OVERVIEW -->
			
           	<div class="container">
				<h2 class="page-header text-center">Schedule An Appointment</h2>
				
				
				
				
			<div class="row">
	<!-- <div class="col-md-8 col-md-offset-2">
	
		<h3 class="page-header"><i class="fa fa-check-square-o" aria-hidden="true"></i>Register for Appointment</h3>
			<form action="" class="form-horizontal col-md-12 ">
		
				<div class="form-group">
				<label for="" class="label-control">First name : <span>*</span></label>
				<input type="text" class="form-control" name="fname">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Last name : <span>*</span></label>
				<input type="text" class="form-control" name="lnane">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Preferred phone : <span>*</span></label>
				<input type="text" class="form-control" name="pphone">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Alternate phone : </label>
				<input type="text" class="form-control" name="altphone">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Email : <span>*</span></label>
				<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Meeting purpose : <span>*</span></label>
				<input type="text" class="form-control" name="meetpurpose">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Address : <span>*</span></label>
				<input type="text" class="form-control" name="address">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Preferred Date : <span>*</span></label>
				<input type="text" class="form-control" name="pdate">
				</div>
				<div class="form-group">
				<label for="" class="label-control">Preferred Time :</label> <br>
		
				<ul style="list-style-type: none;">
					<li>
						<label for="" class="radio-inline">
						<input type="radio" name="ptime" id="" value="Morning"> Morning
						</label>
					</li>
					<li>
						<label for="" class="radio-inline">
						<input type="radio" name="ptime" id="" value="Afternoon"> Afternoon
						</label>
					</li>
					<li>
						<label for="" class="radio-inline">
						<input type="radio" name="ptime" id="" value="Evening"> Evening
						</label>
					</li>
					
				</ul>
				</div>
				<div class="form-group">
				<label for="" class="label-control">How did you hear about us ? <span>*</span></label>
				<input type="text" class="form-control" name="hearaboutus">
				</div>
				
		
				
				<hr>
				<div class="form-group ">
				
		<button data-text="submit" class="btn btn-primary pull-right">submit</button>
				<p class="help-text"><span>*</span> Mandatory Fields</p>
				</div>
			</form>
	</div> -->

	<div class="col-md-8 col-md-offset-2">
	<?php 
	$tracking_code = "<!-- Google Code for Appointments Conversion Page --> <script type='text/javascript'>
/* <![CDATA[ */
var google_conversion_id = 850233254;
var google_conversion_language = 'en';
var google_conversion_format = '3';
var google_conversion_color = 'ffffff';
var google_conversion_label = 'JIpBCOP-vHMQpo-2lQM'; var google_remarketing_only = false;
/* ]]> */
</script>
<script type='text/javascript'  
src='//www.googleadservices.com/pagead/conversion.js'>
</script>
<noscript>
<div style='display:inline;'>
<img height='1' width='1' style='border-style:none;' alt=''  
src='//www.googleadservices.com/pagead/conversion/850233254/?label=JIpBCOP-vHMQpo-2lQM&amp;guid=ON&amp;script=0'/>
</div>
</noscript>
";
	if(isset($_GET['req']))
	{
		echo $tracking_code;
		if ($_GET['req'] == 'success') {
		?>
	
	

		<div class="form-group">	
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Success !</strong> Your Request has been successfully sent. thankyou
		</div>
	</div>

	<?php
	}
	}
	else
	{

	}

	 ?>
	
	
		<!--  ----------------------------------------------------------------------  -->
		<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
		<!--  If necessary, please modify the charset parameter to specify the        -->
		<!--  character set of your HTML page.                                        -->
		<!--  ----------------------------------------------------------------------  -->

		<!-- <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8"> -->

			<!--  ----------------------------------------------------------------------  -->
			<!--  NOTE: Please add the following <FORM> element to your page.             -->
			<!--  ----------------------------------------------------------------------  -->

			<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

				<input type=hidden name="oid" value="00DU0000000JEao">
				<!-- <input type=hidden name="retURL" value="http://unitedcounselors.org/v2/appointment"> -->
				<input type=hidden name="retURL" value="http://unitedcounselors.org/v2/appointment?req=success">

				<!--  ----------------------------------------------------------------------  -->
				<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
				<!--  these lines if you wish to test in debug mode.                          -->
				<!--  <input type="hidden" name="debug" value=1>                              -->
				<!--  <input type="hidden" name="debugEmail"                                  -->
				<!--  value="adrianne@unitedcounselors.org">                                  -->
				<!--  ----------------------------------------------------------------------  -->
				<div class="form-group">
					<label for="first_name" class="label-control">First name : <span>*</span></label>
					<input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required/>

				</div>
				<div class="form-group">
					<label for="last_name" class="label-control">Last Name : <span>*</span></label>
					<input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required/>

				</div>

				<div class="form-group">
					<label for="phone" class="label-control">Phone : <span>*</span></label>
					<input  id="phone" maxlength="40" name="phone" size="20" type="text" required />

				</div>
				<div class="form-group">
					<label for="mobile" class="label-control">Mobile : <span>*</span></label>
					<input  id="mobile" maxlength="40" name="mobile" size="20" type="text" required />
				</div>
				<div class="form-group">
					<label for="email" class="label-control">Email : <span>*</span></label>
					<input  id="email" maxlength="80" name="email" size="20" type="text" required />
				</div>
				<div class="form-group">
					<label for="street" class="label-control">Street : <span>*</span></label>
					<textarea name="street" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="city" class="label-control">City : <span>*</span></label>
					<input  id="city" maxlength="40" name="city" size="20" type="text" required/>
				</div>
				<div class="form-group">
					<label for="state" class="label-control">State/Province : <span>*</span></label>
					<input  id="state" maxlength="20" name="state" size="20" type="text" required />
				</div>
				<div class="form-group">
					<label for="zip" class="label-control">Zip : <span>*</span></label>
					<input  id="zip" maxlength="20" name="zip" size="20" type="text" required/>
				</div>
				<div class="form-group">
					<label for="zip" class="label-control">Meeting Purpose : <span>*</span></label>
					<select class="form-control"  id="00N0P000006LPmU" name="00N0P000006LPmU" title="Meeting Purpose" required>
						<option value="">--None--</option>
						<option value="PNC - Credit Repair">PNC - Credit Repair</option>
						<option value="PNC - Mod">PNC - Mod</option>
						<option value="PNC - Purchase">PNC - Purchase</option>
						<option value="PNC - Short Sale">PNC - Short Sale</option>
						<option value="PNC - Refi">PNC - Refi</option>
						<option value="PNC - Business Credit">PNC - Business Credit</option>
					</select>
				</div>
				<div class="form-group">
					<label for="zip" class="label-control">How did you hear about Us ?<span>*</span></label>
					<input  id="00N0P000006LPnm" maxlength="100" name="00N0P000006LPnm" size="20" type="text" class="form-control" required />
				</div>



				<div class="form-group ">

					<button data-text="submit" class="btn btn-primary pull-right">submit</button>
					<p class="help-text"><span>*</span> Mandatory Fields</p>
				</div>
				<!-- <input type="submit" name="submit" class="btn btn-primary"> -->

			</form>

		</div>

	</div>

				
				
				
		</div>		
				
				
				
				
			<?php include 'footer.php'; ?>