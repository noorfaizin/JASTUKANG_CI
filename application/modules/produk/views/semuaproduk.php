<div class="bg-light">
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-11 mx-auto mt-4">
    <h3 class="m-0 text-dark mx-auto text-center font-weight-bold">Semua Produk</h3>
</div>

<div class="row col-md-12 mx-auto mt-4 p-0">
    <div class="col-md-3 mx-auto p-0">
		<!-- tampil produk -->
		<div class="col-md rounded p-2">
			<table>
				<tr>
					<td class="p-2"><h6 class="fas fa-exclamation-circle text-warning"></h6></td>
					<td><h6 class="text-warning m-0"> Menampilkan 13.489 untuk Semua Produk</h6></td>
				</tr>
			</table>
		</div>

		<!-- Urutkan Berdasarkan -->
		<div class="urutkan-produk card">
			<div class="card-header bg-white">
				<div class="row">
					<div class="mr-auto">
						<h6 class="m-0 ml-2">Urutkan Berdasarkan</h6>
					</div>
					<div class="ml-auto">
						<a href="#" class="m-0 p-0"><h6 class="m-0 fas fa-redo-alt"></h6></a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<select class="form-control form-control-sm">
					<option>Produk Terbaru</option>
					<option>Harga Termurah</option>
					<option>Harga Termahal</option>
				</select>
			</div>
		</div>

		<!-- Filter -->
		<div class="filter-produk card mt-3">
			<div class="card-header bg-white">
				<div class="row">
					<div class="mr-auto">
						<h6 class="m-0 ml-2">Filter</h6>
					</div>
					<div class="ml-auto">
						<a href="#" class="m-0 p-0"><h6 class="m-0 fas fa-redo-alt"></h6></a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<small class="font-italic">Harga :</small>
				<form class="mb-3">
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" placeholder="Terendah">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Tertinggi">
						</div>
					</div>
					<a href="#" class="d-block btn btn-sm btn-warning mt-2">Cari Produk</a>
				</form>
				<small class="font-italic">Kategori :</small>
				<ul class="list-group">
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Semua Produk</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Cat</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Renovasi</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Dekorasi</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Atap</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Alat</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Material</a></li>
					<li class="list-group-item p-1 border-0"><a href="#" class="text-dark">Listrik</a></li>
				</ul>

			</div>
		</div>
		
	</div>

	<!-- PRODUK -->
    <div class="produk col-md-8 bg-white mx-auto p-3 rounded">
		<!-- Perulangan Produk -->
		<div class="col-list-4 p-0">
			<div id="myProduct" class="recent-car-list">
				<div class="col-lg text-dark justify-content-center p-0">
				<a href="<?= base_url('produk/detail')?>">
					<div class="card m-0">
						<div  class="card-header text-center m-0 bg-white">
							<img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
						</div>
						<div class="card-body p-0">
							<div class="col-md p-2 mb-2">
								<small class="text-danger">Rp. 25000 ,-</small>
								<h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
								<span class="badge badge-secondary font-weight-light">Kategori</span>
							</div>
							<a href="#" class="btn btn-sm btn-warning d-block">Tambah ke Keranjang</a>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
		<!-- Perulangan Produk -->
		<div class="col-list-4 p-0">
			<div id="myProduct" class="recent-car-list">
				<div class="col-lg text-dark justify-content-center p-0">
				<a href="<?= base_url('produk/detail')?>">
					<div class="card m-0">
						<div  class="card-header text-center m-0 bg-white">
							<img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
						</div>
						<div class="card-body p-0">
							<div class="col-md p-2 mb-2">
								<small class="text-danger">Rp. 25000 ,-</small>
								<h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
								<span class="badge badge-secondary font-weight-light">Kategori</span>
							</div>
							<a href="#" class="btn btn-sm btn-warning d-block">Tambah ke Keranjang</a>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
		<!-- Perulangan Produk -->
		<div class="col-list-4 p-0">
			<div id="myProduct" class="recent-car-list">
				<div class="col-lg text-dark justify-content-center p-0">
				<a href="<?= base_url('produk/detail')?>">
					<div class="card m-0">
						<div  class="card-header text-center m-0 bg-white">
							<img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
						</div>
						<div class="card-body p-0">
							<div class="col-md p-2 mb-2">
								<small class="text-danger">Rp. 25000 ,-</small>
								<h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
								<span class="badge badge-secondary font-weight-light">Kategori</span>
							</div>
							<a href="#" class="btn btn-sm btn-warning d-block">Tambah ke Keranjang</a>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
		<!-- Perulangan Produk -->
		<div class="col-list-4 p-0">
			<div id="myProduct" class="recent-car-list">
				<div class="col-lg text-dark justify-content-center p-0">
				<a href="<?= base_url('produk/detail')?>">
					<div class="card m-0">
						<div  class="card-header text-center m-0 bg-white">
							<img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
						</div>
						<div class="card-body p-0">
							<div class="col-md p-2 mb-2">
								<small class="text-danger">Rp. 25000 ,-</small>
								<h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
								<span class="badge badge-secondary font-weight-light">Kategori</span>
							</div>
							<a href="#" class="btn btn-sm btn-warning d-block">Tambah ke Keranjang</a>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- PAGEINATION -->
<div class="row col-md-11 mx-auto mt-3">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<nav aria-label="Page navigation example">
		<ul class="pagination">
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

<!-- HUBUNGI KAMI -->
<div class="row mt-4">
  <div class="row col-md-8 mx-auto">
    <div class="col-md-9 tanya-cepat text-dark">Tanya cepat untuk proyek yang akan anda berikan kepada kami</div>
    <div class="col-md-3">
      <a href="#" class="btn-hub btn text-dark btn-md btn-warning shadow-sm ml-auto">
        <i class="fas fa-phone text-dark-50"></i> Hubungi Kami</a>
    </div>
  </div>
</div>