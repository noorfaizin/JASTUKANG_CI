<!-- Content -->
<div class="col-md-11 bg-white mx-auto p-3 mb-4 rounded">
<h3 class="text-dark font-weight-bold">Transaksi Produk</h3>
<hr>

	<div class="col-md-5">
		<div class="form-group justify-content-end">
			<input type="text" class="form-control justify-content-end" id="search-ho-jasa" placeholder="Cari transaksimu...">
		</div>
	</div>
	<div class="col-md-12 mx-auto">
		<div class="card card-primary card-outline card-outline-tabs">
			<div class="card-header p-0 border-bottom-0">
			<ul class="nav nav-tabs bg-light rounded" id="transaksi-jasa" role="tablist">
				<li class="nav-item mx-auto w-50">
					<a class="nav-link active p-2 w-100 text-center" id="transaksi-belum-terbayar" data-toggle="pill" href="#transaksi-jasa-belum-terbayar" role="tab" aria-controls="transaksi-jasa-belum-terbayar" aria-selected="true">Belum Terbayar</a>
				</li>
				<li class="nav-item mx-auto w-50">
					<a class="nav-link p-2 w-100 text-center" id="transaksi-sudah-terbayar" data-toggle="pill" href="#transaksi-jasa-sudah-terbayar" role="tab" aria-controls="transaksi-jasa-sudah-terbayar" aria-selected="false">Sudah Terbayar</a>
				</li>
			</ul>
			</div>
			<div class="card-body">
			<div class="tab-content" id="transaksi-jasaContent">
				<div class="tab-pane fade show active" id="transaksi-jasa-belum-terbayar" role="tabpanel" aria-labelledby="transaksi-belum-terbayar">
					<table class="table table-bordered">
						<thead class="bg-warning text-white">
							<tr>
								<td width="1px">No</td>
								<td>Kategori</td>
								<td>Jenis Produk</td>
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
				<div class="tab-pane fade" id="transaksi-jasa-sudah-terbayar" role="tabpanel" aria-labelledby="transaksi-sudah-terbayar">
					<table class="table table-bordered">
						<thead class="bg-warning text-white">
							<tr>
								<td width="1px">No</td>
								<td>Kategori</td>
								<td>Jenis Produk</td>
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