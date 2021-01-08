<!-- Content -->
<div class="col-md-11 bg-white mx-auto p-3 mb-4 rounded">
	<h3 class="text-dark font-weight-bold">Data Diri</h3>
	<hr>
	<div id="accordian-4">
		<div class="card m-t-30">
			<!-- Data diri -->
			<a class="text-dark card-header link" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-1" aria-expanded="true" aria-controls="Toggle-1">
				<i class="fa fa-user" aria-hidden="true"></i>
				<span class=" font-weight-bold">Rincian Data Diri</span>
			</a>
			<?php echo $this->session->flashdata('msg'); ?>
			<div id="Toggle-1" class="collapse show multi-collapse">
				<div class="card-body widget-content">
					<div class="form-group col-md-6">
						<small class="font-italic text-warning">Nama Lengkap</small>
						<input type="text" class="form-control" id="nama-user" placeholder="<?php echo $this->session->userdata('nama_tukang') ?>" disabled>
					</div>
					<div class="form-group col-md-6">
						<small class="font-italic text-warning">Nomor HP</small>
						<input type="text" class="form-control" id="nohpu-ser" placeholder="<?php echo substr($this->session->userdata('no_hp'),0,3) ?>x-xxxx-<?php echo substr($this->session->userdata('no_hp'),-4) ?>" disabled>
					</div>
					<!-- <a href="#" class="btn btn-md btn-dark">Update</a> -->
				</div>
			</div>
		</div>
	</div>

	<div id="accordian-4">
		<div class="card mt-3 m-t-30">
			<!-- Email -->
			<a class="text-dark card-header link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<span class=" font-weight-bold">Email</span>
			</a>
			<div id="Toggle-2" class="multi-collapse collapse" style="">
				<div class="card-body widget-content">
					<div class="form-group col-md-6">
						<input type="email" class="form-control" id="email-user" value="<?php echo $this->session->userdata('email') ?>" disabled>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="accordian-4">
		<div class="card mt-3 m-t-30">
			<!-- Password -->
			<a class="text-dark card-header link collapsed border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-3" aria-expanded="false" aria-controls="Toggle-3">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<span class=" font-weight-bold">Password</span>
			</a>
			<div id="Toggle-3" class="collapse multi-collapse">
				<div class="card-body widget-content">
					<form class="form-group" action="tukang/changepassword" method="post">
						<?php echo form_open() ?>
						<div class="form-group col-md-6">
							<small class="font-italic text-warning">Password lama</small>
							<input type="password" name="old_password" class="form-control" id="pw-user" placeholder="Old Password" value="<?php echo set_value('old_password') ?>">
							<small class="font-italic text-danger"> <?php echo form_error('old_password'); ?> </small>
						</div>
						<div class="form-group col-md-6">
							<small class="font-italic text-warning">Password baru</small>
							<input type="password" name="new_password" class="form-control" id="retypepw-ser" placeholder="Retype Password" value="<?php echo set_value('new_password') ?>">
							<small class="font-italic text-danger"> <?php echo form_error('new_password'); ?> </small>
						</div>
						<button type="reset" class="btn btn-md btn-outline-danger">Batal</button>
						<button type="submit" class="btn btn-md btn-dark">Update</button>
						<?php echo form_close() ?>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
