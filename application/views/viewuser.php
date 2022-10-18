<main id="main" class="main">
	<div class="pagetitle">
		<h1>user data</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('welcome/home')?>">Home</a></li>
				<li class="breadcrumb-item active">user data</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">DATA UPDATE & DELETE</h5>
						<a href="<?php echo site_url('welcome/register')?>"  class="btn btn-primary btn-sm mb-3">ADD</a>
						<!-- DATA Table -->
						<table class="table mb-3">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Firstname</th>
									<th scope="col">Lastname</th>
									<th scope="col">contact</th>
									<th scope="col">email</th>
									<th scope="col">gender</th>
									<th scope="col">country</th>
									<th scope="col">ACTION</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $data): ?>			
									<tr>
										<td><?php echo $data->r_id ?></td>
										<td><?php echo $data->firstname ?></td>
										<td><?php echo $data->lastname ?></td>
										<td><?php echo $data->contact ?></td>
										<td><?php echo $data->email ?></td>
										<td><?php echo $data->gender ?></td>
										<td><?php echo $data->country ?></td>
										<td>
											<a href="<?php echo site_url('welcome/register/'.$data->r_id); ?>" type="submit" class="btn btn-outline-primary btn-sm" id="edit">Edit</a>
										<a href="<?php echo site_url('welcome/register_delete/'.$data->r_id); ?>" type="submit" class="btn btn-outline-danger btn-sm" id="edit">Delete</a></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>