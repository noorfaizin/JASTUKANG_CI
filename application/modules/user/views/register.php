<ul class="slideshow">
	<li><span></span></li>
  	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
</ul>

<!-- REGISTER -->
<div class="container">

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
				<form class="user">
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
					</div>
					<div class="col-sm-6">
					<input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
					<input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
				</div>
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
					</div>
					<div class="col-sm-6">
					<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
					</div>
				</div>
				<a href="login.html" class="btn btn-warning text-dark btn-user btn-block">
					Register JasAccount
				</a>
				</form>
				<hr>
				<div class="text-center">
					<a class="small" href="<?= base_url('user')?>">Forgot Password?</a>
				</div>
				<div class="text-center">
					<a class="small" href="<?= base_url('user/login')?>">Already have an account? Login!</a>
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