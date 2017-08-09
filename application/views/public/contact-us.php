<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <base href="" />

    <!-- Basic Page Needs
     ================================================== -->
     <meta charset="utf-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Contact Us - United Financial Counselors</title>
     <meta name="description" content="Contact United Financial Counselors for your queries and consultation.">
     <meta name="keywords" content="">
    

     <?php include 'header.php'; ?>
     
    
    
</head>
    <body class="fixed-header two">
            
            <?php require 'navigation.php'; ?>
<section class="subpage-header">
				<div class="container" style="margin-top: 30px;">
					<div class="site-title clearfix">
						<h1>Contact Us</h1>
						<ul class="breadcrumbs">
							<li><a href="<?= base_url('');?>">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<a href="<?= site_url('contact');?>" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>	
		<div class="container">		
		<div class="row">
						<div class="col-md-6">
							<div class="map-with-address-widget animate fadeInLeft">
								<h3>Florida (Main Office)</h3>
								
								
								<div class="map" id="map">		
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7171.231056804589!2d-80.151946!3d26.013409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ab9801352159%3A0x5dddd5af9bcfccc2!2s2321+Hollywood+Blvd%2C+Hollywood%2C+FL+33020!5e0!3m2!1sen!2sus!4v1486566376613" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
							
								<div class="contact-info-widget">
									<p><strong>Phone:</strong> 954-372-4370<br>
									<strong>Fax:</strong> 786-288-5322<br>
									<strong>Toll Free:</strong> 877-509-3160<br>
									<strong>Office hours:</strong> (M-F) 9am - 6pm<br>
									<strong>Email:</strong> <a href="#">adrianne@unitedcounselors.org </a><br>
									<strong>Address:</strong> 2321 Hollywood Blvd Hollywood, FL 33020
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="map-with-address-widget animate fadeInRight">
								<h3>Connecticut (Branch Office)</h3>
								
								<div class="map" id="map2">
								
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.4657485282974!2d-73.21268448428108!3d41.21161977928064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e80eea1476da85%3A0x6ff70b76c4c28491!2s3715+Main+St+%23406%2C+Bridgeport%2C+CT+06606!5e0!3m2!1sen!2sus!4v1486566517477" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								
								</div>
								
								<div class="contact-info-widget">
									<p><strong>Phone:</strong> 203-683-1590<br>
									
									<strong>Fax:</strong> 203-683-1599<br>
									<strong>Toll Free:</strong> 877-509-3160<br>
									<strong>Office hours:</strong> (M-F) 9am - 6pm<br>
									<strong>Email:</strong> <a href="#"> marc@unitedcounselors.org  </a><br>
									<strong>Address:</strong> 3715 Main Street & Suite 406 Bridgeport, CT 06606
									</p>
								</div>
							</div>
						</div>
					</div>
		
		</div>
		   <section class="bg-blue">
		<div class="container">
		<div class="row">
						
						<!-- <div class="col-md-8 col-sm-8 animate fadeInRight">
							<p class="success" id="success" style="display:none;"></p>
							<p class="error" id="error" style="display:none;"></p>
						
							<form class="contact-form" name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input">
									</div>
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="Phone No" name="contact_phone" id="contact_phone" class="input">
									</div>
								</div>
								<textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea>
								<button class="btn btn-primary" name="" type="submit" data-text="Send Message" onClick="validateContact();">Send Message</button>
							</form>
						</div> -->
							<div class="col-md-8 col-sm-8 animate fadeInRight">
							<p class="success" id="success" style="display:none;"></p>
							<p class="error" id="error" style="display:none;"></p>
						
							<form class="contact-form" name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="First name" name="first_name" id="first_name" class="input">
									</div>
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="Last name" name="last_name" id="last_name" class="input">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="Phone No" name="phone" id="phone" class="input">
									</div>
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="E-mail Address" name="email" id="email" class="input">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<select name="meeting_purpose" id="meeting_purpose" class="form-control" >
										<option value="">Select Meeting Purpose</option>
										<option value="PNC Credit">PNC Credit</option>
										<option value="PNC Modification">PNC Modification</option>
										<option value="PNC Purchase">PNC Purchase</option>
										<option value="PNC- Short Sale">PNC- Short Sale</option>
										<option value="PNC Refinance">PNC Refinance</option>
										<option value="PNC- Business Credit">PNC- Business Credit</option>
										</select>
									</div>
									
								</div>
								<!-- <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="" class="label-control">Which services are you interested in?</label>
										</div>
										<div class="col-md-6">
											<div class="checkbox">
												<label >
													<input type="checkbox" name="services[]" id="" value="Budget and Final Freedom Counseling" > Budget & Financial Freedom Counseling
												</label>
											</div>

											<div class="checkbox">
												<label >
													<input type="checkbox" name="services[]" id="" value="Foreclosure Prevention Counseling">  Foreclosure Prevention Counseling
												</label>
											</div>

											<div class="checkbox">
												<label >
													<input type="checkbox" name="services[]" id="" value="Pre and Post Bankruptcy Counseling"> Pre & Post Bankruptcy Counseling
												</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="checkbox">
												<label >
													<input type="checkbox" name="services[]" id="" value="Home-buyer Education Programs">  Home-buyer Education Programs
												</label>
											</div>

											<div class="checkbox">
												<label >
													<input type="checkbox" name="services[]" id="" value="Credit Review Counseling" 
													> Credit Review Counseling
												</label>
											</div>

											<div class="checkbox">
												<label >
													<input type="checkbox" name="services[]" id="" value="Have Us Speak At Your Event"> Have Us Speak At Your Event
												</label>
											</div>
										</div>
									</div>
								</div> -->
								<textarea data-delay="500" class="required valid" placeholder="Question & Comments" name="message" id="message"></textarea>
								<button class="btn btn-primary" name="" type="submit" data-text="Send Message" onClick="validateContact();">Send Message</button>
								<div class="clearfix"></div>
								<div class="form-group col-sm-6 pull-right" id='contact_msg'>
											
										</div>
							</form>
						</div>
					</div>
		</div>
			<div class="height-40"></div>
			</section>
		
		
			



<?php include 'footer.php'; ?>