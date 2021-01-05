<!-- Content -->
<div class="col-md-11 bg-white mx-auto p-3 mb-4 rounded">
	<h3 class="text-dark font-weight-bold">Riwayat Pemesanan</h3>
	<hr>
	<div class="col-md-5">
		<div class="form-group justify-content-end">
			<input type="text" class="form-control justify-content-end" id="search-ho-jasa" placeholder="Cari pesananmu...">
		</div>
	</div>
	<div class="col-md-12 mx-auto">
		<div class="card card-primary card-outline card-outline-tabs">
			<div class="card-header p-0 border-bottom-0">
			<ul class="nav nav-tabs bg-light rounded" id="riwayat-pemesanan" role="tablist">
				<li class="nav-item mx-auto w-50">
					<a class="nav-link active p-2 w-100 text-center" id="transaksi-jasa-tabPills" data-toggle="pill" href="#transaksi-jasa" role="tab" aria-controls="transaksi-jasa" aria-selected="true">Transaksi Jasa</a>
				</li>
				<li class="nav-item mx-auto w-50">
					<a class="nav-link p-2 w-100 text-center" id="transaksi-produk-tabPills" data-toggle="pill" href="#transaksi-produk" role="tab" aria-controls="transaksi-produk" aria-selected="false">Transaksi Produk</a>
				</li>
			</ul>
			</div>
			<div class="card-body">
			<div class="tab-content" id="riwayat-pemesananContent">
				<div class="tab-pane fade show active" id="transaksi-jasa" role="tabpanel" aria-labelledby="transaksi-jasa-tabPills">
					<table class="table table-bordered">
						<thead class="bg-warning text-white">
							<tr>
								<td width="1px">No</td>
								<td>Kategori</td>
								<td>Jenis Pemesanan</td>
								<td width="1px">Tanggal</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Jasa Cat</td>
								<td>
									Pengecatan <br>
									<small class="font-italic">Deskripsi</small>
								</td>
								<td>01-01-2021</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="transaksi-produk" role="tabpanel" aria-labelledby="transaksi-produk-tabPills">
					<table class="table table-bordered">
						<thead class="bg-warning text-white">
							<tr>
								<td width="1px">No</td>
								<td>Kategori</td>
								<td>Jenis Pemesanan</td>
								<td width="1px">Tanggal</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Jasa Cat</td>
								<td>
									Pengecatan <br>
									<small class="font-italic">Deskripsi</small>
								</td>
								<td>01-01-2021</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
			<!-- /.card -->
		</div>
	</div>


	<!-- Pageination -->
	<div class="col-md-12 mt-3">
		<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-end">
			<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			<a class="page-link" href="#">Next</a>
			</li>
		</ul>
		</nav>
	</div>
</div>

</div>