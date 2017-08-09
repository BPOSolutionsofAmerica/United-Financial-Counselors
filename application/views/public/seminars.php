<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <base href="" />

    <!-- Basic Page Needs
     ================================================== -->
     <meta charset="utf-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Seminars - United Financial Counselors</title>
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
						<h1>Seminars</h1>
						<ul class="breadcrumbs">
							<li><a href="<?= base_url('');?>">Home</a></li>
							<li>Seminars</li>
						</ul>
					</div>
					<a href="<?= site_url('contact');?>" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
			<!-- COMPANY OVERVIEW -->
			
           	<div class="container">
				<h2 class="page-header text-center">Education and Seminar</h2>
					<div class="row">
						<h4 class="text-center"><b>We host several seminars a year. Keep checking back for our next seminar date.</b></h4>
					</div>	
					<div class="row">
						<div class="col-md-8 col-md-offset-2 animate fadeInLeft">
						<div class="embed-responsive embed-responsive-4by3">
						    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9_jMWPs1zuU"></iframe>
						</div> 
					
			
						</div>
					<!-- 	<div class="col-md-6 animate fadeInRight">
						<div class="embed-responsive embed-responsive-4by3">
		    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ndQpzCYfsAs?rel=0"></iframe>
		</div>
						</div> -->
					</div>
				
			
				
					<div class="row hidden">
						<div class="col-md-12">
							<div class="col-md-6">
								<h3 class="page-header"><i class="fa fa-check-square-o" aria-hidden="true"></i>Register for Seminar</h3>

								<form class="form-horizontal col-md-12 " action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">


									<input type=hidden name="oid" value="00DU0000000JEao">
									<!-- <input type=hidden name="retURL" value="http://unitedcounselors.org/v2/appointment"> -->
									<input type=hidden name="retURL" value="http://unitedcounselors.org/v2/seminars?req=success">

									<!--  ----------------------------------------------------------------------  -->
									<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
									<!--  these lines if you wish to test in debug mode.                          -->
									<!--  <input type="hidden" name="debug" value=1>                              -->
									<!--  <input type="hidden" name="debugEmail"                                  -->
									<!--  value="adrianne@unitedcounselors.org">                                  -->
									<!--  ----------------------------------------------------------------------  -->
									<?php 
									if(isset($_GET['req']))
									{
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
										<label for="zip" class="label-control">Interested In : <span>*</span></label>
										<select class="form-control"  id="00N0P000006LPmU" name="00N0P000006LPmU" title="Meeting Purpose" required>
											<option value="">--None--</option>
											<option value="PNC - Credit Repair">PNC - Credit Repair</option>
											<option value="PNC - Purchase">PNC - Purchase</option>


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

							<div class="col-md-6">

								<h3 class="page-header"><i class="fa fa-check-square-o" aria-hidden="true"></i>Seminar Details</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione unde ullam harum voluptates iusto voluptate minima fugit placeat voluptatum rem sapiente facere, quae modi delectus, asperiores ipsum vel ea velit dolore. Tempora officia aut ex totam laborum ipsam dolorem, numquam architecto. Unde sint quae, sed nam impedit magnam soluta et.


								</p>
								<br>
								<h4>Address :-</h4>


								<address>
									<strong>United Financial Counselors, Inc.</strong><br>
									2321 Hollywood Blvd <br>
									Hollywood, FL 33020 <br>
									<abbr title="Phone">P:</abbr> (954) 372-4370
								</address>

								<address>
									<strong>Email</strong><br>
									<a href="mailto:#">support@unitedcounselors.org</a>
								</address>

								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.697845505229!2d-71.06680168425075!3d42.3489649791877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a714bcef409%3A0x898806d3df102956!2sDoubleTree+by+Hilton+Hotel+Boston+Downtown!5e0!3m2!1sen!2s!4v1490885411484" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>

						<div class="col-md-6 hidden" >
							<h3 class="page-header"> <i class="fa fa-map-marker" aria-hidden="true"></i> Find Us!</h3>

						</div>
					</div>
				
				
				
				
		</div>		
				
				
				
				
			<?php include 'footer.php'; ?>