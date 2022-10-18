<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <style>
    .has-error {

      border-color:    #e60000;
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
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your Email Id & password to login</p>
                  </div>
                  <form action="<?php echo base_url('index.php/welcome/login_check')?>" method="POST" class="row g-3 " >
                    <div class="col-12">
                      <label for="email" class="form-label ">Email Id</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control  <?php  if(form_error('email')) echo "has-error"?>" id="email" >
                      </div>
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control  <?php  if(form_error('email')) echo "has-error"?>" id="password" >
                      <?php echo form_error('password'); ?>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="login" id="login" name="btn-login">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="<?php echo base_url('index.php/welcome/register')?>">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>