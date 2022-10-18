<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<style>
		.has-error {

			border-color: 	 #e60000;
    		-webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    		box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
		}
	</style>	
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">
						<div class="card  ">
							<div class="card-body">
								<h5 class="card-title text-center mb-5">REGISTER</h5>
								<form action="<?php echo base_url('index.php/welcome/insert_data') ?>" method="POST" class="row g-3"   novalidate>
									<input type="hidden" name="r_id" value="<?php echo (isset($userdata)) ? $userdata['r_id'] : '' ?>">
									<div class="row">
										<div class="col-12 col-md-6 mb-3 ">
											<label class="form-lable">Firstname</label>
											<input type="text" name="firstname" class="form-control <?php if(form_error('firstname')) echo "has-error"?>"   autocomplete="off" value="<?php echo (isset($userdata)) ? $userdata['firstname'] : '' ?>" >
											<?php echo form_error('firstname');?>
										</div>
										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable">Lastname</label>
											<input type="text" name="lastname" class="form-control <?php if(form_error('lastname')) echo "has-error"?>"   autocomplete="off" value="<?php echo (isset($userdata)) ? $userdata['lastname'] : '' ?>" >
											<?php echo form_error('lastname');?>
										</div>
										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable">Password</label>
											<input type="Password" name="password" class="form-control <?php if(form_error('password')) echo "has-error"?>" id="password"  autocomplete="off"   value="<?php echo (isset($userdata)) ? $userdata['password'] : '' ?>">
											<?php echo form_error('password');?>
										</div>
										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable">Confirm Password</label>
											<input type="Password" name="cnfpassword" class="form-control <?php if(form_error('cnfpassword')) echo "has-error"?>" id="cnfpassword"  autocomplete="off"   value="<?php echo (isset($userdata)) ? $userdata['cnfpassword'] : '' ?>">
											<?php echo form_error('cnfpassword');?>
										</div>
										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable ">Contact</label>
											<input type="text" name="contact" class="form-control <?php if(form_error('contact')) echo "has-error"?>"   autocomplete="off" value="<?php echo (isset($userdata)) ? $userdata['contact'] : '' ?>">
											<?php echo form_error('contact');?>
										</div>
										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable">Email Id</label>
											<input type="text" name="email" class="form-control <?php if(form_error('email')) echo "has-error"?>"   autocomplete="off" value=" <?php echo (isset($userdata)) ? $userdata['email'] : '' ?>">
											<?php echo form_error('email');?>
										</div>

										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable " for="genderl" >Gender</label><br>
											<input class="form-check-input <?php if(form_error('email')) echo "has-error"?> " type="radio" name="gender" id="female" value="Female" <?php echo (isset($userdata)) ? $userdata['gender'] : '' ?>>
											<label class="form-label form-check-inline" for="female">
												Female
											</label><br>
											<input class="form-check-input <?php if(form_error('email')) echo "has-error"?>" type="radio" name="gender" id="male" value="Male" <?php echo (isset($userdata)) ? $userdata['gender'] : '' ?>>
											<label class="form-label form-check-inline" for="male">
												Male
											</label>
											<?php echo form_error('gender');?>
										</div>
										<div class="col-12 col-md-6 mb-3">
											<label class="form-lable">Country</label>
											<select class="form-select <?php if(form_error('email')) echo "has-error"?>" name="country" value="<?php echo (isset($userdata)) ? $userdata['country'] : '' ?>">
												<option></option>
												<option value="India">India</option>
												<option value="US">Us</option>
												<option value="Londan">Londan</option>
												<option value="Australia">Australia</option>
											</select>
										</div>
										<div class="row  mb-3">
											<button type="submit" id="btnsubmit" class="btn btn-primary btn-block  mb-4" name="btn-submit">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>