<main id="main" class="main">
	<div class="pagetitle">
		<h1>feedback data</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('welcome/home')?>">Home</a></li>
				<li class="breadcrumb-item active">feedback data</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">DATA UPDATE & DELETE</h5>
						<a href="<?php echo site_url('welcome/feedback')?>"  class="btn btn-primary btn-sm mb-3">ADD</a>
						<!-- DATA Table -->
						<table class="table mb-3">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">COMMENT</th>
									<th scope="col">ACTION</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($feedback as $data): ?>			
									<tr>
										<td><?php echo $data->f_id ?></td>
										<td><?php echo $data->user_comment ?></td>
										<td>
											<a href="<?php echo site_url('welcome/feedback/'.$data->f_id); ?>" type="submit" class="btn btn-outline-primary btn-sm" id="edit">Edit</a>
										<a href="<?php echo site_url('welcome/feedback_delete/'.$data->f_id); ?>" type="submit" class="btn btn-outline-danger btn-sm" id="edit">Delete</a></td>
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
<script>

</script>