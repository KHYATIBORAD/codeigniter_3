<main id="main" class="main">
  <div class="pagetitle">
    <h1>feedback</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo site_url('welcome/home')?>">dashboard</a></li>
        <li class="breadcrumb-item">feedback</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pt-5 p-5">     
            <form action="<?php echo site_url('welcome/feedback_data') ?>" method="POST">
              <h4 class="text-center mb-4">feedback</h4>
              <div class="row">
                <div class="form-group">
                  <input type="hidden" name="f_id" value="<?php echo (isset($feedback)) ? $feedback['f_id'] : '' ?>">
                  <textarea class="form-control mb-4" id="comment" rows="3" name="user_comment" placeholder="Enter comment....." required><?php echo (isset($feedback)) ? $feedback['user_comment'] : '' ?></textarea>
                </div>
              </div>
              <div class="">
                <button type="submit" class="btn btn-primary ">submit</button>
              </div>
            </form>
        </div>
      </div>
    </section>
</main><!-- End #main -->