<ul class="slideshow">
	<li><span></span></li>
  	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
</ul>

<!-- LOG IN -->
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-6 col-lg-12 col-md-9">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg-12">
			<div class="p-5">
				<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">
					<img class="d-block mx-auto w-50" src="<?= base_url('assets/images/nav-logo.png') ?>">
				</h1>
				</div>
        <!-- FORM LOGIN -->
				<form class="user" method="post" action="<?php echo base_url('login/do_login'); ?>">
          <?php echo form_open('login/do_login'); ?>
					<div class="form-group">
						<input type="username" name="username" value="<?php echo set_value('username') ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
            <small class="font-italic text-danger"> <?php echo form_error('username'); ?> </small>
					</div>
					<div class="form-group">
						<input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            <small class="font-italic text-danger"> <?php echo form_error('password'); ?> </small>
          </div>
          <?php echo $this->session->flashdata('msg'); ?>
					<div class="form-group">
						<div class="custom-control custom-checkbox small">
						<input type="checkbox" class="custom-control-input" id="customCheck">
						<label class="custom-control-label" for="customCheck">Remember Me</label>
						</div>
					</div>
          <input type="hidden" name="role" value="tukang">
					<button type="submit" class="btn btn-warning text-dark btn-user btn-block">
						Login
					</button>
          <?php echo form_close() ?>
				</form>
				<hr>
				<div class="text-center">
					<a class="small" href="<?= base_url('user')?>">Forgot Password?</a>
				</div>
				<hr>
				<a class="small" href="<?= base_url()?>"><small class="fas fa-arrow-alt-circle-left"></small> Kembali Ke Beranda</a>
			</div>
			</div>
		</div>
		</div>
	</div>

	</div>

</div>

</div>
