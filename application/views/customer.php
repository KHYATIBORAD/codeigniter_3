<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<title></title>
</head>
<body>
	<div class="row pt-5 justify-content-center">
		<div class="col-4 ">
			<div class="card">
				<div class="card-body">
					<?php
						echo heading("CUSTOMER");
					?>
						<?php 
							$attributes = array(
								'id' => 'register_form',
								//'class' => 'was-validated',
								'novalidate' => ''
							);
						?>
						<?php echo form_open('welcome/helper', $attributes); ?>
						<div class="container-sm p-3">
							<div class="row">
								<div class="form-group">
									<?php
										echo form_label('name', 'name');
										echo form_input('name', '', array('class'=>'form-control mb-3', 'required'=>''));
									?>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<?php
										$attributes = array(
											'class'=>'form-control mb-3',
											'required'=>''
										);
										echo form_label('password','password');
										echo form_password('password','',$attributes);
									?>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<?php
										$attributes = array(
											'class'=>'form-control mb-3',
											'required'=>''
										);
										echo form_label('phone no.','number');
										echo form_input('number','',$attributes);
									?>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<?php
										$extra = array(
											'class'=>'form-control mb-5'
										);
										$options = array(
											'rajkot' => 'rajkot',
											'gondal' => 'gondal',
											'ahemdabad' =>'ahemdabad'
										);
										echo form_label('city','city');
										echo form_dropdown('city', $options, 'default' ,$extra);
									?>
								</div>
							</div>
							<div class="row">
								<button type="submit" class="btn btn-primary mb-3" id="submit">submit</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>