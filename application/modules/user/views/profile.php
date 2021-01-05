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
			<div id="Toggle-1" class="collapse show multi-collapse">
				<div class="card-body widget-content">
					<div class="form-group col-md-6">
						<small class="font-italic text-warning">Nama Lengkap</small>
						<input type="text" class="form-control" id="nama-user" placeholder="Nama Lengkap">
					</div>
					<div class="form-group col-md-6">
						<small class="font-italic text-warning">Nomor HP</small>
						<input type="text" class="form-control" id="nohpu-ser" placeholder="08xx xxxx xxxx">
					</div>
					<a href="#" class="btn btn-md btn-dark">Update</a>
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
						<small class="font-italic text-danger">Belum terverifikasi</small>
						<input type="email" class="form-control" id="email-user" placeholder="User@mail.com">
					</div>
					<a href="#" class="btn btn-md btn-dark">Verifikasi Email</a>
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
					<div class="form-group col-md-6">
						<small class="font-italic text-warning">Password lama</small>
						<input type="password" class="form-control" id="pw-user" placeholder="Old Password">
					</div>
					<div class="form-group col-md-6">
						<small class="font-italic text-warning">Password baru</small>
						<input type="password" class="form-control" id="retypepw-ser" placeholder="Retype Password">
					</div>
					<a href="#" class="btn btn-md btn-outline-danger">Batal</a>
					<a href="#" class="btn btn-md btn-dark">Update</a>
				</div>
			</div>
		</div>
	</div>

</div>